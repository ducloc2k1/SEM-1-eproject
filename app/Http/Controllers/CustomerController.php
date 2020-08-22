<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product_comment;
use App\Models\Wishlist;
use App\Models\Product;
use App\Models\Bill;
use App\Models\Bill_detail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function login()
    {
        return view('customer.login');
    }

    public function post_login(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required'
        ],[
            'email.required'=>'Email không được để trống !',
            'email.email'=>'Email phải đúng định dạng !',
            'password.required'=>'Password không được để trống !'
        ]);

        $login=Auth::guard('cus')->attempt($request->only('email','password'),$request->has('remember_token'));//ghi nhớ tk và mk
        if ($login) {
            return redirect()->route('account');
        }
            return redirect()->back()->with('error','Đăng nhập thất bại !');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function post_register(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|email|unique:customers',
            'password'=>'required|min:8|max:32',
        ],[
            'email.required'=>'Email không được để trống !',
            'email.email'=>'Email phải đúng định dạng !',
            'email.unique'=>'Email đã tồn tại !',
            'password.required'=>'Password không được để trống !',
            'password.min'=>'Password phải ít nhất 8 ký tự !',
            'password.max'=>'Password phải tối đa 32 ký tự !',
        ]);

        $request->merge(['password'=>bcrypt($request->password)]);//mã hóa mật khẩu rồi ghi đè lại
        $reg=Customer::create($request->all());
        if($reg){
            return redirect()->route('customer.login');
        }
            return redirect()->back()->with('error2','Đăng ký không thành công !');
    }

    public function update(Request $request)
    {
        $rules=[];

        if($request->old_password || $request->password || $request->confirm_password){
            $rules['old_password'] = 'required';
            $rules['password'] = 'required|min:6';
            $rules['confirm_password'] = 'required|same:password';

        };

        $messages=[
            'old_password.required'=>'Mật khẩu cũ không được để trống !',
            'password.required'=>'Mật khẩu không được để trống !',
            'confirm_password.required'=>'Confirm Password không được để trống !',
            'password.min'=>'Password phải ít nhất 6 ký tự !',
            'confirm_password.same'=>'Confirm password không khớp !'
        ];

        $this->validate($request,$rules,$messages);

        $request->offsetUnset('_token');
        $request->offsetUnset('_method');

        if($request->password){
            $new_pass = bcrypt($request->password);
            if (!Hash::check($request->old_password, Auth::guard('cus')->user()->password)) {
                return redirect()->back()->with('error','Mật khẫu cũ không đúng !');
            }
        }else{
            $new_pass = Auth::guard('cus')->user()->password;
        }

        $request->merge(['password'=>$new_pass]);

        $edit=Customer::where('id',Auth::guard('cus')->user()->id)->update($request->only('first_name','last_name','email','password','display_name'));
        if($edit){
            return redirect()->back();
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    function account()
    {
        return view('customer.account');
    }

    function order()
    {

        $cus_id=Auth::guard('cus')->user()->id;
        $bill=Bill::where('cus_id',$cus_id)->get();
        return view('customer.order',compact('bill'));
    }

    function order_detail($id)
    {
        $bill=Bill::find($id);
        $bill_detail=Bill_detail::where('bill_id',$id)->get();

        return view('customer.order_detail',compact('bill','bill_detail'));
    }

    function address()
    {

        return view('customer.address');
    }

    function account_detail()
    {

        return view('customer.account_detail');
    }

    function logout()
    {
        Auth::guard('cus')->logout();
        return redirect()->route('home');
    }

    public function product_cmt_store(Request $request,$id)
    {
        $cus=Auth::guard('cus')->user()->id;
        $request->merge(['customer_id'=>$cus,'pro_id'=>$id]);
        Product_comment::create($request->only('content','parent_id','status','pro_id','customer_id','star_number'));
        return redirect()->back();
    }

    public function post_wishlist(Request $request,$id)
    {
        $cus=Auth::guard('cus')->user()->id;
        $request->merge(['customer_id'=>$cus,'product_id'=>$id]);
        Wishlist::create($request->all());
        return redirect()->back();
    }

    public function wishlist_destroy($id)
    {
        Wishlist::find($id)->delete();
        return redirect()->back();
    }

}
