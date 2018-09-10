@extends('frontEnd.superMaster')
@section('title')
    Main | Home Page
@endsection
@section('carousel')
    <header id="myCarousel" class="carousel slide">
        <!-- Wrapper for Slides -->
        <div class="carousel-buttons">
            <div class="search">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="form-section">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group search-box">
                                            <div class="serchtile"></div>
                                            <input type="text"  name="country_name" id="country_name" placeholder="Search here..." class="form-control"/>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="serchtile"></div>
                                            <select id="productCategory" name="categoryId" class="form-control">
                                                <option value="1">Brand Name</option>
                                                <option value="2">Generic Name</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="{{url('/prescription-upload')}}">
                                            <button class="btn pull-right" style="background-color: #00334d; color: #FFF; width: 100%; margin-top: 17px; line-height: 23px;">Upload Prescription</button>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">

                                </div>
                            </div>
                            <div id="search-results" class="result"></div>
                            <div id="countryList">
                            </div>
                            {{ csrf_field() }}
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image: url('carousel/4.jpg'); background-size: 100% 100%;"></div>
            </div>
            <div class="item ">
                <div class="fill" style="background-image: url('carousel/2.jpg'); background-size: 100% 100%;"></div>
            </div>
            <div class="item ">
                <div class="fill" style="background-image: url('carousel/5.jpg'); background-size: 100% 100%;"></div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
    </header>
@endsection

@section('mainContent')
    <div class="clearfix">&nbsp;</div>
    <div class="container mb-lg">
        <h2 class="slider-title">
            <span class="inline-title">Feature Product</span>
            <span class="line"></span>
        </h2>

        <div class="owl-carousel owl-theme manual new-products-carousel">
            @foreach($products as $product)
            <div class="product">
            <figure class="product-image-area">
            <a href="{{url('/single-Product/'.$product->id)}}" title="Product Name" class="product-image">

            <img src="{{asset($product->productImage)}}" alt="{{$product->productName}}" class="responsive pdt-Img img-responsive">

            </a>
            <div class="product-label">
            <span class="new">5%</span>
            </div>
            </figure>
            <div class="product-details-area">
            <h2 class="product-name">
            <a href="" title="Product Name" class="name-item">{{$product->productName}}</a>
            </h2>
            <div class="product-price-box">

            <span class="product-price">৳{{$product->productPrice}}</span>
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
                @endforeach
        </div>

    </div>
    @foreach($Category as $cat)
    <div class="container mb-lg">
        <h2 class="slider-title">
            <span class="inline-title">{{$cat->categoryName}}</span>
            <span class="line"></span>
        </h2>

        <div class="owl-carousel owl-theme manual new-products-carousel">
            @foreach($subcategory as $subcat)
                @if($subcat->categoryId==$cat->id)
                    @foreach($products as $product)
                        @if($subcat->id==$product->subcategoryId)

            <div class="product">
                <figure class="product-image-area">
                    <a href="{{url('/single-Product/'.$product->id)}}" title="Adhesive Plaster (1box)" class="product-image">
                        <img src="{{asset($product->productImage)}}" alt="{{$product->productName}}">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="{{url('/single-Product/'.$product->id)}}" title="Product Name">{{$product->productName}}</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳450</span>
                        <span class="product-price">{{$product->productPrice}}</span>
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
                        @endif
                    @endforeach
                @endif
            @endforeach
        </div>

    </div>
    <div class="clearfix">&nbsp;</div>
@endforeach

@endsection
@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
    <!-- autocomplete -->
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
