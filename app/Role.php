<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $guarded = [];

    // a roe belongs to many users (many to many)
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    // a role has many capabilities
    public function capabilities()
    {
        return $this->hasMany('App\Capability');
    }
}
