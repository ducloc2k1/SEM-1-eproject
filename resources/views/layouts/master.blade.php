<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zonex - @yield('page_title')</title>
    <link rel="stylesheet" type="text/css" href="{{url('public/pages')}}/plugins/owl_carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('public/pages')}}/plugins/owl_carousel/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{url('public/pages')}}/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="{{url('public/pages')}}/style.css">
    <link rel="stylesheet" href="{{url('public/pages')}}/css/example.css">
    <link rel="stylesheet" type="text/css" href="{{url('public/pages')}}/css/stylesheet.css">

</head>

<body>
    <div id="menu" class="wrap-nav">
        <div class="block-menu">
            <div class="close-side text-left">
                <a href="#"><span class="kz-close"></span></a>
                <a href="#"><span class="kz-up-top"></span></a>
            </div>
            <nav class="side-nav">
                <ul class="side-menu">
                    <li>
                        <a href="{{route('home')}}" class="link-menu">Home</a>
                    </li>
                    <li>
                        <a href="{{route('product')}}" class="link-menu">Shop</a>
                    </li>
                    <li>
                        <a href="{{route('blog')}}" class="link-menu">Blog</a>
                    </li>
                    <li>
                        <a href="" class="link-menu">Other Pages</a>
                        <span class="toggle-menu pull-right kz-angle-right"></span>
                        <div id="other page" class="wrap-sub-menu">
                            <ul class="sub-menu">
                                <li><a href="{{route('shopping-cart')}}">Cart</a></li>
                                <li><a href="{{route('check-out')}}">Check out</a></li>
                                <li><a href="{{route('account')}}">My account</a></li>
                                <li><a href="{{route('account-detail')}}">Account detail</a></li>
                                <li><a href="{{route('order-tracking')}}">Order tracking</a></li>
                                <li><a href="{{route('about')}}">About Us</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                                <li><a href="{{route('faqs')}}">Frequently Asked Questions</a></li>
                                <li><a href="{{route('order')}}">Orders</a></li>
                                <li><a href="{{route('address')}}">Addresses</a></li>
                                <li><a href="{{route('customer.logout')}}">Logout</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="{{route('wishlist')}}" class="link-menu">My wishlist</a>
                        <a href=""><span class="pull-right kz-heart"></span></a>
                    </li>
                </ul>
            </nav>
            <div class="bottom-nav text-left">
                <div class="social">
                    <a href=""><span class="kz-facebook"></span></a>
                    <a href=""><span class="kz-twitter"></span></a>
                    <a href=""><span class="kz-instagram"></span></a>
                    <a href=""><span class="kz-pinterest"></span></a>
                </div>
            </div>
        </div>
    </div> <!-- end side nav-->
    <div class="overlay-menu"></div>
    <div class="container-fluid menu-header page-no-scroll">
        <div class="row">
            <nav class="header-container menu">
                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 menu-left">
                    <ul class="list-pages">
                        <li><a class="has_after" href="{{route('home')}}">Home</a></li>
                        <li class="parent-megamenu menu-item-page">
                            <a class="has_after" href="{{route('product')}}">Shop</a>
                            <div class="mega-menu">
                                <div class="mega-menu-inner">
                                    <h6><b>OTHER PAGE</b></h6>
                                    <ul>
                                        <li><a href="{{route('shopping-cart')}}">Cart</a></li>
                                        <li><a href="{{route('check-out')}}">Check out</a></li>
                                        <li><a href="{{route('account')}}">My account</a></li>
                                        <li><a href="{{route('account-detail')}}">Account detail</a></li>
                                        <li><a href="{{route('order-tracking')}}">Order tracking</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a class="has_after" href="{{route('blog')}}">Blog</a></li>
                        <li class="parent-megamenu menu-item-page">
                            <a class="has_after" href="#">Pages</a>
                            <div class="mega-menu">
                                <div class="mega-menu-inner">
                                    <ul>
                                        <li><a href="{{route('about')}}">About Us</a></li>
                                        <li><a href="{{route('contact')}}">Contact</a></li>
                                        <li><a href="{{route('faqs')}}">Frequently Asked Questions</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 menu-center text-center">
                    <a href="{{route('home')}}"><img src="{{url('public/pages')}}/image/logo/logo-dark.png" alt=""></a>
                </div>
                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 menu-right text-right">
                    <div class="header-search-box">
                        <a href=""><span class="kz-search-space click-here-search"></span></a>
                    </div>
                    <div class="block-account">
                        <a href="#modal-id" data-toggle="modal"><span class="kz-user"></span></a>
                        @if (Auth::guard('cus')->check())
                            <div class="block-content">
                                <div class="block-content-inner">
                                    <ul class="user-links">
                                        <li class="wdashboard">
                                            <a href="{{route('account')}}">Dashboard</a>
                                        </li>
                                        <li class=" worders">
                                            <a href="{{route('order')}}">Orders</a>
                                        </li>
                                        <li class=" wedit-address">
                                            <a href="{{route('address')}}">Addresses</a>
                                        </li>
                                        <li class=" wedit-account">
                                            <a href="{{route('account-detail')}}">Account details</a>
                                        </li>
                                        <li class=" wcustomer-logout">
                                            <a href="{{route('customer.logout')}}">Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="wish-list-wrap">
                        <a href="{{route('wishlist')}}"><span class="kz-heart"></span></a>
                    </div>
                    <div class="zonex-minicart">
                        <a href="#" class="all-mini-cart">
                            <span class="kz-bag"></span>
                            @if ($cart != null)
                                <span class="minicart-number total-quantity-show">{{$cart->total_quantity}}</span>
                            @else
                                <span class="minicart-number total-quantity-show">0</span>
                            @endif
                        </a>
                    </div>
                </div>
            </nav>
            <nav class="menu-active">
                <div class="col-xs-4 col-sm-2 col-md-2 col-lg-2 text-left">
                    <div class="meta-woo" style="display: inline-block;">
                        <a href="#" class="menu-bar">
                            <span class="fas fa-bars"></span>
                        </a>
                        <a href="" class="">
                            <span class="kz-search-space icon click-here-search"></span>
                        </a>
                    </div>
                </div>
                <div class="col-xs-4 col-sm-8 col-md-8 col-lg-8 text-center">
                    <div class="logo text-center" style="display: inline-block;">
                        <img src="{{url('public/pages')}}/image/logo/logo-dark.png" alt="">
                    </div>
                </div>
                <div class="col-xs-4 col-sm-2 col-md-2 col-lg-2 text-right">
                    <div class="action-right" style="display: inline-block;">
                        <a class="acc-user" data-toggle="modal" href="#modal-id">
                            <span class="kz-user"></span>
                        </a>
                        <a href="#" class="all-mini-cart">
                            <span class="kz-bag"></span>
                            @if ($cart != null)
                                <span class="minicart-number total-quantity-show">{{$cart->total_quantity}}</span>
                            @else
                                <span class="minicart-number total-quantity-show">0</span>
                            @endif
                        </a>

                    </div>
                </div>
            </nav>
            <div class="minicart-content">
                <div class="minicart-content-inner">
                    <div class="minicart-top">
                        @if ($cart != null)
                        <div class="pull-left number-product">Cart (<span class="total-quantity-show">{{$cart->total_quantity}}</span>)</div>
                        @else
                        <div class="pull-left number-product">Cart (0)</div>
                        @endif

                        <div class="pull-right close-cart">
                            Close
                            <span class="kz kz-close"></span>
                        </div>
                    </div>
                    <div class="minicart-middle">
                        @if ($cart != null)
                            @foreach ($cart->items as $item)
                            <div class="product-cart">
                                <a href="{{route('view',$item['id'])}}" class="product-image">
                                    <img width="100" height="125px" src="{{url('uploads')}}/{{$item['image']}}" alt="">
                                </a>
                                <div class="product-detail">
                                    <h3 class="name-product">{{$item['name']}}</h3>
                                    <p class="size"> Size: 36</p>
                                    <p class="quantity-quick-view">QTY: {{$item['quantity']}}</p>
                                    <p class="price">${{number_format($item['price'],2)}}</p>
                                    <div class="wrap-remove">
                                        <a onclick="RemoveCart({{$item['id']}})"  href="javascript:"><span class="remove-item"></span></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="minicart-bottom">
                        <div class="total-money">
                            <p class="total-title text-left">Total: </p>
                            <p class=" text-right">$<span class="total-price-show">{{number_format($cart->total_price,2)}}</span></p>
                        </div>
                        <a href="{{route('check-out')}}" class="go-checkout">Check out</a>
                        <a href="{{route('shopping-cart')}}" class="go-viewcart">View cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end main menu -->

    @yield('main')

