@extends('admin.master')

@section('rootcontent')
    <section class="wrapper">
        <!-- //market-->
        <div class="market-updates">
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-center">Add Gateway Information</h3>
                    <br><br>
                    <div class="well">

                        <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                        <br>
                        {!! Form::open(['url'=>'adminpanel/new/gateway/store','method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
                        <div class="form-group ">
                            <label for="bkas" class="col-sm-4 control-label">bkas Number</label>
                            <div class="col-sm-5 {{ $errors->has('bkas') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" name="bkas">
                                @if ($errors->has('bkas'))
                                    <span class="help-block">
                                <strong class="text-danger">{{ $errors->first('bkas') }}</strong>
                            </span>
                                @endif
                            </div>
                            <div class="col-sm-3"></div>
                        </div>

                        <div class="form-group">
                            <label for="rocket" class="col-sm-4 control-label">rocket Number</label>
                            <div class="col-sm-5">
                                <input type="rocket" class="form-control" name="rocket">
                                @if ($errors->has('rocket'))
                                    <span class="help-block">
                                <strong class="text-danger">{{ $errors->first('rocket') }}</strong>
                            </span>
                                @endif
                            </div>
                            <div class="col-sm-3"></div>
                        </div>
                        <div class="form-group">
                            <label for="publication_status" class="col-sm-4 control-label">Publication Status</label>
                            <div class="col-sm-5">
                                <select class="form-control" name="publication_status">
                                    <option value="0">Unpublished</option>
                                    <option value="1">Published</option>
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