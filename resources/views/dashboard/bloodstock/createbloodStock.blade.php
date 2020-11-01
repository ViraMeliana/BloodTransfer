@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                <div class="card">
                    <div class="card-header">
                      <!-- <i class="fa fa-align-justify"></i> {{ __('Create Note') }}</div> -->
                      <i class="fa fa-align-justify"></i></div>
                    <div class="card-body">
                        <form method="POST" action="">
                            <!-- @csrf -->
                            <div class="form-group row">
                                <label>Stock</label>
                                <input class="form-control" type="text" placeholder="" name="admin" required autofocus>
                            </div>
                            <div class="form-group row">
                                <label>Blood Type</label>
                                <input class="form-control" type="text" placeholder="" name="bloodType" required autofocus>
                            </div>

                            <div class="form-group row">
                                <label>Stock</label>
                                <input class="form-control" type="text" placeholder="" name="stock" required autofocus>
                            </div>

 
                            <button class="btn btn-block btn-success" type="submit">{{ __('Add') }}</button>
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