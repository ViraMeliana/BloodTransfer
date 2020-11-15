@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-6 col-md-5 col-lg-4 col-xl-3">
                <div class="card">
                @foreach($feedback as $fb)
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i> Feedback {{ $fb->ID_FEEDBACK }}</div>
                    <div class="card-body">
                        <h4>Feedback ID: </h4>
                        <p> {{ $fb->ID_FEEDBACK }}</p>
                        <h4>User ID: </h4>
                        <p> {{ $fb->ID_USER }}</p>
                        <h4>Admin ID:</h4>
                        <p> {{ $fb->ID_ADMIN }}</p>
                        <h4>Date: </h4>
                        <p> {{ $fb->DATE }}}</p>
                        <h4>Comment: </h4>
                        <p> {{ $fb->COMMENT }}</p>
                        <a href="{{ route('feedback.index') }}" class="btn btn-block btn-primary">{{ __('Return') }}</a>
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