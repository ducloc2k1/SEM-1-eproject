<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Category_product;
use App\Models\Bill;
use App\Models\Product_comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function index()
    {
        $numberOrder = Bill::all();
        $numberCustomer = Customer::all();
        return view('admin.index', compact('numberOrder','numberCustomer'));
    }

    function file()
    {
            return view('admin.file');
    }

    function upload(Request $request)
        {
            if ($request->hasFile('file')) {
                $name=$request->file->getClientOriginalName();
                $request->file->move('uploads/',$name);
            }
            return redirect()->back();
        }

    public function login()
    {
        return view('admin.login');
    }

    function post_login(Request $request)
        {
            $this->validate($request,[
                'email'=>'required|email',
                'password'=>'required'
            ],[
                'email.required'=>'Email không được để trống',
                'email.email'=>'Email không đúng định dạng',
                'password.required'=>'Password không được để trống'
            ]);

            if (Auth::attempt($request->only('email','password'),$request->has('remember'))) {
                return redirect()->route('admin.index');
            }else{
                return redirect()->back();
            }
        }

        public function logout()
        {
            Auth::logout();
            return redirect()->route('login');
        }

        public function list_customer()
        {
            $cus=Customer::paginate(10);

            if(request()->key){
                $key=request()->key;
                $cus=Customer::where('display_name','LIKE','%'.$key.'%')->paginate(10);
            }
            return view('admin.cus.index',compact('cus'));
        }

        public function list_comment()
        {
            $cmt_pro=Product_comment::paginate(10);

            return view('admin.cmt_product',compact('cmt_pro'));
        }

        public function cmt_pro_destroy($id)
        {
            $delete=Product_comment::find($id)->delete();
            if ($delete) {
                return redirect()->back()->with('success','Xóa thành công !');
            }
                return redirect()->back()->with('error','Xóa không thành công !');
        }

        public function error()
        {
            $code=request()->code;
            $errors=config('error.'.$code);

            return view('admin.error',compact('errors'));
        }
}
