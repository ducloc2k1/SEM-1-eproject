<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $fillable=['name'];

    public function attribute_value()
    {
        return $this->hasMany(Attribute_value::class,'attribute_id','id');
    }
}
