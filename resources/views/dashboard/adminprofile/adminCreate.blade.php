@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                <div class="card">
                    <div class="card-header">
                    <h4>Add Admin Profile</h4></div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('adminprofile.store') }}">
                            @csrf
                            <div class="form-group row" >
                                <div class="col">
                                    <label >Profile Admin ID</label>
                                    <input class="form-control" type="number" placeholder="" name="profileadminid" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col">
                                    <label>Admin ID</label>
                                    <input class="form-control" type="number" placeholder="" name="adminid" required autofocus >
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col">
                                    <label>Address</label>
                                    <input class="form-control" type="text" placeholder="" name="address" required autofocus >
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col">
                                    <label>Phone Number</label>
                                    <input class="form-control" type="text" placeholder="" name="phone" required autofocus >
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col">
                                    <label>Region</label>
                                    <input class="form-control" type="text" placeholder="" name="region" required autofocus >
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col">
                                    <label>Latitude</label>
                                    <input class="form-control" type="text" placeholder="" name="latitude" required autofocus >
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col">
                                    <label>Longtitude</label>
                                    <input class="form-control" type="text" placeholder="" name="longtitude" required autofocus >
                                </div>
                            </div>
                            
                            <button class="btn btn-block btn-success" type="submit">{{ __('Add') }}</button>
                            <a href="{{ route('adminprofile.index') }}" class="btn btn-block btn-primary">{{ __('Return') }}</a> 
                        </form>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection

@section('javascript')

@endsection