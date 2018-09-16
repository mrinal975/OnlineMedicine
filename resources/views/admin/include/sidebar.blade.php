<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="{{url('/adminpanel')}}">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Category</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{url('adminpanel/category/add')}}   ">Add Category</a></li>
                        <li><a href="{{url('adminpanel/category/manage')}}">Manage Category</a></li>

                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Sub-Category</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{url('adminpanel/sub-category/add')}}">Add Sub-Category</a></li>
                        <li><a href="{{url('adminpanel/sub-category/manage')}}">Manage Sub-Category</a></li>

                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Product</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{url('adminpanel/product/add')}}">Add Product</a></li>
                        <li><a href="{{url('adminpanel/product/manage')}}">Manage Product</a></li>

                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Order</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{url('adminpanel/new/order')}}">New Order</a></li>
                    </ul>
                </li>
                    <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Sell</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{url('adminpanel/delivered/order')}}">Overall Sell</a></li>
                        <li><a href="{{url('adminpanel/dailysell')}}">Daily Sell</a></li>
                        <li><a href="{{url('adminpanel/datefilter')}}">Filter Sell</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Prescription</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{url('adminpanel/new/prescription')}}">New Prescription</a></li>
                        <li><a href="{{url('adminpanel/Manage/prescription')}}">Manage Prescription</a></li>

                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>MainPageInfo</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{url('adminpanel/new/information')}}">New Information</a></li>
                        <li><a href="{{url('adminpanel/Manage/information')}}">View Information</a></li>

                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Gateway Contact</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{url('adminpanel/new/gateway')}}">New Gateway</a></li>
                        <li><a href="{{url('adminpanel/manage/gateway')}}">View Gateway</a></li>

                    </ul>
                </li>
            </ul>

        </div>
        <!-- sidebar menu end-->
    </div>
</aside>