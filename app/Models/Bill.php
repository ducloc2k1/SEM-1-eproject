<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable=['total_price','cus_id','bill_note','total_quantity','payment_id','shipping_id','status'];

    public function customer()
    {
        return $this->hasOne(Customer::class,'id','cus_id');
    }

    public function bill_detail()
    {
        return $this->hasMany(Bill_detail::class,'bill_id','id');
    }

    public function shipping()
    {
        return $this->hasOne(Shipping::class,'id','shipping_id');
    }

    public function payment()
    {
        return $this->hasOne(Payment::class,'id','payment_id');
    }
}
