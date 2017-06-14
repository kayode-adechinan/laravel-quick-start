<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    //  a user belongsto many role (many to many)
    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }

    // a user has may shop
    public function shops()
    {
        return $this->hasMany('App\Shop');
    }
}
