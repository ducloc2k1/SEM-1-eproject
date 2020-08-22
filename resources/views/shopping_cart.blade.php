@extends('layouts.master')
@section('page_title',ucfirst('shopping cart'))
@section('main')
<section class="main-cart">
    <div class="check-cart">
        <div class="container">
            <div class="tabs-cart">
                <div class="container">
                    <ul>
                        <li class="active">
                            <a href="{{route('shopping-cart')}}">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="{{route('check-out')}}">Check Out</a>
                        </li>
                        <li>
                            <a href="{{route('order-tracking')}}">Order Tracking</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="list-product-cart">
        <div class="container">
            <div class="main-cart">
                <div class="tbl-cart">
                    <form action="{{route('cart.update')}}" method="POST" role="form">
                        @csrf
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>PRODUCT</th>
                                        <th></th>
                                        <th>PRICE</th>
                                        <th>QUANTITY</th>
                                        <th>SUBTOTAL</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cart->items as $item)
                                    <tr>
                                        <td class="product-thumnail">
                                            <div class="col-img">
                                                <a href="">
                                                    <img src="{{url('uploads')}}/{{$item['image']}}">
                                                </a>
                                            </div>
                                        </td>
                                        <td class="product-name">
                                            <a href="">{{$item['name']}}</a>
                                        </td>
                                        <td class="product-price">
                                            <span>${{number_format($item['price'],2)}}</span>
                                        </td>
                                        <td class="product-quantity">
                                            <div class="quantity-quick-pro wrap">
                                                <button type="button" class="sub"><i class="kz-minus"></i></button>
                                                <input class="count" type="text" id="1" name="quantity[]"
                                                    value="{{$item['quantity']}}" min="1" />
                                                <input type="hidden" name="id[]" value="{{$item['id']}}" />
                                                <button type="button" class="add"><i class="kz-plus"></i></button>
                                            </div>
                                        </td>
                                        <td class="product-subtotal">
                                            <span>${{number_format($item['price'] * $item['quantity'],2)}}</span>
                                        </td>
                                        <td class="product-remove">
                                            <a onclick="RemoveListCart({{$item['id']}})" href="javascript:" class="kz-close"
                                                title="Remove this product"></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="act-cart">
                            <div class="coupon">
                                <input type="text" class="input-text" value="" placeholder="Coupon code">
                                <input type="submit" class="button" value="APPLY COUPON">
                            </div>
                            <div class="actions-btn">
                                <input type="submit" class="button" value="UPDATE CART">
                                <a class="shopping" onclick="ClearCart()" href="javascript:">clear cart</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="cart-collaterals">
        <div class="container">
            <div class="cart-totals">
                <h2>CART TOTALS</h2>
                <div class="row cart-subtotal">
                    <div class="col-xs-4 col-md-4">
                        <h5>Subtotal</h5>
                    </div>
                    <div class="col-xs-8 col-md-8">
                        <h5>$ <span class="total-money-show">{{number_format($cart->total_price,2)}}</span></h5>
                    </div>
                    <div class="shipping-totals">
                        <div class="col-xs-4 col-md-4">
                            <h5>Shipping</h5>
                        </div>
                        <div class="col-xs-8 col-md-8">
                            <div class="local-shipping">
                                <div class="row">
                                    <div class="col-xs-12 col-md-6 text-left">
                                        <span>Shipping to</span>
                                        <a href="">{{$cus->address}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="total-check">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <div class="total-of-order">
                                <h5>Total</h5>
                                <span>$<b class="total-money-show">{{number_format($cart->total_price,2)}}</b></span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 ">
                            <div class="total-check-right">
                                <a href="{{route('check-out')}}" class="button">PROCEED TO CHECKOUT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
