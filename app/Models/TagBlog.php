<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TagBlog extends Model
{
    protected $table = "blog_tag";

    protected $fillable=['blog_id','tag_id'];

    public function tag()
    {
        return $this->hasOne(Tag::class,'id','tag_id');
    }
}
