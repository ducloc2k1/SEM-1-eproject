<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Customer extends Authenticatable
{
    use Notifiable;

    protected $fillable=['first_name','last_name','display_name','phone','email','address','password','company','country','post_code','town','status'];

    public function bill()
    {
        return $this->hasMany(Bill::class,'cus_id','id');
    }
}
