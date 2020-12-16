@extends('dashboard.base')

@section('content')


<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Admin Profile</h4></div>
            <div class="card-body">
                <table class="table table-striped table-bordered datatable">
                    <thead>
                        <tr>
                            <th>Admin ID</th>
                            <th>Address</th>
                            <th>Phone Number</th>
                            <th>Region</th>
                            <th>Latitude</th>
                            <th>Longtitude</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($adminprofile as $admin)
                        <tr>
                            <td>{{ $admin->ID_ADMIN }}</td>
                            <td>{{ $admin->ADMIN_ADDRESS }}</td>
                            <td>{{ $admin->ADMIN_PHONE }}</td>
                            <td>{{ $admin->ADMIN_REGION }}</td>
                            <td>{{ $admin->LATITUDE }}</td>
                            <td>{{ $admin->LONGTITUDE }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a class="btn btn-primary" href="{{ route('adminprofile.index') }}">Return</a>
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