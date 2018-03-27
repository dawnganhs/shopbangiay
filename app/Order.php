<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'total', 'id_user'
    ];
    public function user(){
        return $this->belongsTo('App\User', 'id_user');
    }
    public function order_details(){
        return $this->hasMany('App\OrderDetail');
    }
}
