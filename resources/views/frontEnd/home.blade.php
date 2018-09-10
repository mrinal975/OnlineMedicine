@extends('frontEnd.superMaster')
@section('title')
    Main | Home Page
@endsection
@section('carousel')
    <div class="carousel-inner">
        <div class="item active">
            <div class="fill" style="background-image: url('http://epharma.com.bd/storage/POLsntdaDkM8RIddmJA6sUMp5ISKz57UaXAEIBog.jpeg'); background-size: 100% 100%;"></div>
        </div>
        <div class="item ">
            <div class="fill" style="background-image: url('http://epharma.com.bd/storage/6EeLOf0u9Bwpyb0wkZCkPwTksRVbz8tYLpLuxv2b.jpeg'); background-size: 100% 100%;"></div>
        </div>
        <div class="item ">
            <div class="fill" style="background-image: url('http://epharma.com.bd/storage/cVuIeSmn7DJ8johAe9eensyuOAicgoTCsFISMXio.jpeg'); background-size: 100% 100%;"></div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>

@endsection

@section('mainContent')
    <div class="container mb-lg">
        <h2 class="slider-title">
            <span class="inline-title">Feature Product</span>
            <span class="line"></span>
        </h2>

        <div class="owl-carousel owl-theme manual new-products-carousel">
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/5533" title="Product Name" class="product-image">

                        <img src="http://epharma.com.bd/storage/tb_7JuPyztdmKqMTQN0fqGWNay8kruCpsF7r7pWhebj.jpeg" alt="Product Name">

                    </a>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name">
                        <a href="http://epharma.com.bd/product/5533" title="Product Name" class="name-item">Norpill 1</a>
                    </h2>
                    <!--                                <div class="product-ratings">
                                                        <div class="ratings-box">
                                                            <div class="rating" style="width:0%"></div>
                                                        </div>
                                                    </div>-->
                    <div class="product-price-box">

                        <span class="product-price">৳70</span>
                    </div>

                    <div class="product-actions">
                        <!--                                    <a href="#" class="addtowishlist" title="Add to Wishlist">
                                                                <i class="fa fa-heart"></i>
                                                            </a>-->
                        <a href="#" class="addtocart feature-btn-cart" title="Add to Bag" price="70" fet_id="5533" fet_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" fet_qty="1">
                            <i class="fa fa-shopping-cart icon-cart"></i>
                            <span class="addToBag">Add to Bag</span>
                        </a>
                        <!--                                    <a href="#" class="comparelink" title="Add to Compare">
                                                                <i class="glyphicon glyphicon-signal"></i>
                                                            </a>-->
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14305" title="Product Name" class="product-image">

                        <img src="http://epharma.com.bd/storage/tb_main_1.jpg" alt="Product Name">

                    </a>
                    <div class="product-label">
                        <span class="new">10%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name">
                        <a href="http://epharma.com.bd/product/14305" title="Product Name" class="name-item">GlucoSure Star (Blood Glucose Monitoring Machine set)</a>
                    </h2>
                    <!--                                <div class="product-ratings">
                                                        <div class="ratings-box">
                                                            <div class="rating" style="width:0%"></div>
                                                        </div>
                                                    </div>-->
                    <div class="product-price-box">
                        <span class="old-price">৳1500</span>

                        <span class="product-price">৳1350</span>
                    </div>

                    <div class="product-actions">
                        <!--                                    <a href="#" class="addtowishlist" title="Add to Wishlist">
                                                                <i class="fa fa-heart"></i>
                                                            </a>-->
                        <a href="#" class="addtocart feature-btn-cart" title="Add to Bag" price="1350" fet_id="14305" fet_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" fet_qty="1">
                            <i class="fa fa-shopping-cart icon-cart"></i>
                            <span class="addToBag">Add to Bag</span>
                        </a>
                        <!--                                    <a href="#" class="comparelink" title="Add to Compare">
                                                                <i class="glyphicon glyphicon-signal"></i>
                                                            </a>-->
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14382" title="Product Name" class="product-image">

                        <img src="http://epharma.com.bd/storage/tb_sNTFaWJXzT64Cxy7k4xljwFhFUeVK0Tf3h4JvHo0.jpeg" alt="Product Name">

                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name">
                        <a href="http://epharma.com.bd/product/14382" title="Product Name" class="name-item">Accu-Chek Active</a>
                    </h2>
                    <!--                                <div class="product-ratings">
                                                        <div class="ratings-box">
                                                            <div class="rating" style="width:0%"></div>
                                                        </div>
                                                    </div>-->
                    <div class="product-price-box">
                        <span class="old-price">৳2395</span>

                        <span class="product-price">৳2275.25</span>
                    </div>

                    <div class="product-actions">
                        <!--                                    <a href="#" class="addtowishlist" title="Add to Wishlist">
                                                                <i class="fa fa-heart"></i>
                                                            </a>-->
                        <a href="#" class="addtocart feature-btn-cart" title="Add to Bag" price="2275.25" fet_id="14382" fet_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" fet_qty="1">
                            <i class="fa fa-shopping-cart icon-cart"></i>
                            <span class="addToBag">Add to Bag</span>
                        </a>
                        <!--                                    <a href="#" class="comparelink" title="Add to Compare">
                                                                <i class="glyphicon glyphicon-signal"></i>
                                                            </a>-->
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14577" title="Product Name" class="product-image">

                        <img src="http://epharma.com.bd/storage/tb_family_first_aid_box.jpg" alt="Product Name">

                    </a>
                    <div class="product-label">
                        <span class="new">7%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name">
                        <a href="http://epharma.com.bd/product/14577" title="Product Name" class="name-item">Family First Aid Box</a>
                    </h2>
                    <!--                                <div class="product-ratings">
                                                        <div class="ratings-box">
                                                            <div class="rating" style="width:0%"></div>
                                                        </div>
                                                    </div>-->
                    <div class="product-price-box">
                        <span class="old-price">৳430</span>

                        <span class="product-price">৳399.9</span>
                    </div>

                    <div class="product-actions">
                        <!--                                    <a href="#" class="addtowishlist" title="Add to Wishlist">
                                                                <i class="fa fa-heart"></i>
                                                            </a>-->
                        <a href="#" class="addtocart feature-btn-cart" title="Add to Bag" price="399.9" fet_id="14577" fet_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" fet_qty="1">
                            <i class="fa fa-shopping-cart icon-cart"></i>
                            <span class="addToBag">Add to Bag</span>
                        </a>
                        <!--                                    <a href="#" class="comparelink" title="Add to Compare">
                                                                <i class="glyphicon glyphicon-signal"></i>
                                                            </a>-->
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14640" title="Product Name" class="product-image">

                        <img src="http://epharma.com.bd/storage/tb_avogain.jpg" alt="Product Name">

                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name">
                        <a href="http://epharma.com.bd/product/14640" title="Product Name" class="name-item">Avogain 5% Solution</a>
                    </h2>
                    <!--                                <div class="product-ratings">
                                                        <div class="ratings-box">
                                                            <div class="rating" style="width:0%"></div>
                                                        </div>
                                                    </div>-->
                    <div class="product-price-box">
                        <span class="old-price">৳1595</span>

                        <span class="product-price">৳1515.25</span>
                    </div>

                    <div class="product-actions">
                        <!--                                    <a href="#" class="addtowishlist" title="Add to Wishlist">
                                                                <i class="fa fa-heart"></i>
                                                            </a>-->
                        <a href="#" class="addtocart feature-btn-cart" title="Add to Bag" price="1515.25" fet_id="14640" fet_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" fet_qty="1">
                            <i class="fa fa-shopping-cart icon-cart"></i>
                            <span class="addToBag">Add to Bag</span>
                        </a>
                        <!--                                    <a href="#" class="comparelink" title="Add to Compare">
                                                                <i class="glyphicon glyphicon-signal"></i>
                                                            </a>-->
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14651" title="Product Name" class="product-image">

                        <img src="http://epharma.com.bd/storage/tb_Digital_wight_machine_new.jpg" alt="Product Name">

                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name">
                        <a href="http://epharma.com.bd/product/14651" title="Product Name" class="name-item">Digital Weight Scale -Glass</a>
                    </h2>
                    <!--                                <div class="product-ratings">
                                                        <div class="ratings-box">
                                                            <div class="rating" style="width:0%"></div>
                                                        </div>
                                                    </div>-->
                    <div class="product-price-box">
                        <span class="old-price">৳1500</span>

                        <span class="product-price">৳1425</span>
                    </div>

                    <div class="product-actions">
                        <!--                                    <a href="#" class="addtowishlist" title="Add to Wishlist">
                                                                <i class="fa fa-heart"></i>
                                                            </a>-->
                        <a href="#" class="addtocart feature-btn-cart" title="Add to Bag" price="1425" fet_id="14651" fet_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" fet_qty="1">
                            <i class="fa fa-shopping-cart icon-cart"></i>
                            <span class="addToBag">Add to Bag</span>
                        </a>
                        <!--                                    <a href="#" class="comparelink" title="Add to Compare">
                                                                <i class="glyphicon glyphicon-signal"></i>
                                                            </a>-->
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14684" title="Product Name" class="product-image">

                        <img src="http://epharma.com.bd/storage/tb_noreva-aquareva-24h-18349.jpg" alt="Product Name">

                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name">
                        <a href="http://epharma.com.bd/product/14684" title="Product Name" class="name-item">Noreva aquareva 400ml</a>
                    </h2>
                    <!--                                <div class="product-ratings">
                                                        <div class="ratings-box">
                                                            <div class="rating" style="width:0%"></div>
                                                        </div>
                                                    </div>-->
                    <div class="product-price-box">
                        <span class="old-price">৳1800</span>

                        <span class="product-price">৳1710</span>
                    </div>

                    <div class="product-actions">
                        <!--                                    <a href="#" class="addtowishlist" title="Add to Wishlist">
                                                                <i class="fa fa-heart"></i>
                                                            </a>-->
                        <a href="#" class="addtocart feature-btn-cart" title="Add to Bag" price="1710" fet_id="14684" fet_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" fet_qty="1">
                            <i class="fa fa-shopping-cart icon-cart"></i>
                            <span class="addToBag">Add to Bag</span>
                        </a>
                        <!--                                    <a href="#" class="comparelink" title="Add to Compare">
                                                                <i class="glyphicon glyphicon-signal"></i>
                                                            </a>-->
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14745" title="Product Name" class="product-image">

                        <img src="http://epharma.com.bd/storage/tb_E5WXbEiBGILICzwBCyKDkvBzlJhxKE2q6yDfs7UL.jpeg" alt="Product Name">

                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name">
                        <a href="http://epharma.com.bd/product/14745" title="Product Name" class="name-item">Omron Intellisense JPN 2(Digital Blood Pressure Machine)</a>
                    </h2>
                    <!--                                <div class="product-ratings">
                                                        <div class="ratings-box">
                                                            <div class="rating" style="width:0%"></div>
                                                        </div>
                                                    </div>-->
                    <div class="product-price-box">
                        <span class="old-price">৳4100</span>

                        <span class="product-price">৳3895</span>
                    </div>

                    <div class="product-actions">
                        <!--                                    <a href="#" class="addtowishlist" title="Add to Wishlist">
                                                                <i class="fa fa-heart"></i>
                                                            </a>-->
                        <a href="#" class="addtocart feature-btn-cart" title="Add to Bag" price="3895" fet_id="14745" fet_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" fet_qty="1">
                            <i class="fa fa-shopping-cart icon-cart"></i>
                            <span class="addToBag">Add to Bag</span>
                        </a>
                        <!--                                    <a href="#" class="comparelink" title="Add to Compare">
                                                                <i class="glyphicon glyphicon-signal"></i>
                                                            </a>-->
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14907" title="Product Name" class="product-image">

                        <img src="http://epharma.com.bd/storage/tb_re-hair-shampoo-extra-300-ml-Copy.jpg" alt="Product Name">

                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name">
                        <a href="http://epharma.com.bd/product/14907" title="Product Name" class="name-item">Re-Hair Shampoo Extra 300 ml</a>
                    </h2>
                    <!--                                <div class="product-ratings">
                                                        <div class="ratings-box">
                                                            <div class="rating" style="width:0%"></div>
                                                        </div>
                                                    </div>-->
                    <div class="product-price-box">
                        <span class="old-price">৳625</span>

                        <span class="product-price">৳593.75</span>
                    </div>

                    <div class="product-actions">
                        <!--                                    <a href="#" class="addtowishlist" title="Add to Wishlist">
                                                                <i class="fa fa-heart"></i>
                                                            </a>-->
                        <a href="#" class="addtocart feature-btn-cart" title="Add to Bag" price="593.75" fet_id="14907" fet_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" fet_qty="1">
                            <i class="fa fa-shopping-cart icon-cart"></i>
                            <span class="addToBag">Add to Bag</span>
                        </a>
                        <!--                                    <a href="#" class="comparelink" title="Add to Compare">
                                                                <i class="glyphicon glyphicon-signal"></i>
                                                            </a>-->
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14915" title="Product Name" class="product-image">

                        <img src="http://epharma.com.bd/storage/tb_first_aid_white2.jpg" alt="Product Name">

                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name">
                        <a href="http://epharma.com.bd/product/14915" title="Product Name" class="name-item">Family First Aid Box (white)</a>
                    </h2>
                    <!--                                <div class="product-ratings">
                                                        <div class="ratings-box">
                                                            <div class="rating" style="width:0%"></div>
                                                        </div>
                                                    </div>-->
                    <div class="product-price-box">
                        <span class="old-price">৳1055</span>

                        <span class="product-price">৳1002.25</span>
                    </div>

                    <div class="product-actions">
                        <!--                                    <a href="#" class="addtowishlist" title="Add to Wishlist">
                                                                <i class="fa fa-heart"></i>
                                                            </a>-->
                        <a href="#" class="addtocart feature-btn-cart" title="Add to Bag" price="1002.25" fet_id="14915" fet_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" fet_qty="1">
                            <i class="fa fa-shopping-cart icon-cart"></i>
                            <span class="addToBag">Add to Bag</span>
                        </a>
                        <!--                                    <a href="#" class="comparelink" title="Add to Compare">
                                                                <i class="glyphicon glyphicon-signal"></i>
                                                            </a>-->
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14929" title="Product Name" class="product-image">

                        <img src="http://epharma.com.bd/storage/tb_YAKXdOTqrUFvAMvHn6nZCNcRZvyFp0gwUg8rgY6a.jpeg" alt="Product Name">

                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name">
                        <a href="http://epharma.com.bd/product/14929" title="Product Name" class="name-item">OneTouch Verio Glucose meter</a>
                    </h2>
                    <!--                                <div class="product-ratings">
                                                        <div class="ratings-box">
                                                            <div class="rating" style="width:0%"></div>
                                                        </div>
                                                    </div>-->
                    <div class="product-price-box">
                        <span class="old-price">৳2750</span>

                        <span class="product-price">৳2612.5</span>
                    </div>

                    <div class="product-actions">
                        <!--                                    <a href="#" class="addtowishlist" title="Add to Wishlist">
                                                                <i class="fa fa-heart"></i>
                                                            </a>-->
                        <a href="#" class="addtocart feature-btn-cart" title="Add to Bag" price="2612.5" fet_id="14929" fet_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" fet_qty="1">
                            <i class="fa fa-shopping-cart icon-cart"></i>
                            <span class="addToBag">Add to Bag</span>
                        </a>
                        <!--                                    <a href="#" class="comparelink" title="Add to Compare">
                                                                <i class="glyphicon glyphicon-signal"></i>
                                                            </a>-->
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/16439" title="Product Name" class="product-image">

                        <img src="http://epharma.com.bd/storage/tb_wYsPdJmJtFNRqWUhTLb3AKeZlAteKikZ6abLYov0.jpeg" alt="Product Name">

                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name">
                        <a href="http://epharma.com.bd/product/16439" title="Product Name" class="name-item">AVÈNE Cleanance Expert Cream 40ml</a>
                    </h2>
                    <!--                                <div class="product-ratings">
                                                        <div class="ratings-box">
                                                            <div class="rating" style="width:0%"></div>
                                                        </div>
                                                    </div>-->
                    <div class="product-price-box">
                        <span class="old-price">৳1300</span>

                        <span class="product-price">৳1235</span>
                    </div>

                    <div class="product-actions">
                        <!--                                    <a href="#" class="addtowishlist" title="Add to Wishlist">
                                                                <i class="fa fa-heart"></i>
                                                            </a>-->
                        <a href="#" class="addtocart feature-btn-cart" title="Add to Bag" price="1235" fet_id="16439" fet_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" fet_qty="1">
                            <i class="fa fa-shopping-cart icon-cart"></i>
                            <span class="addToBag">Add to Bag</span>
                        </a>
                        <!--                                    <a href="#" class="comparelink" title="Add to Compare">
                                                                <i class="glyphicon glyphicon-signal"></i>
                                                            </a>-->
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/16440" title="Product Name" class="product-image">

                        <img src="http://epharma.com.bd/storage/tb_suniYyBdCWi3qzMqwLs3RDiOeUfpuLzhrnTJ4SHq.jpeg" alt="Product Name">

                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name">
                        <a href="http://epharma.com.bd/product/16440" title="Product Name" class="name-item">Noreva Exfoliac Acnomega 100 Cream 30ml</a>
                    </h2>
                    <!--                                <div class="product-ratings">
                                                        <div class="ratings-box">
                                                            <div class="rating" style="width:0%"></div>
                                                        </div>
                                                    </div>-->
                    <div class="product-price-box">
                        <span class="old-price">৳1300</span>

                        <span class="product-price">৳1235</span>
                    </div>

                    <div class="product-actions">
                        <!--                                    <a href="#" class="addtowishlist" title="Add to Wishlist">
                                                                <i class="fa fa-heart"></i>
                                                            </a>-->
                        <a href="#" class="addtocart feature-btn-cart" title="Add to Bag" price="1235" fet_id="16440" fet_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" fet_qty="1">
                            <i class="fa fa-shopping-cart icon-cart"></i>
                            <span class="addToBag">Add to Bag</span>
                        </a>
                        <!--                                    <a href="#" class="comparelink" title="Add to Compare">
                                                                <i class="glyphicon glyphicon-signal"></i>
                                                            </a>-->
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/16444" title="Product Name" class="product-image">

                        <img src="http://epharma.com.bd/storage/tb_FQFRBlyX8BOIaXUt2xQ1aQjAZrLbI4khI1yAVRFs.jpeg" alt="Product Name">

                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name">
                        <a href="http://epharma.com.bd/product/16444" title="Product Name" class="name-item">Nature Made Magnesium 250mg</a>
                    </h2>
                    <!--                                <div class="product-ratings">
                                                        <div class="ratings-box">
                                                            <div class="rating" style="width:0%"></div>
                                                        </div>
                                                    </div>-->
                    <div class="product-price-box">
                        <span class="old-price">৳1474</span>

                        <span class="product-price">৳1400.3</span>
                    </div>

                    <div class="product-actions">
                        <!--                                    <a href="#" class="addtowishlist" title="Add to Wishlist">
                                                                <i class="fa fa-heart"></i>
                                                            </a>-->
                        <a href="#" class="addtocart feature-btn-cart" title="Add to Bag" price="1400.3" fet_id="16444" fet_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" fet_qty="1">
                            <i class="fa fa-shopping-cart icon-cart"></i>
                            <span class="addToBag">Add to Bag</span>
                        </a>
                        <!--                                    <a href="#" class="comparelink" title="Add to Compare">
                                                                <i class="glyphicon glyphicon-signal"></i>
                                                            </a>-->
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/16475" title="Product Name" class="product-image">

                        <img src="http://epharma.com.bd/storage/tb_uFwBqzj7HQJ630sflCj9uRUuy8NJnUbvo0CYS4xQ.jpeg" alt="Product Name">

                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name">
                        <a href="http://epharma.com.bd/product/16475" title="Product Name" class="name-item">Biovera Body Lotion</a>
                    </h2>
                    <!--                                <div class="product-ratings">
                                                        <div class="ratings-box">
                                                            <div class="rating" style="width:0%"></div>
                                                        </div>
                                                    </div>-->
                    <div class="product-price-box">
                        <span class="old-price">৳720</span>

                        <span class="product-price">৳684</span>
                    </div>

                    <div class="product-actions">
                        <!--                                    <a href="#" class="addtowishlist" title="Add to Wishlist">
                                                                <i class="fa fa-heart"></i>
                                                            </a>-->
                        <a href="#" class="addtocart feature-btn-cart" title="Add to Bag" price="684" fet_id="16475" fet_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" fet_qty="1">
                            <i class="fa fa-shopping-cart icon-cart"></i>
                            <span class="addToBag">Add to Bag</span>
                        </a>
                        <!--                                    <a href="#" class="comparelink" title="Add to Compare">
                                                                <i class="glyphicon glyphicon-signal"></i>
                                                            </a>-->
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container mb-lg">
        <h2 class="slider-title">
            <span class="inline-title">Diapers</span>
            <span class="line"></span>
        </h2>

        <div class="owl-carousel owl-theme manual new-products-carousel">
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14746" title="Bebem TWIN Junior 11-25Kg (diapers)" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_BEBEM-Junior-28li_misir.jpg" alt="Bebem TWIN Junior 11-25Kg (diapers)">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/14746" title="Product Name">Bebem TWIN Junior 11-25Kg (diapers)</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳725</span>
                        <span class="product-price">৳688.75</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="688.75" rel_id="14746" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14436" title="Huggies (Dry pants L 9-14kg) 50pcs" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_huggies_dry_9_14kg_50pcs.jpg" alt="Huggies (Dry pants L 9-14kg) 50pcs">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/14436" title="Product Name">Huggies (Dry pants L 9-14kg) 50pcs</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳1288</span>
                        <span class="product-price">৳1223.6</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="1223.6" rel_id="14436" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14641" title="Huggies Dry (XXL) 40pcs. Belt-Malaysia" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_huggies-dry-xxl_40pcs.jpg" alt="Huggies Dry (XXL) 40pcs. Belt-Malaysia">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/14641" title="Product Name">Huggies Dry (XXL) 40pcs. Belt-Malaysia</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳1330</span>
                        <span class="product-price">৳1263.5</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="1263.5" rel_id="14641" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14511" title="Huggies Dry Diapers (M 5-10kg) 72 Pcs" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_Huggies-72-pcs.jpg" alt="Huggies Dry Diapers (M 5-10kg) 72 Pcs">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/14511" title="Product Name">Huggies Dry Diapers (M 5-10kg) 72 Pcs</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳1360</span>
                        <span class="product-price">৳1292</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="1292" rel_id="14511" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/6984" title="Huggies Dry Diapers 60pcs L-Singapore" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_Huggies-Dry-Diapers-64pcs-L-size-8-13kg..jpg" alt="Huggies Dry Diapers 60pcs L-Singapore">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/6984" title="Product Name">Huggies Dry Diapers 60pcs L-Singapore</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳1300</span>
                        <span class="product-price">৳1235</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="1235" rel_id="6984" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/6985" title="Huggies Dry Diapers 76pcs (M)-Malaysia" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_Huggies-Dry-Diapers-76pcs-Malaysia-5-10kg..jpg" alt="Huggies Dry Diapers 76pcs (M)-Malaysia">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/6985" title="Product Name">Huggies Dry Diapers 76pcs (M)-Malaysia</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳1232</span>
                        <span class="product-price">৳1170.4</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="1170.4" rel_id="6985" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14627" title="Huggies Dry New M 5pcs" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_huggies-dry-M-5-diapers.jpg" alt="Huggies Dry New M 5pcs">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/14627" title="Product Name">Huggies Dry New M 5pcs</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳150</span>
                        <span class="product-price">৳142.5</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="142.5" rel_id="14627" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14626" title="Huggies Dry New S 5pcs" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_huggies-dry-s-up-to-7-kg-5-diapers.jpg" alt="Huggies Dry New S 5pcs">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/14626" title="Product Name">Huggies Dry New S 5pcs</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳150</span>
                        <span class="product-price">৳142.5</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="142.5" rel_id="14626" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14580" title="Huggies Dry pants (XL)11-16kg 44Pcs" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_huggies-dry-xl-11-16-kg-48-pcs-malaysia.jpg" alt="Huggies Dry pants (XL)11-16kg 44Pcs">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/14580" title="Product Name">Huggies Dry pants (XL)11-16kg 44Pcs</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳1288</span>
                        <span class="product-price">৳1223.6</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="1223.6" rel_id="14580" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14538" title="Huggies Dry Pants (XXL) 36pcs.-Malaysia" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_HUGGIES-DRY-PANTS-XXL-1.jpg" alt="Huggies Dry Pants (XXL) 36pcs.-Malaysia">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/14538" title="Product Name">Huggies Dry Pants (XXL) 36pcs.-Malaysia</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳1300</span>
                        <span class="product-price">৳1235</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="1235" rel_id="14538" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="clearfix">&nbsp;</div><div class="container mb-lg">
        <h2 class="slider-title">
            <span class="inline-title">Milk</span>
            <span class="line"></span>
        </h2>

        <div class="owl-carousel owl-theme manual new-products-carousel">
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14691" title="Aptamil 2 follow on milk" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_aptamil_2_followon.jpg" alt="Aptamil 2 follow on milk">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/14691" title="Product Name">Aptamil 2 follow on milk</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳1990</span>
                        <span class="product-price">৳1890.5</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="1890.5" rel_id="14691" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14281" title="Cow &amp; Gate 1" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_Untitled.jpg" alt="Cow &amp; Gate 1">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/14281" title="Product Name">Cow &amp; Gate 1</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳1736</span>
                        <span class="product-price">৳1649.2</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="1649.2" rel_id="14281" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/7015" title="Cow &amp; Gate 2-UK" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_gX678KUru1WtkojHHkiVTY7Z6y76H1NhllPDurjs.jpeg" alt="Cow &amp; Gate 2-UK">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/7015" title="Product Name">Cow &amp; Gate 2-UK</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳2500</span>
                        <span class="product-price">৳2375</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="2375" rel_id="7015" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14451" title="Cowhead chocolate Milk" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_Cowhead-choc-192tk.jpg" alt="Cowhead chocolate Milk">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/14451" title="Product Name">Cowhead chocolate Milk</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳220</span>
                        <span class="product-price">৳209</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="209" rel_id="14451" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/10367" title="Cowhead Full Cream Milk Powder 1800gm Tin" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_oHZttYmRoIqMfbYOTHd97DcleIvyM5OsMqnWGBLI.jpeg" alt="Cowhead Full Cream Milk Powder 1800gm Tin">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/10367" title="Product Name">Cowhead Full Cream Milk Powder 1800gm Tin</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳2255</span>
                        <span class="product-price">৳2142.25</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="2142.25" rel_id="10367" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14491" title="Cowhead Full Cream Milk Powder 900gm. Tin" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_Da4CaXgoUlHLVSFgvx05D0KedeapKtYk5VJsi35o.jpeg" alt="Cowhead Full Cream Milk Powder 900gm. Tin">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/14491" title="Product Name">Cowhead Full Cream Milk Powder 900gm. Tin</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳1335</span>
                        <span class="product-price">৳1268.25</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="1268.25" rel_id="14491" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14452" title="Cowhead pure Milk" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_Cowhead-1-liter-180.jpg" alt="Cowhead pure Milk">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/14452" title="Product Name">Cowhead pure Milk</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳190</span>
                        <span class="product-price">৳180.5</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="180.5" rel_id="14452" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/6997" title="En sure 1kg.-India" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_En-Sure-1-kg..jpg" alt="En sure 1kg.-India">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/6997" title="Product Name">En sure 1kg.-India</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳1568</span>
                        <span class="product-price">৳1489.6</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="1489.6" rel_id="6997" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14857" title="Lactogen 1 Tin 1800 gram-Philippines" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_lactogen-1-from-birth-18kg.jpg" alt="Lactogen 1 Tin 1800 gram-Philippines">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/14857" title="Product Name">Lactogen 1 Tin 1800 gram-Philippines</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳2515</span>
                        <span class="product-price">৳2389.25</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="2389.25" rel_id="14857" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14560" title="Lactogen 2 Tin Comfortis 1.8kg-Malaysia" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_lectozen_2.jpg" alt="Lactogen 2 Tin Comfortis 1.8kg-Malaysia">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/14560" title="Product Name">Lactogen 2 Tin Comfortis 1.8kg-Malaysia</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳2400</span>
                        <span class="product-price">৳2280</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="2280" rel_id="14560" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="clearfix">&nbsp;</div><div class="container mb-lg">
        <h2 class="slider-title">
            <span class="inline-title">Health Care Accessories</span>
            <span class="line"></span>
        </h2>

        <div class="owl-carousel owl-theme manual new-products-carousel">
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14647" title="Adhesive Plaster (1box)" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_adhesive.jpg" alt="Adhesive Plaster (1box)">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/14647" title="Product Name">Adhesive Plaster (1box)</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳450</span>
                        <span class="product-price">৳427.5</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="427.5" rel_id="14647" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14881" title="Airdoctor Digital Thermometer" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_airdoctor_thermometer.jpg" alt="Airdoctor Digital Thermometer">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/14881" title="Product Name">Airdoctor Digital Thermometer</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳170</span>
                        <span class="product-price">৳161.5</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="161.5" rel_id="14881" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14578" title="Airdoctor First Aid Box" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_Airdoc_first_aid_box.jpg" alt="Airdoctor First Aid Box">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/14578" title="Product Name">Airdoctor First Aid Box</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳2150</span>
                        <span class="product-price">৳2042.5</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="2042.5" rel_id="14578" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14232" title="ALPK2 Blood Pressure Machine" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_alpk-2.jpg" alt="ALPK2 Blood Pressure Machine">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/14232" title="Product Name">ALPK2 Blood Pressure Machine</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳2210</span>
                        <span class="product-price">৳2099.5</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="2099.5" rel_id="14232" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14689" title="Analog Weight Scale-blue" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_analog_weight_mechine1.jpg" alt="Analog Weight Scale-blue">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/14689" title="Product Name">Analog Weight Scale-blue</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳1155</span>
                        <span class="product-price">৳1097.25</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="1097.25" rel_id="14689" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14688" title="Analog Weight Scale-white" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_analog_weight_mechine2.jpg" alt="Analog Weight Scale-white">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/14688" title="Product Name">Analog Weight Scale-white</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳1449</span>
                        <span class="product-price">৳1376.55</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="1376.55" rel_id="14688" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14549" title="Bionime Strip GS 100" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_bionime_teststrip1.jpg" alt="Bionime Strip GS 100">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/14549" title="Product Name">Bionime Strip GS 100</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳525</span>
                        <span class="product-price">৳498.75</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="498.75" rel_id="14549" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14817" title="Comfit Examination Gloves" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_comfit.jpg" alt="Comfit Examination Gloves">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/14817" title="Product Name">Comfit Examination Gloves</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳480</span>
                        <span class="product-price">৳456</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="456" rel_id="14817" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14638" title="Comfit surgical hand gloves 1-pair" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_surgical_gloves.jpg" alt="Comfit surgical hand gloves 1-pair">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/14638" title="Product Name">Comfit surgical hand gloves 1-pair</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳59</span>
                        <span class="product-price">৳56.05</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="56.05" rel_id="14638" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14499" title="Compressor Nebulizer" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_NB-210C_Compressor_Nebulizer.jpg" alt="Compressor Nebulizer">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/14499" title="Product Name">Compressor Nebulizer</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳3000</span>
                        <span class="product-price">৳2850</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="2850" rel_id="14499" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="clearfix">&nbsp;</div><div class="container mb-lg">
        <h2 class="slider-title">
            <span class="inline-title">Herbal</span>
            <span class="line"></span>
        </h2>

        <div class="owl-carousel owl-theme manual new-products-carousel">
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/16370" title="Alisa Tablet (Box)" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_BjelVqiW7eNdSIndLgckfQdlk1XLOS47cHNdyq1p.jpeg" alt="Alisa Tablet (Box)">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/16370" title="Product Name">Alisa Tablet (Box)</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳100</span>
                        <span class="product-price">৳95</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="95" rel_id="16370" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/6929" title="Alkuli 100ml Syrup" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_UmpKTGah6N5nYW2i4uxVMvGHYopStfJoMe3SmWMV.jpeg" alt="Alkuli 100ml Syrup">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/6929" title="Product Name">Alkuli 100ml Syrup</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳50</span>
                        <span class="product-price">৳47.5</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="47.5" rel_id="6929" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/16396" title="Alkuli 225ml Syrup" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_0tnr5gS1PyDzEyqcBHO5JFG54cj7RNc71QbDBEFT.jpeg" alt="Alkuli 225ml Syrup">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/16396" title="Product Name">Alkuli 225ml Syrup</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳90</span>
                        <span class="product-price">৳85.5</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="85.5" rel_id="16396" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/16395" title="Alkuli 450ml Syrup" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_YlSetssiZWApykqBUWWfwEBT7azYQwu3EiwcXebk.jpeg" alt="Alkuli 450ml Syrup">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/16395" title="Product Name">Alkuli 450ml Syrup</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳140</span>
                        <span class="product-price">৳133</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="133" rel_id="16395" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/6928" title="Alvasin 100ml Syrup" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_66WbQTKelmUmFYEeFGmz7GmcCDAnRkWto0J1DRas.jpeg" alt="Alvasin 100ml Syrup">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/6928" title="Product Name">Alvasin 100ml Syrup</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳70</span>
                        <span class="product-price">৳66.5</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="66.5" rel_id="6928" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/16394" title="Alvasin 225ml Syrup" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_SiX02WOizAMuSQymM8LFbC5NeBg6Zkndz24wKucP.jpeg" alt="Alvasin 225ml Syrup">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/16394" title="Product Name">Alvasin 225ml Syrup</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳140</span>
                        <span class="product-price">৳133</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="133" rel_id="16394" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/16412" title="Amritarista 450ml Syrup" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_sVpPFLE3NDEJVJNN5DBIfIXwrmGmStKN0eDsqEvV.jpeg" alt="Amritarista 450ml Syrup">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/16412" title="Product Name">Amritarista 450ml Syrup</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳120</span>
                        <span class="product-price">৳114</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="114" rel_id="16412" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/16415" title="Aswagandharista 450ml Syrup" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_GDWpjkBNxKZG4X5B3fHFo6Rrxec90kYTL6Uhxmh8.jpeg" alt="Aswagandharista 450ml Syrup">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/16415" title="Product Name">Aswagandharista 450ml Syrup</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳150</span>
                        <span class="product-price">৳142.5</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="142.5" rel_id="16415" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/16417" title="Balarista 450ml Syrup" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_6oKkUA0Csk9BrV1Kxj32DVHiLhjixcCJlcdYmeiQ.jpeg" alt="Balarista 450ml Syrup">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/16417" title="Product Name">Balarista 450ml Syrup</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳150</span>
                        <span class="product-price">৳142.5</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="142.5" rel_id="16417" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/16383" title="Calrip Tablet(Box)" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_fmGFcvRUb9VZnBjIbfpuvM5AyXytJR5zCb8Rt8Lg.jpeg" alt="Calrip Tablet(Box)">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/16383" title="Product Name">Calrip Tablet(Box)</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳1100</span>
                        <span class="product-price">৳1045</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="1045" rel_id="16383" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="clearfix">&nbsp;</div><div class="container mb-lg">
        <h2 class="slider-title">
            <span class="inline-title">Sanitary Pad</span>
            <span class="line"></span>
        </h2>

        <div class="owl-carousel owl-theme manual new-products-carousel">
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/16464" title="Freedom Belt Syestem 5 Pads" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_QjDXu8nGXTPotzXLmAKHuLdCX89GfK3bE2WHADYa.jpeg" alt="Freedom Belt Syestem 5 Pads">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/16464" title="Product Name">Freedom Belt Syestem 5 Pads</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳30</span>
                        <span class="product-price">৳28.5</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="28.5" rel_id="16464" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14918" title="Freedom Belt System (Economy pack) 15 pads" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_Freedom_15pcs_regular_flow_belt.jpg" alt="Freedom Belt System (Economy pack) 15 pads">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/14918" title="Product Name">Freedom Belt System (Economy pack) 15 pads</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳115</span>
                        <span class="product-price">৳109.25</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="109.25" rel_id="14918" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14920" title="Freedom Belt System 10 pads" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_Freedom_10pcs_heavy_flow_belt.jpg" alt="Freedom Belt System 10 pads">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/14920" title="Product Name">Freedom Belt System 10 pads</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳90</span>
                        <span class="product-price">৳85.5</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="85.5" rel_id="14920" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14217" title="Freedom Heavy Flow Wings 16 pads" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_Freedom_16pcs_heavy_flow.jpg" alt="Freedom Heavy Flow Wings 16 pads">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/14217" title="Product Name">Freedom Heavy Flow Wings 16 pads</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳200</span>
                        <span class="product-price">৳190</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="190" rel_id="14217" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14216" title="Freedom Heavy Flow Wings 8 pads" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_Freedom_8pcs_heavy_flow.jpg" alt="Freedom Heavy Flow Wings 8 pads">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/14216" title="Product Name">Freedom Heavy Flow Wings 8 pads</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳110</span>
                        <span class="product-price">৳104.5</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="104.5" rel_id="14216" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14919" title="Freedom Panty System (Economy pack) 15 pads" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_Freedom_15pcs_regular_flow_panty.jpg" alt="Freedom Panty System (Economy pack) 15 pads">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/14919" title="Product Name">Freedom Panty System (Economy pack) 15 pads</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳115</span>
                        <span class="product-price">৳109.25</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="109.25" rel_id="14919" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14921" title="Freedom Panty System 10 pads" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_Freedom_10pcs_heavy_flow_panty.jpg" alt="Freedom Panty System 10 pads">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/14921" title="Product Name">Freedom Panty System 10 pads</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳90</span>
                        <span class="product-price">৳85.5</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="85.5" rel_id="14921" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/16460" title="Freedom Regular &amp; Heavy Flow Wings Combo 10 pads" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_rmFnhlxr3skYeESvDhEkYUD9mPYyk22TCK85jplu.jpeg" alt="Freedom Regular &amp; Heavy Flow Wings Combo 10 pads">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/16460" title="Product Name">Freedom Regular &amp; Heavy Flow Wings Combo 10 pads</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳110</span>
                        <span class="product-price">৳104.5</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="104.5" rel_id="16460" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/16461" title="Freedom Regular Flow Popular 8 pads" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_7JLWi2z9AWMuq64kt3xwXSRchanSrMaKWUJ3t269.jpeg" alt="Freedom Regular Flow Popular 8 pads">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/16461" title="Product Name">Freedom Regular Flow Popular 8 pads</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳40</span>
                        <span class="product-price">৳38</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="38" rel_id="16461" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/16462" title="Freedom Regular Flow Smart 8 pads" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_U076OwlSh4cuopawE6Xlfd9Xfqwz5zyof0S22iAF.jpeg" alt="Freedom Regular Flow Smart 8 pads">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/16462" title="Product Name">Freedom Regular Flow Smart 8 pads</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳55</span>
                        <span class="product-price">৳52.25</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="52.25" rel_id="16462" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="clearfix">&nbsp;</div><div class="container mb-lg">
        <h2 class="slider-title">
            <span class="inline-title">Skin Care - Bioderma</span>
            <span class="line"></span>
        </h2>

        <div class="owl-carousel owl-theme manual new-products-carousel">
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14393" title="ABCDerm Change Intensif (75gm)" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_ABCDerm-Change-Intensif-75ml.jpg" alt="ABCDerm Change Intensif (75gm)">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/14393" title="Product Name">ABCDerm Change Intensif (75gm)</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳1200</span>
                        <span class="product-price">৳1140</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="1140" rel_id="14393" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14394" title="ABCDerm Cold-Cream Corps (200ml)" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_ABCDerm-Cold-Cream-Corps-200ml.jpg" alt="ABCDerm Cold-Cream Corps (200ml)">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/14394" title="Product Name">ABCDerm Cold-Cream Corps (200ml)</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳1300</span>
                        <span class="product-price">৳1235</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="1235" rel_id="14394" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14396" title="ABCDerm Cold-Cream Visage (40ml)" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_ABCDerm-Cold-Cream-Visage-40ml.jpg" alt="ABCDerm Cold-Cream Visage (40ml)">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/14396" title="Product Name">ABCDerm Cold-Cream Visage (40ml)</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳1000</span>
                        <span class="product-price">৳950</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="950" rel_id="14396" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14398" title="ABCDerm Gel Moussant (200ml)" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_ABCDerm-Moussant-200ml.jpg" alt="ABCDerm Gel Moussant (200ml)">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/14398" title="Product Name">ABCDerm Gel Moussant (200ml)</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳1000</span>
                        <span class="product-price">৳950</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="950" rel_id="14398" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14397" title="ABCDerm Hydratant (200ml)" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_ABCDerm-Hydratant-200ml.jpg" alt="ABCDerm Hydratant (200ml)">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/14397" title="Product Name">ABCDerm Hydratant (200ml)</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳1300</span>
                        <span class="product-price">৳1235</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="1235" rel_id="14397" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14395" title="ABCDerm Maman Fermete (200ml)" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_ABCDerm-Maman-Fermete-200ml.jpg" alt="ABCDerm Maman Fermete (200ml)">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/14395" title="Product Name">ABCDerm Maman Fermete (200ml)</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳2000</span>
                        <span class="product-price">৳1900</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="1900" rel_id="14395" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14400" title="ABCDerm Solaire SPF 50+ (50gm)" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_ABCDerm-Solaire-SPF-50-50g.jpg" alt="ABCDerm Solaire SPF 50+ (50gm)">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/14400" title="Product Name">ABCDerm Solaire SPF 50+ (50gm)</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳1200</span>
                        <span class="product-price">৳1140</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="1140" rel_id="14400" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14401" title="Atoderm Cream (200ml)" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_Atoderm_Cream_new_web.jpg" alt="Atoderm Cream (200ml)">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/14401" title="Product Name">Atoderm Cream (200ml)</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳1200</span>
                        <span class="product-price">৳1140</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="1140" rel_id="14401" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14402" title="Atoderm Intensive baume(200ml)" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_eqJqpb9NfR8g2gjRbEND6IRY5Q01dNskqW76Eps0.jpeg" alt="Atoderm Intensive baume(200ml)">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/14402" title="Product Name">Atoderm Intensive baume(200ml)</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳1300</span>
                        <span class="product-price">৳1235</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="1235" rel_id="14402" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product">
                <figure class="product-image-area">
                    <a href="http://epharma.com.bd/product/14896" title="Atoderm Intensive Gel Moussant(200ml)" class="product-image">
                        <img src="http://epharma.com.bd/storage/tb_Atoderm_Intensive_Gel_Moussant.jpg" alt="Atoderm Intensive Gel Moussant(200ml)">
                    </a>
                    <div class="product-label">
                        <span class="new">5%</span>
                    </div>
                </figure>
                <div class="product-details-area">
                    <h2 class="product-name"><a href="http://epharma.com.bd/product/14896" title="Product Name">Atoderm Intensive Gel Moussant(200ml)</a></h2>
                    <div class="product-price-box">
                        <span class="old-price">৳1300</span>
                        <span class="product-price">৳1235</span>
                    </div>

                    <div class="product-actions">
                        <a href="#" class="addtocart related-btn-cart" title="Add to Bag" price="1235" rel_id="14896" rel_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm" rel_qty="1">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add to Bag</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="clearfix">&nbsp;</div>
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
                    },
                    error:function () {
                        console.log('Data Not receiveed');
                    }
                });

            })
        });
    </script>
@endsection