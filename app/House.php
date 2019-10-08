<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

protected $primaryKey = 'house_id';

    protected $fillable = [
    'bath_rooms', 'rooms','land_size','water', 'electricity','ad_id','type_id',     
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
