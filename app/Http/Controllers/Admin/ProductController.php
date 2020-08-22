<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category_product;
use App\Models\Attribute_value;
use App\Models\Attribute;
use App\Models\Product_attribute;
use App\Models\Tag_product;
use App\Models\Tag;
use Illuminate\Http\Request;

use App\Http\Requests\ProductAddRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pro=Product::search()->paginate(10);

        return view('admin.product.index',compact('pro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats=Category_product::all();
        $atb_vl=Attribute_value::all();
        $atb=Attribute::all();
        $tags=Tag::all();
        return view('admin.product.create',compact('cats','atb_vl','atb','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductAddRequest $request)
    {
        $filename=str_replace(url('uploads').'/','',$request->image);
        $file_list=str_replace(url('uploads').'/','',$request->image_list);
        $request->merge(['image'=>$filename,'image_list'=>$file_list]);

        $create = Product::create($request->all());

        if ($request->attribute_value_id) {
            foreach ($request->attribute_value_id as $value) {
                Product_attribute::create(['product_id'=>$create->id,'attribute_value_id'=>$value]);
            }
        }

        if ($request->tag_id) {
            foreach ($request->tag_id as $value) {
                Tag_product::create(['pro_id'=>$create->id,'tag_id'=>$value]);
            }
        }

        if ($create) {
            return redirect()->route('admin.product.index')->with('success','Thêm mới thành công !');
        }
        return redirect()->back()->with('error','Thêm mới không thành công !');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cats=Category_product::all();
        $pro=Product::find($id);
        $atb_vl=Attribute_value::all();
        $pro_atb=Product_attribute::where('product_id',$id)->pluck('product_id','attribute_value_id')->toArray();
        $atb=Attribute::all();
        $tags=Tag::all();
        $tag_pro=Tag_product::where('pro_id',$id)->pluck('pro_id','tag_id')->toArray();

        return view('admin.product.edit',compact('cats','pro','atb_vl','atb','pro_atb','tags','tag_pro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductAddRequest $request,$id)
    {

        $filename=str_replace(url('uploads').'/','',$request->image);
        $file_list=str_replace(url('uploads').'/','',$request->image_list);
        $request->offsetUnset('_token');
        $request->offsetUnset('_method');
        $request->merge(['image'=>$filename,'image_list'=>$file_list]);

        $edit=Product::where('id',$id)->update($request->only('name','price','sale_price','desciption','image','image_list','quantity','category_pro_id','content','status'));

        if ($request->attribute_value_id) {
            Product_attribute::where('product_id',$id)->delete();
            foreach ($request->attribute_value_id as $value) {
                Product_attribute::create(['product_id'=>$id,'attribute_value_id'=>$value]);
            }
        }

        if ($request->tag_id) {
            Tag_product::where('pro_id',$id)->delete();
            foreach ($request->tag_id as $value) {
                Tag_product::create(['pro_id'=>$id,'tag_id'=>$value]);
            }
        }

        if ($edit) {
            return redirect()->route('admin.product.index')->with('success','Cập nhật thành công !');
        }
            return redirect()->back()->with('error','Cập nhật không thành công !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete=Product::find($id)->delete();
        if ($delete) {
            return redirect()->back()->with('success','Xóa thành công !');
        }
        return redirect()->back()->with('error','Xóa không thành công !');
    }
}
