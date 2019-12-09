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
        'id','Match','Datetime','Sport','Champion','1','X','2','GG','NG','U05','O05','U15','O15','U25','O25','1X','X2','12','1HT','XHT','2HT','U05HT','O05HT','U15HT','O15HT',
    ];



    


    /**
     * The attributes excluded from the model s JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}