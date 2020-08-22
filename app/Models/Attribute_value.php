<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attribute_value extends Model
{
    protected $fillable=['name','ma_color','attribute_id','status'];

    public function attribute()
    {
        return $this->hasOne(Attribute::class,'id','attribute_id');
    }
}
