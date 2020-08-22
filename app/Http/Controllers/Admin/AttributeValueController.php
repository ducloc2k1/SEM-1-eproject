<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute_value;
use App\Models\Attribute;
use Illuminate\Http\Request;

class AttributeValueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $atb_value=Attribute_value::paginate(10);
        $atb=Attribute::all();
        return view('admin.attribute.index_vl',compact('atb_value','atb'));
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
        $create=Attribute_value::create($request->all());
        if ($create) {
            return redirect()->route('admin.attribute_value.index')->with('success','Thêm mới thành công !');
        }
            return redirect()->back()->with('error','Thêm mới không thành công !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attribute_value  $attribute_value
     * @return \Illuminate\Http\Response
     */
    public function show(Attribute_value $attribute_value)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attribute_value  $attribute_value
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $atb_value=Attribute_value::find($id);
        $atb=Attribute::all();
        return view('admin.attribute.edit_vl',compact('atb_value','atb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Attribute_value  $attribute_value
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->offsetUnset('_token');
        $request->offsetUnset('_method');
        $edit=Attribute_value::where('id',$id)->update($request->all());
        if ($edit) {
            return redirect()->route('admin.attribute_value.index')->with('success','Cập nhật thành công !');
        }
        return redirect()->back()->with('error','Cập nhật không thành công !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attribute_value  $attribute_value
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete=Attribute_value::find($id)->delete();
        if ($delete) {
            return redirect()->back()->with('success','Xóa thành công !');
        }
        return redirect()->back()->with('error','Xóa không thành công !');
    }
}
