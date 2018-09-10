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

        {{--<div class="container-fluid" style="position: relative">--}}
            {{--<div class="row search">--}}
                {{--<div style="background-color: #f0f0ed; width: 100%; padding: 5px 0;">--}}
                    {{--<div class="container">--}}
                        {{--<div class="col-sm-9  col-xs-9 text-center" id="search-body-mobile" style="border-right: 1px solid #777;">--}}
                            {{--<div class="col-sm-9">--}}

                                {{--<input type="text" id="example-ajax-post" placeholder="Search here..." class="form-control"/>--}}
                                {{--<input type="hidden" id="example-ajax-token" value="i2F3Fhu9DzYv4YIenUfc8XuDvIeEbTqB9BhtwTqo"/>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-3">--}}

                                {{--<select id="productCategory" name="categoryId" class="form-control">--}}
                                    {{--<option value="1">Brand Name</option>--}}
                                    {{--<option value="2">Generic Name</option>--}}
                                {{--</select>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-sm-3 col-xs-3 text-center mobile-margin">--}}
                            {{--<a href="http://epharma.com.bd/prescription-upload">--}}
                                {{--<button style="background-color: #006394" class="btn btn-primary btn-md" id="upload-btn" >Upload Prescription</button>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                        {{--<div class="clearfix"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div id="search-results" class="result"></div>--}}
            {{--</div>--}}
        {{--</div>--}}
        <div class="container" style="padding-top: 30px;">
            <div class="row">

                <div class="col-md-9 col-md-push-3">
                    <div class="toolbar mb-none">
                        <div class="sorter">
                            <div class="sort-by">
                                <label>Sort by:</label>
                                <select name="short_by">
                                    <option value="id" selected>Position</option>
                                    <option value="name">Name</option>
                                    <option value="price">Price</option>
                                </select>
                            </div>

                            <div class="view-mode">
                                <ul>
                                    <li class="act">
                                    <span href="#" id="list" title="List">
                                        <i class="fa fa-list-ul"></i>
                                    </span>
                                    </li>
                                    <li>
                                    <span id="grid" title="Grid">
                                        <i class="fa fa-th"></i>
                                    </span>
                                    </li>
                                </ul>

                            </div>

                            <ul class="pagination">
                                <li class="pagination active"><ul class="pagination">

                                        <li class="disabled"><span>&laquo;</span></li>





                                        <li class="active"><span>1</span></li>
                                        <li><a href="http://epharma.com.bd/category/43?page=2">2</a></li>
                                        <li><a href="http://epharma.com.bd/category/43?page=3">3</a></li>


                                        <li><a href="http://epharma.com.bd/category/43?page=2" rel="next">&raquo;</a></li>
                                    </ul>
                                </li>
                            </ul>

                            <div class="limiter">
                                <label>Show:</label>

                                <select id="billing:region_id" class="validate-select" name="limit"><option value="12" selected="selected">12</option><option value="24">24</option><option value="36">36</option></select>
                            </div>
                        </div>
                    </div>
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
                                            <span class="old-price">৳1200</span>
                                            <span class="product-price">{{$product->productName}}</span>
                                        </div>

                                        <div class="product-actions">
                                            <button class="add-to-cart add-to-cart" value="{{$product->id}}">
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
                        <ul class="products-grid columns4" style="display: none;">
                            <li>
                                <div class="product">
                                    <figure class="product-image-area">
                                        <a href="http://epharma.com.bd/product/1489" title="Endurex (box)20pcs" class="product-image">

                                            <img src="http://epharma.com.bd/storage/tb_IzsSWlitdnQcpjdpxlZ7BI2Sp12mINJgyEDeIKCM.jpeg" alt="Endurex (box)20pcs"/>

                                        </a>
                                        <div class="product-label">
                                            <span class="new">5%</span>
                                        </div>
                                    </figure>
                                    <div class="product-details-area">
                                        <h2 class="product-name"><a href="http://epharma.com.bd/product/1489" title="Endurex (box)20pcs">Endurex (box)20pcs</a></h2>
                                        <!--                                    <div class="product-ratings">
                                                                                <div class="ratings-box">
                                                                                    <div class="rating" style="width:60%"></div>
                                                                                </div>
                                                                            </div>-->
                                        <div class="product-price-box">
                                            <span class="old-price">৳1200</span>
                                            <span class="product-price">৳1140</span>
                                        </div>

                                        <div class="product-actions">
                                            <a href="#" class="addtocart related-btn-cart" title="Add to Bag" rel_id="1489" price="1140" rel_token="i2F3Fhu9DzYv4YIenUfc8XuDvIeEbTqB9BhtwTqo" rel_qty="1">
                                                <i class="fa fa-shopping-cart"></i>
                                                <span>Add to Bag</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product">
                                    <figure class="product-image-area">
                                        <a href="http://epharma.com.bd/product/1502" title="Nishat (box) 50pcs" class="product-image">

                                            <img src="http://epharma.com.bd/storage/tb_7542A6C2-67A9-422E-9575-076C1A68D6FE.jpg" alt="Nishat (box) 50pcs"/>

                                        </a>
                                        <div class="product-label">
                                            <span class="new">5%</span>
                                        </div>
                                    </figure>
                                    <div class="product-details-area">
                                        <h2 class="product-name"><a href="http://epharma.com.bd/product/1502" title="Nishat (box) 50pcs">Nishat (box) 50pcs</a></h2>
                                        <!--                                    <div class="product-ratings">
                                                                                <div class="ratings-box">
                                                                                    <div class="rating" style="width:60%"></div>
                                                                                </div>
                                                                            </div>-->
                                        <div class="product-price-box">
                                            <span class="old-price">৳1150</span>
                                            <span class="product-price">৳1092.5</span>
                                        </div>

                                        <div class="product-actions">
                                            <a href="#" class="addtocart related-btn-cart" title="Add to Bag" rel_id="1502" price="1092.5" rel_token="i2F3Fhu9DzYv4YIenUfc8XuDvIeEbTqB9BhtwTqo" rel_qty="1">
                                                <i class="fa fa-shopping-cart"></i>
                                                <span>Add to Bag</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product">
                                    <figure class="product-image-area">
                                        <a href="http://epharma.com.bd/product/6581" title="Enegra 100mg 4pcs" class="product-image">

                                            <img src="http://epharma.com.bd/storage/tb_bHaKMxK7Ejkc9pwUIZU7UnHybGxIj9m3CxWjYbGT.jpeg" alt="Enegra 100mg 4pcs"/>

                                        </a>
                                        <div class="product-label">
                                            <span class="new">5%</span>
                                        </div>
                                    </figure>
                                    <div class="product-details-area">
                                        <h2 class="product-name"><a href="http://epharma.com.bd/product/6581" title="Enegra 100mg 4pcs">Enegra 100mg 4pcs</a></h2>
                                        <!--                                    <div class="product-ratings">
                                                                                <div class="ratings-box">
                                                                                    <div class="rating" style="width:60%"></div>
                                                                                </div>
                                                                            </div>-->
                                        <div class="product-price-box">
                                            <span class="old-price">৳200</span>
                                            <span class="product-price">৳190</span>
                                        </div>

                                        <div class="product-actions">
                                            <a href="#" class="addtocart related-btn-cart" title="Add to Bag" rel_id="6581" price="190" rel_token="i2F3Fhu9DzYv4YIenUfc8XuDvIeEbTqB9BhtwTqo" rel_qty="1">
                                                <i class="fa fa-shopping-cart"></i>
                                                <span>Add to Bag</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product">
                                    <figure class="product-image-area">
                                        <a href="http://epharma.com.bd/product/6585" title="Enegra 50mg 4pcs" class="product-image">

                                            <img src="http://epharma.com.bd/storage/tb_DG2IQVMUGSAalXRg3wJKTKbbr7ZAgaJoOhd6874s.jpeg" alt="Enegra 50mg 4pcs"/>

                                        </a>
                                        <div class="product-label">
                                            <span class="new">5%</span>
                                        </div>
                                    </figure>
                                    <div class="product-details-area">
                                        <h2 class="product-name"><a href="http://epharma.com.bd/product/6585" title="Enegra 50mg 4pcs">Enegra 50mg 4pcs</a></h2>
                                        <!--                                    <div class="product-ratings">
                                                                                <div class="ratings-box">
                                                                                    <div class="rating" style="width:60%"></div>
                                                                                </div>
                                                                            </div>-->
                                        <div class="product-price-box">
                                            <span class="old-price">৳120</span>
                                            <span class="product-price">৳114</span>
                                        </div>

                                        <div class="product-actions">
                                            <a href="#" class="addtocart related-btn-cart" title="Add to Bag" rel_id="6585" price="114" rel_token="i2F3Fhu9DzYv4YIenUfc8XuDvIeEbTqB9BhtwTqo" rel_qty="1">
                                                <i class="fa fa-shopping-cart"></i>
                                                <span>Add to Bag</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product">
                                    <figure class="product-image-area">
                                        <a href="http://epharma.com.bd/product/6624" title="Adafil 10 mg 4pcs" class="product-image">

                                            <img src="http://epharma.com.bd/storage/tb_B3dRR5Ltlvmz7YHP7yJnGJd3dVHG6dmuvek3O2T2.jpeg" alt="Adafil 10 mg 4pcs"/>

                                        </a>
                                        <div class="product-label">
                                            <span class="new">5%</span>
                                        </div>
                                    </figure>
                                    <div class="product-details-area">
                                        <h2 class="product-name"><a href="http://epharma.com.bd/product/6624" title="Adafil 10 mg 4pcs">Adafil 10 mg 4pcs</a></h2>
                                        <!--                                    <div class="product-ratings">
                                                                                <div class="ratings-box">
                                                                                    <div class="rating" style="width:60%"></div>
                                                                                </div>
                                                                            </div>-->
                                        <div class="product-price-box">
                                            <span class="old-price">৳140</span>
                                            <span class="product-price">৳133</span>
                                        </div>

                                        <div class="product-actions">
                                            <a href="#" class="addtocart related-btn-cart" title="Add to Bag" rel_id="6624" price="133" rel_token="i2F3Fhu9DzYv4YIenUfc8XuDvIeEbTqB9BhtwTqo" rel_qty="1">
                                                <i class="fa fa-shopping-cart"></i>
                                                <span>Add to Bag</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product">
                                    <figure class="product-image-area">
                                        <a href="http://epharma.com.bd/product/6628" title="Adafil 20mg 4pcs" class="product-image">

                                            <img src="http://epharma.com.bd/storage/tb_ZIKq6PzoiJJgMrYutkm9bXYprZ8ckQKxk3ZND8a2.jpeg" alt="Adafil 20mg 4pcs"/>

                                        </a>
                                        <div class="product-label">
                                            <span class="new">5%</span>
                                        </div>
                                    </figure>
                                    <div class="product-details-area">
                                        <h2 class="product-name"><a href="http://epharma.com.bd/product/6628" title="Adafil 20mg 4pcs">Adafil 20mg 4pcs</a></h2>
                                        <!--                                    <div class="product-ratings">
                                                                                <div class="ratings-box">
                                                                                    <div class="rating" style="width:60%"></div>
                                                                                </div>
                                                                            </div>-->
                                        <div class="product-price-box">
                                            <span class="old-price">৳240</span>
                                            <span class="product-price">৳228</span>
                                        </div>

                                        <div class="product-actions">
                                            <a href="#" class="addtocart related-btn-cart" title="Add to Bag" rel_id="6628" price="228" rel_token="i2F3Fhu9DzYv4YIenUfc8XuDvIeEbTqB9BhtwTqo" rel_qty="1">
                                                <i class="fa fa-shopping-cart"></i>
                                                <span>Add to Bag</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product">
                                    <figure class="product-image-area">
                                        <a href="http://epharma.com.bd/product/6629" title="Pawar 30mg 10pcs" class="product-image">

                                            <img src="http://epharma.com.bd/storage/tb_i8RGSl1WjUruj8t4Kr33kopkJkbhAQPRqknqr5Iv.jpeg" alt="Pawar 30mg 10pcs"/>

                                        </a>
                                        <div class="product-label">
                                            <span class="new">5%</span>
                                        </div>
                                    </figure>
                                    <div class="product-details-area">
                                        <h2 class="product-name"><a href="http://epharma.com.bd/product/6629" title="Pawar 30mg 10pcs">Pawar 30mg 10pcs</a></h2>
                                        <!--                                    <div class="product-ratings">
                                                                                <div class="ratings-box">
                                                                                    <div class="rating" style="width:60%"></div>
                                                                                </div>
                                                                            </div>-->
                                        <div class="product-price-box">
                                            <span class="old-price">৳350</span>
                                            <span class="product-price">৳332.5</span>
                                        </div>

                                        <div class="product-actions">
                                            <a href="#" class="addtocart related-btn-cart" title="Add to Bag" rel_id="6629" price="332.5" rel_token="i2F3Fhu9DzYv4YIenUfc8XuDvIeEbTqB9BhtwTqo" rel_qty="10">
                                                <i class="fa fa-shopping-cart"></i>
                                                <span>Add to Bag</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product">
                                    <figure class="product-image-area">
                                        <a href="http://epharma.com.bd/product/6705" title="Vigorex 50mg 4pcs" class="product-image">

                                            <img src="http://epharma.com.bd/storage/tb_tlpUQtwGAP81uZouHeJgixQ4FOsddH4MAxybqjmR.jpeg" alt="Vigorex 50mg 4pcs"/>

                                        </a>
                                        <div class="product-label">
                                            <span class="new">5%</span>
                                        </div>
                                    </figure>
                                    <div class="product-details-area">
                                        <h2 class="product-name"><a href="http://epharma.com.bd/product/6705" title="Vigorex 50mg 4pcs">Vigorex 50mg 4pcs</a></h2>
                                        <!--                                    <div class="product-ratings">
                                                                                <div class="ratings-box">
                                                                                    <div class="rating" style="width:60%"></div>
                                                                                </div>
                                                                            </div>-->
                                        <div class="product-price-box">
                                            <span class="old-price">৳120</span>
                                            <span class="product-price">৳114</span>
                                        </div>

                                        <div class="product-actions">
                                            <a href="#" class="addtocart related-btn-cart" title="Add to Bag" rel_id="6705" price="114" rel_token="i2F3Fhu9DzYv4YIenUfc8XuDvIeEbTqB9BhtwTqo" rel_qty="1">
                                                <i class="fa fa-shopping-cart"></i>
                                                <span>Add to Bag</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product">
                                    <figure class="product-image-area">
                                        <a href="http://epharma.com.bd/product/8017" title="J Hormolin 10pcs" class="product-image">

                                            <img src="http://epharma.com.bd/storage/tb_nZElQMD0TPR2tlxPWFLQb0mGPN5r4JURNkWffda3.jpeg" alt="J Hormolin 10pcs"/>

                                        </a>
                                        <div class="product-label">
                                            <span class="new">5%</span>
                                        </div>
                                    </figure>
                                    <div class="product-details-area">
                                        <h2 class="product-name"><a href="http://epharma.com.bd/product/8017" title="J Hormolin 10pcs">J Hormolin 10pcs</a></h2>
                                        <!--                                    <div class="product-ratings">
                                                                                <div class="ratings-box">
                                                                                    <div class="rating" style="width:60%"></div>
                                                                                </div>
                                                                            </div>-->
                                        <div class="product-price-box">
                                            <span class="old-price">৳300</span>
                                            <span class="product-price">৳285</span>
                                        </div>

                                        <div class="product-actions">
                                            <a href="#" class="addtocart related-btn-cart" title="Add to Bag" rel_id="8017" price="285" rel_token="i2F3Fhu9DzYv4YIenUfc8XuDvIeEbTqB9BhtwTqo" rel_qty="1">
                                                <i class="fa fa-shopping-cart"></i>
                                                <span>Add to Bag</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product">
                                    <figure class="product-image-area">
                                        <a href="http://epharma.com.bd/product/14228" title="Dapotin 30mg 10pcs" class="product-image">

                                            <img src="http://epharma.com.bd/storage/tb_v1aO1mpcCyfddW1w2BsAUxycWca8H2O9MBMqyXhm.jpeg" alt="Dapotin 30mg 10pcs"/>

                                        </a>
                                        <div class="product-label">
                                            <span class="new">5%</span>
                                        </div>
                                    </figure>
                                    <div class="product-details-area">
                                        <h2 class="product-name"><a href="http://epharma.com.bd/product/14228" title="Dapotin 30mg 10pcs">Dapotin 30mg 10pcs</a></h2>
                                        <!--                                    <div class="product-ratings">
                                                                                <div class="ratings-box">
                                                                                    <div class="rating" style="width:60%"></div>
                                                                                </div>
                                                                            </div>-->
                                        <div class="product-price-box">
                                            <span class="old-price">৳300</span>
                                            <span class="product-price">৳285</span>
                                        </div>

                                        <div class="product-actions">
                                            <a href="#" class="addtocart related-btn-cart" title="Add to Bag" rel_id="14228" price="285" rel_token="i2F3Fhu9DzYv4YIenUfc8XuDvIeEbTqB9BhtwTqo" rel_qty="1">
                                                <i class="fa fa-shopping-cart"></i>
                                                <span>Add to Bag</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product">
                                    <figure class="product-image-area">
                                        <a href="http://epharma.com.bd/product/14527" title="Durex Strawberry Condom" class="product-image">

                                            <img src="http://epharma.com.bd/storage/tb_durex_strawberry.jpg" alt="Durex Strawberry Condom"/>

                                        </a>
                                        <div class="product-label">
                                            <span class="new">5%</span>
                                        </div>
                                    </figure>
                                    <div class="product-details-area">
                                        <h2 class="product-name"><a href="http://epharma.com.bd/product/14527" title="Durex Strawberry Condom">Durex Strawberry Condom</a></h2>
                                        <!--                                    <div class="product-ratings">
                                                                                <div class="ratings-box">
                                                                                    <div class="rating" style="width:60%"></div>
                                                                                </div>
                                                                            </div>-->
                                        <div class="product-price-box">
                                            <span class="old-price">৳100</span>
                                            <span class="product-price">৳95</span>
                                        </div>

                                        <div class="product-actions">
                                            <a href="#" class="addtocart related-btn-cart" title="Add to Bag" rel_id="14527" price="95" rel_token="i2F3Fhu9DzYv4YIenUfc8XuDvIeEbTqB9BhtwTqo" rel_qty="1">
                                                <i class="fa fa-shopping-cart"></i>
                                                <span>Add to Bag</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product">
                                    <figure class="product-image-area">
                                        <a href="http://epharma.com.bd/product/14528" title="Durex Extra Safe Condom" class="product-image">

                                            <img src="http://epharma.com.bd/storage/tb_durex-extra-safe-3.jpg" alt="Durex Extra Safe Condom"/>

                                        </a>
                                        <div class="product-label">
                                            <span class="new">5%</span>
                                        </div>
                                    </figure>
                                    <div class="product-details-area">
                                        <h2 class="product-name"><a href="http://epharma.com.bd/product/14528" title="Durex Extra Safe Condom">Durex Extra Safe Condom</a></h2>
                                        <!--                                    <div class="product-ratings">
                                                                                <div class="ratings-box">
                                                                                    <div class="rating" style="width:60%"></div>
                                                                                </div>
                                                                            </div>-->
                                        <div class="product-price-box">
                                            <span class="old-price">৳100</span>
                                            <span class="product-price">৳95</span>
                                        </div>

                                        <div class="product-actions">
                                            <a href="#" class="addtocart related-btn-cart" title="Add to Bag" rel_id="14528" price="95" rel_token="i2F3Fhu9DzYv4YIenUfc8XuDvIeEbTqB9BhtwTqo" rel_qty="1">
                                                <i class="fa fa-shopping-cart"></i>
                                                <span>Add to Bag</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>

                    </div>
                    <div class="toolbar-bottom">
                        <div class="toolbar">
                            <div class="sorter">
                                <ul class="pagination">
                                    <li class="pagination active"><ul class="pagination">

                                            <li class="disabled"><span>&laquo;</span></li>





                                            <li class="active"><span>1</span></li>
                                            <li><a href="http://epharma.com.bd/category/43?page=2">2</a></li>
                                            <li><a href="http://epharma.com.bd/category/43?page=3">3</a></li>


                                            <li><a href="http://epharma.com.bd/category/43?page=2" rel="next">&raquo;</a></li>
                                        </ul>
                                    </li>
                                </ul>

                                <div class="limiter">
                                    <label>Show:</label>

                                    <select id="billing:region_id" class="validate-select" name="limit"><option value="12" selected="selected">12</option><option value="24">24</option><option value="36">36</option></select>
                                </div>
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
                                        <li><a href="{{url('/category/'.$subNam->categoryId)}}">{{$subNam->subcategoryName}}</a></li>
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