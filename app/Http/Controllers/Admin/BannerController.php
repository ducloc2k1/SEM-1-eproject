<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Requests\BannerAddRequest;


class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners=Banner::orderBy('id','desc')->paginate(10);
        return view('admin.banner.index',compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BannerAddRequest $request)
    {
        $filename=str_replace(url('uploads').'/','',$request->image);
        $request->merge(['image'=>$filename]);

        $create=Banner::create($request->all());

        if ($create) {
            return redirect()->route('admin.banner.index')->with('success','Thêm mới thành công !');
        }
            return redirect()->back()->with('error','Thêm mới không thành công !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bn = Banner::find($id);
       return view('admin.banner.edit',compact('bn'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(BannerAddRequest $request,$id)
    {
        $request->offsetUnset('_token');
        $request->offsetUnset('_method');

        $filename=str_replace(url('uploads').'/','',$request->image);
        $request->merge(['image'=>$filename]);

        $edit=Banner::where('id',$id)->update($request->all());

        if ($edit) {
            return redirect()->route('admin.banner.index')->with('success','Cập nhật thành công !');
        }
            return redirect()->back()->with('error','Cập nhật không thành công !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete=Banner::find($id)->delete();
        if ($delete) {
            return redirect()->back()->with('success','Xóa thành công !');
        }
        return redirect()->back()->with('error','Xóa không thành công !');
    }
}
