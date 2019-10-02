<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ad; 
use App\Land; 
use App\Restaurant; 
use App\House; 
use App\Vehicle; 
use App\Education; 
use Auth; 
use DB;
use Validator;
use DataTables;

class AdsController extends Controller
{
     public function housedata(Request $request){
        $validation = Validator::make($request->all(),[
            'rooms' => 'required',
            'landsize' => 'required',

            'homeCusName' => 'required',
            'homeCusMobNum' => 'required',
            'HomeDistrict' => 'required',
            'HomeHomeTown' => 'required',
            'HomeDescripton' => 'required',
            'HomeTitle' => 'required',
            'houseBanner' => 'required',
    ]);

        $error_array = array();
        $success_output = '';
        if ($validation->fails()) {
            foreach ($validation->messages()->getMessages() as $field_name => $messages) {
                $error_array[] = $messages;
            }
        } else {
            if ($request->get('housebutton_action') == 'insert') {
                $ad = new Ad([
                    'ad_cusName' => $request->get('homeCusName'),
                    'ad_address' => $request->get('homeCusAddress'),
                    'ad_email' => $request->get('homeCusEmail'),
                    'ad_mobileNumber' => $request->get('homeCusMobNum'),
                    'ad_homeNumber' => $request->get('homeCusHomeNum'),
                    'ad_province' => $request->get('homeProvince'),
                    'ad_district' => $request->get('homeDistrict'),
                    'ad_homeTown' => $request->get('homeHomeTown'),
                    'ad_description' => $request->get('homeDescripton'),
                    'ad_title' => $request->get('homeTitle'),
                    'cat_id' => $request->get('houseCategory'),
                    'type_id' => $request->get('houseBanner'),
                    'status' => 1,
                    'user_id' => auth()->user()->id,
                ]);
                $house = new House([
                    'bath_rooms' => $request->get('bathrooms'),
                    'rooms' => $request->get('rooms'),
                    'land_size' => $request->get('landsize'),
                    'water' => $request->get('homeWater'),
                    'electricity' => $request->get('homeElectricity'),
                    'ad_id' => 1,
                    'type_id' => 1,
                ]);
                
                $ad->save();
                $house->save();
                $success_output = '<div class="alert alert-success"><storng> Home Banner Data Inserted Successfully!!!</strong></div>';
            }
        }
        
        $output = array(
            'error' => $error_array,
            'success' => $success_output,
        );
        echo json_encode($output);
    }

    public function landdata(Request $request){
        $validation = Validator::make($request->all(),[
            'landLandSize' => 'required',
            'landRoads' => 'required',

            'landCusName' => 'required',
            'landCusMobNum' => 'required',
            'landDistrict' => 'required',
            'landHomeTown' => 'required',
            'landDescripton' => 'required',
            'landTitle' => 'required',
            'landBanner' => 'required',
    ]);

        $error_array = array();
        $success_output = '';
        if ($validation->fails()) {
            foreach ($validation->messages()->getMessages() as $field_name => $messages) {
                $error_array[] = $messages;
            }
        } else {
            if ($request->get('landbutton_action') == 'insert') {
                $ad = new Ad([
                    'ad_cusName' => $request->get('landCusName'),
                    'ad_address' => $request->get('landCusAddress'),
                    'ad_mobileNumber' => $request->get('landCusMobNum'),
                    'ad_email' => $request->get('landCusEmail'),
                    'ad_homeNumber' => $request->get('landCusHomeNum'),
                    'ad_province' => $request->get('landProvince'),
                    'ad_district' => $request->get('landDistrict'),
                    'ad_homeTown' => $request->get('landHomeTown'),
                    'ad_description' => $request->get('landDescripton'),
                    'ad_title' => $request->get('landTitle'),
                    'cat_id' => $request->get('landCategory'),
                    'type_id' => $request->get('landBanner'),
                    'status' => 1,
                    'user_id' => auth()->user()->id,
                ]);
                $land = new Land([
                    'roads' => $request->get('landRoads'),
                    'size' => $request->get('landLandSize'),
                    'water' => $request->get('landWater'),
                    'electricity' => $request->get('landElectricity'),
                    'ad_id' => 1,
                    'type_id' => 1,
                ]);
                $ad->save();
                $land->save();
                $success_output = '<div class="alert alert-success"><strong> Land Banner Data Inserted Successfully!!!<storng></div>';
            }
        }
        
        $output = array(
            'error' => $error_array,
            'success' => $success_output,
        );
        echo json_encode($output);
    }

     public function resdata(Request $request){
        $validation = Validator::make($request->all(),[
            'resCusName' => 'required',
            'resCusMobNum' => 'required',
            'resDistrict' => 'required',
            'resHomeTown' => 'required',
            'resDescripton' => 'required',
            'resTitle' => 'required',
            'resBanner' => 'required',
    ]);

        $error_array = array();
        $success_output = '';
        if ($validation->fails()) {
            foreach ($validation->messages()->getMessages() as $field_name => $messages) {
                $error_array[] = $messages;
            }
        } else {
            if ($request->get('resbutton_action') == 'insert') {
                $ad = new Ad([
                    'ad_cusName' => $request->get('resCusName'),
                    'ad_address' => $request->get('resCusAddress'),
                    'ad_mobileNumber' => $request->get('resCusMobNum'),
                    'ad_email' => $request->get('resCusEmail'),
                    'ad_homeNumber' => $request->get('resCusHomeNum'),
                    'ad_province' => $request->get('resProvince'),
                    'ad_district' => $request->get('resDistrict'),
                    'ad_homeTown' => $request->get('resHomeTown'),
                    'ad_description' => $request->get('resDescripton'),
                    'ad_title' => $request->get('resTitle'),
                    'cat_id' => $request->get('resCategory'),
                    'type_id' => $request->get('resBanner'),
                    'status' => 1,
                    'user_id' => auth()->user()->id,
                ]);
                $restaurant = new Restaurant([
                    'room_type' => $request->get('resRoomType'),
                    'other_specs' => $request->get('resOtherSpec'),
                    'ad_id' => 1,
                    'type_id' => 1,
                ]);
                $ad->save();
                $restaurant->save();
                $success_output = '<div class="alert alert-success"><storng> Restaurants Banner Data Inserted Successfully!!!</strong></div>';
            }
        }
        
        $output = array(
            'error' => $error_array,
            'success' => $success_output,
        );
        echo json_encode($output);
    }

