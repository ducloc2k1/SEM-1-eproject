<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;

class CatBlog extends Model
{
    protected $fillable = ['id', 'name', 'slug', 'status'];

    public function blog() {

        return $this->hasMany('App\Models\Blog');

    }

    public function getAllCat(){

        return $this::all();
    }

    public function getBySlug($slug){

        return $this->where('slug', '=', $slug)->first();
    }

    public function scopeSearch($query)
    {
        if(request()->key){
            $key=request()->key;
            $query->where('name','LIKE','%'.$key.'%');
        }
        return $query;
    }
}
