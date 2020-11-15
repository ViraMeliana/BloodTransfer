@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                <div class="card">
                @foreach($transaction as $trans)
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i> Data Transaction {{ $trans->ID_TRANS }}</div>
                    <div class="card-body">
                    
                        <form method="POST" enctype="multipart/form-data"  action="/transaction/{{ $trans->ID_TRANS }}">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="transactionid" value="{{ $trans->ID_TRANS }}">
                            <div class="form-group row">
                                <label>Transaction ID</label>
                                <input class="form-control" type="number" placeholder="{{ $trans->ID_TRANS  }}" value="{{ $trans->ID_TRANS  }}" name="transactionid" required autofocus>
                            </div>
                            <div class="form-group row">
                                <label>Blood ID</label>
                                <input class="form-control" type="number" placeholder="{{ $trans->ID_BLOOD }}" name="bloodid" value="{{ $trans->ID_BLOOD }}" required autofocus number_format>
                            </div>
                            <div class="form-group row">
                                <label>User ID</label>
                                <input class="form-control" type="number" placeholder="{{ $trans->ID_USER }}" name="userid" value="{{ $trans->ID_USER }}" required autofocus number_format>
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
                                <input class="form-control" type="text" placeholder="{{ $trans->STATUS }}" name="status" value="{{ $trans->STATUS }}" required autofocus >
                            </div>
                            <div class="form-group row">
                                <label>Date</label>
                                <input class="form-control" type="date" placeholder="{{ $trans->DATE }}" name="date" value="{{ $trans->DATE }}" required autofocus>
                            </div>
                            <div class="form-group row">
                                <label>Identity Card</label>
                                <input class="form-control" type="file" name="file" required autofocus >
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