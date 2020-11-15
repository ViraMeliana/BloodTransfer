@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                <div class="card">
                @foreach($userdata as $user)
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i> Data User {{ $user->USER_USERNAME }}</div>
                    <div class="card-body">
                    
                        <form method="POST" enctype="multipart/form-data"  action="/userdata/{{ $user->ID_USER }}">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="userid" value="{{ $user->ID_USER }}">
                            <div class="form-group row">
                                <label>User ID</label>
                                <input class="form-control" type="number" placeholder="{{ $user->ID_USER }}" value="{{ $user->ID_USER }}" name="userid" required autofocus>
                            </div>
                            <div class="form-group row">
                                <label>Username</label>
                                <input class="form-control" type="text" placeholder="{{ $user->USER_USERNAME }}" value="{{ $user->USER_USERNAME }}" name="username" required autofocus>
                            </div>
                            <div class="form-group row">
                                <label>Password</label>
                                <input class="form-control" type="password" value="{{ $user->USER_PASSWORD }}" name="password" required autofocus>
                            </div>
                            <div class="form-group row">
                                <label>Name</label>
                                <input class="form-control" type="text" placeholder="{{ $user->USER_NAME }}" value="{{ $user->USER_NAME }}" name="name" required autofocus>
                            </div>
                            <div class="form-group row">
                                <label>Email</label>
                                <input class="form-control" type="email" placeholder="{{ $user->USER_EMAIL }}" value="{{ $user->USER_EMAIL }}" name="email" required autofocus>
                            </div>
                            <div class="form-group row">
                                <label>Birthdate</label>
                                <input class="form-control" type="date" placeholder="" value="{{ $user->BIRTH_DATE }}" name="birthdate" required autofocus>
                            </div>
                            <div class="form-group row">
                                <label>Age</label>
                                <input class="form-control" type="number" placeholder="{{ $user->AGE }}" value="{{ $user->AGE }}" name="age" required autofocus>
                            </div>
                            <div class="form-group row">
                                <label>Phone Number</label>
                                <input class="form-control" type="number" placeholder="{{ $user->USER_PHONE }}" value="{{ $user->USER_PHONE }}" name="phone" required autofocus number_format>
                            </div>
                            <div class="form-group row">
                                <label>Address</label>
                                <textarea class="form-control" id="textarea-input" name="address" rows="9" placeholder="{{ __('Address..') }}" required>{{ $user->USER_ADDRESS }}</textarea>
                            </div>
                            <div class="form-group row">
                                <label>NIK</label>
                                <input class="form-control" type="number" placeholder="{{ $user->NIK }}" value="{{ $user->NIK }}" name="nik" required autofocus number_format>
                            </div>
                            <div class="form-group row">
                                <label>Blood Type</label>
                                <select class="form-control" name="bloodtype">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                    <option value="O">O</option>
                                </select>
                            </div>

                            <div class="form-group row">
                                <label>Photo</label>
                                <input class="form-control" type="file" name="file" required autofocus >
                            </div>
                            <button class="btn btn-block btn-success" type="submit">{{ __('Add') }}</button>
                            <a href="{{ route('userdata.index') }}" class="btn btn-block btn-primary">{{ __('Return') }}</a> 
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