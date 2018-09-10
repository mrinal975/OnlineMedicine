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
        </div>    <section class="form-section">
            <div class="container">
                <div class="col-sm-9 col-xs-12" style="float: none; margin: 0 auto;">
                    <div class="featured-box featured-box-primary featured-box-flat featured-box-text-left mt-md">
                        <div class="box-content">
                            <div class="col-xs-12" style="border-bottom: 1px solid #eee; margin-bottom: 10px;">
                                <div class="form-group">
                                    <span style="font-size: 16px; line-height: 35px; color: #0088cc" class="pull-left">Prescription Upload</span>
                                </div>
                            </div>
                            <h3 class="text-center text-success bg-important">{{Session::get('message')}}</h3>
                            <div class="clearfix"></div>


                    {!! Form::open(['url'=>'prescription','method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}

                                <div class="col-sm-12">
                                    <div class="form-content">
                                        <h3 style="color: #0088cc !important" class="heading-text-color font-weight-normal">User Info</h3>
                                        <div class="clearfix"></div>
                                        <div class="form-group">
                                            <div class="col-sm-6 col-xs-12">
                                                <label class="font-weight-normal">Name <span class="required">*</span></label>
                                                <input type="text" name="customerName" class="form-control">
                                                @if ($errors->has('customerName'))
                                                    <span class="help-block">
                                                         <strong class="text-danger">{{ $errors->first('customerName') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="col-sm-6 col-xs-12">
                                                <label class="font-weight-normal">Mobile <span class="required">*</span></label>
                                                <input type="text" name="customerPhone" class="form-control">
                                                @if ($errors->has('customerPhone'))
                                                    <span class="help-block">
                                                         <strong class="text-danger">{{ $errors->first('customerPhone') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-6 col-xs-12">
                                                <label class="font-weight-normal">Email</label>
                                                <input type="email" name="customerEmail" class="form-control">
                                                @if ($errors->has('customerEmail'))
                                                    <span class="help-block">
                                                         <strong class="text-danger">{{ $errors->first('customerEmail') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="col-sm-6 col-xs-12">
                                                <label class="font-weight-normal">Doctor Prescription </label>
                                                <input type="file" name="prescriptionsImage"/>
                                                <!-- <input type="file" name="prescriptionsImage" > -->
                                                @if ($errors->has('prescriptionsImage'))
                                                    <span class="help-block">
                                                         <strong class="text-danger">{{ $errors->first('prescriptionsImage') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <label class="font-weight-normal">If Any Query </label>
                                                <textarea class="form-control" name="prescriptionsQuestion" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <p class="required">* Required Fields</p>
                                        </div>
                                    </div>

                                    <div class="form-action clearfix">
                                        <div class="col-xs-12">
                                            <input type="submit" class="btn btn-primary btn-lg" value="Submit">
                                        </div>
                                    </div>

                                </div>
                             {!! Form::close() !!}
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection