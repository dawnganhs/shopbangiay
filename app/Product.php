<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'image', 'price', 'color', 'size', 'gender', 'description', 'brand_id'
    ];

    public function brands(){
        return $this->belongsTo('App\Brand', 'brand_id');
    }
    public function order_details(){
        return $this->hasMany('App\OrderDetail');
    }
}
