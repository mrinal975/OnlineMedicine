@extends('admin.master')
@section('rootcontent')
        <section class="wrapper">
            <!-- //market-->
            <div class="market-updates">
                <br>
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="text-center">Sell Information</h3>
                        <br><br>
                        <div class="well">

                            <h5 class="text-center text-danger">{{Session::get('message')}}</h5>
                            <br>
                            {!! Form::open(['url'=>'adminpanel/datefilter','method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
                            
                            <div class="form-group {{ $errors->has('fromdate') ? ' has-error' : '' }}">
                                <label for="fromdate" class="col-sm-5 control-label">From</label>
                                <div class="col-sm-3">
                                    <input type="hidden" name="hidden" value="1">
                                    <input type="date" name="fromdate" accept="image">
                                    @if ($errors->has('fromdate'))
                                        <span class="help-block">
                                 <strong class="text-danger">{{ $errors->first('fromdate') }}</strong>
                            </span>
                                    @endif
                                </div>
                                <div class="col-sm-4"></div>
                            </div>
                            <div class="form-group {{ $errors->has('todate') ? ' has-error' : '' }}">
                                <label for="todate" class="col-sm-5 control-label">To</label>
                                <div class="col-sm-3">
                                    <input type="date" name="todate" accept="image">
                                    @if ($errors->has('todate'))
                                        <span class="help-block">
                                 <strong class="text-danger">{{ $errors->first('todate') }}</strong>
                            </span>
                                    @endif
                                </div>
                                <div class="col-sm-4"></div>
                            </div>
                            <br>
                            <div class="form-group">
                                <div class="col-sm-5"></div>
                                <div class="col-sm-2">
                                    <button type="submit" class="btn btn-success btn-block"> Selling Info</button>
                                </div>
                                <div class="col-sm-5"></div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                        <br><br>
                    </div>

                </div>
                @if($pass==1)
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            <div class="text-center">
                            <a class="btn btn-md btn-info" href="{{url('adminpanel/dynamic_pdf')}}">Convert To PDF</a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                       
                        </div>
                        
                    </div>
                    <br>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
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
                            <?php $i=1; $totalProfit=0; $totalCost=0;?>
                            @foreach($data as $dat)
                            
                            <tr>
                                <td class="text-center">{{$i}}</td>
                                <th class="text-center">{{$dat->ordercode}}</th>
                                <td class="text-center">{{$dat->orderTotal}}</td>
                                <td class="text-center">{{$dat->buytotal}}</td>
                                <td class="text-center">
                                    <?php $profit=$dat->orderTotal-$dat->buytotal; 
                                    echo  $profit;
                                     $totalProfit=$totalProfit+$profit;
                                     $totalCost=$totalCost+$dat->buytotal;
                                    ?>
                                    
                                </td>
                            </tr>
                            <?php ++$i; ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                        <div class="pull-left">
                            Total Cost: {{$totalCost}}
                            Total Profit: {{$totalProfit}}
                        </div>
                        
                        <div class="pull-right">
                            {{$data->links()}}
                        </div>
                        <br>
                        </div>

                        <div class="col-sm-2"></div>
                    </div>
                </div>
                @endif
            </div>
        </section>
@endsection