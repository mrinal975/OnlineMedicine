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
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                   <table class="datatable table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th class="text-center">Product Name</th>
                            <th class="text-center">Product Quantity</th>
                            <th class="text-center">Product Price</th>
                            <th class="text-center">Bought  Price</th>
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
                                <td class="text-center">{{$detail->productPrice}}.TK</td>
                                <td class="text-center">{{$detail->productBought}}.TK</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <h4 class="pull-right"> Total Price : {{ $total->orderTotal}}</h4>
                </div>
                <div class="col-lg-2"></div>
                <div class="pull-right">
                    {{$details->render()}}
                </div>
            </div>
        <br><br>
            <div class="row">
                
                <br>
                <div class="col-lg-2"></div>
                <div class="col-lg-4">
                    <h4>Shipping Informartion</h4>
                    <br>
                    <table >
                        <tr>
                            <td>Address :</td>
                            <td>{{$shipping->address}}</td>
                        </tr>
                        <tr>
                            <td>Phone :</td>
                            <td>{{$shipping->phonenumber}}</td>
                        </tr>
                        <tr>
                            <td>Name :</td>
                            <td>{{$shipping->fulname}}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-lg-4">
                    <h4>Payment Informartion</h4>
                    <br>
                    <table>
                    <tr>
                        <td>Payment Type :</td>
                        <td>{{$paymentinfo->paymentType}}</td>
                    </tr>
                    @if($paymentinfo->paymentType!='cashOnDelivery') 
                    <tr>
                        <td>payment Status :</td>
                        <td>{{$paymentinfo->paymentStatus}}</td>
                    </tr>
                    @endif
                    @if($data==1)
                    <tr>
                        <td>phonenumber :</td> 
                        <td>{{$payment_verifications->Phone}}</td>
                    </tr>
                    <tr>
                        <td>Generated Key</td>
                        <td>{{$payment_verifications->secretkey}}</td>
                    </tr>
                    @endif
                </table>
                </div>
                <div class="col-lg-2"></div>
            </div>
            <br>
            <br>
        </div>
    </section>
@endsection

@section('js')
    <script>

    </script>
@endsection