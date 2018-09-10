<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>
        @yield('title')
    </title>

    <meta name="keywords" content="epharma" />
    <meta name="description" content="Your Online Healthcare Solution">
    <meta name="author" content="themessengerbd.com">

    <!-- Favicon -->
    <link rel="shortcut icon" href="http://epharma.com.bd/theme/epharma/img/favicon-32x32-1.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="../img/apple-touch-icon.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Web Fonts  -->

    <!-- ===Remort=== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
<!--   -->
    <link rel="stylesheet" href="{{ asset('frontEnd/theme/epharma/css/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontEnd/theme/epharma/css/vendor/bootstrap/css/style.css') }}">
    <!-- Full Slider CSS -->
    <link rel="stylesheet" href="{{ asset('frontEnd/theme/epharma/css/full-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('frontEnd/theme/epharma/css/vendor/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontEnd/theme/epharma/css/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontEnd/theme/epharma/css/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontEnd/theme/epharma/css/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontEnd/theme/epharma/css/vendor/magnific-popup/magnific-popup.min.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('frontEnd/theme/epharma/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('frontEnd/theme/epharma/css/theme-elements.css') }}">
    <link rel="stylesheet" href="{{ asset('frontEnd/theme/epharma/css/theme-blog.css') }}">
    <link rel="stylesheet" href="{{ asset('frontEnd/theme/epharma/css/theme-shop.css') }}">


    <!-- Current Page CSS -->
    <link rel="stylesheet" href="{{ asset('frontEnd/theme/epharma/css/vendor/rs-plugin/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('frontEnd/theme/epharma/css/vendor/rs-plugin/css/layers.css') }}">
    <link rel="stylesheet" href="{{ asset('frontEnd/theme/epharma/css/vendor/rs-plugin/css/navigation.css') }}">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('frontEnd/theme/epharma/css/skins/skin-shop-4.css') }}">
    <!-- Demo CSS -->
    <link rel="stylesheet" href="{{ asset('frontEnd/theme/epharma/css/demos/demo-shop-4.css') }}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('frontEnd/theme/epharma/css/custom.css') }}">

    <!-- Theme Sweet Alert CSS -->
    <!-- ===Remort=== -->
    <link rel="stylesheet" href="{{ asset('frontEnd/sweetalert2/6.5.5/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontEnd/ui/1.11.4/themes/smoothness/jquery-ui.css') }} ">
    <!-- Head Libs -->
    <script src="{{ asset('frontEnd/theme/epharma/css/vendor/modernizr/modernizr.min.js') }}"></script>

    <style>
        .fa{
            line-height: 30px;
        }
    </style>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122693227-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-122693227-1');
    </script>

</head>
<body class="cart-box-body">
<div class="cart-box-view">
    <div class="cart-box-inner-view">
        <div class="cart-header">
            <div class="col-sm-5">
                <img class="header-bag" src="http://epharma.com.bd/theme/epharma/img/shopping-bag.png"/><strong><span class="cart-count">0</span> Item</strong>
            </div>
            <img class="pull-right cart-hide-btn" style="margin-right: 10px; margin-top: 5px;" src="http://epharma.com.bd/theme/epharma/img/x-button.png"/>
            <!--<button class="btn btn-dark pull-right" id="empty_cart_button">Clear Cart</button>-->
            <div class="clearfix"></div>
        </div>
        <div class="cart-body text-center">
            <p class="text-danger background-color-tertiary minimum-qty" style="padding: 5px 0; margin: 0; display: none;">You must order this minimum quantity for this product!</p>
            <p class="text-danger background-color-tertiary minimum-amount" style="padding: 5px 0; margin: 0; display: none;"></p>
            <div class="cart-table-wrap" style="padding: 0; border-radius: 0; margin-bottom: 0;">

                <img src="http://epharma.com.bd/theme/epharma/img/empty_bag.png">
                <span>Your shopping bag is empty. Start shopping now.</span>

            </div>
            <!--<img src="http://epharma.com.bd/theme/epharma/img/empty_bag.png">-->
            <!--<span>Your shopping bag is empty. Start shopping now.</span>-->
            <div class="clearfix"></div>
        </div>
        <div class="cart-footer">
            <button id="checkout-button" style="border-radius: 6px 0 0 6px;" class="btn btn-success pull-left">Order Now</button>
            <input type="hidden" value="0" name="cart-total"/>
            <span style="border-radius: 0 6px 6px 0;" class="btn btn-info cart-amount-span">৳ 0</span>
            <a style="color: #ddd">&nbsp;&nbsp;&nbsp;Saved <span class="saved-amount" >৳0</span></a>
            <a id="empty_cart_button" href="#">
                <i style="color: #000; margin-right: 15px;" class="fa fa-shopping-cart fa-2x pull-right"></i>
            </a>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="body">
    @include('frontEnd.includes.header')

    @yield('mainContent')
    @include('frontEnd.includes.footer')
</div>

<!-- Vendor -->
<script src="{{ asset('frontEnd/theme/epharma/css/vendor/jquery/jquery.min.js') }} "></script>
<script src="{{ asset('frontEnd/theme/epharma/css/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontEnd/theme/epharma/css/vendor/jquery.appear/jquery.appear.min.js') }}"></script>
<script src="{{ asset('frontEnd/theme/epharma/css/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('frontEnd/theme/epharma/css/vendor/jquery-cookie/jquery-cookie.min.js') }}"></script>
<script src="{{ asset('frontEnd/theme/epharma/css/vendor/common/common.min.js') }}"></script>
<script src="{{ asset('frontEnd/theme/epharma/css/vendor/jquery.validation/jquery.validation.min.js') }}"></script>
<script src="{{ asset('frontEnd/theme/epharma/css/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js') }}"></script>
<script src="{{ asset('frontEnd/theme/epharma/css/vendor/jquery.gmap/jquery.gmap.min.js') }}"></script>
<script src="{{ asset('frontEnd/theme/epharma/css/vendor/jquery.lazyload/jquery.lazyload.min.js') }}"></script>
<script src="{{ asset('frontEnd/theme/epharma/css/vendor/isotope/jquery.isotope.min.js') }}"></script>
<script src="{{ asset('frontEnd/theme/epharma/css/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontEnd/theme/epharma/css/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('frontEnd/theme/epharma/css/vendor/vide/vide.min.js') }}"></script>
<script src="{{ asset('frontEnd/theme/epharma/js/select2.min.js') }}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{ asset('frontEnd/theme/epharma/js/theme.js') }}"></script>
@yield('js')

