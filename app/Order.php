<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $guarded = [];

    // an order has many orderline
    public function orderlines()
    {
        return $this->hasMany('App\OrderLine');
    }

    // an order belongsTo a paymentmethod
    public function paymentMethod()
    {
        return $this->belongsTo('App\PaymentMethod');
    }


}
