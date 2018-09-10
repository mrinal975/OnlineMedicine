<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 75, 'stickySetTop': '-75px', 'stickyChangeLogo': true}">
    <div class="header-body">
        <!--                <div class="header-top">
                                    <div class="container">
                                        <div class="dropdowns-container">
                                            <div class="header-dropdown cur-dropdown">
                                                <a href="#"><i class="fa fa-facebook" style="color: white; font-size: 14px;"></i></a>
                                            </div>

                                            <div class="header-dropdown lang-dropdown">
                                                <a href="#"><i class="fa fa-twitter" style="color: white; font-size: 14px;"></i></a>
                                            </div>

                                            <div class="compare-dropdown">
                                                <a href="#"><i class="fa fa-youtube" style="color: white; font-size: 14px;"></i></a>
                                            </div>
                                        </div>

                                        <div class="top-menu-area">
                                            <a href="#">Links <i class="fa fa-caret-down"></i></a>
                                            <ul class="top-menu">
                                                <li><a href="http://epharma.com.bd/how-to-order">How To Order</a></li>
                                                <li><a href="http://epharma.com.bd/partners">Partners</a></li>
                                                <li><a href="http://epharma.com.bd/policy">Policy</a></li>
                                                <li><a href="http://epharma.com.bd/news">News</a></li>
                                                <li><a href="http://epharma.com.bd/about-us">About Us</a></li>
                                                <li><a href="http://epharma.com.bd/contact-us">Contact Us</a></li>
                                                <li><a href="http://epharma.com.bd/login">My Account</a></li>
                                                <li class="menu-item">
                                                    <a href="http://epharma.com.bd/login">
                                                        <i class="fa fa-user" style="margin-right: 5px;"></i>Login
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="http://epharma.com.bd/login">
                                                        <i class="fa fa-user-plus" style="margin-right: 5px;"></i>Register
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>-->
        <div class="header-container container">
            <div class="header-row">
                <div class="col-md-2 col-sm-6 col-xs-6 logo_border" style="padding-left: 0;">
                    <div class="header-logo">
                        <a href="/">
                            <img alt="Epharma" src="http://epharma.com.bd/theme/epharma/img/n_logo1-1.gif">
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="row">
                        <div class="header-search hidden-sm hidden-xs">
                            <p style="color: #fff; display: block; font-size: 18px; margin: 0; line-height: 50px; padding-left: 20px;">Your Online Healthcare Solution</p>
                        </div>

                        <a href="#" class="mmenu-toggle-btn" title="Toggle menu">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-5 hidden-sm hidden-xs">
                    <div class="row">
                        <div class="cart-area" style="margin-top: 0;">
                            <div class="custom-block" style="line-height: 25px;">
                                <div class="row">
                                    <i class="fa fa-phone" style="line-height: 25px;"></i>
                                    <span> 018 8 222 8 222</span>
                                    <span class="split"></span>
                                    <a class="pull-right" style="text-align: right; cursor: default; white-space: nowrap; text-decoration: none;">Order by 1pm Same day Delivery</a>
                                    <br>
                                    <i class="fa fa-phone" style="line-height: 25px;"></i>
                                    <span> 017 0 129 0 890</span>
                                    <span class="split"></span>
                                    <a class="pull-right" style="text-align: right; cursor: default; white-space: nowrap; text-decoration: none;">After 1pm Next Day Delivery&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="header-container header-nav">
            <div class="container" style="padding-left: 0px;padding-right: 0px;">
                <div class="header-nav-main">
                    <nav>
                        <ul class="nav nav-pills" id="mainNav">
                            @foreach($Category as $cat)
                            <li style="margin-top: 2px;" class="dropdown dropdown-mega-small">
                                <a href="{{$cat->id}}" class="dropdown-toggle">
                                    <i style="line-height: 0; margin-right: 3px; margin-top: -1px;" class="fa fa-users"></i>{{$cat->categoryName}}
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="dropdown-mega-content dropdown-mega-content-small">
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="row">
                                                        <ul class="dropdown-mega-sub-nav">
                                                            @foreach($subcategory as $subcat)
                                                                @if($cat->id==$subcat->categoryId)
                                                            <div class="col-md-6">
                                                                <li><a href="/category/8{{$subcat->id}}">{{$subcat->subcategoryName}}</a></li>
                                                            </div>
                                                                @endif
                                                                @endforeach
                                                        </ul>
                                                    </div>

                                                    <div class="col-md-5 mega -banner-bg">
                                                        <img src="{{ asset('frontEnd/storage/menu_image/women_care.jpg') }}" alt="Banner bg">
                                                    </div>
                                                </div>
                                            </div>
                                    </li>
                                    <div class="clearfix"></div>
                                </ul>
                                <div class="clearfix"></div>
                            </li>
                            @endforeach
                            <li>
                                <a href="http://epharma.com.bd/product-inquiry">
                                    <i class="fa fa-pencil-square-o"></i>
                                    Request Product
                                </a>
                            </li>
                            <li class="pull-right ">

                                <a href="{{url('cart/show')}}">
                                    <strong>
                                        <i class="fa fa-pencil-square-o"></i>
                                        Cart <span  id="updateCartInfo">{{Cart::count()}}</span>
                                    </strong>

                                </a>
                            </li>
                            <li class="pull-right ">
                                <a href="login">
                                    <i class="fa fa-user-circle"></i>
                                    Login
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
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
