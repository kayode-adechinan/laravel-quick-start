<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Capability extends Model
{
    //
    protected $guarded = [];

    // a capability belongsto a role
    public function role()
    {
        return $this->belongsTo('App\Role');
    }
}
