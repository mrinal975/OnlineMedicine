@extends('admin.master')
@section('rootcontent')
    <section class="wrapper">
        <!-- //market-->
        <div class="market-updates">
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-center">View Product</h3>
                    <br><br>
                    <div class="well">

                        <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                        <br>

                        <table class="table table-hover table-bordered">
                            <tr >
                                <th class="text-center">Product Id</th>
                                <th class="text-center">{{$productById->id}}</th>
                            </tr>
                            <tr>
                                <th class="text-center">Product Name</th>
                                <th class="text-center">{{$productById->productName}}</th>
                            </tr>
                            <tr>
                                <th class="text-center">Sub-Category Name</th>
                                <th class="text-center">@foreach($subcategory as $subcat)
                                        @if($productById->subcategoryId==$subcat->id)
                                            {{$subcat->subcategoryName}}
                                            @endif
                                        @endforeach
                                    </th>
                            </tr>
                            <tr >
                                <th class="text-center">Product Price</th>
                                <th class="text-center">{{$productById->productPrice}}</th>
                            </tr>
                            <tr>
                                <th class="text-center">Product Quantity</th>
                                <th class="text-center">{{$productById->productQuantity}}</th>
                            </tr>
                            <tr>
                                <th class="text-center">Product Short Description</th>
                                <th class="text-center"> {!! $productById->productShortDescriptoin !!}</th>
                            </tr>
                            <tr>
                                <th class="text-center">Product type</th>
                                <th class="text-center">{!! $productById->type !!}</th>
                            </tr>
                            <tr>
                                <th class="text-center">Product Brand</th>
                                <th class="text-center">{!! $productById->brand !!}</th>
                            </tr>
                            <tr>
                                <th class="text-center">Generic Name</th>
                                <th class="text-center">{!! $productById->genericName !!}</th>
                            </tr>
                            <tr>
                                <th class="text-center"> <br> <br> <br> <br>Product Image</th>
                                <th class="text-center"> <img src="{{asset($productById->productImage)}}" alt="{{$productById->productImage}}" height="250" width="400" class=" img-thumbnail"></th>

                            </tr>
                            <tr>
                                <th class="text-center">Product Status</th>
                                <th class="text-center"> {{$productById->publication_status=1? 'published':'Unpublished'}}</th>
                            </tr>
                        </table>
                        <h1 class="text-center" title="back"><a href="{{url('adminpanel/product/manage')}}" class="btn btn-info"><i class="fa fa-chevron-circle-left"></i> Back</a></h1>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection