<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','firstName','lastName','userName','email','password','birthday','img','isActive','isAdmin',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}