@extends('frontEnd.superMaster')
@section('title')
    Register 
@endsection
@section('mainContent')
    <div role="main" class="main">
        <section class="form-section">
            <div class="container">
                <div class="col-sm-6 col-xs-12" style="float: none; margin: 0 auto;">
                    <div class="featured-box featured-box-primary featured-box-flat featured-box-text-left mt-md">
                        <div class="box-content">
                            <div class="col-xs-12" style="border-bottom: 1px solid #eee; margin-bottom: 10px;">
                                <div class="form-group">
                                    <span style="font-size: 16px; line-height: 35px; color: #0088cc" class="pull-left">New Customer</span>
                                    <a href="/login">
                                        <button class="btn btn-info pull-lg-right">Login</button>
                                    </a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            {!! Form::open(['url'=>'register','method'=>'POST','class'=>'form-horizontal']) !!}
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="col-sm-12">
                                    <div class="form-content">
                                        <h3 style="color: #0088cc !important" class="heading-text-color font-weight-normal">Register</h3>
                                        <div class="clearfix"></div>
                                        <div class="form-group">
                                            <label class="font-weight-normal">Name <span class="required">*</span></label>
                                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                              @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="sel1">Gender:</label>
                                            <select class="form-control" id="sel1" name="gender">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                             @if ($errors->has('gender'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('gender') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-normal">E-mail <span class="required">*</span></label>
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                             @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-normal">Password <span class="required">*</span></label>
                                            <input  id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                             @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-normal">Confirm Password <span class="required">*</span></label>
                                            <input  id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                             @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <p class="required">* Required Fields</p>
                                    </div>

                                    <div class="form-action clearfix">
                                        <input type="submit" class="btn btn-primary btn-lg" value="Register">
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