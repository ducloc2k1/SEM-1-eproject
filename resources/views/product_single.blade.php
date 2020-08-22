@extends('layouts.master')
@section('page_title',ucfirst('product single'))
@section('main')
    <main>
        <div class="container-fluid pro-detail-inner">
            <div class="row">
                <nav class="breadcrumb-pro-single">
                    <ol class="cus-bread breadcrumb pull-left">
                        <li>
                            <a href="{{route('home')}}">Home</a>
                        </li>
                        <li class="active">
                            <a href="{{route('shop')}}">Shop</a>
                        </li>
                        <li class="">
                            <a href="#">{{$pro->name}}</a>
                        </li>
                    </ol>
                    <ul class="adjacent-pro pull-right">
                        <li>
                            <a href="">
                                <span>prev</span>
                                <div class="sub-pro"></div>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span>next</span>
                                <div class="sub-pro"></div>
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="wrap-box">
                    <div class="box-product-detail">
                        <div class="row">
                            <div class="clearfix">
                                <?php
                                    $imgs=json_decode($pro->image_list);
                                ?>
                                <div class="gallery">
                                    @if (is_array($imgs))
                                        <div class="previews">
                                            @foreach ($imgs as $img)
                                                <a href="#" class="{{$img==$pro->image?'selected':''}}" data-full="{{url('uploads')}}/{{$img}}"><img
                                                    src="{{url('uploads')}}/{{$img}}" />
                                                </a>
                                            @endforeach
                                        </div>
                                    @endif
                                    <div class="full">
                                        <img src="{{url('uploads')}}/{{$pro->image}}" />
                                    </div>
                                </div>
                            </div>
                            <div class="option-product">
                                <div class="pro-info">
                                    <div class="pro-imgs">
                                        <div class="owl-carousel owl-theme carousel-pro-quick">
                                            @foreach ($imgs as $item)
                                                <div class="item">
                                                    <img src="{{url('uploads')}}/{{$item}}" alt="">
                                                </div>
                                            @endforeach
                                        </div>
                                        <span class="btn-close">close <i class="kz-close"></i></span>
                                        <span class="btn-heart"><i class="kz-heart"></i></span>
                                        <div class="share-active">
                                            <li>
                                                <a href="">
                                                    <i class="kz-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <i class="kz-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <i class="kz-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <i class="kz-pinterest"></i>
                                                </a>
                                            </li>
                                        </div>
                                    </div>
                                    <div class="pro-info-bottom">
                                        <span class="noi-bat"><i class="kz-number-one"></i> Best seller</span>
                                        <h3 class="pro-name">{{$pro->name}}</h3>
                                        <div class="list-star">
                                            <span>
                                                <a href="" class="kz-star-fill"></a>
                                                <a href="" class="kz-star-fill"></a>
                                                <a href="" class="kz-star-fill"></a>
                                                <a href="" class="kz-star-fill"></a>
                                                <a href="" class="kz-star-fill"></a>
                                            </span>
                                            <p class="preview-count"><span>{{$cmt_pro->count()}}</span> Customer reviews</p>
                                        </div>
                                        @if ($pro->sale_price>0)
                                            <p class="pro_price"><span>${{number_format($pro->sale_price,2)}}</span> - <span><del>${{number_format($pro->price,2)}}</del></span></p>
                                        @else
                                            <p class="pro_price"><span>${{number_format($pro->price,2)}}</span></p>
                                        @endif
                                        <div class="descript-pro">
                                            <p>{{$pro->desciption}}</p>
                                        </div>
                                        <form action="{{route('cart_single.add',$pro->id)}}" method="get" role="form">
                                            <div class="attribute-pa_color">
                                                <span>color: </span>
                                                <ul>
                                                    @foreach ($pro->Product_attribute as $item)
                                                        @if ($item->attribute_value->ma_color != "")
                                                            <li><a href="" style="background-color: {{$item->attribute_value->ma_color}};"></a></li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="attribute-pa_size">
                                                <span>Size: </span>
                                                <ul>
                                                    @foreach ($pro->Product_attribute as $item)
                                                        @if ($item->attribute_value->ma_color == "")
                                                            <li><a href="">{{$item->attribute_value->name}}</a></li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="quantity-quick-pro wrap">
                                                <button type="button" class="sub" class="sub">
                                                    <i class="kz-minus"></i>
                                                </button>
                                                <input class="count" type="text" id="1" value="1" min="1" max="100" />
                                                <button type="button" class="add" class="add">
                                                    <i class="kz-plus"></i>
                                                </button>
                                            </div>
                                            <button type="submit" class="btn btn-primary add-to-cart-button">Add to cart</button>
                                        </form>
                                            <form action="{{route('wishlist.store',$pro->id)}}" method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-primary add-to-cart-button add-to-wishlist">Add to wishlist</button>
                                            </form>
                                        <div class="product_meta">
                                            <span class="sku_wrapper">
                                                <span class="meta-title">SKU:</span>
                                                <span class="sku">237S978</span>
                                            </span>
                                            <span class="posted_in">
                                                <span class="meta-title">Categories:</span>
                                                <a href="{{route('shop')}}" rel="tag">{{$pro->category_product->name}}</a>
                                            </span>
                                            <span class="tagged_as">
                                                <span class="meta-title">Tags:</span>
                                                @foreach ($pro->tag_pro as $item)
                                                    <a href="{{route('shop')}}" rel="tag">{{$item->tag->name}}</a>
                                                @endforeach
                                            </span>
                                            <span class="tagged_as list-social">
                                                <span class="meta-title">Share:</span>
                                                <a href="" rel="tag">
                                                    <i class="kz-twitter"></i>
                                                </a>
                                                <a href="" rel="tag">
                                                    <i class="kz-facebook"></i>
                                                </a>
                                                <a href="" rel="tag">
                                                    <i class="kz-instagram"></i>
                                                </a>
                                                <a href="" rel="tag">
                                                    <i class="kz-pinterest"></i>
                                                </a>
                                            </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-product">
                    <div class="tab">
                        <button class="tablinks active" onclick="openCity(event, 'Description')" id="defaultOpen">Description</button>
                        <button class="tablinks" onclick="openCity(event, 'add-info')">Additional information</button>
                        <button class="tablinks" onclick="openCity(event, 'review')">Reviews ({{$cmt_pro->count()}}) </button>
                    </div>
                    <div id="Description" class="tabcontent">
                        <div class="detail-description">
                            <?php echo  html_entity_decode($pro->content) ?>
                        </div>
                    </div>
                    <div id="add-info" class="tabcontent">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Size</th>
                                    <td>
                                        <p>
                                            @foreach ($pro->Product_attribute as $item)
                                                @if ($item->attribute_value->ma_color == "")
                                                    <span>{{$item->attribute_value->name}}</span>
                                                @endif
                                            @endforeach
                                        </p>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Color</th>
                                    <td>
                                        <p>
                                            @foreach ($pro->Product_attribute as $item)
                                                @if ($item->attribute_value->ma_color != "")
                                                    <span>{{$item->attribute_value->name}}</span>
                                                @endif
                                            @endforeach
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="review" class="tabcontent">
                        <div class="rate-section">
                            @foreach ($cmt_pro as $item)
                                @if ($item->pro_id==$pro->id)
                                <div class="media">
                                    <div class="media-left">
                                        <img src="https://secure.gravatar.com/avatar/03b54a5d3cd74ae812fc99e351b406cb?s=120&r=g"
                                            class="media-object" style="width:45px">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            {{str_replace("@gmail.com","",$item->customer->email)}}
                                            <span class="your-rate" data-rating-stars="5" data-rating-readonly="true" data-rating-value="{{$item->star_number}}"></span>
                                        </h4>
                                        <small>{{date_format($item->created_at,"M d,Y")}}</small>
                                        <p>{{$item->content}}</p>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="comment-product">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="rating-pro">
                                        <div class="ave-rating">5.00</div>
                                        <div class="star-rating"></div>
                                        <div class="number-per-rate">
                                            Based on <span>1</span> rating
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="rate-detail-title">Rating in details</div>
                                    <ul class="review-detail-list">
                                        <li>
                                            <span class="review-num">5</span>
                                            <div class="star-rating-count"></div>
                                        </li>
                                        <li>
                                            <span class="review-num">4</span>
                                            <div class="star-rating-count"></div>
                                        </li>
                                        <li>
                                            <span class="review-num">3</span>
                                            <div class="star-rating-count"></div>
                                        </li>
                                        <li>
                                            <span class="review-num">2</span>
                                            <div class="star-rating-count"></div>
                                        </li>
                                        <li>
                                            <span class="review-num">1</span>
                                            <div class="star-rating-count"></div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-5">
                                    <div class="review-form">
                                        <div class="title-re-form">Add a review</div>
                                        @if (!Auth::guard('cus')->check())
                                            <h5>Bạn cần dăng nhập</h5>
                                        @endif
                                            <form action="{{route('cmt-product.store',$pro->id)}}" method="POST" role="form">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="">Overall ratings</label>
                                                    <div class="vote-star" style="margin-left:10px"></div>
                                                    <input type="hidden" class="star_number" name="star_number" value="">
                                                </div>
                                                <div class="form-group">
                                                    <textarea name="content" placeholder="Your review *"></textarea>
                                                </div>

                                                <button type="submit" class="btn btn-primary">Add review</button>
                                            </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relate-pro">
                <h3>Related products</h3>
                <div class="owl-carousel owl-theme owl-relate-pro">
                    <div class="item">
                        <div class="sub-product">
                            <div class="pro-img">
                                <a href="product_single.html">
                                    <img src="{{url('public/pages')}}/image/product/pro1.jpg" class="img-responsive" alt="">
                                    <div class="img-hover">
                                        <img src="{{url('public/pages')}}/image/product/pro2.jpg" class="img-responsive" alt="">
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
                                            <a href="product_single.html">Band-collar Popover Tunic</a>
                                        </h3>
                                    </div>
                                    <div class="item-loop-bottom">
                                        <div class="price">
                                            <span class="price-amount">
                                                <span class="price-currencySymbol">$</span>
                                                49.00
                                            </span>
                                            -
                                            <span class="price-amount">
                                                <span class="price-currencySymbol">$</span>
                                                49.50
                                            </span>
                                        </div>
                                        <div class="list-button-action">
                                            <div class="add-to-cart">
                                                <a href="">add to cart</a>
                                            </div>
                                            <div class="list-action">
                                                <li>
                                                    <a href="" class="pro-quick-view"><i
                                                            class="kz-search-space"></i></a>
                                                </li>
                                                <li>
                                                    <a href=""><i class="kz-heart"></i></a>
                                                </li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="sub-product">
                            <div class="pro-img">
                                <a href="product_single.html">
                                    <img src="{{url('public/pages')}}/image/product/pro3.jpg" class="img-responsive" alt="">
                                    <div class="img-hover">
                                        <img src="{{url('public/pages')}}/image/product/pro4.jpg" class="img-responsive" alt="">
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
                                            <a href="">Band-collar Popover Tunic</a>
                                        </h3>
                                    </div>
                                    <div class="item-loop-bottom">
                                        <div class="price">
                                            <span class="price-amount">
                                                <span class="price-currencySymbol">$</span>
                                                49.00
                                            </span>
                                            -
                                            <span class="price-amount">
                                                <span class="price-currencySymbol">$</span>
                                                49.50
                                            </span>
                                        </div>
                                        <div class="list-button-action">
                                            <div class="add-to-cart">
                                                <a href="">add to cart</a>
                                            </div>
                                            <div class="list-action">
                                                <li>
                                                    <a href="" class="pro-quick-view"><i
                                                            class="kz-search-space"></i></a>
                                                </li>
                                                <li>
                                                    <a href=""><i class="kz-heart"></i></a>
                                                </li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="sub-product">
                            <div class="pro-img">
                                <a href="product_single.html">
                                    <img src="{{url('public/pages')}}/image/product/pro5.jpg" class="img-responsive" alt="">
                                    <div class="img-hover">
                                        <img src="{{url('public/pages')}}/image/product/pro6.jpg" class="img-responsive" alt="">
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
                                            <a href="">Band-collar Popover Tunic</a>
                                        </h3>
                                    </div>
                                    <div class="item-loop-bottom">
                                        <div class="price">
                                            <span class="price-amount">
                                                <span class="price-currencySymbol">$</span>
                                                49.00
                                            </span>
                                            -
                                            <span class="price-amount">
                                                <span class="price-currencySymbol">$</span>
                                                49.50
                                            </span>
                                        </div>
                                        <div class="list-button-action">
                                            <div class="add-to-cart">
                                                <a href="">add to cart</a>
                                            </div>
                                            <div class="list-action">
                                                <li>
                                                    <a href="" class="pro-quick-view"><i
                                                            class="kz-search-space"></i></a>
                                                </li>
                                                <li>
                                                    <a href=""><i class="kz-heart"></i></a>
                                                </li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="sub-product">
                            <div class="pro-img">
                                <a href="product_single.html">
                                    <img src="{{url('public/pages')}}/image/product/pro7.jpg" class="img-responsive" alt="">
                                    <div class="img-hover">
                                        <img src="{{url('public/pages')}}/image/product/pro8.jpg" class="img-responsive" alt="">
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
                                            <a href="">Band-collar Popover Tunic</a>
                                        </h3>
                                    </div>
                                    <div class="item-loop-bottom">
                                        <div class="price">
                                            <span class="price-amount">
                                                <span class="price-currencySymbol">$</span>
                                                49.00
                                            </span>
                                            -
                                            <span class="price-amount">
                                                <span class="price-currencySymbol">$</span>
                                                49.50
                                            </span>
                                        </div>
                                        <div class="list-button-action">
                                            <div class="add-to-cart">
                                                <a href="">add to cart</a>
                                            </div>
                                            <div class="list-action">
                                                <li>
                                                    <a href="" class="pro-quick-view"><i
                                                            class="kz-search-space"></i></a>
                                                </li>
                                                <li>
                                                    <a href=""><i class="kz-heart"></i></a>
                                                </li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
