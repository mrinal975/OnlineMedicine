@extends('frontEnd.superMaster')
@section('title')
    Order Details
@endsection
@section('mainContent')
    <div role="main" class="main">
        <div class="container" style="margin-top: 30px;">
            <div class="row">
                <div class="col-xs-12">
                	           <br>
            <h2 class="text-center text-success">{{Session::get('message')}}</h2>
            <br>

            <div class="row">
                <div class='col-lg-2'></div>
            	@if(count($details)>0)
                <div class="col-lg-8">
                    <table class="datatable table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th class="text-center">Product Name</th>
                            <th class="text-center">Product Quantity</th>
                            <th class="text-center">Product Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($details as $detail)
                            <tr>
                                <td class="text-center">
                                    <a href="{{url('/single-Product/'.$detail->productId)}}" class="">
                                     {{$detail->productName}}   
                                    </a>
                                </td>
                                <td class="text-center">{{$detail->productQuantity}}</td>
                                <td class="text-center">{{$detail->productPrice}}</td>                                
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                                <h4 class="pull-right">Total Price:  {{$total->orderTotal}}</h4>
                </div>
                <div class="pull-right">
                   {{$details->links()}}                   
                </div>
 
                @else
                <h4 class="text-center text-info">You did not order anyting yet</h4>
                @endif
                <div class='col-lg-2'></div>
            </div>
                </div>
            </div>
        </div>
    </div>
@endsection