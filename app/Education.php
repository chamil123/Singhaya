<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

protected $primaryKey = 'edu_id';

    protected $fillable = [
        'medium','class_type','locations','exams','subjects','ad_id',     
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     
    protected $hidden = [
        'password', 'remember_token',
    ];
    */
}
