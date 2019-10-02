<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ad_cusName', 'ad_address','ad_email','ad_nic', 'ad_homeNumber','ad_mobileNumber','ad_province', 'ad_district', 'ad_homeTown', 'ad_payment', 'ad_recNumber', 'ad_description', 'ad_remark', 'status', 'ad_title', 'ad_companyName', 'published_by', 'cat_id', 'type_id', 'user_id', 
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
