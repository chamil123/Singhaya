<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

protected $primaryKey = 'id';

    protected $fillable = [
        'vehicle_type','color','engine_capacity','body_type','model','model_year','transmision','milage','condition','ad_id','type_id',     
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
