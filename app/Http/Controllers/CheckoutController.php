<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Shipping;
use App\Models\Payment;
use App\Models\Customer;
use App\Models\Bill;
use App\Models\Bill_detail;

use App\Helper\CartHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{

    public function __construct()
    {
        $this->middleware('cus');
    }

    public function check_out()
    {
        $shippings=Shipping::all();
        $payments=Payment::all();
        return view('check_out',compact('shippings','payments'));
    }

    public function submit_form(Request $request,CartHelper $cart)
    {
        $cus_id=Auth::guard('cus')->user()->id;
        $cus_email=Auth::guard('cus')->user()->email;
        $cus_name=Auth::guard('cus')->user()->name;


        $this->validate($request,[
            'first_name'=>'required',
            'last_name'=>'required',
            'country'=>'required',
            'address'=>'required',
            'town'=>'required',
            'phone'=>'required|numeric',
            'email'=>'required|email'
        ],[
            'first_name.required'=>'First Name không được để trống !',
            'last_name.required'=>'Last Name không được để trống !',
            'country.required'=>'Country không được để trống !',
            'town.required'=>'Town không được để trống !',
            'address.required'=>'Street Address không được để trống !',
            'phone.required'=>'Phone không được để trống !',
            'phone.numeric'=>'Phone phải là số !',
            'email.required'=>'Email không được để trống !',
            'email.email'=>'Email phải đúng định dạng !',
        ]);

        $shipping=explode('-',$request->shipping_id);
        $shipping_id=$shipping[0];
        $shipping_price=$shipping[1];

        $total=$cart->total_price+$shipping_price;

        $bill=Bill::create([
            'total_price'=>$total,
            'cus_id'=>$cus_id,
            'bill_note'=>$request->bill_note,
            'total_quantity'=>$cart->total_quantity,
            'payment_id'=>$request->payment_id,
            'shipping_id'=>$shipping_id,
        ]);
        if ($bill) {
            Customer::where('id',$cus_id)->update($request->only('first_name','last_name','company','country','address','post_code','town','phone'));
            $bill_id=$bill->id;

            foreach ($cart->items as $pro_id => $value) {
                $quantity=$value['quantity'];
                $price=$value['price'];

                Bill_detail::create([
                    'price'=>$price,
                    'quantity'=>$quantity,
                    'pro_id'=>$pro_id,
                    'bill_id'=>$bill_id
                ]);
            }

            Mail::send('email.bill',[
                'bill'=>$bill,
                'cus_name'=>$cus_name,
                'items'=>$cart->items
            ], function ($message) use($cus_name,$cus_email) {
                $message->from('nhokimlien1411@gmail.com');
                $message->to($cus_email,$cus_name);
                $message->subject('Email Ordered');
            });


            session(['cart'=>'']);

            return redirect()->route('order-received',['id'=>$bill_id]);
        }else{
            return redirect()->back();
        }
    }

    public function order_received(Request $request)
    {
        $id=$request->id;
        $bill=Bill::find($id);
        $bill_detail=Bill_detail::where('bill_id',$id)->get();

        return view('order-received',compact('bill','bill_detail'));
    }
}
