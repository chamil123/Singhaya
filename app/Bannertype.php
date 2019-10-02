<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bannertype extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
       'id', 'type_name',
    ];
}
