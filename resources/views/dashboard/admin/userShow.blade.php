@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                      <h4>User Admin</h4>
                    </div>
                    <div class="card-body">
                    <table class="table table-striped table-bordered datatable">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Menu Roles</th>
                            <th>Email Verified at</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                              <td>{{ $user->name }}</td>
                              <td>{{ $user->email }}</td>
                              <td>{{ $user->menuroles }}</td>
                              <td>{{ $user->email_verified_at }}</td>
                              <td>{{ $user->created_at }}</td>
                              <td>{{ $user->updated_at }}</td>
                        </tr>
                    </tbody>
                </table>
                <a class="btn btn-primary" href="{{ route('users.index') }}">Return</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection


@section('javascript')

@endsection