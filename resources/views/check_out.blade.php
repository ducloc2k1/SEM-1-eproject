@extends('layouts.master')
@section('page_title',ucfirst('check out'))
@section('main')
    <section class="main-cart">
        <div class="check-cart">
            <div class="container">
                <div class="tabs-cart">
                    <div class="container">
                        <ul>
                            <li>
                                <a href="{{route('shopping-cart')}}">Shopping Cart</a>
                            </li>
                            <li class="active">
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
        <div class="check-account">
            <div class="container">
                <div class="check-log">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <div class="zip-code">
                                <span>HAVE A COUPON?</span><a href="" class="open_coupon">CLICK HERE TO ENTER YOUR CODE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="check-out">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-push-3">
                        <div class="checkout_coupon">
                            <form class="woocommerce-form-coupon" method="post" >
                                <p>If you have a coupon code, please apply it below.</p>
                                <p class="form-row form-row-first">
                                    <input type="text" name="coupon_code" class="input-text" placeholder="Coupon code" id="coupon_code" value="">
                                </p>
                                <p class="form-row form-row-last">
                                    <button type="submit" class="button" name="apply_coupon" value="Apply coupon">Apply coupon</button>
                                </p>
                                <div class="clear"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form action="" method="POST" role="form">
            @csrf
            <div class="check-info">
                <div class="container">
                    <h5>Billing Details</h5>
                    <div class="form-check-info">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="">Name*</label>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group ip-info">
                                    <input type="text" class="form-control" name="first_name" value="{{Auth::guard('cus')->user()->first_name}}" placeholder="First name">
                                    @if ($errors->has('first_name'))
                                        <small style="color:red">{{$errors->first('first_name')}}</small>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group ip-info">
                                    <input type="text" class="form-control" name="last_name" value="{{Auth::guard('cus')->user()->last_name}}" placeholder="Last name">
                                    @if ($errors->has('last_name'))
                                        <small style="color:red">{{$errors->first('last_name')}}</small>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="">Company name</label>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group ip-info">
                                    <input type="text" class="form-control" name="company" value="{{Auth::guard('cus')->user()->company}}" placeholder="Company name">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="">Country*</label>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group ip-info">
                                    <input type="text" class="form-control" name="country" value="{{Auth::guard('cus')->user()->country}}" placeholder="England">
                                    @if ($errors->has('country'))
                                        <small style="color:red">{{$errors->first('country')}}</small>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="">Street address *</label>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group ip-info">
                                    <input type="text" class="form-control" name="address" value="{{Auth::guard('cus')->user()->address}}" placeholder="House number and street name">
                                    @if ($errors->has('address'))
                                        <small style="color:red">{{$errors->first('address')}}</small>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="">Post code / ZIP</label>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group ip-info">
                                    <input type="text" class="form-control" name="post_code" value="{{Auth::guard('cus')->user()->post_code}}" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="">Town / City*</label>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group ip-info">
                                    <input type="text" class="form-control" name="town" value="{{Auth::guard('cus')->user()->town}}" placeholder="">
                                    @if ($errors->has('town'))
                                        <small style="color:red">{{$errors->first('town')}}</small>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="">Phone*</label>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group ip-info">
                                    <input type="text" class="form-control" name="phone" value="{{Auth::guard('cus')->user()->phone}}">
                                    @if ($errors->has('phone'))
                                        <small style="color:red">{{$errors->first('phone')}}</small>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="">Email address*</label>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group ip-info">
                                    <input type="text" class="form-control" name="email" value="{{Auth::guard('cus')->user()->email}}">
                                    @if ($errors->has('email'))
                                        <small style="color:red">{{$errors->first('email')}}</small>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="">Order notes (optional)</label>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group ip-info">
                                    <textarea name="bill_note" ></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="check-product">
                <div class="container">
                    <div class="bg-check-out">
                        <h1>You order</h1>
                        <div class="tbl-check-pro">
                            <div class="row row-pro">
                                <div class="check-order">
                                    <div class="col-xs-3 col-md-3">
                                        <h5>PRODUCT</h5>
                                    </div>
                                    <div class="col-xs-9 col-md-9">
                                        <table class="table-condensed">
                                            <tbody>
                                                @foreach ($cart->items as $item)
                                                    <tr>
                                                        <td>
                                                            <span class="total-check-oder">{{$item['name']}}</span>
                                                        </td>
                                                        <td>
                                                            <span class="total-check-oder">x{{$item['quantity']}}</span>
                                                        </td><td>
                                                            <span class="total-check-oder">${{number_format($item['quantity'] * $item['price'],2)}}</span>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-pro">
                                <div class="shipping-totals">
                                    <div class="col-xs-3 col-md-3">
                                        <h5>SHIPPING</h5>
                                    </div>
                                    <div class="col-xs-9 col-md-9">
                                        <ul>
                                            @foreach ($shippings as $item)
                                                <li onclick="set_total({{$item->price}},{{$cart->total_price}})">
                                                    <input type="radio" id="{{$item->name}}" name="shipping_id" value="{{$item->id}}-{{$item->price}}" {{$item->id==1?'checked':''}}>
                                                    <label for="{{$item->name}}">{{$item->name}} <span class="shipping-price">{{$item->price!=0 ?": $ ". number_format($item->price,2):''}}</span></label>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-pro">
                                <div class="total-check">
                                    <div class="col-xs-3 col-md-3">
                                        <h5 >TOTAL</h5>
                                    </div>
                                    <div class="col-xs-9 col-md-9 total-check-right">
                                        $<span id="total_price_cart">{{number_format($cart->total_price,2)}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-pro">
                                <div class="payment">
                                    <div class="co-xs-12 col-md-3">
                                        <h5>PAYMENT</h5>
                                    </div>
                                    <div class="col-xs-12 col-md-9">
                                        <ul>
                                            @foreach ($payments as $item)
                                                @if ($item->name != 'PayPal')
                                                    <li>
                                                        <input type="radio" name="payment_id" id="{{$item->name}}" value="{{$item->id}}" {{$item->id==1?'checked':''}}>
                                                        <label for="{{$item->name}}">{{$item->name}}</label>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                        <div>
                                            <div class="row">
                                                @foreach ($payments as $item)
                                                    @if ($item->name == 'PayPal')
                                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                                            <input type="radio" name="payment_id" value="{{$item->id}}">
                                                            <label for="{{$item->name}}">{{$item->name}}
                                                                <img class="payment-img" src="{{url('uploads')}}/{{$item->image}}" alt="">
                                                            </label>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                                            <a href="">What is PayPal ?</a>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="note-for-payment" style="padding-top: 30px">
                                            <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-pro">
                                <div class="place-order">
                                    <div class="col-md-9 col-md-push-3">
                                        <input type="submit" name="" value="PLACE ORDER">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
@section('script')
<script>
   function set_total(price,total_price){
        $('#total_price_cart').empty();
        $total=price+total_price;

        $('#total_price_cart').text($total.toFixed(2));
   }
</script>
@endsection
