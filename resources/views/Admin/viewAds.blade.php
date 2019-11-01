@extends('multiauth::layouts.layout') 
@section('content')

<section class="content">

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>image</th>
                                <th style="width: 200px">Product Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>PV value</th>
                                <th>Category</th>
                                <th style="width: 230px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($AdsVals as $ad)
                            <tr>
                                <td> <img src="" width="90px"></td>
                                <td> {{$ad->ad_id}}</td>
                                <td>{{$ad->ad_cusName}}</td>
                                <td>{{$ad->ad_address}}</td>
                                <td>{{$ad->ad_email}}</td>
                                <td>{{$ad->ad_nic}}</td>
                                <td style="width: 240px">
                                    <button id="viewbtn" onclick="abc({{$ad->id}});"type="button" class="  btn btn-default btn-sm " >
                                        <i class="glyphicon glyphicon-edit"></i> view</button>

                                    <a href=""  style="color: white">  <button type="button" class="btn btn-warning btn-sm ">
                                            <i class="glyphicon glyphicon-edit"></i> update</button>
                                    </a>
                                    <a href=""  style="color: white">  <button type="button" class="btn btn-danger btn-sm ">
                                             Confirmed </button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                       
                </div>
            </div>
        </div>
    </div> 
</section>




@endsection

