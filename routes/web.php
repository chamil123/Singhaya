<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
//    return view('welcome');
    return view('Web.layout');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/getdata', 'HomeController@getdata')->name('home.getdata');

Route::post('ajaxdata/housedata', 'AdsController@housedata')->name('ajaxdata.housedata');
Route::post('ajaxdata/landdata', 'AdsController@landdata')->name('ajaxdata.landdata');
Route::post('ajaxdata/resdata', 'AdsController@resdata')->name('ajaxdata.resdata');
Route::post('ajaxdata/edudata', 'AdsController@edudata')->name('ajaxdata.edudata');
Route::post('ajaxdata/vehicledata', 'AdsController@vehicledata')->name('ajaxdata.vehicledata');
Route::post('ajaxdata/jobdata', 'AdsController@jobdata')->name('ajaxdata.jobdata');

Route::get('ajaxtypedata/restaurantdata', 'TypesController@resttaurantData')->name('ajaxtypedata.restaurantdata');
Route::get('ajaxtypedata/landdata', 'TypesController@landData')->name('ajaxtypedata.landdata');
Route::get('ajaxtypedata/edudata', 'TypesController@eduData')->name('ajaxtypedata.edudata');
Route::get('ajaxtypedata/homedata', 'TypesController@homeData')->name('ajaxtypedata.homedata');
Route::get('ajaxtypedata/vehicledata', 'TypesController@vehicleData')->name('ajaxtypedata.vehicledata');
Route::get('ajaxtypedata/jobdata', 'TypesController@jobData')->name('ajaxtypedata.jobdata');






Route::get('/chamil',function(){
    return view('Admin.layout');
    
});
Route::get('/web',function(){
    return view('Web.layout');
    
});
