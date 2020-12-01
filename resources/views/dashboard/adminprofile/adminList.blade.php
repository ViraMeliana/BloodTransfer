@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                    <h4>Admin Profile</h4></div>
                    <div class="card-body">
                        <div class="row"> 
                          <a href="{{ route('adminprofile.create') }}" class="btn btn-primary m-3">{{ __('Add Admin') }}</a>
                        </div>
                        <br>
                        <table class="table table-responsive-sm table-striped">
                        <thead>
                          <tr>
                            <th>Profile Admin ID</th>
                            <th>Admin ID</th>
                            <th>Address</th>
                            <th>Phone Number</th>
                            <th>Region</th>
                            <th>Latitude</th>
                            <th>Longtitude</th>
                            <th></th>
                            <th></th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($adminprofile as $admin)
                          <tr>
                            <td>{{ $admin->ID_PROFILEADMIN }}</td>
                            <td>{{ $admin->ID_ADMIN }}</td>
                            <td>{{ $admin->ADMIN_ADDRESS }}</td>
                            <td>{{ $admin->ADMIN_PHONE }}</td>
                            <td>{{ $admin->ADMIN_REGION }}</td>
                            <td>{{ $admin->LATITUDE }}</td>
                            <td>{{ $admin->LONGTITUDE }}</td>
                            <td>
                                <a href="{{ url('/adminprofile/' . $admin->ID_PROFILEADMIN) }}" class="btn btn-block btn-primary">View</a>
                              </td>
                              <td>
                                <a href="{{ url('/adminprofile/' . $admin->ID_PROFILEADMIN . '/edit') }}" class="btn btn-block btn-primary">Edit</a>
                              </td>
                              <td>
                                <form action="{{ route('adminprofile.destroy', $admin->ID_PROFILEADMIN ) }}" method="POST">
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

