@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                <div class="card">
                @foreach($userdata as $user)
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i> Data User {{ $user->USER_USERNAME }} </div>
                    <div class="card-body">
                    
                        <form method="POST" action=""> @csrf<button class="btn btn-primary">{{ __('Logout') }}</button></form> 
                        <br>
                        <h4>User ID:</h4>
                        <p> {{ $user->ID_USER }}</p>
                        <h4>Username:</h4>
                        <p> {{ $user->USER_USERNAME }}</p>
                        <h4>Password:</h4>
                        <p> {{ $user->USER_PASSWORD }}</p>
                        <h4>Name:</h4>
                        <p> {{ $user->USER_NAME }}</p>
                        <h4>Email:</h4>
                        <p> {{ $user->USER_EMAIL }}</p>
                        <h4>Age:</h4>
                        <p> {{ $user->AGE }}</p>
                        <h4>Phone Number:</h4>
                        <p> {{ $user->USER_PHONE }}</p>
                        <h4>Address:</h4>
                        <p> {{ $user->USER_ADDRESS }}</p>
                        <h4>NIK:</h4>
                        <p> {{ $user->NIK }}</p>
                        <h4>Blood Types:</h4>
                        <p> {{ $user->USER_BLOODTYPES }}</p>
                        <h4>Photo:</h4>
                        <p> {{ $user->PHOTO }}</p>
                        <a href="{{ route('userdata.index') }}" class="btn btn-block btn-primary">{{ __('Return') }}</a>
                        
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