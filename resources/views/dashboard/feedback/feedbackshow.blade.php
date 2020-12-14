@extends('dashboard.base')

@section('content')


<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Feedback</h4></div>
            <div class="card-body">
                <table class="table table-striped table-bordered datatable">
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Admin ID</th>
                            <th>Date</th>
                            <th>Comment</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($feedback as $fb)
                        <tr>
                            <td>{{ $fb->ID_USER }}</td>
                            <td>{{ $fb->ID_ADMIN }}</td>
                            <td>{{ $fb->DATE }}</td>
                            <td>{{ $fb->COMMENT }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a class="btn btn-primary" href="{{ route('feedback.index') }}">Return</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('javascript')

@endsection