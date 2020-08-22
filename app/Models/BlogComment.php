<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    protected $guarded  = [];

    public function customer()
    {
        return $this->hasOne(Customer::class,'id','customer_id');
    }

    public function post()
    {
        return $this->belongsTo(Blog::class);
    }

    public function replies()
    {
        return $this->hasMany(BlogComment::class,'parent_id');
    }

    public function storeCmt()
    {
        $form_data = array(
            'content' =>  request()->content,
            'blog_id' =>  request()->blog_id,
            'customer_id' =>  request()->customer_id,
            'parent_id' =>  request()->parent_id,
        );

        $comment = $this->create($form_data);

        return $comment;
    }

    public function replyCmt()
    {
        $form_data = array(
            'content' =>  request()->content_reply,
            'blog_id' =>  request()->blog_id,
            'customer_id' =>  request()->customer_id,
            'parent_id' =>  request()->parent_id
        );

        $replyComment = $this->create($form_data);

        return $replyComment;
    }
}
