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
            <div class="card">
                <br>
                <h2 class="text-center bg-success">{{Session::get('message')}}</h2>
                <br>
            </div>
       
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
@endsection
