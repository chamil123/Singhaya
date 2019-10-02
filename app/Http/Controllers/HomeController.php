<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ad; 
use App\Category; 
use App\Bannertype; 
use App\House; 
use Auth; 
use DB;
use Validator;
use DataTables;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cats = DB::table('categories')->get();
        $banners = DB::table('Bannertypes')->get();
        // dd($cats);
        return view('home', compact('cats','banners'));
    }

    public function getdata(){
         $id = auth()->user()->id;

        $ads = DB::table('ads')
            ->join('bannertypes','ads.type_id','=','bannertypes.id')
            ->select('ads.ad_title','ads.ad_cusName', 'ads.status','ads.updated_at','bannertypes.type_name')->where('ads.user_id','=', $id)->orderBy('ads.updated_at','ASC')->limit(100)->get();

        // $ads = Ads::select('ad_title','ad_cusName', 'type_id', 'status','ad_mobileNumber')->limit(2);
       // return $ads;
        return DataTables::of($ads)->make(true);

    }

   
}
