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
                <h2 class="text-center">Payment Information</h2>
                <div class="card-body">

                    {!! Form::open(['url'=>'/checkout/save-payment','method'=>'POST','name'=>'paymentForm']) !!}

                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="radio-inline">
                            <input type="radio" name="paymentType" value="cashOnDelivery">Cash on Delivery
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="paymentType" value="bkash">Bkash
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="paymentType" value="rocket">Rocket
                        </label>
                    </div>
                    <div class="form-group text-center">
                       <button class="btn btn-success" type="submit"> payment type</button>
                    <!--    <label for="exampleInputPassword1"></label>
                        <input class="btn btn-block btn-info" id="exampleInputPassword1" name="btn" type="submit" value="Save Information"> -->
                    </div>

                    {!! Form::close() !!}
</div>
<div class="col-sm-3"></div>
</div>
</div>
@endsection
