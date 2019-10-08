@extends('layouts.app')

@section('content')
<div class="container">


    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <div class="row">
                        <div class="col-md-3 col-md-offset-6">
                            <br/><br/>
                                <select class="form-control input-sm dynamic" name="cats" id="cats">
                                    <option >Select Category</option>
                                    @foreach($cats as $cat)
                                      <option value="{{$cat->id}}">{{$cat->cat_name}}</option>
                                    @endforeach
                                </select>
                        </div>
                       <div class="col-md-3 ">
                            <br/><br/>
                                <button class="btn btn-success btn-sm" type="button" name="add" id="add_data">Add</button>
                            <br/><br/>
                       </div>
                    </div>
                     <div>
                    <div class="table-responsive">
                        <table class="table table-border table-striped table-hover" id="agent_table" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Customer</th>
                                    <th>Banner Type</th>
                                    <th>Current Status</th>
                                    <th>Published Date</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                  


                </div>
                </div>
            </div>
        </div>
    </div>

<div id="houseModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form method="post" id="house_form">
                    <div class="modal-header">
                        <h4 class="modal-title" id="house_detail">House Category Details</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                
                                <div class="form-group">
                                    <label>Customer name</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="text" name="homeCusName" id="homeCusName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Customer Address</label><font size="2" face="vardana" color="green"> (Optional)</font>
                                    <input type="text" name="homeCusAddress" id="homeCusAddress" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Customer Email</label><font size="2" face="vardana" color="green"> (Optional)</font>
                                    <input type="text" name="homeCusEmail" id="homeCusEmail" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Customer Home Number</label><font size="2" face="vardana" color="green"> (Optional)</font>
                                    <input type="number" name="homeCusHomeNum" id="homeCusHomeNum" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Customer Mobile Number </label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="number" name="homeCusMobNum" id="homeCusMobNum" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Province</label><font size="2" face="vardana" color="green"> (Optional)</font>
                                    <input type="text" name="homeProvince" id="homeProvince" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>District</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="text" name="homeDistrict" id=homeDistrict"" class="form-control">
                                </div>
                                 <div class="form-group">
                                    <label>Home Town</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="text" name="homeHomeTown" id="homeHomeTown" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                 {{csrf_field()}}
                                
                                <div class="form-group">
                                    <label>Ad Description</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="text" name="homeDescripton" id="homeDescripton" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Ad Title</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="text" name="homeTitle" id="homeTitle" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Banner Type</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <select class="form-control input-sm dynamic" name="houseBanner" id="houseBanner">
                                    <option value="">---Select Banner Type---</option>
                                    @foreach($banners as $banner)
                                      <option value="{{$banner->id}}">{{$banner->type_name}}</option>
                                    @endforeach
                                </select>
                                </div>

                                <div class="form-group">
                                    <label>Suitable Purposes</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <div id="homeSub1"></div>
                                </div>

                                <div class="form-group">
                                    <label>Bath Rooms</label><font size="2" face="vardana" color="green"> (Optional)</font>
                                    <input type="text" name="bathrooms" id="bathrooms" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Rooms</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="text" name="rooms" id="rooms" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Land Size</label><font size="2" face="vardana" color="green"> (Optional)</font>
                                    <input type="text" name="landsize" id="landsize" class="form-control">
                                </div>
                                 <div class="form-group">
                                    <label>Water</label><font size="2" face="vardana" color="green"> (Optional)</font>
                                    <input type="text" name="homeWater" id="homeWater" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Electricity</label><font size="2" face="vardana" color="green"> (optioanl)</font>
                                    <input type="text" name="homeElectricity" id="homeElectricity" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <span id="houseform_output"></span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="housebutton_action" id="housebutton_action" value="insert">
                        <input type="hidden" name="houseCategory" id="houseCategory">
                        <input type="submit" name="submit" id="houseaction" value="Add" class="btn btn-info">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div> 

<div id="landModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form method="post" id="land_form">
                    <div class="modal-header">
                        <h4 class="modal-title" id="land_detail">Land Category Details</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                
                                <div class="form-group">
                                    <label>Customer name</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="text" name="landCusName" id="landCusName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Customer Address</label><font size="2" face="vardana" color="green"> (Optional)</font>
                                    <input type="text" name="landCusAddress" id="landCusAddress" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Customer Email</label><font size="2" face="vardana" color="green"> (Optional)</font>
                                    <input type="text" name="landCusEmail" id="landCusEmail" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Customer Home Number</label><font size="2" face="vardana" color="green"> (Optional)</font>
                                    <input type="number" name="landCusHomeNum" id="landCusHomeNum" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Customer Mobile Number </label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="number" name="landCusMobNum" id="landCusMobNum" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Province</label><font size="2" face="vardana" color="green"> (Optional)</font>
                                    <input type="text" name="landProvince" id="landProvince" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>District</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="text" name="landDistrict" id=landDistrict"" class="form-control">
                                </div>
                                 <div class="form-group">
                                    <label>Home Town</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="text" name="landHomeTown" id="landHomeTown" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                 {{csrf_field()}}
                                
                                <div class="form-group">
                                    <label>Ad Description</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="text" name="landDescripton" id="landDescripton" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Ad Title</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="text" name="landTitle" id="landTitle" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Banner Type</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <select class="form-control input-sm dynamic" name="landBanner" id="landBanner">
                                    <option value="">---Select Banner Type---</option>
                                    @foreach($banners as $banner)
                                      <option value="{{$banner->id}}">{{$banner->type_name}}</option>
                                    @endforeach
                                </select>
                                </div>

                                <div class="form-group">
                                    <label>Suitable Purposes</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <div id="landSub1"></div>
                                </div>

                                <div class="form-group">
                                    <label>Land Size</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="text" name="landLandSize" id="landLandSize" class="form-control">
                                </div>
                                 <div class="form-group">
                                    <label>Water</label><font size="2" face="vardana" color="green"> (Optional)</font>
                                    <input type="text" name="landWater" id="landWater" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Electricity</label><font size="2" face="vardana" color="green"> (optional)</font>
                                    <input type="text" name="landElectricity" id="landElectricity" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Main Roads</label><font size="2" face="vardana" color="green"> (optional)</font>
                                    <input type="text" name="landRoads" id="landRoads" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <span id="landform_output"></span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="landbutton_action" id="landbutton_action" value="insert">
                        <input type="hidden" name="landCategory" id="landCategory">
                        <input type="submit" name="submit" id="landaction" value="Add" class="btn btn-info">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div> 

<div id="resModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form method="post" id="res_form">
                    <div class="modal-header">
                        <h4 class="modal-title" id="land_detail">Restaurants Category Details</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Customer name</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="text" name="resCusName" id="resCusName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Customer Address</label><font size="2" face="vardana" color="green"> (Optional)</font>
                                    <input type="text" name="resCusAddress" id="resCusAddress" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Customer Email</label><font size="2" face="vardana" color="green"> (Optional)</font>
                                    <input type="text" name="resCusEmail" id="resCusEmail" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Customer Home Number</label><font size="2" face="vardana" color="green"> (Optional)</font>
                                    <input type="number" name="resCusHomeNum" id="resCusHomeNum" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Customer Mobile Number </label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="number" name="resCusMobNum" id="resCusMobNum" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Province</label><font size="2" face="vardana" color="green"> (Optional)</font>
                                    <input type="text" name="resProvince" id="resProvince" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>District</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="text" name="resDistrict" id="resDistrict" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                 {{csrf_field()}}
                                 <div class="form-group">
                                    <label>Home Town</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="text" name="resHomeTown" id="resHomeTown" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Ad Description</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="text" name="resDescripton" id="resDescripton" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Ad Title</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="text" name="resTitle" id="resTitle" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Banner Type</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <select class="form-control input-sm dynamic" name="resBanner" id="resBanner">
                                    <option value="">---Select Banner Type---</option>
                                    @foreach($banners as $banner)
                                      <option value="{{$banner->id}}">{{$banner->type_name}}</option>
                                    @endforeach
                                </select>
                                </div>

                                <div class="form-group">
                                    <label>Suitable Categories</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <div id="resSub1"></div>
                                </div>

                                <div class="form-group">
                                    <label>Room Types</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="text" name="resRoomType" id="resRoomType" class="form-control">
                                </div>
                                 <div class="form-group">
                                    <label>Other Specifications</label><font size="2" face="vardana" color="green"> (Optional)</font>
                                    <input type="text" name="resOtherSpec" id="resOtherSpec" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <span id="resform_output"></span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="resbutton_action" id="resbutton_action" value="insert">
                        <input type="hidden" name="resCategory" id="resCategory">
                        <input type="submit" name="submit" id="resaction" value="Add" class="btn btn-info">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>     

<div id="eduModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form method="post" id="edu_form">
                    <div class="modal-header">
                        <h4 class="modal-title" id="edu_detail">Education Category Details</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                
                                <div class="form-group">
                                    <label>Customer name</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="text" name="eduCusName" id="eduCusName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Customer Address</label><font size="2" face="vardana" color="green"> (Optional)</font>
                                    <input type="text" name="eduCusAddress" id="eduCusAddress" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Customer Email</label><font size="2" face="vardana" color="green"> (Optional)</font>
                                    <input type="text" name="eduCusEmail" id="eduCusEmail" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Customer Home Number</label><font size="2" face="vardana" color="green"> (Optional)</font>
                                    <input type="number" name="eduCusHomeNum" id="eduCusHomeNum" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Customer Mobile Number </label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="number" name="eduCusMobNum" id="eduCusMobNum" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Province</label><font size="2" face="vardana" color="green"> (Optional)</font>
                                    <input type="text" name="eduProvince" id="eduProvince" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>District</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="text" name="eduDistrict" id=eduDistrict"" class="form-control">
                                </div>
                                 <div class="form-group">
                                    <label>Home Town</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="text" name="eduHomeTown" id="eduHomeTown" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                 {{csrf_field()}}
                                
                                <div class="form-group">
                                    <label>Ad Description</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="text" name="eduDescripton" id="eduDescripton" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Ad Title</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="text" name="eduTitle" id="eduTitle" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Banner Type</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <select class="form-control input-sm dynamic" name="eduBanner" id="eduBanner">
                                    <option value="">---Select Banner Type---</option>
                                    @foreach($banners as $banner)
                                      <option value="{{$banner->id}}">{{$banner->type_name}}</option>
                                    @endforeach
                                </select>
                                </div>

                                <div class="form-group">
                                    <label>Suitable Education Methods</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <div id="eduSub1"></div>
                                </div>

                                <div class="form-group">
                                    <label>Medium</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="text" name="eduMedium" id="eduMedium" class="form-control">
                                </div>
                                 <div class="form-group">
                                    <label>Class Type</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="text" name="eduClassType" id="eduClassType" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Locations</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="text" name="eduLocation" id="eduLocation" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Targeted Exams</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="text" name="eduExam" id="eduExam" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Targeted Subjects</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="text" name="eduSubject" id="eduSubject" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <span id="eduform_output"></span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="edubutton_action" id="edubutton_action" value="insert">
                        <input type="hidden" name="eduCategory" id="eduCategory">
                        <input type="submit" name="submit" id="eduaction" value="Add" class="btn btn-info">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div> 

