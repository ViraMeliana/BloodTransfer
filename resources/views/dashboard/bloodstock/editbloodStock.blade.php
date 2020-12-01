@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                <div class="card">
                    <div class="card-header">
                    <h4>Edit Blood Stock</h4></div>
                    <div class="card-body">
                    @foreach($stock as $stocks)
                    <form method="POST" action="/bloodbank/{{ $stocks->ID_BLOOD }}">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" value="{{ $stocks->ID_BLOOD }}">
                            <div class="form-group row">
                                <div class="col">
                                    <label>Blood Type</label>
                                    <select class="form-control" name="bloodtype">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                    <option value="O">O</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <label>Stock</label>
                                    <input class="form-control" type="text" placeholder="Stock" name="stock" value="{{ $stocks->STOCK }}" required autofocus>
                                </div>
                            </div>
                            
                            <button class="btn btn-block btn-success" type="submit">{{ __('Save') }}</button>
                            <a href="{{ route('bloodbank.index') }}" class="btn btn-block btn-primary">{{ __('Return') }}</a> 
                        </form>
                        @endforeach
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection

@section('javascript')

@endsection