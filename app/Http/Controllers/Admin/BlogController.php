<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Event;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\CatBlog;
use App\Models\BlogComment;
use App\Models\Tag;
use App\Models\TagBlog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::search()->paginate(5);
        $index = $blogs->firstItem();

        return view('Admin.blog.list-news',compact('blogs','index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat_posts = CatBlog::all();
        $tags=Tag::all();
        return view('Admin.blog.create', compact('cat_posts','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $model = new Blog();
        
        $blog = $model->add();

        $blog->tags()->sync($request->tag_blog, false);

        return redirect()->route('admin.blog.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showDetailBlog($slug) {

        $blogs = new Blog();
      
        $blog = $blogs->getBlogDetail($slug)->first();

        $preBlog = $blogs->preBlog($blog->id);

        $nextBlog = $blogs->nextBlog($blog->id);
        
        Event::dispatch('blogs.view', $blog);
        
        $catBlog = $blog->catBlog;

        $countComment = $blog->comments()->count();

        $comments = $blog->comments;

        return view('customer.blog_detail',compact('blog', 'preBlog', 'nextBlog', 'catBlog', 'countComment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Form Edit Post
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);

        $catBlog = $blog->catBlog;

        $catList = CatBlog::all();

        $tagList = Tag::all();

        $tag2 = array();

        foreach ($tagList as $tag) {

            $tag2[$tag->id] = $tag->name;
            
        }
        
        return view('Admin.blog.edit', compact('blog','catBlog','catList', 'tag2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //Update Post
    public function update(Request $request, $id)
    {
        $blog = new Blog();

        $blog->find($id)->change($id);

        $blog->find($id)->tags()->sync($request->tag_blog, true);

        return redirect()->route('admin.blog.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Blog::findOrFail($id);

        $tagBlog = TagBlog::where('blog_id', '=', $id);

        $data->delete();

        $tagBlog->delete();

        return redirect()->back();
    }
}
