@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                <div class="card">
                    <div class="card-header">
                    <h4>Edit User Admin</h4></div>
                    <div class="card-body">
                        <form method="POST" action="/users/{{ $user->id }}">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" value="{{ $user->id }}">

                            <div class="form-group row">
                                <div class="col">   
                                    <label>Name</label>
                                    <input class="form-control" type="text" placeholder="{{ $user->name }}" value="{{ $user->name }}" name="name" required autofocus>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <div class="col">
                                    <label>Email</label>
                                    <input class="form-control" type="text" placeholder="{{ $user->email }}" value="{{ $user->email }}" name="email" required autofocus>
                                </div>
                            </div>

                            <button class="btn btn-block btn-success" type="submit">{{ __('Add') }}</button>
                            <a href="{{ route('users.index') }}" class="btn btn-block btn-primary">{{ __('Return') }}</a> 
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