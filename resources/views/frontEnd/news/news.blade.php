@extends('frontEnd.superMaster')
@section('title')
    Category Page
@endsection
@section('mainContent')
    <div role="main" class="main">
        <div class="container-fluid" style="position: relative">
            <div class="row search">
                <div style="background-color: #f0f0ed; width: 100%; padding: 5px 0;">
                    <div class="container">
                        <div class="col-sm-9  col-xs-9 text-center" id="search-body-mobile" style="border-right: 1px solid #777;">
                            <div class="col-sm-9">
                                <input type="text" id="example-ajax-post" placeholder="Search here..." class="form-control"/>
                                <input type="hidden" id="example-ajax-token" value="i2F3Fhu9DzYv4YIenUfc8XuDvIeEbTqB9BhtwTqo"/>
                            </div>
                            <div class="col-sm-3">
                                <select id="productCategory" name="categoryId" class="form-control">
                                    <option value="1">Brand Name</option>
                                    <option value="2">Generic Name</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-3 text-center mobile-margin">
                            <a href="http://epharma.com.bd/prescription-upload">
                                <button style="background-color: #006394" class="btn btn-primary btn-md" id="upload-btn" >Upload Prescription</button>
                            </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div id="search-results" class="result"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="blog-posts">
                        <article class="post post-large">
                            <a href="http://epharma.com.bd/wp-content/uploads/2017/02/women_health_fb_boost_150217.png">
                                <img class="aligncenter size-large wp-image-25374" src="http://epharma.com.bd/wp-content/uploads/2017/02/women_health_fb_boost_150217-1024x536.png" alt="">
                            </a>

                            <div class="post-content">

                                <h2><strong>Women Healthcare Awareness Campaign</strong></h2>
                                <p>Our campaign going on. &nbsp;And its true, some of the issues of women’s hygiene products for them are still taboo. We do our best to make life of girls and women more comfortable. Today’s campaign at Dhaka University Campus.</p>

                                <a href="demo-shop-4-blog-post.html" class="btn btn-link">Read more</a>

                                <div class="post-meta">
                                    <span><i class="fa fa-calendar"></i> Feb 16, 2016</span>
                                    <span><i class="fa fa-user"></i> By <a href="#">Admin</a> </span>
                                </div>

                            </div>
                        </article>
                        <article class="post post-large">
                            <a href="http://epharma.com.bd/wp-content/uploads/2016/05/women_health_fb_boost_130217-1024x536.png">
                                <img src="http://epharma.com.bd/wp-content/uploads/2016/05/women_health_fb_boost_130217-1024x536.png" alt="">
                            </a>

                            <div class="post-content">

                                <h2><strong>Women Healthcare Awareness Campaign</strong></h2>
                                <p>More and more girls in Bangladesh continue their studies in high school. &nbsp;At the same time, some of the issues of women’s hygiene products for them are still taboo. We do our best to make life of girls and women more comfortable. Today’s campaign at Holy Cross Girls College.</p>

                                <a href="demo-shop-4-blog-post.html" class="btn btn-link">Read more</a>

                                <div class="post-meta">
                                    <span><i class="fa fa-calendar"></i> Feb 14, 2016</span>
                                    <span><i class="fa fa-user"></i> By <a href="#">Admin</a> </span>
                                </div>

                            </div>
                        </article>
                    </div>
                </div>
            </div>

        </div>
@endsection