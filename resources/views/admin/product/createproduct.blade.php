@extends('admin.master')
@section('rootcontent')
    <section class="wrapper">
        <!-- //market-->
        <div class="market-updates">
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-center">Add Product</h3>
                    <br><br>
                    <div class="well">

                        <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                        <br>
                        {!! Form::open(['url'=>'adminpanel/product/save','method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
                        <div class="form-group ">
                            <label for="productName" class="col-sm-4 control-label">Product Name</label>
                            <div class="col-sm-5 {{ $errors->has('productName') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" name="productName">
                                @if ($errors->has('productName'))
                                    <span class="help-block">
                                <strong class="text-danger">{{ $errors->first('productName') }}</strong>
                            </span>
                                @endif
                            </div>
                            <div class="col-sm-3"></div>
                        </div>

                        <div class="form-group">
                            <label for="categoryId" class="col-sm-4 control-label">Sub-Category Name</label>
                            <div class="col-sm-5">
                                <select class="form-control" name="subcategoryId">
                                    @foreach($subcategory as $subcat)
                                        <option value="{{$subcat->id}}">{{$subcat->subcategoryName}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-3"></div>
                        </div>
                        <div class="form-group ">
                            <label for="productPrice" class="col-sm-4 control-label">Product Price</label>
                            <div class="col-sm-5 {{ $errors->has('productPrice') ? ' has-error' : '' }}">
                                <input type="number" min="0" class="form-control" name="productPrice">
                                @if ($errors->has('productPrice'))
                                    <span class="help-block">
                                <strong class="text-danger">{{ $errors->first('productPrice') }}</strong>
                            </span>
                                @endif
                            </div>
                            <div class="col-sm-3"></div>
                        </div>
                        <div class="form-group ">
                            <label for="imputEmail" class="col-sm-4 control-label">Product Quantity</label>
                            <div class="col-sm-5 {{ $errors->has('productQuantity') ? ' has-error' : '' }}">
                                <input type="number" min="1" class="form-control" name="productQuantity">

                                @if ($errors->has('productQuantity'))
                                    <span class="help-block">
                                  <strong class="text-danger">{{ $errors->first('productQuantity') }}</strong>
                            </span>
                                @endif
                            </div>
                            <div class="col-sm-3"></div>
                        </div>
                        <div class="form-group {{ $errors->has('productShortDescriptoin') ? ' has-error' : '' }}">
                            <label for="productShortDescriptoin" class="col-sm-4 control-label">Product Short Description</label>
                            <div class="col-sm-5">
                                <textarea class="form-control" name="productShortDescriptoin" rows="8"></textarea>
                                @if ($errors->has('productShortDescriptoin'))
                                    <span class="help-block">
                                <strong class="text-danger">{{ $errors->first('productShortDescriptoin') }}</strong>
                            </span>
                                @endif
                            </div>
                            <div class="col-sm-3"></div>
                        </div>
                        <div class="form-group {{ $errors->has('productDescriptoin') ? ' has-error' : '' }}">
                            <label for="type" class="col-sm-4 control-label">Product Type</label>
                            <div class="col-sm-5">
                                <select class="form-control" name="type">
                                    <option value="capsul">capsul</option>
                                    <option value="Tablet">Tablet</option>
                                    <option value="Sirap">Sirap</option>
                                </select>
                                    <span class="help-block">
                                 <strong class="text-danger">{{ $errors->first('type') }}</strong>
                            </span>

                            </div>
                            <div class="col-sm-3"></div>
                        </div>
                        <div class="form-group ">
                            <label for="brand" class="col-sm-4 control-label">Product Brand</label>
                            <div class="col-sm-5 {{ $errors->has('productPrice') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" name="brand">
                                @if ($errors->has('brand'))
                                    <span class="help-block">
                                <strong class="text-danger">{{ $errors->first('brand') }}</strong>
                            </span>
                                @endif
                            </div>
                            <div class="col-sm-3"></div>
                        </div>
                        <div class="form-group ">
                            <label for="genericName" class="col-sm-4 control-label">Generic Name</label>
                            <div class="col-sm-5 {{ $errors->has('productPrice') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" name="genericName">
                                @if ($errors->has('genericName'))
                                    <span class="help-block">
                                <strong class="text-danger">{{ $errors->first('genericName') }}</strong>
                            </span>
                                @endif
                            </div>
                            <div class="col-sm-1"></div>
                        </div>
                        <div class="form-group {{ $errors->has('productImage') ? ' has-error' : '' }}">
                            <label for="productImage" class="col-sm-4 control-label">Product Image</label>
                            <div class="col-sm-5">
                                <input type="file" name="productImage" accept="image">
                                @if ($errors->has('productImage'))
                                    <span class="help-block">
                                 <strong class="text-danger">{{ $errors->first('productImage') }}</strong>
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