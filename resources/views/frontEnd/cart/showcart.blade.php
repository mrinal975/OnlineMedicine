@extends('frontEnd.superMaster')
@section('title')
    Main | Home Page
@endsection
@section('mainContent')
    <br><br><br>
    <div role="main" class="main">
        <div class="container">
            <div class="row">
                <div class="table-responsive table-striped">
                    <table class="table table-hover ">
                        <thead>
                        <tr>
                            <th class="text-center" style="font-size: 14px;">Remove</th>
                            <th class="text-center" style="font-size: 14px;">Product Name</th>
                            <th class="text-center" style="font-size: 14px;">Quantity</th>
                            <th class="text-center" style="font-size: 14px;">Price</th>
                            <th class="text-center" style="font-size: 14px;">Item Total Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $total=0?>
                        @foreach($cartProduct as $cartProduct)
                            <tr class="rem1">
                                <td class="invert-closeb" style="font-size: 14px;">
                                    <div class="rem text-center bg-danger" style="color: red;">
                                        <a href="{{url('/cart/delete/'.$cartProduct->rowId)}}">
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </td>
                                <td class="text-center invert" style="font-size: 14px;">{{$cartProduct->name}}</td>
                                <td class="invert text-center" style="font-size: 14px;">
                                    <div class="quantity">
                                        <form action="{{url('/cartQuantityUpdate/'.$cartProduct->rowId)}}">

                                            <div class="input-group">
                                                <input type="number" min="1" name="qty" max="10" class="form-control" value="{{ $cartProduct->qty }}" style="height:47px;" />
                                                <span class="input-group-btn">
                                        <button type="submit" name="btn" class="btn btn-info">
                                            <span class="fa fa-cloud-upload" ></span>
                                        </button>
                                        </span>
                                            </div>
                                        </form>
                                    </div>
                                </td>
                                <td class="invert text-center" style="font-size: 14px;">TK:{{$cartProduct->price}}</td>
                                <td class="invert text-center" style="font-size: 14px;">TK.{{$itemTotal=$cartProduct->price*$cartProduct->qty}}</td>

                            </tr>
                            <?php $total=$total+$itemTotal;
                            ?>
                            {{Session::put('orderTotal',$total)}}
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9"></div>
                        <div class="col-sm-3"><h4> <strong>Total Price: <span class="text-info"><?php echo $total;?> .TK</span></strong> </h4></div>
                    </div>
                </div>
                <div class="checkout-left">
                    <div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
                        <a href="{{url('/')}}" style="font-size: 15px;" class="btn btn-info"> <span class="fa fa-angle-double-left" aria-hidden="true"></span>Back To Shopping</a>
                        @if(Cart::count()>0)
                        <?php
                        $customerId = Session::get('customerId');
                        $shippingId = Session::get('shippingId');
                        if ($customerId != null && $shippingId != null) {
                        ?>
                        <a href="{{ url('/checkout/payment') }}" class="btn btn-primary" style="font-size: 15px;"> <span class="" aria-hidden="true"><i class="fa fa-angle-double-left"></i></span> Checkout</a>
                        <?php } else if ($customerId != null) { ?>
                        <a href="{{ url('/checkout/shipping') }}" class="btn btn-primary" style="font-size: 15px;"> <span class="" aria-hidden="true"><i class="fa fa-angle-double-left"></i></span> Checkout</a>
                        <?php } else { ?>
                        <a href="{{ url('/checkout') }}" class="btn btn-success" style="font-size: 15px;"> <span class="" aria-hidden="true"></span>Checkout <i class="fa fa-angle-double-right"></i></a>
                        <?php } ?>
                    </div>
                    @endif
                    <div class="clearfix"> </div>
                </div>

            </div>

        </div>

    </div>
@endsection
@section('js')

@endsection