@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                <div class="card">
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i> {{ __('Add User') }}</div>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data" action="{{ route('datauser.store') }}">
                            @csrf
                            <div class="form-group row">
                                <label>Username</label>
                                <input class="form-control" type="text" placeholder="" name="username" required autofocus>
                            </div>
                            <div class="form-group row">
                                <label>Password</label>
                                <input class="form-control" type="password" placeholder="" name="password" required autofocus>
                            </div>
                            <div class="form-group row">
                                <label>Name</label>
                                <input class="form-control" type="text" placeholder="" name="name" required autofocus>
                            </div>
                            <div class="form-group row">
                                <label>Email</label>
                                <input class="form-control" type="email" placeholder="" name="email" required autofocus>
                            </div>
                            <div class="form-group row">
                                <label>Birthdate</label>
                                <input class="form-control" type="date" placeholder="" name="birthdate" required autofocus>
                            </div>
                            <div class="form-group row">
                                <label>Age</label>
                                <input class="form-control" type="number" placeholder="" name="age" required autofocus>
                            </div>
                            <div class="form-group row">
                                <label>Phone Number</label>
                                <input class="form-control" type="number" placeholder="" name="phone" required autofocus number_format>
                            </div>
                            <div class="form-group row">
                                <label>Address</label>
                                <textarea class="form-control" id="textarea-input" name="address" rows="9" placeholder="{{ __('Address..') }}" required></textarea>
                            </div>
                            <div class="form-group row">
                                <label>NIK</label>
                                <input class="form-control" type="number" placeholder="" name="nik" required autofocus number_format>
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
                            <a href="{{ route('datauser.index') }}" class="btn btn-block btn-primary">{{ __('Return') }}</a> 
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