@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                      <h4>Data Transaction</h4>
                    </div>
                    <div class="card-body">
                        <div class="row"> 
                          <a href="{{ route('transaction.create') }}" class="btn btn-primary m-3">{{ __('Add Transaction') }}</a>
                        </div>
                        <br>
                        <table class="table table-responsive-sm table-striped">
                        <thead>
                          <tr>
                            <th>Blood ID</th>
                            <th>User ID</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th></th>
                            <th></th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($transaction as $trans)
                          <tr>
                                <td>{{ $trans->ID_BLOOD }}</td>
                                <td>{{ $trans->ID_USER }}</td>
                                <td>{{ $trans->CATEGORY }}</td>
                                <td>{{ $trans->STATUS }}</td>
                            <td>
                                <a href="{{ url('/transaction/' . $trans->ID_TRANS) }}" class="btn btn-block btn-primary">View</a>
                              </td>
                              <td>
                                <a href="{{ url('/transaction/' . $trans->ID_TRANS . '/edit') }}" class="btn btn-block btn-primary">Edit</a>
                              </td>
                              <td>
                                <form action="{{ route('transaction.destroy', $trans->ID_TRANS ) }}" method="POST">
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