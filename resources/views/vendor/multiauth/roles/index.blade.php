@extends('multiauth::layouts.layout') 
@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info text-white">
                    Rolesss
                    <span class="float-right">
                        <a href="{{ route('admin.role.create') }}" class="btn btn-sm btn-success">New Role</a>
                    </span>
                </div>

                <div class="card-body">
    @include('multiauth::message')
                    <ol class="list-group">
                        @foreach ($roles as $role)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $role->name }}
                            <span class="badge badge-primary badge-pill">{{ $role->admins->count() }} {{ ucfirst(config('multiauth.prefix')) }}</span>
                            <div class="float-right">
                                <a href="" class="btn btn-sm btn-secondary mr-3" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $role->id }}').submit();">Delete</a>
                                <form id="delete-form-{{ $role->id }}" action="{{ route('admin.role.delete',$role->id) }}" method="POST" style="display: none;">
                                    @csrf @method('delete')
                                </form>

                                <a href="{{ route('admin.role.edit',$role->id) }}" class="btn btn-sm btn-primary mr-3">Edit</a>
                            </div>
                        </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div> -->


<section class="content-header">
      <h1>
        Role
        <small>view roles</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
</section>

<section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title"> Roles</h3>
              <span class="pull-right" > <a   href="{{ route('admin.role.create') }}" class="btn btn-sm btn-success">New Role</a></span>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            @include('multiauth::message')
              <table class="table table-striped">
                <thead>
                  <th style="width: 300px">Name</th>
                  <th>Type</th>
                  <!-- <th>Status</th> -->
                  <th style="float:right">Actions</th>

                </thead>
                <tbody>
                @foreach ($roles as $role)
                    <tr>
                        <td> {{ $role->name }}</td>
                        <td> <span class="badge badge-primary badge-pill">{{ $role->admins->count() }} {{ ucfirst(config('multiauth.prefix')) }}</span></td>
                        <td style="float:right">  <a href="" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $role->id }}').submit();">Delete</a>
                                <form id="delete-form-{{ $role->id }}" action="{{ route('admin.role.delete',$role->id) }}" method="POST" style="display: none;">
                                    @csrf @method('delete')
                                </form>

                                <a href="{{ route('admin.role.edit',$role->id) }}" class="btn btn-warning">Edit</a></td>
               
</tr>
@endforeach
                </tbody>



              </table>
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->


          <!-- /.box -->
        </div>
        <!-- /.col -->


      </div>
    </section>v
@endsection