<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    //
    protected $guarded = [];

    // a payment method has many orders
    public function orders()
    {
        return $this->hasMany('App\Order');
    }
}
