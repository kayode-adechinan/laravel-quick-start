<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    protected $guarded = [];

    // a category belongs to many products (many to many)
    public function products()
    {
        return $this->belongsToMany('App\Product');
    }
}
