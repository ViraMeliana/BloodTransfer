@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                <div class="card">
                    <div class="card-header">
                    <h4>Edit Feedback</h4></div>
                    <div class="card-body">
                    @foreach($feedback as $fb)
                        <form method="POST" enctype="multipart/form-data"  action="/feedback/{{ $fb->ID_FEEDBACK }}">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="feedbackid" value="{{ $fb->ID_FEEDBACK }}">
                            <div class="form-group row">
                              <div class="col">
                                <label>User ID</label>
                                <input class="form-control" type="number" placeholder="{{ $fb->ID_USER }}" value="{{ $fb->ID_USER }}" name="userid" required autofocus>
                              </div>
                            </div>
                            <div class="form-group row">
                              <div class="col">
                                <label>Admin ID</label>
                                <input class="form-control" type="number" placeholder="{{ $fb->ID_ADMIN }}" value="{{ $fb->ID_ADMIN }}" name="adminid" required autofocus>
                              </div>
                            </div>
                            <div class="form-group row">
                              <div class="col">
                                <label>Date</label>
                                <input class="form-control" type="date" placeholder="{{ $fb->DATE }}" value="{{ $fb->DATE }}" name="date" required autofocus>
                              </div>
                            </div>
                            <div class="form-group row">
                              <div class="col">
                                <label>Comment</label>
                                <input class="form-control" type="text" placeholder="{{ $fb->COMMENT }}" value="{{ $fb->COMMENT }}" name="comment" required autofocus>
                              </div>
                            </div>
                            <button class="btn btn-block btn-success" type="submit">{{ __('Add') }}</button>
                            <a href="{{ route('feedback.index') }}" class="btn btn-block btn-primary">{{ __('Return') }}</a> 
                        </form>
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