<div class="footer2">
    <div class="container">
        <div class="main-footer">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="menu-footer">
                        <ul class="">
                            <li>
                                <a href="" >Returns Policy</a>
                            </li>
                            <li>
                                <a href="" >Track Your Order</a>
                            </li>
                            <li>
                                <a href="" >Shipping & Delivery </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="icon-app  navbar-right">
                        <a href="" class="socal-item">
                            <i class="kz-twitter"></i>
                        </a>
                        <a href="" class="socal-item">
                            <i class="kz-facebook"></i>
                        </a>
                        <a href="" class="socal-item">
                            <i class="kz-instagram"></i>
                        </a>
                        <a href="" class="socal-item">
                            <i class="kz-pinterest"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="back-to-top">
    <span class="kz-up-top"></span>
</div>
<div class="form-search-top" ng-app="search-pro" ng-controller="SearchController">
    <div class="close">
        close <span class="kz kz-close"></span>
    </div>
    <p>Where are you looking for?</p>
    <div class="search-header">
        <form action="" method="GET" role="form">
            <div class="form-group search-here">
                <input type="text" class="form-control" ng-change="show_pro()" ng-model="pro_name" id="" placeholder="Search here">
                <button type="submit" class="btn"><i class="kz-search-space"></i></button>
            </div>
        </form>
    </div>
    <div class="search-products" ng-show="show">
        <div class="sub-product" ng-repeat="item in products | filter:pro_name">
            <div class="pro-img">
                <a href="{{url('product-single')}}/@{{item['id']}}}">
                    <img src="{{url('uploads')}}/@{{item['image']}}" class="img-responsive" alt="">
                </a>
            </div>
            <div class="pro-detail">
                <div class="info-top">
                    <div class="title-rate">
                        <h3 class="product-title">
                            <a href="{{url('product-single')}}/@{{item['id']}}">@{{item['name']}}</a>
                        </h3>
                    </div>
                    <div class="item-loop-bottom">
                        <div class="price">
                            <span class="price-amount">
                                <span class="price-currencySymbol">$</span><del>@{{item['sale_price']}}</del>
                            </span>
                            -
                            <span class="price-amount">
                                <span class="price-currencySymbol">$</span>@{{item['price']}}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end nav -->
