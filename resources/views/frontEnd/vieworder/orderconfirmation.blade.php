@extends('frontEnd.superMaster')
@section('title')
payment
@endsection
@section('mainContent')
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <br><br>
                <h2 class="text-center">payment Information</h2>

                <div class="card-body">

                    {!! Form::open(['url'=>'/payment/complete','method'=>'POST','name'=>'/payment/complete']) !!}

                    {{ csrf_field() }}
                    <input type="hidden" name="paymentId" value="{{$paymentId}}">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Phone</label>
                        <input class="form-control" name="phonenumber" id="exampleInputPassword1" type="number" value="">
                        @if ($errors->has('phonenumber'))
                            <span class="help-block">
                                <strong class="text-danger">{{ $errors->first('phonenumber') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Generated Code</label>
                        <input class="form-control" name="secretkey" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" value="">
                        @if ($errors->has('secretkey'))
                            <span class="help-block">
                                <strong class="text-danger">{{ $errors->first('secretkey') }}</strong>
                            </span>
                        @endif
                    </div>
                    <br>
                    <div class="form-group text-center">
                <br><br>
                         <button class="btn btn-success" type="submit">Save information</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
@endsection
