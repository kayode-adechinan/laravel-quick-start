<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderLine extends Model
{
    //
    protected $guarded = [];

    // an orderline belongsto a order
    public function order()
    {
        return $this->belongsTo('App\Order');
    }
}
