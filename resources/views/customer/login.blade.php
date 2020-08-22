
@extends('layouts.master')
@section('page_title',ucfirst('account'))
@section('main')
<main>
    <div class="container wrap-acc-inner">
        <div class="account-inner">
            <h1>my Account</h1>
            <div class="form-tabs-login">
                <ul class="nav nav-tabs cus-nav-tab">
                    <li class="active"><a data-toggle="tab" href="#signin">Sign in</a></li>
                    <li><a data-toggle="tab" href="#register">Register</a></li>
                </ul>
                <div class="my-modal-body">
                    <div class="tab-content">
                    <div id="signin" class="tab-pane fade in active">
                        <form action="{{route('customer.login')}}" method="POST" role="form">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control"  name="email" id="" placeholder="Your email">
                                @if ($errors->has('email'))
                                    <small style="color:red">{{$errors->first('email')}}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control"  name="password" id="" placeholder="Password">
                                @if ($errors->has('password'))
                                    <small style="color:red">{{$errors->first('password')}}</small>
                                @endif
                            </div>
                            <div class="options">
                                <input type="checkbox" class="text-left" id="remember_token" name="remember_token">
                                <label class="remember">Remember me</label>
                                <div class="pull-right lost-pass"><a href="">Lost your password</a></div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sign-in">Sign in</button>
                            <a class="create-account" href="#register" aria-controls="tab" role="tab" data-toggle="tab">CREATE AN ACCOUNT</a>
                            <br>
                            @if (Session::has('error'))
                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    {{Session::get('error')}}
                                </div>
                            @endif
                        </form>
                    </div>
                    <div id="register" class="tab-pane fade">
                        <form action="{{route('customer.register')}}" method="POST" role="form">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" id="" placeholder="Email ">
                                @if ($errors->has('email'))
                                    <small style="color:red">{{$errors->first('email')}}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" id="" placeholder="Password">
                                @if ($errors->has('password'))
                                    <small style="color:red">{{$errors->first('password')}}</small>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary btn-sign-in">Sign up</button>
                            <a class="create-account exist-account" href="#sign_in" aria-controls="home" role="tab" data-toggle="tab">ALREADY AN ACCOUNT</a>
                            <br>
                            @if (Session::has('error2'))
                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    {{Session::get('error2')}}
                                </div>
                            @endif
                        </form>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection



