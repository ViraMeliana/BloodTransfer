@extends('dashboard.base')

@section('content')


<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Data Transaction</h4></div>
            <div class="card-body">
                <table class="table table-striped table-bordered datatable">
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
                        <td>{{ $trans->ID_TRANS  }}</td>
                                <td>{{ $trans->ID_BLOOD }}</td>
                                <td>{{ $trans->ID_USER }}</td>
                                <td>{{ $trans->CATEGORY }}</td>
                                <td>{{ $trans->HEALTH_DOC }}</td>
                                <td>{{ $trans->STATEMENT }}</td>
                                <td>{{ $trans->STATUS }}</td>
                                <td>{{ $trans->DATE }}</td>
                                <td>{{ $trans->IDENTITY_CARD }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a class="btn btn-primary" href="{{ route('transaction.index') }}">Return</a>
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