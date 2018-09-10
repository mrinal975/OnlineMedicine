@extends('admin.master')
@section('rootcontent')
    <section class="wrapper">
        <!-- //market-->
        <div class="market-updates">
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-center">Add Sub-Category</h3>
                    <br><br>
                    <div class="well">

                        <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                        <br>
                        {!! Form::open(['url'=>'adminpanel/sub-category/save','method'=>'POST','class'=>'form-horizontal']) !!}
                        <div class="form-group ">

                            <label for="imputEmail" class="col-sm-3 control-label">Category Name</label>
                            <div class="col-sm-8 {{ $errors->has('name') ? ' has-error' : '' }}">
                                <select class="form-control" name="categoryId">
                                    @foreach($category as $cat)
                                    <option value="{{$cat->id}}">{{$cat->categoryName}}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('categoryId'))
                                    <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('categoryId') }}</strong>
                                    </span>
                                @endif

                            </div>
                            <div class="col-sm-1"></div>
                        </div>
                        <div class="form-group ">

                            <label for="imputEmail" class="col-sm-3 control-label">Sub-Category Name</label>
                            <div class="col-sm-8 {{ $errors->has('name') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" name="subcategoryName">

                                @if ($errors->has('subcategoryName'))
                                    <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('subcategoryName') }}</strong>
                                    </span>
                                @endif

                            </div>
                            <div class="col-sm-1"></div>
                        </div>
                        <div class="form-group {{ $errors->has('subcategoryDescriptoin') ? ' has-error' : '' }}">
                            <label for="imputEmail" class="col-sm-3 control-label">Sub-Category Description</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" name="subcategoryDescriptoin" rows="8"></textarea>
                                @if ($errors->has('categoryDescriptoin'))
                                    <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('categoryDescriptoin') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-sm-1"></div>
                        </div>
                        <div class="form-group">
                            <label for="imputEmail" class="col-sm-3 control-label">Publication Status</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="publication_status">
                                    <option value="1">Published</option>
                                    <option value="0">Unpublish</option>
                                </select>
                            </div>
                            <div class="col-sm-1"></div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-8">
                                <button type="submit" class="btn btn-success btn-block">Save Category Info</button>
                            </div>
                            <div class="col-sm-1"></div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection