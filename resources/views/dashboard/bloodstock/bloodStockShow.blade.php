@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                <div class="card">
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i> Blood Bank</div>
                    <div class="card-body">
                    @foreach($stock as $stocks)
                        <form method="POST" action=""> @csrf<button class="btn btn-primary">{{ __('Logout') }}</button></form> 
                        <br>
                        <h4>Blood Type</h4>
                        <p> {{ $stocks->USER_BLOODTYPES }}</p>
                        <h4>Stock:</h4>
                        <p> {{ $stocks->STOCK }}</p>
                        
                        <a href="{{ route('bloodbank.index') }}" class="btn btn-block btn-primary">{{ __('Return') }}</a>
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