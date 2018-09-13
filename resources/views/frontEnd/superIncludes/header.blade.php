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
                            <li>
                                <a href="{{url('/')}}">
                                    <i class="fa fa-home"></i>
                                    Home
                                </a>
                            </li>
                        
                             @foreach($Category as $cat)
                            <li style="margin-top: 3px;" class="dropdown dropdown-mega-small">

                                <a href="{{url('/category/'.$cat->id)}}" class="dropdown-toggle">
                                    <i style="line-height: 0; margin-right: 3px; margin-top: -1px;" class="fa fa-bars"></i>
                                    {{$cat->categoryName}}
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
                                                                <li><a href="
                                                                    {{url('/category/'.$cat->id.'/subcategory/'.$subcat->id)}}">{{$subcat->subcategoryName}}</a></li>
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
                             
                            @guest
                            <li class="pull-right ">
                                <a href="{{url('/login')}}">
                                    <i class="fa fa-user-circle"></i>
                                    Login
                                </a>
                            </li>
                            @else

                             <li class="pull-right dropdown">
                                <a class="">
                                    <span class="fa fa-user-circle" style="font-size: 13px;"></span>
                                    <i class="dropbtn" >{{ Auth::user()->name }}</i>
                                    <div class="dropdown-content">
                                        <a href="{{url('/user/order')}}">Order</a>
                                        <a onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">Logout</a>
                                    </div>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </a>
                            </li>                       
                            @endguest
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
            <!-- <li class="pull-right ">
                <a href="login">
                    <i class="fa fa-user-circle"></i>
                    Login
                </a>
            </li> -->
             @guest
                            <li class="pull-right ">
                                <a href="{{url('/login')}}">
                                    <i class="fa fa-user-circle"></i>
                                    Login
                                </a>
                            </li>
                            @else
                    
                            <div class="pull-right">
                             <div class="dropdown">
                                    <button class="btn btn-success dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">{{ Auth::user()->name }}</button>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="{{url('/user/order')}}">Order</a></li>
                                      
                                      <li role="presentation" class="divider"></li>
                                      <li role="presentation">
                                          <a class="dropdown-item"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                    </li>
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </ul>
                                  </div>
                              </div>
                            @endguest
        </ul>
    </div>
</div>