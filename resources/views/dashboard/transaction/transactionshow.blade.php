@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                <div class="card">
                @foreach($transaction as $trans)
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i> Data Transaction {{ $trans->ID_TRANS }} </div>
                    <div class="card-body">
                    
                        <form method="POST" action=""> @csrf<button class="btn btn-primary">{{ __('Logout') }}</button></form> 
                        <br>
                        <h4>Transaction ID:</h4>
                        <p> {{ $trans->ID_TRANS  }}</p>
                        <h4>Blood ID:</h4>
                        <p> {{ $trans->ID_BLOOD }}</p>
                        <h4>User ID:</h4>
                        <p> {{ $trans->ID_USER }}</p>
                        <h4>Category:</h4>
                        <p> {{ $trans->CATEGORY }}</p>
                        <h4>Health Document:</h4>
                        <p> {{ $trans->HEALTH_DOC }}</p>
                        <h4>Statement:</h4>
                        <p> {{ $trans->STATEMENT }}</p>
                        <h4>Status:</h4>
                        <p> {{ $trans->STATUS }}</p>
                        <h4>Date:</h4>
                        <p> {{ $trans->DATE }}</p>
                        <h4>Identity Card:</h4>
                        <p> {{ $trans->IDENTITY_CARD }}</p>
                        
                        <a href="{{ route('transaction.index') }}" class="btn btn-block btn-primary">{{ __('Return') }}</a>
                        
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