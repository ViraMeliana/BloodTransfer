@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
                <div class="card">
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i>{{ __('Feedback') }}</div>
                    <div class="card-body">
                    <div class="row"> 
                          <a href="{{ route('feedback.create') }}" class="btn btn-primary m-2">{{ __('Add Feedback') }}</a>
                        </div>
                        <br>
                        <table class="table table-responsive-sm table-striped">
                        <thead>
                          <tr>
                            <th>Feedback ID</th>
                            <th>User ID</th>
                            <th>Admin ID</th>
                            <th>Date</th>
                            <th>Comment</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($feedback as $fb)
                            <tr>
                              <td>{{ $fb->ID_FEEDBACK }}</td>
                              <td>{{ $fb->ID_USER }}</td>
                              <td>{{ $fb->ID_ADMIN }}</td>
                              <td>{{ $fb->DATE }}</td>
                              <td>{{ $fb->COMMENT }}</td>
                              <td>
                                <a href="{{ url('/feedback/' . $fb->ID_FEEDBACK) }}" class="btn btn-block btn-primary">View</a>
                              </td>
                              <td>
                                <a href="{{ url('/feedback/' . $fb->ID_FEEDBACK . '/edit') }}" class="btn btn-block btn-primary">Edit</a>
                              </td>
                              <td>
                                <form action="{{ route('feedback.destroy', $fb->ID_FEEDBACK ) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-block btn-danger">Delete</button>
                                </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection


@section('javascript')

@endsection

