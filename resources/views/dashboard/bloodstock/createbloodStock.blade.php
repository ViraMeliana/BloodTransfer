@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                <div class="card">
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i> {{ __('Add Stock') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('bloodbank.store') }}">
                            @csrf
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
                                <label>Stock</label>
                                <input class="form-control" type="text" placeholder="" name="stock" required autofocus number_format>
                            </div>
                            <button class="btn btn-block btn-success" type="submit">{{ __('Add') }}</button>
                            <a href="{{ route('bloodbank.index') }}" class="btn btn-block btn-primary">{{ __('Return') }}</a> 
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