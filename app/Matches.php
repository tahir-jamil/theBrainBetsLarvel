<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','game','datetime','sport_id','champion_id','v1','x','v2','v1ht','vht','v2ht','o05','u05','o15','u15','o25','u25','o05ht','u05ht','o15ht','u15ht','gg','ng','v1x','x2','v12','result',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}