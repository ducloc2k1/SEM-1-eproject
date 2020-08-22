
    <div class="pro-info">
        <?php
            $imgs=json_decode($pro->image_list);
        ?>
        <div class="pro-imgs">
            <div class="carousel-pro-quick">
                    <div class="item">
                        <img src="{{url('uploads')}}/{{$pro->image}}" alt="" class="img-responsive" width="100%">
                    </div>
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
            <span class="noi-bat"><i class="kz-number-one"></i> BEst seller</span>
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
                <p>{{$pro->desciption}}</>
            </div>
            <form action="" method="POST" role="form">
                <div class="attribute-pa_color">
                    <span>color: <b>Choose an option</b></span>
                    <ul>
                        @foreach ($pro->Product_attribute as $item)
                            @if ($item->attribute_value->ma_color != "")
                                <li><a href="" style="background-color: {{$item->attribute_value->ma_color}};"></a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <div class="attribute-pa_size">
                    <span>color: <b>select a size</b></span>
                    <ul>
                        @foreach ($pro->Product_attribute as $item)
                            @if ($item->attribute_value->ma_color == "")
                                <li><a href="">{{$item->attribute_value->name}}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <div class="quantity-quick-pro wrap">
                    <button type="button" class="sub" class="sub"><i class="kz-minus"></i></button>
                    <input class="count" type="text" id="1" value="1" min="1" max="100" />
                    <button type="button" class="add" class="add"><i class="kz-plus"></i></button>
                </div>

                <button type="button" class="btn btn-primary add-to-cart-button">Add to cart</button>
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
            </div>
        </div>
    </div>
    <div class="pro-add-to-cart">
        <a onclick="AddCart({{$pro->id}})" href="javascript:" class="add-to-cart-button">Add to cart</a>
    </div>
