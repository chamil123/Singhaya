@extends('multiauth::layouts.layout') 
@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit this Role</div>

                <div class="card-body">
                    <form action="{{ route('admin.role.update', $role->id) }}" method="post">
                        @csrf @method('patch')
                        <div class="form-group">
                            <label for="role">Role Name</label>
                            <input type="text" value="{{ $role->name }}" name="name" class="form-control" id="role">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Change</button>
                        <a href="{{ route('admin.roles') }}" class="btn btn-danger btn-sm float-right">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->


<section class="content-header">
      <h1>
        Admin 
        <small>Edit this Role</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
</section>


<section class="content">
@include('multiauth::message')
                    <form method="POST" action="{{ route('admin.role.update', $role->id) }}">
                    @csrf @method('patch')
      <div class="row">
        <!-- left column -->
      
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <!-- <h3 class="box-title">Quick Example</h3> -->
            </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Role Name</label>
                  <input id="name" type="text" class="form-control " value="{{ $role->name }}" name="name"
                  id="role">
                </div>

              </div>
            
          </div>

        </div>

    
  
      </div>
      <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary ">
                                Change
                                </button>

                                <a href="{{ route('admin.roles') }}" class="btn btn-danger  float-right">Back</a>
                            </div>
                        </div>
</form>
      <!-- /.row -->
    </section>


@endsection