
@extends('layouts.master')
@section('page_title',ucfirst('order detail'))
@section('main')
    <main>
        <div class="container wrap-acc-inner">
            <div class="account-inner">
                <h1>My Account</h1>
                <nav class="my-acc-nav">
                    <ul>
                        <li><a href="{{route('account')}}">Dashboard</a></li>
                        <li class="active"><a href="{{route('order')}}">Orders</a></li>
                        <li><a href="{{route('address')}}">Addresses</a></li>
                        <li><a href="{{route('account-detail')}}">Account details</a></li>
                        <li><a href="{{route('customer.logout')}}">Logout</a></li>
                    </ul>
                </nav>
                <div class="inner-order-detail">
                    <p class="info-order">
                        Order #<mark class="order-number">{{$bill->id}}</mark> was placed on <mark class="order-date">{{date_format($bill->created_at,"M d,Y")}}</mark> and is currently <mark class="order-status"> @if ($bill->status==2)
                            shipping
                        @elseif($bill->status==3)
                            delivered
                        @elseif($bill->status==1)
                        On hold
                        @endif</mark>.
                    </p>
                    <section class="order-details">
                            <h2 class="order-details__title">Order details</h2>
                            <table class="table table-order-detail">
                                <thead>
                                    <tr>
                                        <th class="">Product</th>
                                        <th class="">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($bill_detail as $pro)
                                        <tr class="order-item">
                                            <td class="table__pro-name">
                                                <a href="">{{$pro->product->name}}</a> <strong
                                                    class="table-pro-quantity">×&nbsp;{{$pro->quantity}}</strong>
                                            </td>
                                            <td class="table__product-total">
                                                <span class="table-price-amount"><span>$</span>{{ number_format($pro->price,2) }}</span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <th scope="row">Subtotal:</th>
                                        <td><span class="">
                                            <span class="">$</span>{{ number_format($bill->total_price - $bill->shipping->price ,2) }}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Shipping:</th>
                                        <td>
                                            <span class=""> <span  class="Price-currencySymbol">$</span>{{number_format($bill->shipping->price,2)}}</span>&nbsp;<small
                                                class="shipped_via">{{$bill->shipping->name}}</small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Payment method:</th>
                                        <td>{{$bill->payment->name}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Total:</th>
                                        <td><span class="">
                                            <span class="-Price-currencySymbol">$</span>{{ number_format($bill->total_price,2) }}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Note:</th>
                                        <td>{{$bill->bill_note}}</td>
                                    </tr>
                                </tfoot>
                            </table>
                    </section>
                    <div class="customer-detail">
                        <div class="ship-address have-address">
                            <h3>Shipping address</h3>
                                @if ($bill->customer->display_name)
                                    <p> <b>Name</b> : {{$bill->customer->display_name}}</p>
                                @else
                                    <p> <b>Name</b> : {{$bill->customer->first_name}} {{$bill->customer->last_name}}</p>
                                @endif

                                @if ($bill->customer->email)
                                    <p> <b>Email</b> : {{$bill->customer->email}}</p>
                                @endif

                                @if ($bill->customer->phone)
                                     <p><b>Phone</b> : {{$bill->customer->phone}}</p>
                                @endif
                               
                                @if ($bill->customer->company)
                                    <p><b>Company</b> : {{$bill->customer->company}}</p>
                                @endif
                                
                                @if ($bill->customer->country)
                                    <p><b>Country</b> : {{$bill->customer->country}}</p>
                                @endif
                                
                                @if ($bill->customer->town)
                                    <p><b>Town / city</b> : {{$bill->customer->town}}</p>
                                @endif
                                
                                @if ($bill->customer->post_code)
                                    <p><b>Post code</b> : {{$bill->customer->post_code}}</p>
                                @endif
                                
                                @if ($bill->customer->address)
                                    <p><b>Address</b> : {{$bill->customer->address}}</p>
                                @endif

                                @if ($bill->created_at)
                                    <p><b>Order date</b> : {{date_format($bill->created_at,"M d,Y")}}</p>
                                @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
