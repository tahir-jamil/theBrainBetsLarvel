<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Champions extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'sign', 'nation_id', 'isActive',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}