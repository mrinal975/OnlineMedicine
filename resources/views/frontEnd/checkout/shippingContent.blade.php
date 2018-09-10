@extends('frontEnd.superMaster')
@section('title')
    Main | Home Page
@endsection
@section('mainContent')
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <br><br>
                <h2 class="text-center">Shipping Information</h2>

                <div class="card-body">

                    {!! Form::open(['url'=>'/checkout/save-shipping','method'=>'POST','name'=>'shippingform']) !!}

                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Full Name</label>
                        <input class="form-control" name="fulname" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" value="">
                        @if ($errors->has('fulname'))
                            <span class="help-block">
                                <strong class="text-danger">{{ $errors->first('fulname') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input class="form-control" name="email" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" value="">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong class="text-danger">{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Address</label>
                        <textarea name="address" class="form-control" rows="4"></textarea>
                        @if ($errors->has('address'))
                            <span class="help-block">
                                <strong class="text-danger">{{ $errors->first('address') }}</strong>
                            </span>
                        @endif
                    </div>
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
                        <label for="sel1">Dist. Name :</label>
                        <select class="form-control" id="sel1" name="districtname">
                            <option >Select District</option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Comilla">Comilla</option>
                            <option value="Rajsahi">Rajsahi</option>
                            <option value="Gazipur">Gazipur</option>
                            <option value="Savar">Savar</option>
                        </select>
                        <br>
                    </div>
                    <br>
                    <div class="form-group text-center">
<br><br>
                         <button class="btn btn-success" type="submit">save information</button>
                        <!-- <label for="exampleInputPassword1"></label>
                        <input class="btn btn-block shipping-class" id="exampleInputPassword1" name="btn" type="submit" value="Save Information"> -->
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
@endsection
