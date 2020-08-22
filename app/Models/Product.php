<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['name','price','sale_price','desciption','image','image_list','quantity','category_pro_id','content','status'];

    public function category_product()
    {
        return $this->hasOne(Category_product::class,'id','category_pro_id');
    }

    public function comment()
    {
        return $this->hasMany(Product_comment::class,'pro_id','id');
    }

    public function product_attribute()
    {
        return $this->hasMany(Product_attribute::class,'product_id','id');
    }

    public function tag_pro()
    {
        return $this->hasMany(Tag_product::class,'pro_id','id');
    }

    public function scopeSearch($query)
    {
        if(request()->key){
            $key=request()->key;
            $query->where('name','LIKE','%'.$key.'%')->paginate(10);
        }
        return $query;
    }
}
