@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Data Transaction</h4></div>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data" action="{{ route('transaction.store') }}">
                            @csrf
                            <div class="form-group row">
                                <div class="col">
                                    <label>Blood ID</label>
                                    <input class="form-control" type="number" placeholder="" name="bloodid" required autofocus number_format>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <label>User ID</label>
                                    <input class="form-control" type="number" placeholder="" name="userid" required autofocus number_format>
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
                                    <input class="form-control" type="file"  name="healthdoc" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <label>Statement</label>
                                    <input class="form-control" type="file"  name="statement" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <label>Status</label>
                                    <input class="form-control" type="text" placeholder="" name="status" required autofocus >
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <label>Date</label>
                                    <input class="form-control" type="date" placeholder="" name="date" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <label>Identity Card</label>
                                    <input class="form-control" type="file" name="identitycard" required autofocus >
                                </div>
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