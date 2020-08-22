<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_comment extends Model
{
    protected $fillable=['content','parent_id','status','pro_id','customer_id','star_number'];

    public function product()
    {
        return $this->hasOne(Product::class,'id','pro_id');
    }

    public function customer()
    {
        return $this->hasOne(Customer::class,'id','customer_id');
    }
}
