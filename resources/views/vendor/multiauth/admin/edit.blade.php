

@extends('multiauth::layouts.layout') 
@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
       
            <div class="card">
                <div class="card-header">Edit details of {{$admin->name}}</div>
                
                <div class="card-body">
                @include('multiauth::message')
                    <form action="{{route('admin.update',[$admin->id])}}" method="post">
                        @csrf @method('patch')
                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">Name</label>
                            <input type="text" value="{{ $admin->name }}" name="name" class="form-control col-md-6" id="role">
                        </div>

                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">Email</label>
                            <input type="text" value="{{ $admin->email }}" name="email" class="form-control col-md-6" id="role">
                        </div>
                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">Phone</label>
                            <input type="number" value="{{ $admin->phone }}" name="phone" class="form-control col-md-6" id="role">
                        </div>

                        <div class="form-group row">
                            <label for="role_id" class="col-md-4 col-form-label text-md-right">Assign Role</label>

                            <select name="role_id[]" id="role_id" class="form-control col-md-6 {{ $errors->has('role_id') ? ' is-invalid' : '' }}" multiple>
                                <option selected disabled>Select Role</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}" 
                                        @if (in_array($role->id,$admin->roles->pluck('id')->toArray())) 
                                            selected 
                                        @endif >{{ $role->name }}
                                    </option>
                                @endforeach
                            </select> 

                            @if ($errors->has('role_id'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('role_id') }}</strong>
                                </span> 
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="active" class="col-md-4 col-form-label text-md-right">Active</label>
                            <input type="checkbox" value="1" {{ $admin->active ? 'checked':'' }} name="activation" class="form-control col-md-6" id="active">
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-sm btn-primary">
                                    Change
                                </button>
                                <a href="{{ route('admin.show') }}" class="btn btn-danger btn-sm float-right">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->

<section class="content-header">
      <h1>
        Admin 
        <small>Edit details of {{$admin->name}}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
</section>




<section class="content">
@include('multiauth::message')
                    <form method="POST" action="{{route('admin.update',[$admin->id])}}">
                    @csrf @method('patch')
      <div class="row">
        <!-- left column -->
      
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <!-- <h3 class="box-title">Quick Example</h3> -->
            </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input id="name" type="text" class="form-control" placeholder="Name" name="name" value="{{ $admin->name }}"
                                    required autofocus id="role">
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} ">
                  <label for="exampleInputPassword1">E-Mail Address</label>
                  <input id="email" type="email" class="form-control" name="email" value="{{ $admin->email }}"
                                    required placeholder="Email" id="role">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Phone</label>
                  <input id="phone" type="text" class="form-control" name="phone" value="{{ $admin->phone }}"
                                    required placeholder="Phone" id="role">
                </div>
               
              </div>
             
          </div>

        </div>

        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-info">
            <div class="box-header with-border">
              <!-- <h3 class="box-title">Quick Example</h3> -->
            </div>

            <!-- form start -->
            <!-- <form role="form"> -->
              <div class="box-body">
                
                <div class="form-group ">
                <label for="active" style="padding-right:10px" >Active :</label>
              
                            <input type="checkbox" value="1" {{ $admin->active ? 'checked':'' }} name="activation"  id="active">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Role</label>
                <select name="role_id[]" id="role_id" class="form-control col-md-6 {{ $errors->has('role_id') ? ' is-invalid' : '' }}" >
                                <option selected disabled>Select Role</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}" 
                                        @if (in_array($role->id,$admin->roles->pluck('id')->toArray())) 
                                            selected 
                                        @endif >{{ $role->name }}
                                    </option>
                                @endforeach
                            </select> 
                            @if ($errors->has('role_id'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('role_id') }}</strong>
                                </span> 
                            @endif
                </div>
               
              </div>
          
          </div>

        </div>
  
      </div>
      <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary ">
                                    Update
                                </button>

                                <a href="{{ route('admin.show') }}" class="btn btn-danger btn-sm float-right">Back</a>
                            </div>
                        </div>
</form>
      <!-- /.row -->
    </section>
@endsection
