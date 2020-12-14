@extends('dashboard.base')

@section('content')


<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Blood Stock</h4></div>
            <div class="card-body">
                <table class="table table-striped table-bordered datatable">
                    <thead>
                        <tr>
                            <th>Admin</th>
                            <th>Blood Type</th>
                            <th>Stock</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($stock as $stock)
                        <tr>
                            <td>{{ $stock->ID_ADMIN }}</td>
                            <td>{{ $stock->USER_BLOODTYPES }}</td>
                            <td>{{ $stock->STOCK }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a class="btn btn-primary" href="{{ route('bloodbank.index') }}">Return</a>
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