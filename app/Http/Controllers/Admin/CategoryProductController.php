<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category_product;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryAddRequest;
use App\Http\Requests\CategoryUpdateRequest;

class CategoryProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats=Category_product::search()->paginate(10);

        return view('admin.category_product.index',compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category_product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryAddRequest $request,Category_product $cd)
    {
        $create=$cd->add();

        if ($create) {
            return redirect()->route('admin.category_product.index')->with('success','Thêm mới thành công !');
        }
        return redirect()->back()->with('error','Thêm mới không thành công !');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category_product  $category_product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cats=Category_product::find($id);
        return view('admin.category_product.edit',compact('cats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category_product  $category_product
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryUpdateRequest $request,$id)
    {
        $cat_pro = new Category_product();
        $edit=$cat_pro->change($id);

        if ($edit) {
            return redirect()->route('admin.category_product.index')->with('success','Cập nhật thành công !');
        }
        return redirect()->back()->with('error','Cập nhật không thành công !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category_product  $category_product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat_pro = new Category_product();
        $delete=$cat_pro->remove($id);

        if ($delete) {
            return redirect()->back()->with('success','Xóa thành công !');
        }
        return redirect()->back()->with('error','Xóa không thành công !');
    }
}
