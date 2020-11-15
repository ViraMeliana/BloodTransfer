@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-6 col-md-5 col-lg-4 col-xl-3">
                <div class="card">
                @foreach($adminprofile as $admin)
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i> Profile Admin {{ $admin->ID_PROFILEADMIN }}</div>
                    <div class="card-body">
                        <h4>Profile Admin ID: </h4>
                        <p> {{ $admin->ID_PROFILEADMIN }}</p>
                        <h4>Admin ID:</h4>
                        <p> {{ $admin->ID_ADMIN }}</p>
                        <h4>Address: </h4>
                        <p> {{ $admin->ADMIN_ADDRESS }}</p>
                        <h4>Phone Number: </h4>
                        <p> {{ $admin->ADMIN_PHONE }}</p>
                        <h4>Region: }</h4>
                        <p> {{ $admin->ADMIN_REGION }}</p>
                        <h4>Latitude: </h4>
                        <p> {{ $admin->LATITUDE }}</p>
                        <h4>Longtitude: </h4>
                        <p> {{ $admin->LONGTITUDE }}</p>
                        <a href="{{ route('adminprofile.index') }}" class="btn btn-block btn-primary">{{ __('Return') }}</a>
                    </div>
                    @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection


@section('javascript')

@endsection