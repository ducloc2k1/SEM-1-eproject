@extends('layouts.master')
@section('page_title',ucfirst('account detail'))
@section('main')
<main>
    <main>
        <div class="container wrap-acc-inner">
            <div class="account-inner">
                <h1>My Account</h1>
                <nav class="my-acc-nav">
                    <ul>
                        <li><a href="{{route('account')}}">Dashboard</a></li>
                        <li><a href="{{route('order')}}">Orders</a></li>
                        <li><a href="{{route('address')}}">Addresses</a></li>
                        <li class="active"><a href="{{route('account-detail')}}">Account details</a></li>
                        <li><a href="{{route('customer.logout')}}">Logout</a></li>
                    </ul>
                </nav>
                <div class="inner-acc-detail">
                    <form action="{{route('account-detail.update',Auth::guard('cus')->user()->id)}}" method="POST" role="form">
                        @csrf @method('PUT')
                        <div class="form-group">
                            <h2>Edit Account</h2>
                            <div class="form-row name-row">
                                <label for="">Name *</label>
                                <div class="name-box">
                                    <input type="text" class="form-control" name="first_name" placeholder="First Name" value="{{Auth::guard('cus')->user()->first_name}}" >
                                    <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="{{Auth::guard('cus')->user()->last_name}}">
                                </div>
                            </div>
                            <div class="form-row">
                                <label for="">Display name *</label>
                                @if (Auth::guard('cus')->user()->display_name)
                                    <input type="text" class="form-control" name="display_name" value="{{Auth::guard('cus')->user()->display_name}}">
                                @elseif (Auth::guard('cus')->user()->first_name && Auth::guard('cus')->user()->last_name)
                                    <input type="text" class="form-control" name="display_name" value="{{Auth::guard('cus')->user()->first_name}} {{Auth::guard('cus')->user()->last_name}}">
                                @else
                                    <input type="text" class="form-control" name="display_name" value="{{str_replace("@gmail.com","",Auth::guard('cus')->user()->email)}}">
                                @endif
                            </div>
                            <div class="form-row">
                                <label for="">Email address *</label>
                                <input type="text" class="form-control" name="email" value="{{Auth::guard('cus')->user()->email}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <h2>Password change</h2>
                            <div class="form-row">
                                <label for="">Current password</label>
                                <input type="password" class="form-control" name="old_password">
                                @if (Session::has('error'))
                                    <small style="color:red">{{Session::get('error')}}</small>
                                @endif
                                @if ($errors->has('old_password'))
                                    <small style="color:red">{{$errors->first('old_password')}}</small>
                                @endif
                            </div>
                            <div class="form-row">
                                <label for="">New password</label>
                                <input type="password" class="form-control" name="password">
                                @if ($errors->has('password'))
                                    <small style="color:red">{{$errors->first('password')}}</small>
                                @endif
                            </div>
                            <div class="form-row">
                                <label for="">Confirm new password</label>
                                <input type="password" class="form-control" name="confirm_password">
                                @if ($errors->has('confirm_password'))
                                    <small style="color:red">{{$errors->first('confirm_password')}}</small>
                                @endif
                            </div>
                        </div>

                        <button type="submit" class="btn">save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
