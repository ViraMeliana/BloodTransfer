@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                <div class="card">
                @foreach($adminprofile as $admin)
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i> Profile Admin {{ $admin->ID_PROFILEADMIN }}</div>
                    <div class="card-body">
                    
                        <form method="POST" enctype="multipart/form-data"  action="/adminprofile/{{ $admin->ID_PROFILEADMIN }}">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="profileadminid" value="{{ $admin->ID_PROFILEADMIN }}">
                            <div class="form-group row">
                                <label>Profile Admin ID</label>
                                <input class="form-control" type="number" placeholder="{{ $admin->ID_PROFILEADMIN }}" value="{{ $admin->ID_PROFILEADMIN }}" name="profileadminid" required autofocus>
                            </div>
                            <div class="form-group row">
                                <label>Admin ID</label>
                                <input class="form-control" type="number" placeholder="{{ $admin->ID_ADMIN }}" value="{{ $admin->ID_ADMIN }}" name="adminid" required autofocus>
                            </div>
                            <div class="form-group row">
                                <label>Address</label>
                                <input class="form-control" type="text" placeholder="{{ $admin->ADMIN_ADDRESS }}" value="{{ $admin->ADMIN_ADDRESS }}" name="address" required autofocus>
                            </div>
                            <div class="form-group row">
                                <label>Phone Number</label>
                                <input class="form-control" type="text" placeholder="{{ $admin->ADMIN_PHONE }}" value="{{ $admin->ADMIN_PHONE }}" name="phone" required autofocus>
                            </div>
                            <div class="form-group row">
                                <label>Region</label>
                                <input class="form-control" type="text" placeholder="{{ $admin->ADMIN_REGION }}" value="{{ $admin->ADMIN_REGION }}" name="region" required autofocus>
                            </div>
                            <div class="form-group row">
                                <label>Latitude</label>
                                <input class="form-control" type="text" placeholder="{{ $admin->LATITUDE }}" value="{{ $admin->LATITUDE }}" name="latitude" required autofocus>
                            </div>
                            <div class="form-group row">
                                <label>Longtitude</label>
                                <input class="form-control" type="text" placeholder="{{ $admin->LONGTITUDE }}" value="{{ $admin->LONGTITUDE }}" name="longtitude" required autofocus>
                            </div>
                            <button class="btn btn-block btn-success" type="submit">{{ __('Add') }}</button>
                            <a href="{{ route('adminprofile.index') }}" class="btn btn-block btn-primary">{{ __('Return') }}</a> 
                        </form>
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