<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_attribute extends Model
{
    protected $fillable=['product_id','attribute_value_id'];

    public function attribute_value()
    {
        return $this->hasOne(Attribute_value::class,'id','attribute_value_id');
    }

    public function product()
    {
        return $this->hasOne(Product::class,'id','product_id');
    }
}
