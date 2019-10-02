<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Land extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

protected $primaryKey = 'land_id';

    protected $fillable = [
        'roads','size','water', 'electricity','ad_id','type_id',     
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
