<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Config;
use Illuminate\Http\Request;
use App\Http\Requests\ConfigRequest;


class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $config = Config::paginate(10);

       if (request()->search) {
            $search = request()->search;
            $config = Config::where('key','LIKE', '%' .$search. '%')->paginate(10);
       }

       return view('admin.config.index',compact('config'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.config.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ConfigRequest $request)
    {
        $filename=str_replace(url('uploads').'/','',$request->image);
        $request->merge(['image'=>$filename]);

        $create=Config::create($request->all());

        if ($create) {
            return redirect()->route('admin.config.index')->with('success','Thêm mới thành công !');
        }
            return redirect()->back()->with('error','Thêm mới không thành công !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $config = Config::find($id);
        return view('admin.config.edit',compact('config'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function update(ConfigRequest $request, $id)
    {
        $request->offsetUnset('_token');
        $request->offsetUnset('_method');

        $filename=str_replace(url('uploads').'/','',$request->image);
        $request->merge(['image'=>$filename]);

        $edit=Config::where('id',$id)->update($request->all());

        if ($edit) {
            return redirect()->route('admin.config.index')->with('success','Cập nhật thành công !');
        }
            return redirect()->back()->with('error','Cập nhật không thành công !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete=Config::find($id)->delete();

        if ($delete) {
            return redirect()->back()->with('success','Xóa thành công !');
        }
        return redirect()->back()->with('error','Xóa không thành công !');
    }
}