<script src="{{ asset('frontEnd/theme/epharma/css/vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('frontEnd/theme/epharma/css/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>

<!-- Current Page Vendor and Views -->
<script src="{{ asset('frontEnd/theme/epharma/js/views/view.contact.js') }}"></script>

<script src="{{ asset('frontEnd/theme/epharma/css/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script>
<script src="{{ asset('frontEnd/theme/epharma/css/vendor/elevatezoom/jquery.elevatezoom.js') }}"></script>

<!-- Demo -->
<script src="{{ asset('frontEnd/theme/epharma/js/demos/demo-shop-4.js') }}"></script>

<!-- Theme Custom -->
<script src="{{ asset('frontEnd/theme/epharma/js/custom.js') }}"></script>

<!-- Theme Initialization Files -->
<script src="{{ asset('frontEnd/theme/epharma/js/theme.init.js') }}"></script>
<script src="{{ asset('frontEnd/theme/epharma/js/jquery.star-rating-svg.js') }}"></script>
<!-- Full Slider Js -->
<link rel="stylesheet" href="{{ asset('frontEnd/theme/epharma/css/jquery-ui.css') }}">
<script src="{{ asset('frontEnd/theme/epharma/js/jquery-ui.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontEnd/theme/epharma/social-share/jssocials.min.js') }}"></script>

