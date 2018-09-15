@extends('frontEnd.superMaster')
@section('title')
    Main | Home Page
@endsection
@section('carousel')
@endsection
@section('mainContent')
    <div class="clearfix">&nbsp;</div>

    <div class="container" style="padding-top: 30px;">
        <div class="row">
            <div class="col-md-7">
                @foreach($products as $product)
                <div class="product-view">
                    <div class="product-essential">
                        <div class="row">
                            <div class="product-img-box col-sm-5">
                                <div class="product-img-box-wrapper">
                                    <div class="product-img-wrapper">
                                        <img src="{{asset($product->productImage)}}" alt="{{$product->productName}}">
                                    </div>
                                </div>

                                <!--                                <div class="owl-carousel manual" id="productGalleryThumbs">
                                                                    <div class="product-img-wrapper">
                                                                        <a href="#" data-image="http://epharma.com.bd/theme/epharma/img/products/single/product1.jpg" data-zoom-image="http://epharma.com.bd/theme/epharma/img/products/single/product1.jpg" class="product-gallery-item">
                                                                            <img src="http://epharma.com.bd/theme/epharma/img/products/single/thumbs/product1.jpg" alt="product">
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-img-wrapper">
                                                                        <a href="#" data-image="http://epharma.com.bd/theme/epharma/img/products/single/product2.jpg" data-zoom-image="http://epharma.com.bd/theme/epharma/img/products/single/product2.jpg" class="product-gallery-item">
                                                                            <img src="http://epharma.com.bd/theme/epharma/img/products/single/thumbs/product2.jpg" alt="product">
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-img-wrapper">
                                                                        <a href="#" data-image="http://epharma.com.bd/theme/epharma/img/products/single/product3.jpg" data-zoom-image="http://epharma.com.bd/theme/epharma/img/products/single/product3.jpg" class="product-gallery-item">
                                                                            <img src="http://epharma.com.bd/theme/epharma/img/products/single/thumbs/product3.jpg" alt="product">
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-img-wrapper">
                                                                        <a href="#" data-image="http://epharma.com.bd/theme/epharma/img/products/single/product4.jpg" data-zoom-image="http://epharma.com.bd/theme/epharma/img/products/single/product4.jpg" class="product-gallery-item">
                                                                            <img src="http://epharma.com.bd/theme/epharma/img/products/single/thumbs/product4.jpg" alt="product">
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-img-wrapper">
                                                                        <a href="#" data-image="http://epharma.com.bd/theme/epharma/img/products/single/product5.jpg" data-zoom-image="http://epharma.com.bd/theme/epharma/img/products/single/product5.jpg" class="product-gallery-item">
                                                                            <img src="http://epharma.com.bd/theme/epharma/img/products/single/thumbs/product5.jpg" alt="product">
                                                                        </a>
                                                                    </div>
                                                                </div>-->
                            </div>

                            <div class="product-details-box col-sm-7">
                                <h1 class="product-name" style="font-size: 22px; line-height: 25px;">
                                    {{$product->productName}}

                                </h1>
                                <div class="product-detail-info">
                                    <div class="product-price-box">
                                        <?php
                                        $int=mt_rand(30, 150);
                                        $price=$product->productPrice+$int;
                                        ?>
                                        <!-- <span class="old-price">৳{{$price}}</span> -->
                                        <span class="product-price">{{$product->productPrice}} ৳<b style="font-weight: normal; font-size: 12px; color: #777;">&nbsp;&nbsp;(Per Unit)</b></span>
                                    </div>
                                    <p class="availability">
                                        <!--<span class="font-weight-semibold">Qty / Box Details:</span>-->
                                        {{$product->productShortDescriptoin}}
                                        
                                    </p>
                                </div>

                                <div class="product-actions">
                                    <button id="addbtn" class="add-to-cart add-to-cart" value="{{$product->id}}">
                                        <span class="addToBag">
                                        <i class="fa fa-shopping-cart"></i>
                                        Add to Bag</span>
                                    </button>
                                </div>

                                <div class="product-detail-info">
                                    <p class="availability">
                                        <span class="font-weight-semibold">Categories:</span>
                                        <a href="{{url('/category/'.$product->subcategoryId)}}">
                                            {{$product->subcategoryName}}
                                        </a>
                                    </p>
                                    <p class="availability">
                                        <span class="font-weight-semibold">Type:</span>
                                        Diaper
                                    </p>
                                </div>



                                <div class="product-share-box">
                                    <div id="share"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                @endforeach

            </div>

            <aside class="col-md-5 sidebar product-sidebar">
                <h4>Probable Alternatives <span style="color: #98a4b1; font-size: 12px;"></span></h4>
                <style>
                    .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
                        padding: 5px;
                    }
                </style>
                <table class="table table-bordered table-condensed table-hover">
                    <thead style="background-color: #b4b4b4;">
                    <tr>
                        <th style="font-size: 12px;" class="text-center">Name</th>
                        <th style="font-size: 12px;" class="text-center">Form</th>
                        <th style="font-size: 12px;" class="text-center">MRP</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($similarproduct as $silimar)
                    <tr>
                        <td style="font-size: 12px;" class="text-center"><a href="{{url('/single-Product/'.$silimar->id)}}"><b>{{$silimar->productName}}</b></a><br></td>
                        <td style="font-size: 12px;" class="text-center">{{$silimar->type}}</td>
                        <td style="font-size: 12px;" class="text-center">৳{{$silimar->productPrice}}</td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
            </aside>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h2 class="slider-title">
                    <span class="inline-title">Also Purchased</span>
                    <span class="line"></span>
                </h2>
                <div class="owl-carousel owl-theme" data-plugin-options="{'items':4, 'margin':20, 'nav':true, 'dots': false, 'loop': false}">
                    @foreach($similarproduct as $similar)
                    <div class="product">
                        <figure class="product-image-area">
                            <a href="" title="Mamypoko XXXL 14pcs Thailand" class="product-image">

                                <img src="{{asset($similar->productImage)}}" alt="{{$similar->productName}}" />

                            </a>
                        </figure>
                        <div class="product-details-area">
                            <h2 class="product-name"><a href="{{asset('/single-Product/'.$similar->id)}}" title="{{$similar->productName}}">{{$similar->productName}}</a></h2>
                            <div class="product-price-box">
