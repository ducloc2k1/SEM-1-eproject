
@extends('layouts.master')
@section('page_title',ucfirst('shop'))
@section('main')
    <div class="banner-shop">
        <div class="shop-title">
            <h1>simple header</h1>
                <hr>
            <div class="shop-breadcrumb">
                <ol class="breadcrumb">
                    <li>
                        <a href="home.html">Home</a>
                    </li>
                    <li class="active">SIMPLE HEADER</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="main-shop">
        <div class="container">
            <div class="row row-top">
                <div class="col-xs-12 col-md-12">
                    <div class="filter-option">
                        <div class="filter-left">
                            <span class="button-filter"> <i class="kz-setting"></i> fillter by</span>
                        </div>
                        <div class="filter-right">
                            <h4>Column number :</h4>
                            <div class="column">
                                <a href="" class="col-five">5</a>
                                <a href="" class="active col-four">4</a>
                                <a href="" class="col-third">3</a>
                            </div>
                        </div>
                    </div>
                    <form action="{{route('shop')}}" method="get" id="fillter_pro">
                        <div class="multiple-option">
                            <div class="filter col-categories">
                                <h3>Categories</h3>
                                <div class="list-option">
                                    @foreach ($cate as $item)
                                        <div class="box-option">
                                            <input type="radio" name="product_cat" id="{{$item->name}}" value="{{$item->name}}">
                                            <label for="{{$item->name}}">
                                                {{$item->name}}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="filter col-color">
                                <h3>Color</h3>
                               <div class="list-option">
                                   @foreach ($color as $item)
                                        <div class="box-option">
                                            <input type="checkbox" name="color" id="{{$item->name}}" value="{{$item->name}}" {{Request::get('size')==$item->name ?'checked':''}}>
                                            <label for="{{$item->name}}">
                                                <span class="mau-bd">
                                                    <span class="mau" style="background: {{$item->ma_color}};"></span>
                                                </span>
                                                {{$item->name}}
                                            </label>
                                        </div>
                                   @endforeach
                               </div>
                            </div>
                            <div class="filter col-size">
                                <h3>Size</h3>
                                <div class="list-option">
                                    @foreach ($size as $item)
                                        <div class="box-option">
                                            <input type="checkbox" name="size" id="{{$item->name}}" value="{{$item->name}}" {{Request::get('size')==$item->name ?'checked':''}}>
                                            <label for="{{$item->name}}">
                                                {{$item->name}}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="filter col-price">
                                <h3>price</h3>
                                <div class="list-option">
                                    <div class="box-option">
                                        <input type="radio" name="price" value="1" id="p1">
                                        <label for="p1">
                                            None
                                        </label>
                                    </div>
                                    <div class="box-option">
                                        <input type="radio" name="price" value="2" id="p2">
                                        <label for="p2">
                                            $0.00 - $100.00
                                        </label>
                                    </div>
                                    <div class="box-option">
                                        <input type="radio" name="price" value="3" id="p3">
                                        <label for="p3">
                                            $100.00 - $200.00
                                        </label>
                                    </div>
                                    <div class="box-option">
                                        <input type="radio" name="price" value="4" id="p4">
                                        <label for="p4">
                                            $200.00 - $300.00
                                        </label>
                                    </div>
                                    <div class="box-option">
                                        <input type="radio" name="price" value="5" id="p5">
                                        <label for="p5">
                                            $300.00 - $400.00
                                        </label>
                                    </div>
                                    <div class="box-option">
                                        <input type="radio" name="price" value="6" id="p6">
                                        <label for="p6">
                                            $400.00 - $500.00
                                        </label>
                                    </div>
                                    <div class="box-option">
                                        <input type="radio" name="price" value="7" id="p7">
                                        <label for="p7">
                                            $500.00 +
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="filter col-sort">
                                <h3>sort by</h3>
                                <div class="list-option">
                                    <div class="box-option">
                                        <input type="radio" name="orderby" value="none" id="t1" >
                                        <label for="t1">
                                            None
                                        </label>
                                    </div>
                                    <div class="box-option">
                                        <input type="radio" name="orderby" value="newness-desc" id="t4" >
                                        <label for="t4">
                                            Newness
                                        </label>
                                    </div>
                                    <div class="box-option">
                                        <input type="radio" name="orderby" value="price-asc" id="t5" >
                                        <label for="t5">
                                            Price: low to high
                                        </label>
                                    </div>
                                    <div class="box-option">
                                        <input type="radio" name="orderby" value="price-desc" id="t6" >
                                        <label for="t6">
                                            Price: high to low
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                @foreach ($pro as $item)
                <div class="grid-group-item col-xs-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="sub-product">
                        <div class="pro-img">
                            <a href="{{route('view',$item->id)}}">
                            <img src="{{url('uploads')}}/{{$item->image}}" class="img-responsive" alt="">
                            <?php $img=json_decode($item->image_list)?>
                            <div class="img-hover">
                                <img src="{{url('uploads')}}/{{$img[2]}}" class="img-responsive" alt="">
                            </div>
                            </a>
                        </div>
                        <div class="pro-detail">
                            <div class="info-top">
                                <div class="title-rate">
                                    <div class="featured">
                                        <span><i class="kz-bolt-line"></i></span>
                                        new
                                    </div>
                                    <h3 class="product-title">
                                        <a href="{{route('view',$item->id)}}">{{$item->name}}</a>
                                    </h3>
                                </div>
                                <div class="item-loop-bottom">
                                    <div class="price">
                                        @if ($item->sale_price > 0)
                                            <span class="price-amount">
                                                <span class="price-currencySymbol">$</span>{{number_format($item->sale_price,2)}}
                                            </span>
                                            -
                                            <span class="price-amount">
                                                <span class="price-currencySymbol">$</span><del>{{number_format($item->price,2)}}</del>
                                            </span>
                                        @else
                                            <span class="price-amount">
                                                <span class="price-currencySymbol">$</span>{{number_format($item->price,2)}}
                                            </span>
                                        @endif
                                    </div>
                                    <div class="list-button-action">
                                        <div class="add-to-cart">
                                            <a onclick="AddCart({{$item->id}})" href="javascript:">add to cart</a>
                                        </div>
                                        <div class="list-action">
                                            <form action="{{route('wishlist.store',$item->id)}}" method="post">
                                                @csrf
                                                <li>
                                                    <a href="" id="{{$item->id}}" data-url="{{ route('product.ajax',['id'=>$item->id]) }}" class="pro-quick-view"><i class="kz-search-space"></i></a>
                                                </li>
                                                <li>
                                                    <button type="submit" class="btn-wishlist" ><i class="kz-heart"></i></button>
                                                </li>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="shop-Pagination">
                  {{$pro->links()}}
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(function(){
            $('.multiple-option input:checkbox').change(function (){
                $('#fillter_pro').submit();
            });
        });
    </script>
@endsection