<script>
$(document).ready(function () {
    
    $('.select2').select2();

    $('.product-actions .btn-cart').on('click', function (e) {
        e.preventDefault();


        var checkLink = window.location;
        var conLink = "http://epharma.com.bd";
        var qty = $('input[name=qty]').val();
        var id = $('input[name=id]').val();
        var price = $('input[name=price]').val();
        var token = $('input[name=_token]').val();
        var minQty = $('#minQty').val();
        if (minQty > qty) {
            alert('You must add minmum' + minQty + ' quntity!');
        } else {
            $.ajax({
                type: "POST",
                url: "http://epharma.com.bd/add-to-cart",
                data: {id: id, qty: qty, price: price, _token: token},
                success: function (res) {
                    var savedAmount = res.originalTotal - res.total;
//                window.location.href = checkLink;
                    $('span.saved-amount').text('৳ ' + savedAmount.toFixed(1));
                    $('span.cart-count').text(res.count);
                    $('span.cart-amount-span').text('৳ ' + res.total);
                    $('input[name = cart-total]').val(res.total);
                    var i = 0;
                    var table = '<table style="width: 100%; font-size: 11px;" class="cart-table">';
                    // NOTE!  I changed 'object' to 'value' here
                    // NOTE 2!  We added a JSON.parse on the 'data' variable to convert from JSON to JavaScript objects.
//                $.each(JSON.parse(res.content), function (key, value) {
                    jQuery.each(res.content, function (key, value) {

                        var subTotal = value.qty * value.price;

                        var originalPrice = value.options.productPrice;

                        var originalPriceTotal = value.options.productPrice * value.qty;
                        // We need to access the value variable in this loop because 'data' is the original array that we were iterating!
                        table += ('<tr>');
                        var path = "http://epharma.com.bd/storage";
                        var imageUrl = path + "/" + value.options.img;
                        table += ('<td><img style="width: 30px; border: 1px solid skyblue; border-radius: 5px;" src="' + imageUrl + '"></td>');
                        if (originalPrice == value.price) {
                            table += ('<td><span class="text-primary">' + value.name + '</span><br><strong style="font-size: 11px;">৳ ' + originalPrice + '</strong></td>');
                        }else{
                            table += ('<td><span class="text-primary">' + value.name + '</span><br><del style="font-size: 11px; margin-right: 5px;">৳ '+ originalPrice +'</del><strong style="font-size: 11px;">৳ ' + value.price + '</strong></td>');
                        }
                        table += ('<td style="font-size: 13px; vertical-align: middle; padding: 8px 0;"><div class="qty-holder" style="width: 90px;"><a href="#" class="qty-dec-btn" rowId="' + value.rowId + '" title="Dec" style="width: 22px;">-</a><input style="width: 22px !important;" type="text" name="product_qty" id="product_qty" class="qty-input" value="' + value.qty + '"><a href="#" class="qty-inc-btn" rowId="' + value.rowId + '" title="Inc" style="width: 22px;">+</a></div></td>');
//                    if(originalPriceTotal == subTotal){
//                        table += ('<td><span><del>৳ '+ originalPriceTotal.toFixed(1) +'</del></span><br><span class="text-danger">৳ ' + subTotal.toFixed(1) + '</span></td>');
//                    else{
//                        table += ('<td><span class="text-danger">৳ ' + subTotal.toFixed(1) + '</span></td>');
//                    }
                        if (originalPriceTotal.toFixed(1) != subTotal.toFixed(1)) {
                            table += ('<td><span class="text-primary"><del>৳ ' + originalPriceTotal.toFixed(1) + '</del></span><br><span class="text-danger">৳ ' + subTotal.toFixed(1) + '</span></td>');
                        } else {
                            table += ('<td style="vertical-align: middle; padding: 8px 0;"><span class="text-danger">৳ ' + subTotal.toFixed(1) + '</span></td>');
                        }
                        table += ('<td class="product-delete" style="padding: 15px 5px;"><a href="#" title="Remove product" data-rowId="' + value.rowId + '"><i class="fa fa-times text-danger"></i></a></td>');
                        table += ('</tr>');

                    });

                    table += '</table>';

                    $('.cart-table-wrap').html(table);
                    $(".cart-box").hide();
                    $(".cart-box-view").show();
                }
            });
        }
    });
    $('.product-actions .related-btn-cart').on('click', function (e) {
        e.preventDefault();

        var checkLink = window.location;
        var conLink = "http://epharma.com.bd";
        var qty = $(this).attr('rel_qty');
        var id = $(this).attr('rel_id');
        var price = $(this).attr('price');
        var token = $(this).attr('rel_token');
        $.ajax({
            type: "POST",
            url: "http://epharma.com.bd/add-to-cart",
            data: {id: id, qty: qty, price: price, _token: token},
            success: function (res) {
                var savedAmount = res.originalTotal - res.total;
//                window.location.href = checkLink;
                $('span.saved-amount').text('৳ ' + savedAmount.toFixed(1));
                $('span.cart-count').text(res.count);
                $('span.cart-amount-span').text('৳ ' + res.total);
                $('input[name = cart-total]').val(res.total);
                var i = 0;
                var table = '<table style="width: 100%; font-size: 11px;" class="cart-table">';
                // NOTE!  I changed 'object' to 'value' here
                // NOTE 2!  We added a JSON.parse on the 'data' variable to convert from JSON to JavaScript objects.
//                $.each(JSON.parse(res.content), function (key, value) {
                jQuery.each(res.content, function (key, value) {

                    var subTotal = value.qty * value.price;

                    var originalPrice = value.options.productPrice;

                    var originalPriceTotal = value.options.productPrice * value.qty;
                    // We need to access the value variable in this loop because 'data' is the original array that we were iterating!
                    table += ('<tr>');
                    var path = "http://epharma.com.bd/storage";
                    var imageUrl = path + "/" + value.options.img;
                    table += ('<td><img style="width: 30px; border: 1px solid skyblue; border-radius: 5px;" src="' + imageUrl + '"></td>');
                    if (originalPrice == value.price) {
                        table += ('<td><span class="text-primary">' + value.name + '</span><br><strong style="font-size: 11px;">৳ ' + originalPrice + '</strong></td>');
                    }else{
                        table += ('<td><span class="text-primary">' + value.name + '</span><br><del style="font-size: 11px; margin-right: 5px;">৳ '+ originalPrice +'</del><strong style="font-size: 11px;">৳ ' + value.price + '</strong></td>');
                    }
                    table += ('<td style="font-size: 13px; vertical-align: middle; padding: 8px 0;"><div class="qty-holder" style="width: 90px;"><a href="#" class="qty-dec-btn" rowId="' + value.rowId + '" title="Dec" style="width: 22px;">-</a><input style="width: 22px !important;" type="text" name="product_qty" id="product_qty" class="qty-input" value="' + value.qty + '"><a href="#" class="qty-inc-btn" rowId="' + value.rowId + '" title="Inc" style="width: 22px;">+</a></div></td>');
//                    if(originalPriceTotal == subTotal){
//                        table += ('<td><span><del>৳ '+ originalPriceTotal.toFixed(1) +'</del></span><br><span class="text-danger">৳ ' + subTotal.toFixed(1) + '</span></td>');
//                    else{
//                        table += ('<td><span class="text-danger">৳ ' + subTotal.toFixed(1) + '</span></td>');
//                    }
                    if (originalPriceTotal.toFixed(1) != subTotal.toFixed(1)) {
                        table += ('<td><span class="text-primary"><del>৳ ' + originalPriceTotal.toFixed(1) + '</del></span><br><span class="text-danger">৳ ' + subTotal.toFixed(1) + '</span></td>');
                    } else {
                        table += ('<td style="vertical-align: middle; padding: 8px 0;"><span class="text-danger">৳ ' + subTotal.toFixed(1) + '</span></td>');
                    }
                    table += ('<td class="product-delete" style="padding: 15px 5px;"><a href="#" title="Remove product" data-rowId="' + value.rowId + '"><i class="fa fa-times text-danger"></i></a></td>');
                    table += ('</tr>');

                });

                table += '</table>';

                $('.cart-table-wrap').html(table);
                $(".cart-box").hide();
                $(".cart-box-view").show();
            }
        });
        return false;

    });

    $('.product-actions .feature-btn-cart').on('click', function (e) {
        e.preventDefault();

        var checkLink = window.location;
        var conLink = "http://epharma.com.bd";
        var qty = $(this).attr('fet_qty');
        var id = $(this).attr('fet_id');
        var price = $(this).attr('price');
        var token = $(this).attr('fet_token');
        $.ajax({
            type: "POST",
            url: "http://epharma.com.bd/add-to-cart",
            data: {id: id, qty: qty, price: price, _token: token},
            success: function (res) {
                var savedAmount = res.originalTotal - res.total;
//                window.location.href = checkLink;
                $('span.saved-amount').text('৳ ' + savedAmount.toFixed(1));
                $('span.cart-count').text(res.count);
                $('span.cart-amount-span').text('৳ ' + res.total);
                $('input[name = cart-total]').val(res.total);
                var i = 0;
                var table = '<table style="width: 100%; font-size: 11px;" class="cart-table">';
                // NOTE!  I changed 'object' to 'value' here
                // NOTE 2!  We added a JSON.parse on the 'data' variable to convert from JSON to JavaScript objects.
//                $.each(JSON.parse(res.content), function (key, value) {
                jQuery.each(res.content, function (key, value) {

                    var subTotal = value.qty * value.price;

                    var originalPrice = value.options.productPrice;

                    var originalPriceTotal = value.options.productPrice * value.qty;
                    // We need to access the value variable in this loop because 'data' is the original array that we were iterating!
                    table += ('<tr>');
                    var path = "http://epharma.com.bd/storage";
                    var imageUrl = path + "/" + value.options.img;
                    table += ('<td><img style="width: 30px; border: 1px solid skyblue; border-radius: 5px;" src="' + imageUrl + '"></td>');
                    if (originalPrice == value.price) {
                        table += ('<td><span class="text-primary">' + value.name + '</span><br><strong style="font-size: 11px;">৳ ' + originalPrice + '</strong></td>');
                    }else{
                        table += ('<td><span class="text-primary">' + value.name + '</span><br><del style="font-size: 11px; margin-right: 5px;">৳ '+ originalPrice +'</del><strong style="font-size: 11px;">৳ ' + value.price + '</strong></td>');
                    }
                    table += ('<td style="font-size: 13px; vertical-align: middle; padding: 8px 0;"><div class="qty-holder" style="width: 90px;"><a href="#" class="qty-dec-btn" rowId="' + value.rowId + '" title="Dec" style="width: 22px;">-</a><input style="width: 22px !important;" type="text" name="product_qty" id="product_qty" class="qty-input" value="' + value.qty + '"><a href="#" class="qty-inc-btn" rowId="' + value.rowId + '" title="Inc" style="width: 22px;">+</a></div></td>');
//                    if(originalPriceTotal == subTotal){
//                        table += ('<td><span><del>৳ '+ originalPriceTotal.toFixed(1) +'</del></span><br><span class="text-danger">৳ ' + subTotal.toFixed(1) + '</span></td>');
//                    else{
//                        table += ('<td><span class="text-danger">৳ ' + subTotal.toFixed(1) + '</span></td>');
//                    }
                    if (originalPriceTotal.toFixed(1) != subTotal.toFixed(1)) {
                        table += ('<td><span class="text-primary"><del>৳ ' + originalPriceTotal.toFixed(1) + '</del></span><br><span class="text-danger">৳ ' + subTotal.toFixed(1) + '</span></td>');
                    } else {
                        table += ('<td style="vertical-align: middle; padding: 8px 0;"><span class="text-danger">৳ ' + subTotal.toFixed(1) + '</span></td>');
                    }
                    table += ('<td class="product-delete" style="padding: 15px 5px;"><a href="#" title="Remove product" data-rowId="' + value.rowId + '"><i class="fa fa-times text-danger"></i></a></td>');
                    table += ('</tr>');

                });

                table += '</table>';

                $('.cart-table-wrap').html(table);
                $(".cart-box").hide();
                $(".cart-box-view").show();
            }
        });
        return false;

    });

    $(".cart-box").click(function () {
        $(".cart-box").hide();
        $(".cart-box-view").show();
    });
    $(".cart-box-inner-view .cart-hide-btn").click(function () {
        $(".cart-box").show();
        $(".cart-box-view").hide();
    });

    $(".cart-table-wrap").on('click', '.qty-dec-btn', function (e) {
        e.defaultPrevented;
        var oldVlaue = $(this).next().val();

        if (oldVlaue > 0) {
            $(this).next().val(--oldVlaue);
//            $(".minimum-qty").show();
        }
        var token = 'VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm';
        var qty = $(this).next().val();

        var rowId = $(this).attr('rowId');
        $.ajax({
            url: '/update-cart-item',
            type: 'post',
            data: {_token: token, rowId: rowId, qty: qty},
            success: function (res) {
                var savedAmount = res.originalTotal - res.total;
//                window.location.href = checkLink;
                $('span.saved-amount').text('৳ ' + savedAmount.toFixed(1));
                $('span.cart-count').text(res.count);
                $('span.cart-amount-span').text('৳ ' + res.total);
                $('input[name = cart-total]').val(res.total);
                var i = 0;
                var table = '<table style="width: 100%; font-size: 11px;" class="cart-table">';
                // NOTE!  I changed 'object' to 'value' here
                // NOTE 2!  We added a JSON.parse on the 'data' variable to convert from JSON to JavaScript objects.
//                $.each(JSON.parse(res.content), function (key, value) {
                jQuery.each(res.content, function (key, value) {

                    var subTotal = value.qty * value.price;
                    
                    var originalPrice = value.options.productPrice;
                    
                    var originalPriceTotal = value.options.productPrice * value.qty;
                    // We need to access the value variable in this loop because 'data' is the original array that we were iterating!
                    table += ('<tr>');
                    var path = "http://epharma.com.bd/storage";
                    var imageUrl = path + "/" + value.options.img;
                    table += ('<td><img style="width: 30px; border: 1px solid skyblue; border-radius: 5px;" src="' + imageUrl + '"></td>');
                    if (originalPrice == value.price) {
                        table += ('<td><span class="text-primary">' + value.name + '</span><br><strong style="font-size: 11px;">৳ ' + originalPrice + '</strong></td>');
                    }else{
                        table += ('<td><span class="text-primary">' + value.name + '</span><br><del style="font-size: 11px; margin-right: 5px;">৳ '+ originalPrice +'</del><strong style="font-size: 11px;">৳ ' + value.price + '</strong></td>');
                    }
                    table += ('<td style="font-size: 13px; vertical-align: middle; padding: 8px 0;"><div class="qty-holder" style="width: 90px;"><a href="#" class="qty-dec-btn" rowId="' + value.rowId + '" title="Dec" style="width: 22px;">-</a><input style="width: 22px !important;" type="text" name="product_qty" id="product_qty" class="qty-input" value="' + value.qty + '"><a href="#" class="qty-inc-btn" rowId="' + value.rowId + '" title="Inc" style="width: 22px;">+</a></div></td>');
//                    if(originalPriceTotal == subTotal){
//                        table += ('<td><span><del>৳ '+ originalPriceTotal.toFixed(1) +'</del></span><br><span class="text-danger">৳ ' + subTotal.toFixed(1) + '</span></td>');
//                    else{
//                        table += ('<td><span class="text-danger">৳ ' + subTotal.toFixed(1) + '</span></td>');
//                    }
                    if(originalPriceTotal.toFixed(1) != subTotal.toFixed(1)){
                        table += ('<td><span class="text-primary"><del>৳ ' + originalPriceTotal.toFixed(1) + '</del></span><br><span class="text-danger">৳ '+ subTotal.toFixed(1) +'</span></td>');
                    }else{
                        table += ('<td style="vertical-align: middle; padding: 8px 0;"><span class="text-danger">৳ ' + subTotal.toFixed(1) + '</span></td>');
                    }
                    table += ('<td class="product-delete" style="padding: 15px 5px;"><a href="#" title="Remove product" data-rowId="' + value.rowId + '"><i class="fa fa-times text-danger"></i></a></td>');
                    table += ('</tr>');

                });

                table += '</table>';

                $('.cart-table-wrap').html(table);
                $(".cart-box").hide();
                $(".cart-box-view").show();
            }
        });
        return false;
    });

    $(".cart-table-wrap").on('click', '.qty-inc-btn', function (e) {
        e.defaultPrevented;
        var oldVlaue = $(this).prev().val();
        $(this).prev().val(++oldVlaue);
//        $(".minimum-qty").hide();

        var token = 'VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm';
        var qty = $(this).prev().val();

        var rowId = $(this).attr('rowId');
        $.ajax({
            url: '/update-cart-item',
            type: 'post',
            data: {_token: token, rowId: rowId, qty: qty},
            success: function (res) {
                var savedAmount = res.originalTotal - res.total;
//                window.location.href = checkLink;
                $('span.saved-amount').text('৳ ' + savedAmount.toFixed(1));
                $('span.cart-count').text(res.count);
                $('span.cart-amount-span').text('৳ ' + res.total);
                $('input[name = cart-total]').val(res.total);
                var i = 0;
                var table = '<table style="width: 100%; font-size: 11px;" class="cart-table">';
                // NOTE!  I changed 'object' to 'value' here
                // NOTE 2!  We added a JSON.parse on the 'data' variable to convert from JSON to JavaScript objects.
//                $.each(JSON.parse(res.content), function (key, value) {
                jQuery.each(res.content, function (key, value) {

                    var subTotal = value.qty * value.price;
                    
                    var originalPrice = value.options.productPrice;
                    
                    var originalPriceTotal = value.options.productPrice * value.qty;
                    // We need to access the value variable in this loop because 'data' is the original array that we were iterating!
                    table += ('<tr>');
                    var path = "http://epharma.com.bd/storage";
                    var imageUrl = path + "/" + value.options.img;
                    table += ('<td><img style="width: 30px; border: 1px solid skyblue; border-radius: 5px;" src="' + imageUrl + '"></td>');
                    if (originalPrice == value.price) {
                        table += ('<td><span class="text-primary">' + value.name + '</span><br><strong style="font-size: 11px;">৳ ' + originalPrice + '</strong></td>');
                    }else{
                        table += ('<td><span class="text-primary">' + value.name + '</span><br><del style="font-size: 11px; margin-right: 5px;">৳ '+ originalPrice +'</del><strong style="font-size: 11px;">৳ ' + value.price + '</strong></td>');
                    }
                    table += ('<td style="font-size: 13px; vertical-align: middle; padding: 8px 0;"><div class="qty-holder" style="width: 90px;"><a href="#" class="qty-dec-btn" rowId="' + value.rowId + '" title="Dec" style="width: 22px;">-</a><input style="width: 22px !important;" type="text" name="product_qty" id="product_qty" class="qty-input" value="' + value.qty + '"><a href="#" class="qty-inc-btn" rowId="' + value.rowId + '" title="Inc" style="width: 22px;">+</a></div></td>');
//                    if(originalPriceTotal == subTotal){
//                        table += ('<td><span><del>৳ '+ originalPriceTotal.toFixed(1) +'</del></span><br><span class="text-danger">৳ ' + subTotal.toFixed(1) + '</span></td>');
//                    else{
//                        table += ('<td><span class="text-danger">৳ ' + subTotal.toFixed(1) + '</span></td>');
//                    }
                    if(originalPriceTotal.toFixed(1) != subTotal.toFixed(1)){
                        table += ('<td><span class="text-primary"><del>৳ ' + originalPriceTotal.toFixed(1) + '</del></span><br><span class="text-danger">৳ '+ subTotal.toFixed(1) +'</span></td>');
                    }else{
                        table += ('<td style="vertical-align: middle; padding: 8px 0;"><span class="text-danger">৳ ' + subTotal.toFixed(1) + '</span></td>');
                    }
                    table += ('<td class="product-delete" style="padding: 15px 5px;"><a href="#" title="Remove product" data-rowId="' + value.rowId + '"><i class="fa fa-times text-danger"></i></a></td>');
                    table += ('</tr>');

                });

                table += '</table>';

                $('.cart-table-wrap').html(table);
                $(".cart-box").hide();
                $(".cart-box-view").show();
                var cart_total = $('input[name = cart-total]').val();
                if(cart_total >= 300){
                    $(".minimum-amount").hide();
                }
            }
        });
        return false;
    });
    $('#empty_cart_button').on('click', function () {
        $.ajax({
            type: "GET",
            url: "/destroy-cart",
            success: function (res) {
//                window.location.href = checkLink;
                $('span.saved-amount').text('৳ ' + 0);
                $('span.cart-count').text(0);
                $('span.cart-amount-span').text('৳ ' + 0);
                $(".minimum-amount").hide();
                var path = "http://epharma.com.bd/theme/epharma/img/empty_bag.png";
                var html = '<img src="' + path + '">';
                html += '<span>Your shopping bag is empty. Start shopping now.</span>';

                $('.cart-table-wrap').html(html);
//                location.reload();
            }
        });
    });
    $('.cart-table-wrap').on('click', '.product-delete a', function (e) {
        e.defaultPrevented;
        var token = 'VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm',
                rowId = $(this).data('rowid'),
                parent = $(this).parents('tr');
        $.ajax({
            url: '/remove-cart-item',
            type: 'post',
            data: {_token: token, rowId: rowId},
            success: function (res) {
                parent.remove();
                if (res.count > 0) {
                    var savedAmount = res.originalTotal - res.total;
//                window.location.href = checkLink;
                    $('span.saved-amount').text('৳ ' + savedAmount.toFixed(1));
                    $('span.cart-count').text(res.count);
                    $('span.cart-amount-span').text('৳ ' + res.total);
                    $('input[name = cart-total]').val(res.total);
                    $(".cart-box").hide();
                    $(".cart-box-view").show();
                } else {
                    $('span.saved-amount').text('৳ 0');
                    $('span.cart-count').text(0);
                    $('span.cart-amount-span').text('৳ 0');
                    $(".minimum-amount").hide();
                    var path = "http://epharma.com.bd/theme/epharma/img/empty_bag.png";
                    var html = '<img src="' + path + '">';
                    html += '<span>Your shopping bag is empty. Start shopping now.</span>';

                    $('.cart-table-wrap').html(html);
                }
            }
        });
        return false;
    });

//    $('input[name=search-text]').on('input',function(e){
//        var categoryId = $('select[name=categoryId]').val();
//        alert(categoryId);
//    });

    
    
    $('#example-ajax-post').on('input', function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        var te = $('input#example-ajax-post');
        if(inputVal.length){
            te.addClass('loading');
            $.ajax({
                url: "http://epharma.com.bd/ajax-search",
                dataType: "json",
                data: {
                    name: inputVal,
                    catId: $('#productCategory').val(),
                },
                success: function (data) {
                    te.removeClass('loading');
                    if(data != 1){
                        var result = '<table>';
                        $.each(data, function(k, v) {
                            result += ('</tr>');
                            var path = "http://epharma.com.bd/storage";
                            var imageUrl = path + "/" + v.img;
                            var qty = $(this).attr('fet_qty');
                            var id = $(this).attr('fet_id');
                            var price = $(this).attr('price');
                            var token = $(this).attr('fet_token');
                            var company = v.c_name ? 'Company - ' + v.c_name + ', ' : "";
                            var pack = v.p_name ? 'Pack Size - ' + v.p_name + ', ' : "";
                            var type = v.t_name ? 'Type - ' + v.t_name : "";
                            result += ('<td class="text-center"><img style="width: 40px; height: 40px;" src="' + imageUrl + '"></td>');
                            
                            if(v.corporate == 0){
                                if(v.orgPrice == v.price){
                                    result += ('<td class="show_name"><span class="col search_brand_name" ids = "'+ v.id +'">'+v.name+'</span><span class="per_price_">&nbsp;&nbsp;&nbsp;৳'+ v.price +'</span><sub class="per_price_text"> (Per Unit)</sub><br><span class="gen_style">'+ company + pack + type +'</span></td>');
                                }else{
                                    result += ('<td class="show_name"><span class="col search_brand_name" ids = "'+ v.id +'">'+v.name+'</span>&nbsp;&nbsp;&nbsp;<del style="color:red; font-weight: normal;">৳ '+ v.orgPrice +'</del><span class="per_price_">&nbsp;&nbsp;&nbsp;৳ '+ v.price +'</span></b><sub class="per_price_text"> (Per Unit)</sub><br><span class="gen_style">'+ company + pack + type +'</span></td>');
                                }
                            }else{
                                result += ('<td class="show_name"><span class="col search_brand_name" ids = "'+ v.id +'">'+v.name+'</span><span class="per_price_">&nbsp;&nbsp;&nbsp;৳'+ v.price +'</span><sub class="per_price_text"> (Per Unit)</sub><br><span class="gen_style">'+ company + pack + type +'</span></td>');
                            }
                            
                            
                            result += ('<td><button style="margin-right: 10px;" class="search-btn-cart btn btn-success btn-xs pull-right" fet_id="'+ v.id +'" fet_qty="'+ v.qty +'" price="'+ v.price +'" fet_token="VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm"><i class="fa fa-shopping-cart icon-cart"></i><span class="addToBag">Add to Bag</span></button></td>');
                            result += ('</tr>');
                        });
                        if(Object.keys(data).length > 5){
                            result += '<tr><td class="text-center"><a href="#" id="see_all">See All</a></td></tr>';
                        }
                        result += '</table>'
                        $('.result').html(result);
                    }else{
                        var result = '<p style="color:blue; line-height: 38px; font-size: 13px; padding:10px; margin: 0; border: 1px dotted #ccc;">Sorry No Result Found! <a href="http://epharma.com.bd/product-inquiry"><button class="btn btn-info pull-right">Request Product</button></a></p>'
                        $('.result').html(result);
                    }
                    
//                    resultDropdown.html(result);
                }
            });
        }else{
            te.removeClass('loading');
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result table tr td.show_name", function(){
        var text = $(this).children('span.col').text();
        $(this).parents(".search").find('#example-ajax-post').val(text);
        $(this).parents(".search").find(".result").empty();
    });
    
    $('.result').on('click', '.search-btn-cart', function (e) {
        e.preventDefault();

        var checkLink = window.location;
        var conLink = "http://epharma.com.bd";
        var qty = $(this).attr('fet_qty');
        var id = $(this).attr('fet_id');
        var price = $(this).attr('price');
        var token = $(this).attr('fet_token');
        $.ajax({
            type: "POST",
            url: "http://epharma.com.bd/add-to-cart",
            data: {id: id, qty: qty, price: price, _token: token},
            success: function (res) {
                var savedAmount = res.originalTotal - res.total;
//                window.location.href = checkLink;
                $('span.saved-amount').text('৳ ' + savedAmount.toFixed(1));
                $('span.cart-count').text(res.count);
                $('span.cart-amount-span').text('৳ ' + res.total);
                $('input[name = cart-total]').val(res.total);
                var i = 0;
                var table = '<table style="width: 100%; font-size: 11px;" class="cart-table">';
                // NOTE!  I changed 'object' to 'value' here
                // NOTE 2!  We added a JSON.parse on the 'data' variable to convert from JSON to JavaScript objects.
//                $.each(JSON.parse(res.content), function (key, value) {
                jQuery.each(res.content, function (key, value) {

                    var subTotal = value.qty * value.price;

                    var originalPrice = value.options.productPrice;

                    var originalPriceTotal = value.options.productPrice * value.qty;
                    // We need to access the value variable in this loop because 'data' is the original array that we were iterating!
                    table += ('<tr>');
                    var path = "http://epharma.com.bd/storage";
                    var imageUrl = path + "/" + value.options.img;
                    table += ('<td><img style="width: 30px; border: 1px solid skyblue; border-radius: 5px;" src="' + imageUrl + '"></td>');
                    if (originalPrice == value.price) {
                        table += ('<td><span class="text-primary">' + value.name + '</span><br><strong style="font-size: 11px;">৳ ' + originalPrice + '</strong></td>');
                    }else{
                        table += ('<td><span class="text-primary">' + value.name + '</span><br><del style="font-size: 11px; margin-right: 5px;">৳ '+ originalPrice +'</del><strong style="font-size: 11px;">৳ ' + value.price + '</strong></td>');
                    }
                    table += ('<td style="font-size: 13px; vertical-align: middle; padding: 8px 0;"><div class="qty-holder" style="width: 90px;"><a href="#" class="qty-dec-btn" rowId="' + value.rowId + '" title="Dec" style="width: 22px;">-</a><input style="width: 22px !important;" type="text" name="product_qty" id="product_qty" class="qty-input" value="' + value.qty + '"><a href="#" class="qty-inc-btn" rowId="' + value.rowId + '" title="Inc" style="width: 22px;">+</a></div></td>');
//                    if(originalPriceTotal == subTotal){
//                        table += ('<td><span><del>৳ '+ originalPriceTotal.toFixed(1) +'</del></span><br><span class="text-danger">৳ ' + subTotal.toFixed(1) + '</span></td>');
//                    else{
//                        table += ('<td><span class="text-danger">৳ ' + subTotal.toFixed(1) + '</span></td>');
//                    }
                    if (originalPriceTotal.toFixed(1) != subTotal.toFixed(1)) {
                        table += ('<td><span class="text-primary"><del>৳ ' + originalPriceTotal.toFixed(1) + '</del></span><br><span class="text-danger">৳ ' + subTotal.toFixed(1) + '</span></td>');
                    } else {
                        table += ('<td style="vertical-align: middle; padding: 8px 0;"><span class="text-danger">৳ ' + subTotal.toFixed(1) + '</span></td>');
                    }
                    table += ('<td class="product-delete" style="padding: 15px 5px;"><a href="#" title="Remove product" data-rowId="' + value.rowId + '"><i class="fa fa-times text-danger"></i></a></td>');
                    table += ('</tr>');

                });

                
                table += '</table>';

                $('.cart-table-wrap').html(table);
                $(".cart-box").hide();
                $(".cart-box-view").show();
            }
        });
        return false;
    });
    
    $('.result').on('click', 'table tr td.show_name', function (e) {
        var ids = $(this).children('span').attr('ids');
        var url = "http://epharma.com.bd/product/"+ ids;
        e.preventDefault();
        window.open(url,"_self");
    });
    
    $('.result').on('click', '#see_all', function () {
        var search_text = $('#example-ajax-post').val();
        var search_type = $('#productCategory').val();
        var url = "http://epharma.com.bd/products?type="+search_type+"&text="+search_text;
        window.open(url,"_self");
    });
    
    $(document).on('click', function (e) {
        if($(e.target).attr('id') != "search-results") {
            $(".search").find(".result").empty();
        }
    });

//    $("#example-ajax-post").autocomplete({
//        source: function (request, response) {
//            $.ajax({
//                url: "http://epharma.com.bd/ajax-search",
//                dataType: "json",
//                data: {
//                    name: request.term,
//                    catId: $('#productCategory').val(),
//                },
//                success: function (data) {
//                    response($.map(data, function (results) {
//                        return {
////                            label: results.name + " - ৳" + results.price,
//                            label: results.name,
//                            proId: results.id,
//                            value: results.name,
//                            qty: results.qty,
//                            price: results.price,
//                            orgPrice: results.orgPrice,
//                            g_name: results.g_name,
//                            t_name: results.t_name,
//                            p_name: results.p_name,
//                            img: results.img,
//                        }
//                    }));
//                }
//            });
//        },
//        select: function (event, ui) {
//            var id = ui.item.proId;
//            var elem = $(event.toElement);
//            if (elem.hasClass('ac-item-a')) {
//                var url = "http://epharma.com.bd/product/"+ id;
//                event.preventDefault();
//                window.open(url);
//            }else{
//                var id = ui.item.proId;
//                 var qty = ui.item.qty;
//                 var price = ui.item.price;
//                 var token = 'VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm';
//                 $.ajax({
//                     url: "http://epharma.com.bd/add-to-cart",
//                     dataType: "json",
//                     type: "POST",
//                     data: {
//                         id: id,
//                         qty: qty,
//                         price: price,
//                         _token: token
//                     },
//                     success: function (res) {
//                        var savedAmount = res.originalTotal - res.total;
//        //                window.location.href = checkLink;
//                        $('span.saved-amount').text('৳ ' + savedAmount.toFixed(1));
//                        $('span.cart-count').text(res.count);
//                        $('span.cart-amount-span').text('৳ ' + res.total);
//                        $('input[name = cart-total]').val(res.total);
//                        var i = 0;
//                        var table = '<table style="width: 100%; font-size: 11px;" class="cart-table">';
//                        // NOTE!  I changed 'object' to 'value' here
//                        // NOTE 2!  We added a JSON.parse on the 'data' variable to convert from JSON to JavaScript objects.
//        //                $.each(JSON.parse(res.content), function (key, value) {
//                        jQuery.each(res.content, function (key, value) {
//
//                            var subTotal = value.qty * value.price;
//
//                            var originalPrice = value.options.productPrice;
//
//                            var originalPriceTotal = value.options.productPrice * value.qty;
//                            // We need to access the value variable in this loop because 'data' is the original array that we were iterating!
//                            table += ('<tr>');
//                            var path = "http://epharma.com.bd/storage";
//                            var imageUrl = path + "/" + value.options.img;
//                            table += ('<td><img style="width: 30px; border: 1px solid skyblue; border-radius: 5px;" src="' + imageUrl + '"></td>');
//                            if (originalPrice == value.price) {
//                                table += ('<td><span class="text-primary">' + value.name + '</span><br><strong style="font-size: 11px;">৳ ' + originalPrice + '</strong></td>');
//                            }else{
//                                table += ('<td><span class="text-primary">' + value.name + '</span><br><del style="font-size: 11px; margin-right: 5px;">৳ '+ originalPrice +'</del><strong style="font-size: 11px;">৳ ' + value.price + '</strong></td>');
//                            }
//                            table += ('<td style="font-size: 13px; vertical-align: middle; padding: 8px 0;"><div class="qty-holder" style="width: 90px;"><a href="#" class="qty-dec-btn" rowId="' + value.rowId + '" title="Dec" style="width: 22px;">-</a><input style="width: 22px !important;" type="text" name="product_qty" id="product_qty" class="qty-input" value="' + value.qty + '"><a href="#" class="qty-inc-btn" rowId="' + value.rowId + '" title="Inc" style="width: 22px;">+</a></div></td>');
//                            if(originalPriceTotal == subTotal){
//                                table += ('<td><span><del>৳ '+ originalPriceTotal.toFixed(1) +'</del></span><br><span class="text-danger">৳ ' + subTotal.toFixed(1) + '</span></td>');
//                            else{
//                                table += ('<td><span class="text-danger">৳ ' + subTotal.toFixed(1) + '</span></td>');
//        //                    }
//                            if(originalPriceTotal.toFixed(1) != subTotal.toFixed(1)){
//                                table += ('<td><span class="text-primary"><del>৳ ' + originalPriceTotal.toFixed(1) + '</del></span><br><span class="text-danger">৳ '+ subTotal.toFixed(1) +'</span></td>');
//                            }else{
//                                table += ('<td style="vertical-align: middle; padding: 8px 0;"><span class="text-danger">৳ ' + subTotal.toFixed(1) + '</span></td>');
//                            }
//                            table += ('<td class="product-delete" style="padding: 15px 5px;"><a href="#" title="Remove product" data-rowId="' + value.rowId + '"><i class="fa fa-times text-danger"></i></a></td>');
//                            table += ('</tr>');
//
//                        });
//
//                        table += '</table>';
//
//                        $('.cart-table-wrap').html(table);
//                        $(".cart-box").hide();
//                        $(".cart-box-view").show();
//                    }
//                 }); 
//            }
//            
//        }
//    }).data("ui-autocomplete")._renderItem = function (ul, item) {
//        var path = "http://epharma.com.bd/storage";
//        var imageUrl = path + "/" + item.img;
//        if(item.orgPrice == item.price){
//            var html = "<img style='width: 50px;' src='"+ imageUrl +"'/>&nbsp;&nbsp;<b class='ac-item-a'>" + item.label + "&nbsp;&nbsp;&nbsp;৳ "+ item.price +"</b> <button class='btn btn-info pull-right search-btn-cart'>Add to cart</button><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='gen_style'>Pack Size - "+ item.p_name +" / Generic - "+ item.g_name +"</span>";
//        }else{
//            var html = "<img style='width: 50px;' src='"+ imageUrl +"'/>&nbsp;&nbsp;<b class='ac-item-a'>" + item.label + "&nbsp;&nbsp;&nbsp;<del style='color:#3d6983; font-weight: normal;'>৳ "+ item.orgPrice +"</del>&nbsp;&nbsp;&nbsp;৳ "+ item.price +"</b> <button class='btn btn-info pull-right search-btn-cart'>Add to cart</button><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='gen_style'>Pack Size - "+ item.p_name +" / Generic - "+ item.g_name +"</span>";
//        }
//        return $("<li></li>")
//                .data("item.autocomplete", item)
//                .append(html)
//                .appendTo(ul);
//    };
    
    $("#checkout-button").on('click', function(){

        var UserMinimumAmount="";
        var token = 'VXqpzRmU5FkWSaH4jk62JagfiGHGyLgfVIpQuNQm';
        $.ajax({
            type: "POST",
            url: "http://epharma.com.bd/get-user-minimum-value",
            data: {_token: token},
            success: function (res) {
                UserMinimumAmount = res;

                if(UserMinimumAmount == "checkout"){
                    $(".minimum-amount").hide();
                    window.location.replace("http://epharma.com.bd/checkout");
                }else{
                    $(".minimum-amount").show();
                    $(".minimum-amount").html(UserMinimumAmount);
                }
            }
        });

        
        
        
    });
    
    

//    var options = {
//
//    url: function(phrase) {
//      return "/ajax-search";
//    },
//
//    getValue: function(element) {
//      return element.name + '<button class="btn btn-success">Add to cart</button>';
//    },
//
//    ajaxSettings: {
//      dataType: "json",
//      method: "POST",
//      data: {
//        dataType: "json"
//      }
//    },
//
//    preparePostData: function(data) {
//      data.phrase = $("#example-ajax-post").val();
//      data._token = $("#example-ajax-token").val();
//      return data;
//    },
//
//    requestDelay: 400
//  };
//
//  $("#example-ajax-post").easyAutocomplete(options);
});

//$('.addtocart').on('click',function(){
//    var names = $(this).attr('names');
//    var price = $(this).attr('price');
//    var id = $(this).attr('id');
//
//    /* Adding data to local storage */
//
//    var items = [];
//
//    if(students.length < 0){
//        var array = { 'names': names, 'price':price,'id':id};
//        students.push(array);
//        localStorage.setItem("items", JSON.stringify(items));
//    }else{
//        var stored = JSON.parse(localStorage.getItem("items"));
//        var array = { 'names': names, 'price':price,'id':id};
//        stored.push(array);
//        localStorage.setItem("items", JSON.stringify(stored));
//        var result = JSON.parse(localStorage.getItem("items"));
//    }
//
//    console.log(result);
//
//});
</script>



<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-12345678-1', 'auto');
ga('send', 'pageview');
</script>
-->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>
</body>
</html>
