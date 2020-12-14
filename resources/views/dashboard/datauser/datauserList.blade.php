@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                      <h4>Data User</h4>
                    </div>
                    <div class="card-body">
                        <div class="row"> 
                          <a href="{{ route('userdata.create') }}" class="btn btn-primary m-3">{{ __('Add User') }}</a>
                        </div>
                        <br>
                        <table class="table table-responsive-sm table-striped">
                        <thead>
                          <tr>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Blood Types</th>
                            <th></th>
                            <th></th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($datauser as $user)
                          <tr>
                                <td>{{ $user->USER_USERNAME }}</td>
                                <td>{{ $user->USER_NAME }}</td>
                                <td>{{ $user->USER_EMAIL }}</td>
                                <td>{{ $user->USER_BLOODTYPES }}</td>
                            <td>
                                <a href="{{ url('/userdata/' . $user->ID_USER) }}" class="btn btn-block btn-primary">View</a>
                              </td>
                              <td>
                                <a href="{{ url('/userdata/' . $user->ID_USER . '/edit') }}" class="btn btn-block btn-primary">Edit</a>
                              </td>
                              <td>
                                <form action="{{ route('userdata.destroy', $user->ID_USER ) }}" method="POST">
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