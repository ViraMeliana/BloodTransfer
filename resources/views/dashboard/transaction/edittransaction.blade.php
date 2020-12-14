@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Data Transaction</h4>
                    </div>
                    <div class="card-body">
                    @foreach($transaction as $trans)
                        <form method="POST" enctype="multipart/form-data"  action="/transaction/{{ $trans->ID_TRANS }}">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="transactionid" value="{{ $trans->ID_TRANS }}">
                            <div class="form-group row">
                                <div class="col">
                                    <label>Blood ID</label>
                                    <input class="form-control" type="number" placeholder="{{ $trans->ID_BLOOD }}" name="bloodid" value="{{ $trans->ID_BLOOD }}" required autofocus number_format>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <label>User ID</label>
                                    <input class="form-control" type="number" placeholder="{{ $trans->ID_USER }}" name="userid" value="{{ $trans->ID_USER }}" required autofocus number_format>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <label>Category</label>
                                    <select class="form-control" name="category">
                                        <option value="Patient">Patient</option>
                                        <option value="Donor">Donor</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <label>Health Document</label>
                                    <input class="form-control" type="file"  name="healthdoc" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <label>Statement</label>
                                    <input class="form-control" type="file"  name="statement" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <label>Status</label>
                                    <input class="form-control" type="text" placeholder="{{ $trans->STATUS }}" name="status" value="{{ $trans->STATUS }}" required autofocus >
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <label>Date</label>
                                    <input class="form-control" type="date" placeholder="{{ $trans->DATE }}" name="date" value="{{ $trans->DATE }}" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <label>Identity Card</label>
                                    <input class="form-control" type="file" name="identitycard" >
                                </div>
                            </div>
                            <button class="btn btn-block btn-success" type="submit">{{ __('Add') }}</button>
                            <a href="{{ route('transaction.index') }}" class="btn btn-block btn-primary">{{ __('Return') }}</a> 
                        </form>
                    </div>
                    @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection

@section('javascript')

@endsection