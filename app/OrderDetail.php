<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $fillable = [
        'quantity', 'unit_price', 'order_id', 'product_id'
    ];

    public function order(){
        return $this->belongsTo('App\Order', 'order_id');
    }
    public function product(){
        return $this->belongsTo('App\Product', 'product_id');
    }
}