     public function edudata(Request $request){
        $validation = Validator::make($request->all(),[
            'eduCusName' => 'required',
            'eduCusMobNum' => 'required',
            'eduDistrict' => 'required',
            'eduHomeTown' => 'required',
            'eduDescripton' => 'required',
            'eduTitle' => 'required',
            'eduBanner' => 'required',
            
            'eduMedium' => 'required',
            'eduLocation' => 'required',
            'eduExam' => 'required',
            'eduSubject' => 'required',
    ]);

        $error_array = array();
        $success_output = '';
        if ($validation->fails()) {
            foreach ($validation->messages()->getMessages() as $field_name => $messages) {
                $error_array[] = $messages;
            }
        } else {
            if ($request->get('edubutton_action') == 'insert') {
                $ad = new Ad([
                    'ad_cusName' => $request->get('eduCusName'),
                    'ad_address' => $request->get('eduCusAddress'),
                    'ad_mobileNumber' => $request->get('eduCusMobNum'),
                    'ad_email' => $request->get('eduCusEmail'),
                    'ad_homeNumber' => $request->get('eduCusHomeNum'),
                    'ad_province' => $request->get('eduProvince'),
                    'ad_district' => $request->get('eduDistrict'),
                    'ad_homeTown' => $request->get('eduHomeTown'),
                    'ad_description' => $request->get('eduDescripton'),
                    'ad_title' => $request->get('eduTitle'),
                    'cat_id' => $request->get('eduCategory'),
                    'type_id' => $request->get('eduBanner'),
                    'status' => 1,
                    'user_id' => auth()->user()->id,
                ]);
                $education = new Education([
                    'medium' => $request->get('eduMedium'),
                    'class_type' => $request->get('eduClassType'),
                    'locations' => $request->get('eduLocation'),
                    'exams' => $request->get('eduExam'),
                    'subjects' => $request->get('eduSubject'),
                    'ad_id' => 1,
                ]);
                $ad->save();
                $education->save();
                $success_output = '<div class="alert alert-success"><strong> Education Banner Data Inserted Successfully!!!</strong></div>';
            }
        }
        
        $output = array(
            'error' => $error_array,
            'success' => $success_output,
        );
        echo json_encode($output);
    }

     public function vehicledata(Request $request){
        $validation = Validator::make($request->all(),[
            'vehicleCusName' => 'required',
            'vehicleCusMobNum' => 'required',
            'vehicleDistrict' => 'required',
            'vehicleHomeTown' => 'required',
            'vehicleDescripton' => 'required',
            'vehicleTitle' => 'required',
            'vehicleBanner' => 'required',
            
            'vehicleType' => 'required',
            'vehicleModel' => 'required',
            'vehicleModelYear' => 'required',
            'vehicleMilage' => 'required',
    ]);

        $error_array = array();
        $success_output = '';
        if ($validation->fails()) {
            foreach ($validation->messages()->getMessages() as $field_name => $messages) {
                $error_array[] = $messages;
            }
        } else {
            if ($request->get('vehiclebutton_action') == 'insert') {
                $ad = new Ad([
                    'ad_cusName' => $request->get('vehicleCusName'),
                    'ad_address' => $request->get('vehicleCusAddress'),
                    'ad_mobileNumber' => $request->get('vehicleCusMobNum'),
                    'ad_email' => $request->get('vehicleCusEmail'),
                    'ad_homeNumber' => $request->get('vehicleCusHomeNum'),
                    'ad_province' => $request->get('vehicleProvince'),
                    'ad_district' => $request->get('vehicleDistrict'),
                    'ad_homeTown' => $request->get('vehicleHomeTown'),
                    'ad_description' => $request->get('vehicleDescripton'),
                    'ad_title' => $request->get('vehicleTitle'),
                    'cat_id' => $request->get('vehicleCategory'),
                    'type_id' => $request->get('vehicleBanner'),
                    'status' => 1,
                    'user_id' => auth()->user()->id,
                ]);
                $vehicle = new Vehicle([
                    'vehicle_type' => $request->get('vehicleType'),
                    'color' => $request->get('vehicleColor'),
                    'engine_capacity' => $request->get('vehicleEngcapacity'),
                    'body_type' => $request->get('vehicleBodyType'),
                    'model' => $request->get('vehicleModel'),
                    'model_year' => $request->get('vehicleModelYear'),
                    'transmision' => $request->get('vehicleTransmision'),
                    'milage' => $request->get('vehicleMilage'),
                    'condition' => $request->get('vehicleCondition'),
                    'ad_id' => 1,
                    'type_id' => 1,
                ]);
                $ad->save();
                $vehicle->save();
                $success_output = '<div class="alert alert-success"><strong> Vehicle Banner Data Inserted Successfully!!!</strong></div>';
            }
        }
        
        $output = array(
            'error' => $error_array,
            'success' => $success_output,
        );
        echo json_encode($output);
    }

}
