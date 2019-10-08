<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typecollection extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

protected $primaryKey = 'collection_id';

    protected $fillable = [
        'type_id','ad_id',     
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
