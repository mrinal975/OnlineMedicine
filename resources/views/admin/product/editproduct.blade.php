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
                        {!! Form::open(['url'=>'adminpanel/product/update','method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
                        <div class="form-group ">
                            <label for="productName" class="col-sm-4 control-label">Product Name</label>
                            <div class="col-sm-5 {{ $errors->has('productName') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" name="productName" value="{{$productById->productName}}">
                                <input type="hidden" class="form-control" name="productId" value="{{$productById->id}}">
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
                                    <option>Select Category Name</option>
                                    @foreach($subcategory as $subcat)
                                        <option value="{{$subcat->id}}" @if($productById->subcategoryId==$subcat->id) selected @endif>{{$subcat->subcategoryName}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-3"></div>
                        </div>
                        <div class="form-group ">
                            <label for="productPrice" class="col-sm-4 control-label">Product Price</label>
                            <div class="col-sm-5 {{ $errors->has('productPrice') ? ' has-error' : '' }}">
                                <input type="number" min="0" class="form-control" name="productPrice" value="{{$productById->productPrice}}">
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
                                <input type="number" min="1" class="form-control" name="productQuantity" value="{{$productById->productQuantity}}">

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
                                <textarea class="form-control" name="productShortDescriptoin" rows="8">{{$productById->productShortDescriptoin}}</textarea>
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
                                    <option value="capsul" @if($productById->type==='capsul') selected @endif>capsul</option>
                                    <option value="Tablet" @if($productById->type==='Tablet') selected @endif >Tablet</option>
                                    <option value="Sirap" @if($productById->type==='Sirap') selected @endif>Sirap</option>
                                </select>
                                <span class="help-block">
                                 <strong class="text-danger">{{ $errors->first('type') }}</strong>
                            </span>

                            </div>
                            <div class="col-sm-3"></div>
                        </div>
                        <div class="form-group ">
                            <label for="brand" class="col-sm-4 control-label">Product Brand</label>
                            <div class="col-sm-5 {{ $errors->has('brand') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" name="brand" value="{{$productById->brand}}">
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
                            <div class="col-sm-5 {{ $errors->has('genericName') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" name="genericName" value="{{$productById->genericName}}">
                                @if ($errors->has('genericName'))
                                    <span class="help-block">
                                <strong class="text-danger">{{ $errors->first('genericName') }}</strong>
                            </span>
                                @endif
                            </div>
                            <div class="col-sm-3"></div>
                        </div>
                        <div class="form-group {{ $errors->has('productImage') ? ' has-error' : '' }}">
                            <label for="productImage" class="col-sm-4 control-label">Product Image</label>
                            <div class="col-sm-3">
                                <input type="file" name="productImage" accept="image">
                                @if ($errors->has('productImage'))
                                <span class="help-block">
                                <strong class="text-danger">{{ $errors->first('productImage') }}</strong>
                            </span>
                                @endif
                            </div>
                            <div class="col-sm-5">
                                <img src="{{asset($productById->productImage)}}" alt="{{$productById->productImage}}" height="150" width="180" class=" img-rounded">
                            </div>
                            {{--<div class="col-sm-1"></div>--}}
                        </div>
                        <div class="form-group">
                            <label for="imputEmail" class="col-sm-4 control-label">Publication Status</label>
                            <div class="col-sm-5">
                                <select class="form-control" name="publication_status">
                                    <option value="1">Publication</option>
                                    <option value="0">Unpublication</option>
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