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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Web Fonts  -->

    <!-- ===Remort=== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('superfrontEnd/theme/epharma/css/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('superfrontEnd/theme/epharma/css/vendor/bootstrap/css/style.css')}}">
    <!-- Full Slider CSS -->
    <link rel="stylesheet" href="{{asset('superfrontEnd/theme/epharma/css/full-slider.css')}}">
    <link rel="stylesheet" href="{{asset('superfrontEnd/theme/epharma/css/vendor/animate/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('superfrontEnd/theme/epharma/css/vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('superfrontEnd/theme/epharma/css/vendor/owl.carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('superfrontEnd/theme/epharma/css/vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('superfrontEnd/theme/epharma/css/vendor/magnific-popup/magnific-popup.min.css')}}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('superfrontEnd/theme/epharma/css/theme.css')}}">
    <link rel="stylesheet" href="{{asset('superfrontEnd/theme/epharma/css/theme-elements.css')}}">
    <link rel="stylesheet" href="{{asset('superfrontEnd/theme/epharma/css/theme-blog.css')}}">
    <link rel="stylesheet" href="{{asset('superfrontEnd/theme/epharma/css/theme-shop.css')}}">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="{{asset('superfrontEnd/theme/epharma/css/vendor/rs-plugin/css/settings.css')}}">
    <link rel="stylesheet" href="{{asset('superfrontEnd/theme/epharma/css/vendor/rs-plugin/css/layers.css')}}">
    <link rel="stylesheet" href="{{asset('superfrontEnd/theme/epharma/css/vendor/rs-plugin/css/navigation.css')}}">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{asset('superfrontEnd/theme/epharma/css/skins/skin-shop-4.css')}}">

    <!-- Demo CSS -->
    <link rel="stylesheet" href="{{asset('superfrontEnd/theme/epharma/css/demos/demo-shop-4.css')}}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('superfrontEnd/theme/epharma/css/custom.css')}}">

    <!-- Theme Sweet Alert CSS -->
    <!-- ===Remort=== -->
    <link rel="stylesheet" href="{{asset('superfrontEnd/sweetalert2/6.5.5/sweetalert2.min.css')}}">
    <link rel="stylesheet" href="{{asset('superfrontEnd/ui/1.11.4/themes/smoothness/jquery-ui.css')}}">
    <!-- Head Libs -->
    @yield('css')
    <script src="{{asset('superfrontEnd/theme/epharma/css/vendor/modernizr/modernizr.min.js')}}"></script>

    <style>
        
        @media screen and (max-width: 481px) {
        .add-to-cart{
            min-width: 100px;
            min-height: 30px;
            background-image: url(/add.jpg);
            }
        }
        #toast{
          position:fixed;
          top:10;
          left:50%;
          transform:translate(-50%);
          background-color:#5981EC;
          color:#fff;
          padding:16px;
          border-radius:5px;
          text-align:center;
          z-index:1;
          box-shadow:0 0 20px rgba(0,0,0,0.3);
          visibility:hidden;
          opacity:0;
        }

    #toast.show{
      visibility:visible;
      animation:fadeInOut 2s;
    }

    @keyframes fadeInOut{
      1%,95%{opacity:1;top:180px}
      15%,85%{opacity:1;top:160px}
    }
    .fa{
        line-height: 30px;
    }
    .dropbtn {
    background-color: #04cc54;
    color: white;
    font-size: 14px;
    border: none;
   font-style: normal;
   font-weight: bold;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #04cc54;}
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
    <div class="body">
        @include('frontEnd.superIncludes.header')
        <div id="mobile-menu-overlay"></div>
                        <style>

        .search-box{
            width: 100%;
            position: relative;
            display: inline-block;
            font-size: 14px;
        }

        .result {
            position: absolute;
            z-index: 999;
            top: 75%;
            left: 35px;
            background: #FFF;
        }
        @media  only screen and (min-width: 320px) and (max-width: 480px) {
            .result {
                position: absolute;
                z-index: 999;
                top: 31%;
                left: 35px;
                background: #FFF;
            }
        }
        .search-box input[type="text"], .result{
            width: 100%;
            box-sizing: border-box;
        }
        .result{
            width: 69%;
            box-sizing: border-box;
        }
        @media  only screen and (min-width: 320px) and (max-width: 480px) {
            .result{
                width: 77%;
                box-sizing: border-box;
            }
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
        </style>
        <div role="main" class="main">
            @yield('carousel')
            {{--<div class="banners-wrapper">--}}
                {{--<div class="banners-container">--}}
                    {{--<div class="container">--}}
                        {{--<div class="row">--}}

                            {{--<div class="col-sm-3 col-xs-6">--}}
                                {{--<a href="#" class="banner">--}}
                                    {{--<img src="http://epharma.com.bd/theme/epharma/img/banners/shop4/banner1.jpg" alt="Banner">--}}
                                {{--</a>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-3 col-xs-6 col-sm-push-6">--}}
                                {{--<a href="http://35.162.210.234:9900/category/95" class="banner">--}}
                                    {{--<img src="http://epharma.com.bd/theme/epharma/img/banners/shop4/banner7.jpg" alt="Banner">--}}
                                {{--</a>--}}
                            {{--</div>--}}

                            {{--<div class="clearfix visible-xs"></div>--}}

                            {{--<div class="col-sm-6 col-sm-pull-3">--}}
                                {{--<a href="http://35.162.210.234:9900/category/13" class="banner">--}}
                                    {{--<img src="http://epharma.com.bd/theme/epharma/img/banners/shop4/banner4.jpg" alt="Banner">--}}
                                {{--</a>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            @yield('mainContent')

        </div>

        <style>
    .tagcloud ul{
        padding: 0;
        margin: 0;
    }
    .tagcloud ul li{
        list-style: none;
    }
    .tagcloud ul li a{
        text-decoration: none;
        font-size: 10pt;
        border: none;
    }
    .fa-meetup{
        color: #99ddff;
    }
    .gen_style{
        color: #333;
        font-size: 12px;
        line-height: 15px;
    }
    .ac-item-a{
        color: #3097D1;
    }
    .search-btn-cart{
        /*margin-top: 8px;*/
    }
</style>
        @include('frontEnd.superIncludes.fooder')
</div>

<!-- Vendor -->
<script src="{{asset('superfrontEnd/theme/epharma/css/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('superfrontEnd/theme/epharma/css/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('superfrontEnd/theme/epharma/css/vendor/jquery.appear/jquery.appear.min.js')}}"></script>
<script src="{{asset('superfrontEnd/theme/epharma/css/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('superfrontEnd/theme/epharma/css/vendor/jquery-cookie/jquery-cookie.min.js')}}"></script>
<script src="{{asset('superfrontEnd/theme/epharma/css/vendor/common/common.min.js')}}"></script>
<script src="{{asset('superfrontEnd/theme/epharma/css/vendor/jquery.validation/jquery.validation.min.js')}}"></script>
<script src="{{asset('superfrontEnd/theme/epharma/css/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js')}}"></script>
<script src="{{asset('superfrontEnd/theme/epharma/css/vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
<script src="{{asset('superfrontEnd/theme/epharma/css/vendor/jquery.lazyload/jquery.lazyload.min.js')}}"></script>
<script src="{{asset('superfrontEnd/theme/epharma/css/vendor/isotope/jquery.isotope.min.js')}}"></script>
<script src="{{asset('superfrontEnd/theme/epharma/css/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('superfrontEnd/theme/epharma/css/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('superfrontEnd/theme/epharma/css/vendor/vide/vide.min.js')}}"></script>
<script src="{{asset('superfrontEnd/theme/epharma/js/select2.min.js')}}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{asset('superfrontEnd/theme/epharma/js/theme.js')}}"></script>


<script src="{{asset('superfrontEnd/theme/epharma/css/vendor/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('superfrontEnd/theme/epharma/css/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

<!-- Current Page Vendor and Views -->
<script src="{{asset('superfrontEnd/theme/epharma/js/views/view.contact.js')}}"></script>

<script src="{{asset('superfrontEnd/theme/epharma/css/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.js')}}"></script>
<script src="{{asset('superfrontEnd/theme/epharma/css/vendor/elevatezoom/jquery.elevatezoom.js')}}"></script>

<!-- Demo -->
<script src="{{asset('superfrontEnd/theme/epharma/js/demos/demo-shop-4.js')}}"></script>

<!-- Theme Custom -->
<script src="{{asset('superfrontEnd/theme/epharma/js/custom.js')}}"></script>

<!-- Theme Initialization Files -->
<script src="{{asset('superfrontEnd/theme/epharma/js/theme.init.js')}}"></script>
<script src="{{asset('superfrontEnd/theme/epharma/js/jquery.star-rating-svg.js')}}"></script>
<!-- Full Slider Js -->
<link rel="stylesheet" href="{{asset('superfrontEnd/theme/epharma/css/jquery-ui.css')}}">
<script src="{{asset('superfrontEnd/theme/epharma/js/jquery-ui.js')}}"></script>
<script type="text/javascript" src="{{asset('superfrontEnd/theme/epharma/social-share/jssocials.min.js')}}"></script>

<!-- Theme Sweet Alert Js -->
<!-- <script src="https://cdn.jsdelivr.net/sweetalert2/6.5.5/sweetalert2.min.js"></script> -->

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

        @yield('js')

<script type="text/javascript">
    function showToast(text){
  var x=document.getElementById("toast");
  x.classList.add("show");
  x.innerHTML=text;
  setTimeout(function(){
    x.classList.remove("show");
  },3000);
}
</script>
</body>
</html>
