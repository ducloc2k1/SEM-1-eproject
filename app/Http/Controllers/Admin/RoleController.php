<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Role::paginate(15);
        return view('admin.role.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $routes=[];
        $all=Route::getRoutes();

        foreach ($all as $r) {
            $name=$r->getName();
            $pos=strpos($name,'admin');
            if ($pos !== false && !in_array($name,$routes)) {
                array_push($routes,$name);
            }
        }

        return view('admin.role.create',compact('routes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required'
        ],[
            'name.required'=>'Tên nhóm không được để trống !'
        ]);

        $routes  = $request->route;
        array_push($routes,"admin.index","admin.logout");

        $routess=json_encode($routes);

        $create=Role::create(['name'=>$request->name,'permissions'=>$routess]);

        if ($create) {
            return redirect()->route('admin.role.index')->with('success','Thêm mới thành công !');
        }
        return redirect()->back()->with('error','Thêm mới không thành công !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model=Role::find($id);
        $permissions=json_decode($model->permissions);

        $routes=[];
        $all=Route::getRoutes();

        foreach ($all as $r) {
            $name=$r->getName();
            $pos=strpos($name,'admin');
            if ($pos !== false && !in_array($name,$routes)) {
                array_push($routes,$name);
            }
        }

        return view('admin.role.edit',compact('routes','model','permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required'
        ],[
            'name.required'=>'Tên nhóm không được để trống !'
        ]);

        $routes  = $request->route;
        array_push($routes,"admin.index","admin.logout");

        $routess=json_encode($routes);

        $update=Role::where('id',$id)->update(['name'=>$request->name,'permissions'=>$routess]);
        if ($update) {
            return redirect()->route('admin.role.index')->with('success','Cập nhật thành công !');
        }
        return redirect()->back()->with('error','Cập nhật không thành công !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete=Role::find($id)->delete();
        if ($delete) {
            return redirect()->back()->with('success','Xóa thành công !');
        }
        return redirect()->back()->with('error','Xóa không thành công !');
    }
}
