@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                <div class="card">
                    <div class="card-header">
                    <h4>Add Feedback</h4></div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('feedback.store') }}">
                            @csrf

                            <div class="form-group row">
                              <div class="col">
                                <label>User ID</label>
                                <input class="form-control" type="number" placeholder="" name="userid" required autofocus >
                              </div>
                            </div>

                            <div class="form-group row">
                              <div class="col">
                                <label>Admin ID</label>
                                <input class="form-control" type="number" placeholder="" name="adminid" required autofocus >
                              </div>
                            </div>

                            <div class="form-group row">
                              <div class="col">
                                <label>Date</label>
                                <input class="form-control" type="date" placeholder="" name="date" required autofocus >
                              </div>
                            </div>

                            <div class="form-group row">
                              <div class="col">
                                <label>Comment</label>
                                <input class="form-control" type="text" placeholder="" name="comment" required autofocus >
                              </div>
                            </div>

                            <button class="btn btn-block btn-success" type="submit">{{ __('Add') }}</button>
                            <a href="{{ route('feedback.index') }}" class="btn btn-block btn-primary">{{ __('Return') }}</a> 
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