@extends('multiauth::layouts.layout')
@section('content')
<section class="content-header">
      <h1>
        Admin
        <small>view admins</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
</section>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <!-- {{ ucfirst(config('multiauth.prefix')) }} List -->
                    <!-- <span class="float-right" >
                        <a href="{{route('admin.register')}}" class="btn btn-sm btn-success">New {{ ucfirst(config('multiauth.prefix')) }}</a>
                    </span> -->
                </div>
                <div class="card-body">
    @include('multiauth::message')
                    <!-- <ul class="list-group">
                        @foreach ($admins as $admin)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $admin->name }}
                            <span class="badge">
                                    @foreach ($admin->roles as $role)
                                        <span class="badge-warning badge-pill ml-2">
                                            {{ $role->name }}
                                        </span> @endforeach
                            </span>
                            {{ $admin->active? 'Active' : 'Inactive' }}
                            <div class="float-right">
                                <a href="#" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $admin->id }}').submit();">Delete</a>
                                <form id="delete-form-{{ $admin->id }}" action="{{ route('admin.delete',[$admin->id]) }}" method="POST" style="display: none;">
                                    @csrf @method('delete')
                                </form>

                                <a href="{{route('admin.edit',[$admin->id])}}" class="btn btn-sm btn-primary mr-3">Edit</a>
                            </div>
                        </li>
                        @endforeach @if($admins->count()==0)
                        <p>No {{ config('multiauth.prefix') }} created Yet, only super {{ config('multiauth.prefix') }} is available.</p>
                        @endif
                    </ul> -->
                </div>
            </div>
        </div>
    </div>
</div>

<section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Admin List</h3>
              <span class="pull-right" > <a   href="{{route('admin.register')}}" class="btn btn-sm btn-success">New {{ ucfirst(config('multiauth.prefix')) }}</a></span>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-striped">
                <thead>
                  <th style="width: 300px">Name</th>
                  <th>Type</th>
                  <th>Status</th>
                  <th style="float:right">Actions</th>

                </thead>
                <tbody>
                @foreach ($admins as $admin)
                <tr>
                  <td>{{ $admin->name }}</td>
                  <td>  <span class="badge">
                                    @foreach ($admin->roles as $role)
                                        <span class="badge-warning badge-pill ml-2">
                                            {{ $role->name }}
                                        </span> @endforeach
                            </span></td>
                            <td>
                            {{ $admin->active? 'Active' : 'Inactive' }}
                            </td>
                  <td style="float:right">
                  <a href="#" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $admin->id }}').submit();">Delete</a>
                                <form id="delete-form-{{ $admin->id }}" action="{{ route('admin.delete',[$admin->id]) }}" method="POST" style="display: none;">
                                    @csrf @method('delete')
                                </form>
                                <a href="{{route('admin.edit',[$admin->id])}}" class="btn btn-warning">Edit</a>

                  </td>

                  @endforeach @if($admins->count()==0)
                        <p>No {{ config('multiauth.prefix') }} created Yet, only super {{ config('multiauth.prefix') }} is available.</p>
                        @endif
</tr>
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
    </section>

@endsection