<div id="vehicleModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form method="post" id="vehicle_form">
                    <div class="modal-header">
                        <h4 class="modal-title" id="vehicle_detail">Vehicle Category Details</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                
                                <div class="form-group">
                                    <label>Customer name</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="text" name="vehicleCusName" id="vehicleCusName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Customer Address</label><font size="2" face="vardana" color="green"> (Optional)</font>
                                    <input type="text" name="vehicleCusAddress" id="vehicleCusAddress" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Customer Email</label><font size="2" face="vardana" color="green"> (Optional)</font>
                                    <input type="text" name="vehicleCusEmail" id="vehicleCusEmail" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Customer Home Number</label><font size="2" face="vardana" color="green"> (Optional)</font>
                                    <input type="number" name="vehicleCusHomeNum" id="vehicleCusHomeNum" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Customer Mobile Number </label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="number" name="vehicleCusMobNum" id="vehicleCusMobNum" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Province</label><font size="2" face="vardana" color="green"> (Optional)</font>
                                    <input type="text" name="vehicleProvince" id="vehicleProvince" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>District</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="text" name="vehicleDistrict" id=vehicleDistrict"" class="form-control">
                                </div>
                                 <div class="form-group">
                                    <label>Home Town</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="text" name="vehicleHomeTown" id="vehicleHomeTown" class="form-control">
                                </div>
                                 <div class="form-group">
                                    <label>Ad Description</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="text" name="vehicleDescripton" id="vehicleDescripton" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Ad Title</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="text" name="vehicleTitle" id="vehicleTitle" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                 {{csrf_field()}}
                                <div class="form-group">
                                    <label>Banner Type</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <select class="form-control input-sm dynamic" name="vehicleBanner" id="vehicleBanner">
                                    <option value="">---Select Banner Type---</option>
                                    @foreach($banners as $banner)
                                      <option value="{{$banner->id}}">{{$banner->type_name}}</option>
                                    @endforeach
                                </select>
                                </div>

                                <div class="form-group">
                                    <label>Vehicle Category</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <div id="vehicleSub1"></div>
                                </div>

                                {{-- <div class="form-group">
                                    <label>Vehicle Type</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="text" name="vehicleType" id="vehicleType" class="form-control">
                                </div> --}}
                                 <div class="form-group">
                                    <label>Vehicle Colour</label><font size="2" face="vardana" color="green"> (Optional)</font>
                                    <input type="text" name="vehicleColor" id="vehicleColor" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Engine Capacity</label><font size="2" face="vardana" color="green"> (Optional)</font>
                                    <input type="text" name="vehicleEngcapacity" id="vehicleEngcapacity" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Body Type</label><font size="2" face="vardana" color="green"> (Optional)</font>
                                    <input type="text" name="vehicleBodyType" id="vehicleBodyType" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Model</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="text" name="vehicleModel" id="vehicleModel" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Model Year</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="text" name="vehicleModelYear" id="vehicleModelYear" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Transmision</label><font size="2" face="vardana" color="green"> (Optional)</font>
                                    <input type="text" name="vehicleTransmision" id="vehicleTransmision" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Milage</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="text" name="vehicleMilage" id="vehicleMilage" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Condition</label><font size="2" face="vardana" color="green"> (Optional)</font>
                                    <input type="text" name="vehicleCondition" id="vehicleCondition" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <span id="vehicleform_output"></span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="vehiclebutton_action" id="vehiclebutton_action" value="insert">
                        <input type="hidden" name="vehicleCategory" id="vehicleCategory">
                        <input type="submit" name="submit" id="vehicleaction" value="Add" class="btn btn-info">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<div id="jobModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form method="post" id="job_form">
                    <div class="modal-header">
                        <h4 class="modal-title" id="job_detail">Job Category Details</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                
                                <div class="form-group">
                                    <label>Customer name</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="text" name="jobCusName" id="jobCusName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Customer Address</label><font size="2" face="vardana" color="green"> (Optional)</font>
                                    <input type="text" name="jobCusAddress" id="jobCusAddress" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Customer Email</label><font size="2" face="vardana" color="green"> (Optional)</font>
                                    <input type="text" name="jobCusEmail" id="jobCusEmail" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Customer Home Number</label><font size="2" face="vardana" color="green"> (Optional)</font>
                                    <input type="number" name="jobCusHomeNum" id="jobCusHomeNum" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Customer Mobile Number </label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="number" name="jobCusMobNum" id="jobCusMobNum" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Province</label><font size="2" face="vardana" color="green"> (Optional)</font>
                                    <input type="text" name="jobProvince" id="jobProvince" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>District</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="text" name="jobDistrict" id=jobDistrict"" class="form-control">
                                </div>
                                 
                            </div>
                            <div class="col-md-6">
                                 {{csrf_field()}}
                                 <div class="form-group">
                                    <label>Home Town</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="text" name="jobHomeTown" id="jobHomeTown" class="form-control">
                                </div>
                                 <div class="form-group">
                                    <label>Ad Description</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="text" name="jobDescripton" id="jobDescripton" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Ad Title</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="text" name="jobTitle" id="jobTitle" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Banner Type</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <select class="form-control input-sm dynamic" name="jobBanner" id="jobBanner">
                                    <option value="">---Select Banner Type---</option>
                                    @foreach($banners as $banner)
                                      <option value="{{$banner->id}}">{{$banner->type_name}}</option>
                                    @endforeach
                                </select>
                                </div>

                                 <div class="form-group">
                                    <label>Job Category</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <div id="jobSub1"></div>
                                </div>

                                <div class="form-group">
                                    <label>Company Name</label><font size="2" face="vardana" color="green"> (Optional)</font>
                                    <input type="text" name="jobCompanyName" id="jobCompanyName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Job Title</label><font size="2" face="vardana" color="blue"> (Compulsory)</font>
                                    <input type="text" name="jobJobTitle" id="jobJobTitle" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Experiance</label><font size="2" face="vardana" color="green"> (Optional)</font>
                                    <input type="text" name="jobExperiance" id="jobExperiance" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <span id="jobform_output"></span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="jobbutton_action" id="vehiclebutton_action" value="insert">
                        <input type="hidden" name="jobCategory" id="jobCategory">
                        <input type="submit" name="submit" id="jobaction" value="Add" class="btn btn-info">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
