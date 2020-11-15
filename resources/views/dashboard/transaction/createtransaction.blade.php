@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                <div class="card">
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i> {{ __('Add Transaction') }}</div>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data" action="{{ route('transaction.store') }}">
                            @csrf
                            <div class="form-group row">
                                <label>Transaction ID</label>
                                <input class="form-control" type="number" placeholder="" name="transactionid" required autofocus number_format>
                            </div>
                            <div class="form-group row">
                                <label>Blood ID</label>
                                <input class="form-control" type="number" placeholder="" name="bloodid" required autofocus number_format>
                            </div>
                            <div class="form-group row">
                                <label>User ID</label>
                                <input class="form-control" type="number" placeholder="" name="userid" required autofocus number_format>
                            </div>
                            <div class="form-group row">
                                <label>Category</label>
                                <select class="form-control" name="category">
                                    <option value="Patient">Patient</option>
                                    <option value="Donor">Donor</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <label>Health Document</label>
                                <input class="form-control" type="file"  name="file" required autofocus>
                            </div>
                            <div class="form-group row">
                                <label>Statement</label>
                                <input class="form-control" type="file"  name="file" required autofocus>
                            </div>
                            <div class="form-group row">
                                <label>Status</label>
                                <input class="form-control" type="text" placeholder="" name="status" required autofocus >
                            </div>
                            <div class="form-group row">
                                <label>Date</label>
                                <input class="form-control" type="date" placeholder="" name="date" required autofocus>
                            </div>
                            <div class="form-group row">
                                <label>Identity Card</label>
                                <input class="form-control" type="file" name="file" required autofocus >
                            </div>
                            <button class="btn btn-block btn-success" type="submit">{{ __('Add') }}</button>
                            <a href="{{ route('transaction.index') }}" class="btn btn-block btn-primary">{{ __('Return') }}</a> 
                        </form>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection

@section('javascript')

@endsection