@extends('admin.master')
@section('rootcontent')
    <section class="wrapper">
        <!-- //market-->
        <div class="market-updates">
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-center">View Order Detail</h3>
                    <br><br>
                    <div class="well">

                        <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                        <br>

                        <table class="table table-hover table-bordered">
                            <tr >
                                <th class="text-center">Customer Name</th>
                                <th class="text-center">{{$detailview->fulname}}</th>
                            </tr>
                            <tr>
                                <th class="text-center">Product Name</th>
                                <th class="text-center">{{$detailview->productName}}</th>
                            </tr>
                        
                            <tr >
                                <th class="text-center">Product Price</th>
                                <th class="text-center">{{$detailview->orderTotal}}</th>
                            </tr>
                            <tr>
                                <th class="text-center">Order Time</th>
                                <th class="text-center">{{$detailview->created_at}}</th>
                            </tr>
                            <tr>
                                <th class="text-center"> <br> <br> <br> <br>Product Image</th>
                                <th class="text-center"> <img src="{{asset($detailview->productImage)}}" alt="{{$detailview->productImage}}" max-height="20px" max-width="400" class=" img-thumbnail"></th>

                            </tr>
                        </table>
                        <h1 class="text-center" title="back"><a href="{{url('adminpanel/')}}" class="btn btn-info"><i class="fa fa-chevron-circle-left"></i> Back</a></h1>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection