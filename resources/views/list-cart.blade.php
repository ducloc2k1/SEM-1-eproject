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
<input hidden class="total-price-cart" type="number" value="{{$cart->total_price}}">