@if (!Auth::guard('cus')->check())
        <div class="block-modal modal fade" id="modal-id">
            <div class=" modal-dialog">
                <div class="cus-content-modal modal-content">
                    <div class="my-modal-header modal-header">
                        <!-- Nav tabs -->
                        <ul class="cus-nav-tab nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#sign_in" aria-controls="home" role="tab" data-toggle="tab">Sign in</a>
                            </li>
                            <li role="presentation">
                                <a href="#register" aria-controls="tab" role="tab" data-toggle="tab">Register</a>
                            </li>
                        </ul>
                    </div>
                    <div class="my-modal-body modal-body">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="sign_in">
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
                            <div role="tabpanel" class="tab-pane" id="register">
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
                    <div class="my-modal-footer modal-footer">
                        <button type="button" class="kz kz-close" data-dismiss="modal"></button>
                    </div>
                </div>
            </div>
        </div> <!-- end modal register and log in -->
    @endif
    <div class="box-product-quick-view" id="pro-infor"></div>


<script type="text/javascript" src="{{url('public/pages')}}/js/jquery.min.js"></script>
<script type="text/javascript" src="{{url('public/pages')}}/plugins/rating/rating.js"></script>
<script type="text/javascript" src="{{url('public/pages')}}/js/bootstrap.js"></script>
<script type="text/javascript" src="{{url('public/pages')}}/plugins/owl_carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="{{url('public/pages')}}/js/angular.min.js"></script>
<script type="text/javascript" src="{{url('public/pages')}}/js/stylesheet.js"></script>
<script type="text/javascript" src="{{url('public/pages')}}/js/page.js"></script>
<script>
    //angularjs search product
    var app = angular.module('search-pro', []);
    app.controller('SearchController', function ($scope) {
        var products = '<?php echo json_encode($pro_search) ?>';

        $scope.products = angular.fromJson(products);
        $scope.show=false;

            $scope.show_pro = function (){
                $scope.show=true;
            }
    })

     function AddCart(id) {
        $.ajax({
            url: 'cart/add/' + id,
            type: 'GET',
        }).done(function (reponse) {
            RenderCart(reponse);
        });
    }

     function RemoveCart(id) {

        $.ajax({
            url: 'cart/remove/' + id,
            type: 'GET',
        }).done(function (reponse) {
            RenderCart(reponse);
        });
    }

     function RemoveListCart(id) {
        $.ajax({
            url: 'cart/remove-list/' + id,
            type: 'GET',
        }).done(function (reponse) {
            RenderListCart(reponse);
        });
    }

    function RenderCart(reponse){
        $('.minicart-middle').empty();
        $('.minicart-middle').html(reponse);
        $('.total-quantity-show').text($('.total-quantity-cart').val());
        $total_money=parseFloat($('.total-price-cart').val());
        $('.total-price-show').text($total_money.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'));
    }

    function ClearCart() {
        $.ajax({
            url: 'cart/clear/',
            type: 'GET',
        }).done(function (reponse) {
            RenderListCart(reponse);
        });
    }

    function RenderListCart(reponse){
        $('.tbl-cart').empty();
        $('.tbl-cart').html(reponse);
        $total_money=parseFloat($('.total-price-cart').val());
        $('.total-money-show').text($total_money.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'));
    }
</script>
@yield('script')
</body>
</html>
