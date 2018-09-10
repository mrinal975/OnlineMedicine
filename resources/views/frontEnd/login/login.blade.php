@extends('frontEnd.master')
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
                                <input type="hidden" id="example-ajax-token" value="2zoh4YwwO26RdTdeJjXBvZjkwKObQFvYTkZKEkwZ"/>
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
        </div>    <section class="form-section">
            <div class="container">
                <div class="col-sm-6 col-xs-12" style="float: none; margin: 0 auto;">
                    <div class="featured-box featured-box-primary featured-box-flat featured-box-text-left mt-md">
                        <div class="box-content">
                            <div class="col-xs-12" style="border-bottom: 1px solid #eee; margin-bottom: 10px;">
                                <div class="form-group">
                                    <span style="font-size: 16px; line-height: 35px; color: #0088cc" class="pull-left">New Customer</span>
                                    <a href="http://epharma.com.bd/registration">
                                        <button class="btn btn-info pull-lg-right">Register</button>
                                    </a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <form role="form" method="POST" action="http://epharma.com.bd/post-login">
                                <div class="col-sm-12">
                                    <div class="form-content">
                                        <input type="hidden" name="_token" value="2zoh4YwwO26RdTdeJjXBvZjkwKObQFvYTkZKEkwZ">
                                        <h3 style="color: #0088cc !important" class="heading-text-color font-weight-normal">LOGIN</h3>
                                        <div class="clearfix"></div>
                                        <div class="form-group">
                                            <label class="font-weight-normal">Mobile <span class="required">*</span></label>
                                            <input type="text" name="mobile" placeholder="0191XXXXXXX" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <label class="font-weight-normal">Password <span class="required">*</span></label>
                                            <input type="password" name="password" class="form-control" required>
                                        </div>

                                        <p class="required">* Required Fields</p>
                                    </div>

                                    <div class="form-action clearfix">
                                        <a href="#" class="pull-left">Forgot Your Password?</a>

                                        <input type="submit" class="btn btn-primary btn-lg" value="Login">
                                    </div>

                                </div>
                            </form>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection