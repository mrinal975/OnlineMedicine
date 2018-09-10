@extends('admin.master')
@section('rootcontent')
    <section class="wrapper">
        <!-- //market-->
        <div class="market-updates">
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-center">Add Main Page Information</h3>
                    <br><br>
                    <div class="well">

                        <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                        <br>
                        {!! Form::open(['url'=>'adminpanel/new/information/store','method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
                        <div class="form-group ">
                            <label for="info_Phone" class="col-sm-4 control-label">Phone Number</label>
                            <div class="col-sm-5 {{ $errors->has('info_Phone') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" name="info_Phone">
                                @if ($errors->has('info_Phone'))
                                    <span class="help-block">
                                <strong class="text-danger">{{ $errors->first('info_Phone') }}</strong>
                            </span>
                                @endif
                            </div>
                            <div class="col-sm-3"></div>
                        </div>

                        <div class="form-group">
                            <label for="info_Email" class="col-sm-4 control-label">E-mail Address</label>
                            <div class="col-sm-5">
                                <input type="email" class="form-control" name="info_Email">
                                @if ($errors->has('info_Email'))
                                    <span class="help-block">
                                <strong class="text-danger">{{ $errors->first('info_Email') }}</strong>
                            </span>
                                @endif
                            </div>
                            <div class="col-sm-3"></div>
                        </div>

                        <div class="form-group {{ $errors->has('productImage') ? ' has-error' : '' }}">
                            <label for="info_logo" class="col-sm-4 control-label">Front logo</label>
                            <div class="col-sm-5">
                                <input type="file" name="info_logo" accept="image">
                                @if ($errors->has('info_logo'))
                                    <span class="help-block">
                                 <strong class="text-danger">{{ $errors->first('info_logo') }}</strong>
                            </span>
                                @endif
                            </div>
                            <div class="col-sm-3"></div>
                        </div>
                        <div class="form-group">
                            <label for="publication_status" class="col-sm-4 control-label">Publication Status</label>
                            <div class="col-sm-5">
                                <select class="form-control" name="publication_status">
                                    <option value="1">Published</option>
                                    <option value="0">Unpublished</option>
                                </select>
                            </div>
                            <div class="col-sm-3"></div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-5">
                                <button type="submit" class="btn btn-success btn-block">Save Product Info</button>
                            </div>
                            <div class="col-sm-3"></div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection