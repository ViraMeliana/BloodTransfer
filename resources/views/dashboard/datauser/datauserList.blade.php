@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                      
                      <i class="fa fa-align-justify"></i>Users Data</div>
                    <div class="card-body">
                        <div class="row"> 
                          <a href="{{ route('datauser.create') }}" class="btn btn-primary m-2">{{ __('Add User') }}</a>
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
                            <td><strong>{{ $user->USER_USERNAME }}</strong></td>
                            <td><strong>{{ $user->USER_NAME }}</strong></td>
                            <td><strong>{{ $user->USER_EMAIL }}</strong></td>
                            <td><strong>{{ $user->USER_BLOODTYPES }}</strong></td>
                            <td>
                                <a href="{{ url('/datauser/' . $user->ID_USER) }}" class="btn btn-block btn-primary">View</a>
                              </td>
                              <td>
                                <a href="{{ url('/datauser/' . $user->ID_USER . '/edit') }}" class="btn btn-block btn-primary">Edit</a>
                              </td>
                              <td>
                                <form action="{{ route('datauser.destroy', $user->ID_USER ) }}" method="POST">
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

