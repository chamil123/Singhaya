<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class TypesController extends Controller
{
    public function resttaurantData(Request $request){
    	$cat_id = $request->get('category');
    	$types = DB::table('types')->where('cat_id',$cat_id)->get();
    	return response($types);
    }

    public function landData(Request $request){
    	$cat_id = $request->get('category');
    	$types = DB::table('types')->where('cat_id',$cat_id)->get();
    	return response($types);
    }
    
    public function eduData(Request $request){
    	$cat_id = $request->get('category');
    	$types = DB::table('types')->where('cat_id',$cat_id)->get();
    	return response($types);
    }

    public function homeData(Request $request){
    	$cat_id = $request->get('category');
    	$types = DB::table('types')->where('cat_id',$cat_id)->get();
    	return response($types);
    }

    public function vehicleData(Request $request){
    	$cat_id = $request->get('category');
    	$types = DB::table('types')->where('cat_id',$cat_id)->get();
    	return response($types);
    }

    public function jobData(Request $request){
    	$cat_id = $request->get('category');
    	$types = DB::table('types')->where('cat_id',$cat_id)->get();
    	return response($types);
    }
}
