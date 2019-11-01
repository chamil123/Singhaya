<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- for Datatables -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.bootstrap.min.css"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/2.2.0/js/bootstrap.min.js"></script>

    <style>
    .modal {
         overflow-y: scroll;
    }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>



</body>


{{-- 
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
 --}}
<script>
    $(document).ready(function(){
        $('#agent_table').DataTable({
            "processing":true,
            "serverSide":true,
            "ajax": "{{ route('home.getdata') }}",
            "columns":[
                {"data":"ad_title"},
                {"data":"ad_cusName"},
                {"data":"type_name"},
                {"data":"status"},
                {"data":"updated_at"}
            ]
        });
        
       $('#add_data').click(function() {
        $category = $('#cats').val();
        if ($category == 1) {

            $.ajax({
            url: "{{ route('ajaxtypedata.homedata') }}",
            method: "GET",
            data: { "category": $category },
            dataType:"json",
            success: function(data){
                $("#homeSub1").empty();
               $.each(data, function(i, value){
               var $types = $('<input type="checkbox" name="homeSub[]" value="'+value.id+'" /> '+value.name+"<br />");
                 $("#homeSub1").append($types);
               });
            }
        })

             $('#houseModal').modal('show');
             $('#houseCategory').val($category);
        }else if($category == 2){  

            $.ajax({
            url: "{{ route('ajaxtypedata.restaurantdata') }}",
            method: "GET",
            data: { "category": $category },
            dataType:"json",
            success: function(data){
                $("#resSub1").empty();
               $.each(data, function(i, value){
               var $types = $('<input type="checkbox" name="resSub[]" value="'+value.id+'" /> '+value.name+"<br />");
                 $("#resSub1").append($types);
               });
            }
        })

             $('#resModal').modal('show');
             $('#resCategory').val($category);   
        }else if($category == 3){

            $.ajax({
            url: "{{ route('ajaxtypedata.landdata') }}",
            method: "GET",
            data: { "category": $category },
            dataType:"json",
            success: function(data){
                $("#landSub1").empty();
               $.each(data, function(i, value){
               var $types = $('<input type="checkbox" name="landSub[]" value="'+value.id+'" /> '+value.name+"<br />");
                 $("#landSub1").append($types);
               });
            }
        })

             $('#landModal').modal('show');
             $('#landCategory').val($category);
        }else if($category == 4){

            $.ajax({
            url: "{{ route('ajaxtypedata.edudata') }}",
            method: "GET",
            data: { "category": $category },
            dataType:"json",
            success: function(data){
                $("#eduSub1").empty();
               $.each(data, function(i, value){
               var $types = $('<input type="checkbox" name="eduSub[]" value="'+value.id+'" /> '+value.name+"<br />");
                 $("#eduSub1").append($types);
               });

            }
        })

             $('#eduModal').modal('show');
             $('#eduCategory').val($category);
        }else if($category == 7){

            $.ajax({
            url: "{{ route('ajaxtypedata.vehicledata') }}",
            method: "GET",
            data: { "category": $category },
            dataType:"json",
            success: function(data){
                $("#vehicleSub1").empty();
               $.each(data, function(i, value){
               var $types = $('<input type="checkbox" name="vehicleSub[]" value="'+value.id+'" /> '+value.name+"<br />");
                 $("#vehicleSub1").append($types);
               });
            }
        })

             $('#vehicleModal').modal('show');
             $('#vehicleCategory').val($category);
        }else if($category == 8){

            $.ajax({
            url: "{{ route('ajaxtypedata.jobdata') }}",
            method: "GET",
            data: { "category": $category },
            dataType:"json",
            success: function(data){
                $("#jobSub1").empty();
               $.each(data, function(i, value){
               var $types = $('<input type="checkbox" name="jobSub[]" value="'+value.id+'" /> '+value.name+"<br />");
                 $("#jobSub1").append($types);
               });
            }
        })

             $('#jobModal').modal('show');
             $('#jobCategory').val($category);
        }
          
           $('#house_form')[0].reset();
           $('#houseform_output').html('');
           $('#housebutton_action').val('insert');
           $('#houseaction').val('Add');

           $('#land_form')[0].reset();
           $('#landform_output').html('');
           $('#landbutton_action').val('insert');
           $('#landaction').val('Add');

            $('#res_form')[0].reset();
           $('#resform_output').html('');
           $('#resbutton_action').val('insert');
           $('#resaction').val('Add');

           // $('#edu_form')[0].reset();
           $('#eduform_output').html('');
           $('#edubutton_action').val('insert');
           $('#eduaction').val('Add');

           $('#vehicle_form')[0].reset();
           $('#vehicleform_output').html('');
           $('#vehiclebutton_action').val('insert');
           $('#vehicleaction').val('Add');

           $('#job_form')[0].reset();
           $('#jobform_output').html('');
           $('#jobbutton_action').val('insert');
           $('#jobaction').val('Add');

       }); 


       $('#house_form').on('submit', function(event){
        event.preventDefault();
        var form_data = $(this).serialize();
        $.ajax({
            url: "{{ route('ajaxdata.housedata') }}",
            method: "POST",
            data: form_data,
            dataType:"json",
            success: function(data){
                if (data.error.length > 0) {
                    var error_html = '';
                for (var count = 0; count < data.error.length; count++) {
                    error_html += '<div class="alert alert-danger"><strong>'+data.error[count]+'</strong></div>';
                }
                $('#houseform_output').html(error_html);
                } else {
                    $('#houseform_output').html(data.success);
                    $('#house_form')[0].reset();
                    $('#houseaction').val('Add');
                    $('#house_detail').text('House Category Details');
                    $('#housebutton_action').val('insert');
                    setTimeout(function() {$('#houseModal').modal('toggle');}, 3000);
                    $('#agent_table').DataTable().ajax.reload();
                }
            }
        })
       });

        $('#land_form').on('submit', function(event){
        event.preventDefault();
        var form_data = $(this).serialize();
        $.ajax({
            url: "{{ route('ajaxdata.landdata') }}",
            method: "POST",
            data: form_data,
            dataType:"json",
            success: function(data){
                if (data.error.length > 0) {
                    var error_html = '';
                for (var count = 0; count < data.error.length; count++) {
                    error_html += '<div class="alert alert-danger"><strong>'+data.error[count]+'</strong></div>';
                }
                $('#landform_output').html(error_html);
                } else {
                    $('#landform_output').html(data.success);
                    $('#land_form')[0].reset();
                    $('#landaction').val('Add');
                    $('#land_detail').text('Land Category Details');
                    $('#landbutton_action').val('insert');
                    setTimeout(function() {$('#landModal').modal('toggle');}, 4000);
                    $('#agent_table').DataTable().ajax.reload();
                }
            }
        })
       });

      $('#res_form').on('submit', function(event){
        event.preventDefault();
        var form_data = $(this).serialize();
        $.ajax({
            url: "{{ route('ajaxdata.resdata') }}",
            method: "POST",
            data: form_data,
            dataType:"json",
            success: function(data){
                if (data.error.length > 0) {
                    var error_html = '';
                for (var count = 0; count < data.error.length; count++) {
                    error_html += '<div class="alert alert-danger"><strong>'+data.error[count]+'</strong></div>';
                }
                $('#resform_output').html(error_html);
                } else {
                    $('#resform_output').html(data.success);
                    $('#res_form')[0].reset();
                    $('#resaction').val('Add');
                    $('#res_detail').text('Land Category Details');
                    $('#resbutton_action').val('insert');
                    setTimeout(function() {$('#resModal').modal('toggle');}, 4000);
                    $('#agent_table').DataTable().ajax.reload();
                }
            }
        })
       });

       $('#edu_form').on('submit', function(event){
        event.preventDefault();
        var form_data = $(this).serialize();
        $.ajax({
            url: "{{ route('ajaxdata.edudata') }}",
            method: "POST",
            data: form_data,
            dataType:"json",
            success: function(data){
                if (data.error.length > 0) {
                    var error_html = '';
                for (var count = 0; count < data.error.length; count++) {
                    error_html += '<div class="alert alert-danger"><strong>'+data.error[count]+'</strong></div>';
                }
                $('#eduform_output').html(error_html);
                } else {
                    $('#eduform_output').html(data.success);
                    $('#edu_form')[0].reset();
                    $('#eduaction').val('Add');
                    $('#edu_detail').text('Education Category Details');
                    $('#edubutton_action').val('insert');
                    setTimeout(function() {$('#eduModal').modal('toggle');}, 4000);
                    $('#agent_table').DataTable().ajax.reload();
                }
            }
        })
       });  

       $('#vehicle_form').on('submit', function(event){
        event.preventDefault();
        var form_data = $(this).serialize();
        $.ajax({
            url: "{{ route('ajaxdata.vehicledata') }}",
            method: "POST",
            data: form_data,
            dataType:"json",
            success: function(data){
                if (data.error.length > 0) {
                    var error_html = '';
                for (var count = 0; count < data.error.length; count++) {
                    error_html += '<div class="alert alert-danger"><strong>'+data.error[count]+'</strong></div>';
                }
                $('#vehicleform_output').html(error_html);
                } else {
                    $('#vehicleform_output').html(data.success);
                    $('#vehicle_form')[0].reset();
                    $('#vehicleaction').val('Add');
                    $('#vehicle_detail').text('Vehicle Category Details');
                    $('#vehiclebutton_action').val('insert');
                    setTimeout(function() {$('#vehicleModal').modal('toggle');}, 4000);
                    $('#agent_table').DataTable().ajax.reload();
                }
            }
        })
       }); 

       $('#job_form').on('submit', function(event){
        event.preventDefault();
        var form_data = $(this).serialize();
        $.ajax({
            url: "{{ route('ajaxdata.jobdata') }}",
            method: "POST",
            data: form_data,
            dataType:"json",
            success: function(data){
                if (data.error.length > 0) {
                    var error_html = '';
                for (var count = 0; count < data.error.length; count++) {
                    error_html += '<div class="alert alert-danger"><strong>'+data.error[count]+'</strong></div>';
                }
                $('#jobform_output').html(error_html);
                } else {
                    $('#jobform_output').html(data.success);
                    $('#job_form')[0].reset();
                    $('#jobaction').val('Add');
                    $('#job_detail').text('Job Category Details');
                    $('#jobbutton_action').val('insert');
                    setTimeout(function() {$('#jobModal').modal('toggle');}, 4000);
                    $('#agent_table').DataTable().ajax.reload();
                }
            }
        })
       }); 

    });
</script> 
</html>
