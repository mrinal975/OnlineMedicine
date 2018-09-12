@extends('frontEnd.superMaster')
@section('title')
    Order
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
            	@if(count($newOrder)>0)
                <div class="col-lg-12">
                    <table class="datatable table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th class="text-center">Product Name</th>
                            <th class="text-center">Phone Number</th>
                            <th class="text-center">Ordered Time</th>
                            <th class="text-center">Product Price</th>
                            <th char="text-center">Order status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($newOrder as $order)
                            <tr>
                                <td class="text-center">
                                    <a href="{{url('/single-Product/'.$order->productId)}}">{{$order->productName}}</a>
                                </td>
                                <td class="text-center">{{$order->phonenumber}}</td>
                                <td class="text-center">{{$order->created_at}}</td>
                                <td class="text-center">Tk.{{$order->orderTotal}}</td>
                                <th char="text-center">@if($order->orderStatus=="pending")
                                	<p>Not Arribed</p>
                                	@else
                                	<p>Arribed</p>
                                	@endif
                                </th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="pull-right">
                   {{$newOrder->links()}}                   
                </div>
 
                @else
                <h4 class="text-center text-info">You did not order anyting yet</h4>
                @endif
            </div>
                </div>
            </div>
        </div>
    </div>
@endsection