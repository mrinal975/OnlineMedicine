@extends('admin.master')
@section('rootcontent')
        <section class="wrapper">
            <!-- //market-->
            <div class="market-updates">
                <br>
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="text-center">Add Category</h3>
                        <br><br>
                        <div class="well">

                            <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                            <br>
                            {!! Form::open(['url'=>'adminpanel/category/save','method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
                            <div class="form-group ">

                                <label for="imputEmail" class="col-sm-4 control-label">Category Name</label>
                                <div class="col-sm-5 {{ $errors->has('name') ? ' has-error' : '' }}">
                                    <input type="text" class="form-control" name="categoryName">

                                    @if ($errors->has('categoryName'))
                                        <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('categoryName') }}</strong>
                                    </span>
                                    @endif

                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            <div class="form-group {{ $errors->has('categoryImage') ? ' has-error' : '' }}">
                                <label for="categoryImage" class="col-sm-4 control-label">Category Image</label>
                                <div class="col-sm-5">
                                    <input type="file" name="categoryImage" accept="image">
                                    @if ($errors->has('categoryImage'))
                                        <span class="help-block">
                                 <strong class="text-danger">{{ $errors->first('categoryImage') }}</strong>
                            </span>
                                    @endif
                                </div>
                                <div class="col-sm-3"></div>
                            </div>
                            <div class="form-group">
                                <label for="imputEmail" class="col-sm-4 control-label">Publication Status</label>
                                <div class="col-sm-5">
                                    <select class="form-control" name="publication_status">
                                        <option value="1">Published</option>
                                        <option value="0">Unpublish</option>
                                    </select>
                                </div>
                                <div class="col-sm-3"></div>
                            </div>
                            <br>
                            <div class="form-group">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-5">
                                    <button type="submit" class="btn btn-success btn-block">Save Category Info</button>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                        <br><br>
                    </div>

                </div>
            </div>
        </section>
@endsection