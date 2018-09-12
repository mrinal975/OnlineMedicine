@extends('frontEnd.superMaster')
@section('title')
    Category Page
@endsection
@section('mainContent')
    <div role="main" class="main">
        <section class="form-section">
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