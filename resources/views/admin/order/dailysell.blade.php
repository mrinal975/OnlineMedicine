@extends('admin.master')
@section('rootcontent')
    <section class="wrapper">
        <!-- //market-->
        <div class="market-updates">
            <br>
            <h2 class="text-center text-success">{{Session::get('message')}}</h2>
            <br>
            <h4 class="text-center">Daily Sell Record</h4>
            <br>
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="overflowprotect">
                    <table class="datatable table table-striped table-bordered class_to_style" id="exampleCategory">
                        <thead>
                        <tr>
                            <th class="text-center">Index</th>
                            <th class="text-center">order Code</th>
                            <th class="text-center">Order Total</th>
                            <th class="text-center">Buy Total</th>
                            <th class="text-center">Profit</th>
                        </tr>
                        </thead>

                        <tbody>
                            <?php $i=1;?>
                            @foreach($data as $dat)
                            
                            <tr>
                                <td class="text-center">{{$i}}</td>
                                <th class="text-center">{{$dat->ordercode}}</th>
                                <td class="text-center">{{$dat->orderTotal}}</td>
                                <td class="text-center">{{$dat->buytotal}}</td>
                                <td class="text-center"><?php $profit=$dat->orderTotal-$dat->buytotal; echo  $profit; ?></td>
                            </tr>
                            <?php ++$i; ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </section>
@endsection
