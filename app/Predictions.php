<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Predictions extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','match_id','Match','user_id','1x2','1x2ht','ou05','ou25','ou15','ou05ht','ou15ht','ggng','double_change','status_id',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
















