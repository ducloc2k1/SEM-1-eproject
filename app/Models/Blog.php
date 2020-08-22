<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CatBlog;
use App\Models\BlogComment;
use App\Models\TagBlog;

class Blog extends Model
{
    protected $guarded  = [];

    public function  catBlog()
    {
        return $this->hasOne(CatBlog::class, 'id', 'cat_blog_id');
    }

    public function tags()
    {
    //    return $this->belongsToMany('App\Models\Tag'); //get tag for blog
          return $this->belongsToMany('App\Models\Tag'); //get tag for blog
    }

    public function comments()
    {
        return $this->hasMany(BlogComment::class);
    }

    public function commentNull()
    {
        return $this->hasMany(BlogComment::class)->whereNull('parent_id');
    }

    // get previous blog
    public function preBlog($id){
        $id = $this->where('id', '<', $id)->max('id');
        return $this->find($id);
    }

    //get next blog
    public function nextBlog($id){
        $id =  $this->where('id', '>', $id)->min('id');
        return $this->find($id);
    }

    //store blog
    public function add(){
        $filename=str_replace(url('uploads').'/','',request()->thumbnail);
        $filename2=str_replace(url('uploads').'/','',request()->image);
        request()->merge(['thumbnail'=>$filename,'image'=>$filename2]);

        $blog = $this->create([
           'title' => request()->title,
           'content' => request()->content,
           'slug' => request()->slug,
           'image' => $filename2,
           'cat_blog_id' => request()->cat_blog_id,
           'summary' => request()->summary,
           'thumbnail_image' =>   $filename,
           'status'          =>   request()->status
        ]);

        return $blog;
    }
    //update blog;
    public function change($id){
        $filename=str_replace(url('uploads').'/','',request()->thumbnail);
        $filename2=str_replace(url('uploads').'/','',request()->image);
        request()->merge(['thumbnail'=>$filename,'image'=>$filename2]);

        $form_data = array(
            'title'            =>   request()->title,
            'content'          =>   request()->content,
            'image'            =>   $filename2,
            'summary'          =>   request()->summary,
            'thumbnail_image'  =>   $filename,
            'cat_blog_id'      =>   request()->cat_blog_id,
            'status'           =>   request()->status
        );
        $blog = $this->update($form_data);

        return $blog;
    }

    public function popularBlogs(){
        return $this->OrderBy('view', 'DESC')->take(5)->get();
    }

    //get Blog by cat_blog_id
    public function getBlog($id){
        return $this->where('cat_blog_id', '=', $id);
    }

    //get Blog detail
    public function getBlogDetail($slug){
        return $this->where('slug', '=', $slug);
    }

    public function scopeSearch($query)
    {
        if(request()->key){
            $key=request()->key;
            $query->where('title','LIKE','%'.$key.'%');
        }
        return $query;
    }
}
