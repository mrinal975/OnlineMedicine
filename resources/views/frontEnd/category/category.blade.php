@extends('frontEnd.superMaster')
@section('title')
    Category Page
@endsection
@section('mainContent')
    <style>
        .search-box{
            width: 100%;
            position: relative;
            display: inline-block;
            font-size: 14px;
        }
        .result {
            position: absolute;
            z-index: 99;
            top: 100%;
            left: 135px;
            background: #FFF;
        }
        .search-box input[type="text"], .result{
            width: 100%;
            box-sizing: border-box;
        }
        .result{
            width: 45%;
            box-sizing: border-box;
        }
        .result table {
            width: 100%;
        }
        /* Formatting result items */
        .result table tr{
            margin: 0;
            padding: 7px 10px;
            border: 1px solid #CCCCCC;
            border-top: none;
            cursor: pointer;
        }
        .result table tr td:first-child{
            width: 10%;
            padding: 10px 0;
        }
        .result table tr td:nth-child(2){
            width: 75%;
        }
        .result table tr td:nth-child(2):hover{
            background: #f2f2f2;
        }

        @media  only screen and (min-width: 320px) and (max-width: 480px) {
            .result {
                position: absolute;
                z-index: 99;
                top: 46px;
                left: 12px;
                background: #FFF;
            }
            .result{
                width: 75%;
                box-sizing: border-box;
            }
            #productCategory{
                margin-top: 11px;
            }
            .mobile-margin{
                margin-top: 6px;
            }
            #search-body-mobile{
                margin-left: -35px;
            }
            #upload-btn{
                font-size: 11px;
                padding-left: 4px;
                padding-right: 4px;
                margin-top: 21px;
            }

        }
    </style>
    <div role="main" class="main">
        <div class="container" style="padding-top: 30px;">
            <div class="row">

                <div class="col-md-9 col-md-push-3">
                    <!--<h3 class="h1 heading-primary mt-xl">Sexual Wellbeing</h3>-->
                    <div id="grid-list-view">
                        <ul class="products-list">
                            @foreach($products as $product)
                            <li>
                                <div class="product product-sm">
                                    <figure class="product-image-area">
                                        <a href="{{url('/single-Product/'.$product->id)}}" title="Endurex (box)20pcs" class="product-image">
                                            <img src="{{asset($product->productImage)}}" alt="Endurex (box)20pcs"/>
                                        </a>
                                    </figure>
                                    <div class="product-details-area">
                                        <h2 class="product-name"><a href="{{url('/single-Product/'.$product->id)}}" title="Endurex (box)20pcs">{{$product->productName}}</a></h2>

                                        <div class="product-short-desc">
                                            <p clase="product-short-desc-sub">Company :  {{$product->brand}}</p>
                                        </div>

                                        <div class="product-price-box">
                                            <!-- <span class="old-price">৳1200</span> -->
                                            <span class="product-price">{{$product->productPrice}} ৳</span>
                                        </div>

                                        <div class="product-actions">
                                            <button id="addbtn" class="add-to-cart add-to-cart" value="{{$product->id}}">
                                                <span class="addToBag">
                                                <i class="fa fa-shopping-cart"></i>
                                                Add to Bag</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                                @endforeach
                        </ul>
                    </div>
                    <div class="toolbar-bottom">
                        <div class="toolbar">
                            <div class="sorter">
                                <ul class="pagination">
                                    <li class="pagination active">
                                        {{$products->links()}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <aside class="col-md-3 col-md-pull-9 sidebar shop-sidebar">
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" href="#panel-filter-category">
                                        Categories
                                    </a>
                                </h4>
                            </div>
                            <div id="panel-filter-category" class="accordion-body collapse in">
                                <div class="panel-body">
                                    <ul>
                                        @foreach($subCatFromCat as $subNam)
<!--                                         /category/{cat}/subcategory/{subcat} -->

                                        <li><a href="{{url('/category/'.$subNam->categoryId.'/subcategory/'.$subNam->id)}}">{{$subNam->subcategoryName}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                </aside>
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
@endsection