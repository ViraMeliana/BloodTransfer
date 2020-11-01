@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                <div class="card">
                    <div class="card-header">
                      <!-- <i class="fa fa-align-justify"></i> Note: {{ $note->title }}</div> -->
                      <i class="fa fa-align-justify"></i> Admin Profile</div>
                    <div class="card-body">
                        <form method="POST" action=""> @csrf<button class="btn btn-primary">{{ __('Logout') }}</button></form> 
                        <br>
                        <h4>Admin Name</h4>
                        <p> </p>
                        <h4>Region</h4>
                        <p> </p>
                        <h4>Phone/Telephone</h4>
                        <p> </p>
                        <h4>Address</h4>
                        <p> </p>
                        
                        <a href="{{ route('notes.index') }}" class="btn btn-block btn-primary">{{ __('Return') }}</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection


@section('javascript')

@endsection