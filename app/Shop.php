<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    //
    protected $guarded = [];

    // a shop belongsto user
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    // a shop has many products
    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
