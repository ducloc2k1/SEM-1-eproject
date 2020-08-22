
@extends('layouts.master')
@section('page_title',ucfirst('account'))
@section('main')
<main>
    <div class="container wrap-acc-inner">
        <div class="account-inner">
            <h1>my Account</h1>
            <nav class="my-acc-nav">
                <ul>
                    <li class="active"><a href="{{route('account')}}">Dashboard</a></li>
                    <li><a href="{{route('order')}}">Orders</a></li>
                    <li><a href="{{route('address')}}">Addresses</a></li>
                    <li><a href="{{route('account-detail')}}">Account details</a></li>
                    <li><a href="{{route('customer.logout')}}">Logout</a></li>
                </ul>
            </nav>
            <div class="inner-dashboard">
                <div class="greeting">
                    Hello <strong class="user-name">{{str_replace("@gmail.com","",Auth::guard('cus')->user()->email)}}</strong> (not <strong class="user-name">{{str_replace("@gmail.com","",Auth::guard('cus')->user()->email)}}</strong>? <a href="{{route('customer.logout')}}">Log out</a>)
                </div>
                <div class="usage">
                    From your account dashboard you can view your <a href="" class="order">recent orders</a>, manage your <a href="" class="address-ship">shipping and billing addresses</a>, and <a href="" class="edit-acc">edit your password and account details</a>.
                </div>
            </div>
            <a href=""></a>
        </div>
    </div>
</main>
@endsection