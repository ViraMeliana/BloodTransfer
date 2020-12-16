@extends('dashboard.base')

@section('content')


<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Data User</h4></div>
            <div class="card-body">
                <table class="table table-striped table-bordered datatable">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Birth Date</th>
                            <th>Age</th>
                            <th>Phone Number</th>
                            <th>Address</th>
                            <th>NIK</th>
                            <th>Blood Types</th>
                            <th>Photo</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                                <td>{{ $user->USER_USERNAME }}</td>
                                <td>{{ $user->USER_NAME }}</td>
                                <td>{{ $user->USER_EMAIL }}</td>
                                <td>{{ $user->BIRTH_DATE }}</td>
                                <td>{{ $user->AGE }}</td>
                                <td>{{ $user->USER_PHONE }}</td>
                                <td>{{ $user->USER_ADDRESS }}</td>
                                <td>{{ $user->NIK }}</td>
                                <td>{{ $user->USER_BLOODTYPES }}</td>
                                <td><img src="{{ url('/photo_user')}}/{{$user->PHOTO}}" style="width:240px; height:300px"></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a class="btn btn-primary" href="{{ route('userdata.index') }}">Return</a>
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