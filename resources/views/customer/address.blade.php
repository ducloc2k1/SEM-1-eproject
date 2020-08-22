
@extends('layouts.master')
@section('page_title',ucfirst('address'))
@section('main')
    <main>
        <div class="container wrap-acc-inner">
            <div class="account-inner">
                <h1>My Account</h1>
                <nav class="my-acc-nav">
                    <ul>
                        <li><a href="{{route('account')}}">Dashboard</a></li>
                        <li><a href="{{route('order')}}">Orders</a></li>
                        <li class="active"><a href="{{route('address')}}">Addresses</a></li>
                        <li ><a href="{{route('account-detail')}}">Account details</a></li>
                        <li><a href="{{route('customer.logout')}}">Logout</a></li>
                    </ul>
                </nav>
                <div class="inner-address">
                    <div class="ship-address have-address">
                        <h3>Shipping address</h3>
                            @if (Auth::guard('cus')->user()->display_name)
                                <p> <b>Name</b> : {{Auth::guard('cus')->user()->display_name}}</p>
                            @else
                                <p> <b>Name</b> : {{Auth::guard('cus')->user()->first_name}} {{Auth::guard('cus')->user()->last_name}}</p>
                            @endif
                            
                            @if (Auth::guard('cus')->user()->email)
                                <p> <b>Email</b> : {{Auth::guard('cus')->user()->email}}</p>
                            @endif

                            @if (Auth::guard('cus')->user()->phone)
                                 <p><b>Phone</b> : {{Auth::guard('cus')->user()->phone}}</p>
                            @endif
                           
                            @if (Auth::guard('cus')->user()->company)
                                <p><b>Company</b> : {{Auth::guard('cus')->user()->company}}</p>
                            @endif
                            
                            @if (Auth::guard('cus')->user()->country)
                                <p><b>Country</b> : {{Auth::guard('cus')->user()->country}}</p>
                            @endif
                            
                            @if (Auth::guard('cus')->user()->town)
                                <p><b>Town / city</b> : {{Auth::guard('cus')->user()->town}}</p>
                            @endif
                            
                            @if (Auth::guard('cus')->user()->post_code)
                                <p><b>Post code</b> : {{Auth::guard('cus')->user()->post_code}}</p>
                            @endif
                            
                            @if (Auth::guard('cus')->user()->address)
                                <p><b>Address</b> : {{Auth::guard('cus')->user()->address}}</p>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
