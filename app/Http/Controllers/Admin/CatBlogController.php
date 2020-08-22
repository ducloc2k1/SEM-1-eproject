<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CatBlog;
use Illuminate\Http\Request;

class CatBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat_blogs = CatBlog::search()->paginate(10);

        return view('Admin.cat_blog.add-cate-blog', compact('cat_blogs'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_data = array (

            'name' => $request->name,
            'slug' => $request->slug,
            'status' => $request->status
        );

        CatBlog::create($form_data);
        return redirect()->route('admin.category_blog.index')->with('success','Thêm mới thành công !');

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat_blogs=CatBlog::find($id);
        return view('admin.cat_blog.edit-cate',compact('cat_blogs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->offsetUnset('_token');
        $request->offsetUnset('_method');

        $form_data = array (
            'name' => $request->name,
            'slug' => $request->slug,
            'status' => $request->status
        );
        CatBlog::where('id',$id)->update($form_data);
        return redirect()->route('admin.category_blog.index')->with('success','Cập nhật thành công !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $delete=CatBlog::find($id)->delete();

        if ($delete) {
            return redirect()->back()->with('success','Xóa thành công !');
        }
        return redirect()->back()->with('error','Xóa không thành công !');
    }
}
