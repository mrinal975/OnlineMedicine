@extends('admin.master')
@section('css')
@endsection
@section('rootcontent')
    <section class="wrapper">
        <!-- //market-->
        <div class="market-updates">
            <br>
            <h2 class="text-center text-success">{{Session::get('message')}}</h2>
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <table class="datatable table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th class="text-center">Customer Name</th>
                            <th class="text-center">Product Name</th>
                            <th class="text-center">Phone Number</th>
                            <th class="text-center">Time</th>
                            <th class="text-center">Product Price</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($newOrder as $order)
                            <tr>
                                <td class="text-center">{{$order->fulname}}</td>
                                <td class="text-center">{{$order->productName}}</td>
                                <td class="text-center">{{$order->phonenumber}}</td>
                                <td class="text-center">{{$order->created_at}}</td>
                                <td class="text-center">Tk.{{$order->orderTotal}}</td>
                                <td class="text-center">
                                    <a href="{{url('adminpanel/order/delivered/'.$order->id)}}" title="Deliver" class="btn btn-sm btn-primary"><i class="fa fa-plane" aria-hidden="true"></i>
                                    </a>
                                     <a href="{{url('adminpanel/order/detailview/'.$order->id)}}" class="btn btn-sm btn-success " title="View Order"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="{{url('adminpanel/order/delete/delever/page/'.$order->id)}}" title="Cancel Order" class="btn btn-sm btn-danger" onclick="confirm('Are you confirm to delete ?')"><i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                 <div class="pull-right">
                    {{$newOrder->render()}}
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script>

    </script>
@endsection