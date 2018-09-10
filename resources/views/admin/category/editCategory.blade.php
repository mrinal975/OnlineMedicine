@extends('admin.master')
@section('rootcontent')
    <section class="wrapper">
        <!-- //market-->
        <div class="market-updates">
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-center">Edit Category</h3>
                    <hr/>
                    <div class="well">
                        {!! Form::open(['url'=>'adminpanel/category/update','method'=>'POST','class'=>'form-horizontal','name'=>'editCategory','enctype'=>'multipart/form-data']) !!}
                        <div class="form-group ">
                            <label for="imputEmail" class="col-sm-4 control-label">Category Name</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="categoryName" value="{{$categoryById->categoryName}}">
                                <input type="hidden" class="form-control" name="categoryId" value="{{$categoryById->id}}">
                            </div>
                            @if ($errors->has('categoryName'))
                                <span class="help-block">
                                <strong class="text-danger">{{ $errors->first('categoryName') }}</strong>
                            </span>
                            @endif
                            <div class="col-sm-3"></div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label for="imputEmail" class="col-sm-4 control-label">Category Image</label>
                            <div class="col-sm-3">
                                <input type="file" name="categoryImage" accept="image">
                                @if ($errors->has('categoryImage'))
                                    <span class="help-block">
                                <strong class="text-danger">{{ $errors->first('categoryImage') }}</strong>
                            </span>
                                @endif
                            </div>
                            <div class="col-sm-3">
                                <img src="{{asset($categoryById->categoryImage)}}" alt="{{$categoryById->categoryName}}" class="img-responsive img-rounded" height="90" width="65">
                            </div>
                            <div class="col-sm-2"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="imputEmail" class="col-sm-4 control-label">Publication Status</label>
                            <div class="col-sm-5">
                                <select class="form-control" name="publication_status">
                                    <option value="1">Publication</option>
                                    <option value="0">Unpublication</option>
                                </select>
                                <div class="col-sm-3"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-5">
                                <button type="submit" class="btn btn-success btn-block">Update Category Info</button>
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