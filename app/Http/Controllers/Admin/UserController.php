<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\User;
use App\Models\Role;
use App\Models\User_role;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=User::paginate(10);

        if(request()->key){
            $key=request()->key;
            $user=User::where('name','LIKE','%'.$key.'%')->paginate(10);
        }
        return view('admin.user.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles=Role::orderBy('name','ASC')->get();
        return view('admin.user.create',compact('roles'));
    }

    public function show($id)
    {
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'password'=>'required|min:6',
            'confirm_password'=>'required|same:password|min:6',
            'email'=>'required|unique:users,email|email'
        ],[
            'name.required'=>'Tên tài khoản không được để trống !',
            'password.required'=>'Password không được để trống !',
            'password.min'=>'Password phải ít nhất 6 ký tự !',
            'confirm_password.min'=>'Comfirm Password phải ít nhất 6 ký tự !',
            'confirm_password.required'=>'Confirm password không được để trống !',
            'confirm_password.same'=>'Confirm password không khớp !',
            'email.required'=>'Email không được để trống !',
            'email.unique'=>'Email đã tồn tại !',
            'email.email'=>'Email không hợp lệ !',
        ]);


        $pass=bcrypt($request->password);
        $request->merge(['password'=>$pass]);

        $create=User::create($request->all());

        if (is_array($request->role)) {
           foreach ($request->role as $role_id) {
                User_role::create(['user_id'=>$create->id,'role_id'=>$role_id]);
           }
        }

        if ($create) {
            return redirect()->route('admin.user.index')->with('success','Thêm mới thành công !');
        }
        return redirect()->back()->with('error','Thêm mới không thành công !');
    }

    public function edit($id)
    {
        $user=User::find($id);
        $role_assignments = $user->getRoles->pluck('name','id')->toArray();

        $roles=Role::orderBy('name','ASC')->get();

        return view('admin.user.edit',compact('user','roles','role_assignments'));
    }

    public function update(Request $request,$id)
    {
        $rules=[
            'name'=>'required',
            'email'=>'required|email'
        ];

        if($request->old_password || $request->password || $request->confirm_password){

            $rules['old_password'] = 'required';
            $rules['password'] = 'required|min:6';
            $rules['confirm_password'] = 'required|same:password';

        };

        $messages=[
            'name.required'=>'Tên tài khoản không được để trống !',
            'old_password.required'=>'Mật khẩu cũ không được để trống !',
            'password.required'=>'Mật khẩu không được để trống !',
            'confirm_password.required'=>'Confirm Password không được để trống !',
            'password.min'=>'Password phải ít nhất 6 ký tự !',
            'confirm_password.same'=>'Confirm password không khớp !',
            'email.required'=>'Email không được để trống !',
            'email.email'=>'Email không hợp lệ !',
        ];


        $this->validate($request,$rules,$messages);

        $request->offsetUnset('_token');
        $request->offsetUnset('_method');

        if($request->password){
            $new_pass = bcrypt($request->password);
            if (!Hash::check($request->old_password, Auth::user()->password)) {
                return redirect()->back()->with('error','Mật khẫu cũ không đúng !');
            }
        }else{
            $new_pass = Auth::user()->password;
        }

        $request->merge(['password'=>$new_pass]);

        $edit=User::where('id',$id)->update($request->only('name','email','password'));

        if (is_array($request->role)) {
            User_role::where('user_id',$id)->delete();
           foreach ($request->role as $role_id) {
                User_role::create(['user_id'=>$id,'role_id'=>$role_id]);
           }
        }

        if ($edit) {
            return redirect()->route('admin.user.index')->with('success','Cập nhật thành công !');
        }
        return redirect()->back()->with('error','Cập nhật không thành công !');
    }

    public function destroy($id)
    {
        $delete=User::find($id)->delete();
        if ($delete) {
            return redirect()->back()->with('success','Xóa thành công !');
        }
        return redirect()->back()->with('error','Xóa không thành công !');
    }
}
