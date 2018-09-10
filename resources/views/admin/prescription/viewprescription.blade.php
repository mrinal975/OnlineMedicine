@extends('admin.master')

@section('css')
    <link rel="stylesheet" href="{{asset('admin/css/lightbox.min.css')}}">
@endsection
@section('rootcontent')
    <section class="wrapper">
        <!-- //market-->
        <div class="market-updates">
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-center">View Prescription</h3>
                    <br><br>
                    <div class="well">
                        <br>

                        <table class="table table-hover table-bordered">

                            <tr>
                                <th class="text-center">Customer Name</th>
                                <th class="text-center">{{$prescription->customerName}}</th>
                            </tr>
                            <tr>
                                <th class="text-center">Phone Number</th>
                                <th class="text-center">{{$prescription->customerPhone}}</th>
                            </tr>
                            <tr >
                                <th class="text-center">Customer Email</th>
                                <th class="text-center">{{$prescription->customerEmail}}</th>
                            </tr>

                            <tr class="bzoom_wrap">
                                <th class="text-center"> <br> <br> <br> <br>Prescription Image</th>
                                <th class="text-center" id="bzoom">


                                    <a href='{!! url($prescription->prescriptionsImage); !!}' data-lightbox="example-1">
                                        <img src="{{asset($prescription->prescriptionsImage)}}" alt="{{$prescription->customerName}}" height="250" width="270" class="img-rounded">
                                    </a>
                                    <?php $a=[];
                                    $a=explode("/",$prescription->prescriptionsImage);
                                    $image=end($a);

                                    $directory=$prescription->prescriptionsImage;
                                    ?>
                                    <a href="{{url($prescription->prescriptionsImage)}}" download="{{$image}}" class="btn btn-danger" >
                                        <i class="fa fa-download" aria-hidden="true"> Download </i>
                                    </a>
                                </th>
                            </tr>
                            <tr>
                                <th class="text-center">Customer Question</th>
                                <th class="text-center"> {{$prescription->prescriptionsQuestion}}</th>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
@section('js')
    <script src="{{asset('admin/js/lightbox-plus-jquery.min.js')}}"></script>
@endsection