<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 75, 'stickySetTop': '-75px', 'stickyChangeLogo': true}">
    <div class="header-body">
        <div class="header-container container">
            <div class="header-row">
                <div class="col-md-1 col-sm-6 col-xs-6 logo_border" style="padding-left: 0;">
                    <div class="header-logo">
                        <a href="{{url('/')}}">
                            <img alt="" src="{{asset($info->info_logo)}}" class="logo-image">
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="row">
                        <div class="header-search hidden-sm hidden-xs">
                            <p style="color: #fff; display: block; font-size: 18px; margin: 0; line-height: 50px; padding-left: 20px;">Online Drug Delivery </p>
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
                                    <span>{{$info->info_Phone}}</span>
                                    <span class="split"></span>
                                    <a class="pull-right" style="text-align: right; cursor: default; white-space: nowrap; text-decoration: none;">Immediate drug delivery</a>

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
                                <a href="{{url('/category/'.$cat->id)}}" class="dropdown-toggle">
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
                                                                <li><a href="{{url('/single-Product/'.$subcat->id)}}">{{$subcat->subcategoryName}}</a></li>
                                                            </div>
                                                                @endif
                                                                @endforeach
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-5 mega -banner-bg">
                                                        <img src="{{asset($cat->categoryImage)}}" alt="Banner bg" height="150" width="150">
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
                                <a href="{{url('/prescription-upload')}}">
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
                            {{--<li class="pull-right ">--}}
                                {{--<a href="{{url('/login')}}">--}}
                                    {{--<i class="fa fa-user-circle"></i>--}}
                                    {{--Login--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="mobile-nav">
    <div class="mobile-nav-wrapper">
        <ul class="mobile-side-menu">
            @foreach($Category as $cat)
            <li>
                <span class="mmenu-toggle"></span>
                <a href="{{url('/category/'.$cat->id)}}"><i style="line-height: 0; margin-right: 3px; margin-top: -1px;" class="fa fa-archive"></i>{{$cat->categoryName}}</a>
                <ul>
                    @foreach($subcategory as $subcat)
                        @if($cat->id==$subcat->categoryId)
                    <li><a href="{{url('/single-Product/'.$subcat->id)}}">{{$subcat->subcategoryName}}</a></li>
                        @endif
                    @endforeach
                </ul>
            </li>
            @endforeach
            <li class="pull-right ">

                <a href="{{url('cart/show')}}">
                    <strong>
                        <i class="fa fa-pencil-square-o"></i>
                        Cart <span  id="updateCartInfoMobile">{{Cart::count()}}</span>
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
    </div>
</div>
