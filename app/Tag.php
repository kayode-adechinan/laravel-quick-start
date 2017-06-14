<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    protected $guarded = [];

    // a tag belongs to many product (many to many)
    public function products()
    {
        return $this->belongsToMany('App\Product');
    }
}
