@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                <div class="card">
                    <div class="card-header">
                      <!-- <i class="fa fa-align-justify"></i> {{ __('Edit') }}: {{ $note->title }}</div> -->
                      <i class="fa fa-align-justify"></i> Edit</div>
                    <div class="card-body">
                        <form method="POST" action="/notes/{{ $note->id }}">
                            <!-- @csrf -->
                            @method('PUT')
                            <div class="form-group row">
                                <div class="col">
                                    <label>Admin</label>
                                    <input class="form-control" type="text" placeholder="" name="admin" value="" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <label>Region</label>
                                    <input class="form-control" type="text" placeholder="" name="bloodtype" value="" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <label>Phone/Telephone</label>
                                    <input class="form-control" type="text" placeholder="" name="bloodtype" value="" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <label>Address</label>
                                    <input class="form-control" type="text" placeholder="" name="bloodtype" value="" required autofocus>
                                </div>
                            </div>
                            
                            <button class="btn btn-block btn-success" type="submit">{{ __('Save') }}</button>
                            <a href="{{ route('notes.index') }}" class="btn btn-block btn-primary">{{ __('Return') }}</a> 
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