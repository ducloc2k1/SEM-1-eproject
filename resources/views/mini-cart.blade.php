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
    <input hidden class="total-quantity-cart" type="number" value="{{$cart->total_quantity}}">
    <input hidden class="total-price-cart" type="number" value="{{$cart->total_price}}">
@endif
