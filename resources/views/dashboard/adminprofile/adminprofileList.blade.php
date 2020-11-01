@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                      
                      <i class="fa fa-align-justify"></i>Admin Profile</div>
                    <div class="card-body">
                        <div class="row"> 
                          <!-- <a href="" class="btn btn-primary m-2">{{ __('Add Note') }}</a> -->
                        </div>
                        <br>
                        <table class="table table-responsive-sm table-striped">
                        <thead>
                          <tr>
                            <th>Admin</th>
                            <th>Region</th>
                            <th>Phone/Telephone</th>
                            <th>Address</th>
                            <th></th>
                            <th></th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                         
                          <tr>
                            <td><strong>Admin Malang </strong></td>
                            <td><strong>Malang </strong></td>
                            <td><strong>0088292 </strong></td>
                            <td><strong>Jl danau ranau </strong></td>
                            <td>
                                <a href="" class="btn btn-block btn-primary">View</a>
                            </td>
                            <td>
                                <a href="" class="btn btn-block btn-primary">Edit</a>
                            </td>
                            <td>
                                <button class="btn btn-block btn-danger">Delete</button>
                            </td>
                            </tr>

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

