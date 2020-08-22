@extends('layouts.master')
@section('page_title',ucfirst('order'))
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
                <div class="inner-order">
                    @if ($bill->count()==0)
                    <div class="not-order">
                        <a href="" class="pull-right">Browse products</a>
                        No order has been made yet.
                    </div>
                    @else
                    <div class="have-order">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ORDER</th>
                                        <th>DATE</th>
                                        <th>STATUS</th>
                                        <th>TOTAL</th>
                                        <th>ACTIONS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bill as $item)
                                        <tr>
                                            <td><a href=""># {{$item->id}}</a></td>
                                            <td>{{date_format($item->created_at,"M d,Y")}}</td>
                                            <td>
                                                @if ($item->status==2)
                                                    Shipping
                                                @elseif($item->status==3)
                                                    delivered
                                                @elseif($item->status==1)
                                                    On hold
                                                @endif
                                            </td>
                                            <td><b>$ {{number_format($item->total_price,2)}}</b> <span>for {{$item->bill_detail->count()}} items</span></td>
                                            <td><a href="{{route('order-detail',$item->id)}}">View</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </main>
@endsection
