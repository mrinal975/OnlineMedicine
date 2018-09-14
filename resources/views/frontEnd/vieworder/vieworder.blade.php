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
                            <th class="text-center">Order Details</th>
                            <th class="text-center">Ordered Time</th>
                            <th class="text-center">Product Price</th>
                            <th char="text-center">Delivery status</th>
                            <th char="text-center">Receive Product</th>
                            <th char="text-center">Payment</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($newOrder as $order)
                            <tr>
                                <td class="text-center">
                                    <a href="{{url('/view/orderdetails/'.$order->orderId)}}" class="btn btn-sm btn-info">
                                        <i class="fa fa-eye" title="View purchase Detail"></i>
                                    </a>
                                </td>
                                <td class="text-center">{{
                                date('Y M j, h:i:a',strtotime($order->created_at))
                                   }}</td>
                                <td class="text-center">Tk.{{$order->orderTotal}}</td>
                                <th class="text-center">@if($order->orderStatus=="pending")
                                	<p >Not Send</p>
                                	@else
                                	<p>Send</p>
                                	@endif
                                </th>
                                <th class="text-center">
                                     @if($order->paymentType=='rocket' || $order->paymentType=='bkash')
                                    @if($order->paymentStatus=='confirm' && $order->customerStatus=='pending')
                                        <a class="btn btn-sm btn-success" href="{{url('/product/receive/'.$order->orderId)}}">Receive Product</a>
                                    @else
                                        Thanks
                                    @endif 
                                    @else
                                    @if($order->customerStatus=='pending')
                                    <a class="btn btn-sm btn-success" href="{{url('/product/receive/'.$order->orderId)}}">Receive Product</a>
                                    @else
                                        Thanks
                                    @endif
                                    @endif  
                                </th>
                                <th char="text-center">
                                    @if($order->paymentType=='rocket' || $order->paymentType=='bkash')
                                        @if($order->paymentStatus!='confirm')
                                        <a href="{{url('/payment/complete/'.$order->id)}}">Complete Payment</a>
                                        @else
                                        <p>Payment Confirm</p>
                                        @endif    
                                    @else
                                    <p>Cash on Delibery</p>
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