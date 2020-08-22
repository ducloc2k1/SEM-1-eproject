<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category_product extends Model
{
    protected $fillable=['name','slug','meta_key','meta_title','meta_description','status'];

    public function product()
    {
        return $this->hasMany(product::class,'category_pro_id','id');
    }

    public function scopeSearch($query)
    {
        if(request()->key){
            $key=request()->key;
            $query->where('name','LIKE','%'.$key.'%')->paginate(10);
        }

        return $query;
    }

    public function add(){
        return $this::create(request()->all());
    }

    public function change($id)
    {
        return Category_product::where('id',$id)->update(request()->only('name','slug','meta_key','meta_title','meta_description','status'));
    }

    public function remove($id)
    {
        return Category_product::find($id)->delete();
    }
}