<!--                                 <span class="old-price">৳1950</span> -->
                                <span class="product-price">{{$similar->productPrice}} ৳</span>
                            </div>
                            <div class="product-actions">
                                <!--                                <div class="product-detail-qty">
                                                                    <input type="hidden" name="rel_qty" value="1">
                                                                    <input name="rel_id" type="hidden" value="14589">
                                                                    <input name="rel_token" type="hidden" value="rpp1aebGD56FGch7qLySLRuFCheoVOoStjYiOf4P">
                                                                </div>-->
                                <!--<a href="#" class="addtocart button related-btn-cart" title="Add to Bag">-->
                                <button id="addbtn" class="add-to-cart add-to-cart" value="{{$product->id}}">
                                        <span class="addToBag">
                                        <i class="fa fa-shopping-cart"></i>
                                        Add to Bag</span>
                                </button>
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(document).on('click','.add-to-cart',function () {
                console.log('clicked');
                var product_id=$(this).val();
                $.ajax({
                    type:'get',
                    url:'{{URL::to('/cart/add/')}}',
                    data:{'id':product_id},
                    success:function (data) {
                        console.log('Successfully data received');
                        $('#updateCartInfo').html(data);
                        replaceWith($('#updateCartInfo').html(data));
                        $('#updateCartInfoMobile').html(data);
                        replaceWith($('#updateCartInfoMobile').html(data));

                    },
                    error:function () {
                        console.log('Data Not receiveed');
                    }
                });

            })
        });
    </script>
    <!-- Autocomplete -->
        <script>
        $(document).ready(function(){

            $('#country_name').keyup(function(){
                var query = $(this).val();
                if(query != '')
                {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('autocomplete.fetch') }}",
                        method:"POST",
                        data:{query:query, _token:_token},
                        success:function(data){
                            $('#countryList').fadeIn();
                            $('#countryList').html(data);
                        }
                    });
                }
            });

            $(document).on('click', 'li', function(){
                $('#country_name').val($(this).text());
                $('#countryList').fadeOut();
            });

        });
    </script>
@endsection