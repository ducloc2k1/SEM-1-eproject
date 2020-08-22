<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Product;
use App\Models\CatBlog;
use DB;

class BlogController extends Controller
{
    public function homeBlog(){
        $model = new Blog();

        $blogs = Blog::paginate('6');

        $popularBlog = $model->popularBlogs();

        $catBlog = new CatBlog();

        $listCat = $catBlog->getAllCat();

        $slug = '';

        return view('customer.blog', compact('blogs','listCat', 'popularBlog', 'slug'));
    }

    public function getByCat($slug){
        $blog = new Blog();

        $catBlog = new CatBlog();

        $cat = $catBlog->getBySlug($slug);

        $blogs = $blog->getBlog($cat->id)->paginate('12');

        $listCat = $catBlog->getAllCat();

        $popularBlog = $blog->popularBlogs();

        return view('Customer.blog', compact('cat','blogs', 'listCat', 'slug', 'popularBlog'));
    }

    public function search_by_name(){

    }
}
