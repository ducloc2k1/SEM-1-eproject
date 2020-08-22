<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Attribute_value;
use Illuminate\Http\Request;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $atb=Attribute::paginate(10);
        $atb_vl=Attribute_value::all();
        return view('admin.attribute.index',compact('atb','atb_vl'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $create=Attribute::create($request->all());
        if ($create) {
            return redirect()->route('admin.attribute.index')->with('success','Thêm mới thành công !');
        }
        return redirect()->back()->with('error','Thêm mới không thành công !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attribute  $attribute
     * @return \Illuminate\Http\Response
     */
    public function show(Attribute $attribute)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attribute  $attribute
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $atb=Attribute::find($id);
        return view('admin.attribute.edit',compact('atb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Attribute  $attribute
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->offsetUnset('_token');
        $request->offsetUnset('_method');
        $edit=Attribute::where('id',$id)->update($request->all());
        if ($edit) {
            return redirect()->route('admin.attribute.index')->with('success','Cập nhật thành công !');
        }
        return redirect()->back()->with('error','Cập nhật không thành công !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attribute  $attribute
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete=Attribute::find($id)->delete();
        if ($delete) {
            return redirect()->back()->with('success','Xóa thành công !');
        }
        return redirect()->back()->with('error','Xóa không thành công !');
    }
}
