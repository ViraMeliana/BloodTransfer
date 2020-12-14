@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                    <h4>Blood Stock</h4>
                      </div>
                    <div class="card-body">
                        <div class="row"> 
                          <a href="{{ route('bloodbank.create') }}" class="btn btn-primary m-3">{{ __('Add Stock') }}</a>
                        </div>
                        <br>
                        <table class="table table-responsive-sm table-striped">
                        <thead>
                          <tr>
                            <th>Admin</th>
                            <th>Blood Type</th>
                            <th>Stock</th>
                            <th></th>
                            <th></th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($stocks as $stock)
                          <tr>
                            <td>{{ $stock->ID_ADMIN }}</td>
                            <td>{{ $stock->USER_BLOODTYPES }}</td>
                            <td>{{ $stock->STOCK }}</td>
                            <td>
                                <a href="{{ url('/bloodbank/' . $stock->ID_BLOOD) }}" class="btn btn-block btn-primary">View</a>
                              </td>
                              <td>
                                <a href="{{ url('/bloodbank/' . $stock->ID_BLOOD . '/edit') }}" class="btn btn-block btn-primary">Edit</a>
                              </td>
                              <td>
                                <form action="{{ route('bloodbank.destroy', $stock->ID_BLOOD ) }}" method="POST">
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

