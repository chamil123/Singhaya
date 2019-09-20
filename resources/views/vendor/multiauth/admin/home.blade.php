@extends('multiauth::layouts.layout') 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ ucfirst(config('multiauth.prefix')) }} Dashboard</div>

                <div class="card-body">
                @include('multiauth::message')
                     You are logged in to {{ config('multiauth.prefix') }} side!
                </div>
                <div>
                <ol>
                    <li>Customers</li>
                    @admin('super')<li>Suppliers</li>@endadmin
                    @admin('manager')<li>Stores</li>@endadmin
                    @admin('super','manager')<li>Payralls</li>@endadmin
                </ol>
            </div>
            </div>
            
        </div>
    </div>
</div>
@endsection