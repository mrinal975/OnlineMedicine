@extends('frontEnd.superMaster')
@section('title')
    Login 
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
                                    <a href="/register">
                                        <button class="btn btn-info pull-lg-right">Register</button>
                                    </a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <form role="form" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                                @csrf
                                <div class="col-sm-12">
                                    <h4 class="text-center bg-danger">{{Session::get('message')}}</h4>
                                    <div class="form-content">
                                    
                                        <h3 style="color: #0088cc !important" class="heading-text-color font-weight-normal">LOGIN</h3>
                                        <div class="clearfix"></div>
                                        <div class="form-group">
                                            <label class="font-weight-normal">E-mail <span class="required">*</span></label>
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label class="font-weight-normal">Password <span class="required">*</span></label>
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                             @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <p class="required">* Required Fields</p>
                                    </div>

                                    <div class="form-action clearfix">
                                        <a href="{{url('/password/reset')}}" class="pull-left">Forgot Your Password?</a>

                                        <input type="submit" class="btn btn-primary btn-lg" value="Login">
                                    </div>

                                </div>
                            </form>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection