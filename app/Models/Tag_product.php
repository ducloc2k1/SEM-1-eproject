<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag_product extends Model
{
    protected $fillable=['pro_id','tag_id'];

    public function tag()
    {
        return $this->hasOne(Tag::class,'id','tag_id');
    }
}


