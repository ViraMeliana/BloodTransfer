@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                      
                      <i class="fa fa-align-justify"></i>Transaction Data</div>
                    <div class="card-body">
                        <div class="row"> 
                          <a href="{{ route('transaction.create') }}" class="btn btn-primary m-2">{{ __('Add Transaction') }}</a>
                        </div>
                        <br>
                        <table class="table table-responsive-sm table-striped">
                        <thead>
                          <tr>
                            <th>Transaction ID</th>
                            <th>Blood ID</th>
                            <th>User ID</th>
                            <th>Category</th>
                            <th>Health Document</th>
                            <th>Statement</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Identity Card</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($transaction as $trans)
                          <tr>
                            <td><strong>{{ $trans->ID_TRANS  }}</strong></td>
                            <td><strong>{{ $trans->ID_BLOOD }}</strong></td>
                            <td><strong>{{ $trans->ID_USER }}</strong></td>
                            <td><strong>{{ $trans->CATEGORY }}</strong></td>
                            <td><strong>{{ $trans->HEALTH_DOC }}</strong></td>
                            <td><strong>{{ $trans->STATEMENT }}</strong></td>
                            <td><strong>{{ $trans->STATUS }}</strong></td>
                            <td><strong>{{ $trans->DATE }}</strong></td>
                            <td><strong>{{ $trans->IDENTITY_CARD }}</strong></td>
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

