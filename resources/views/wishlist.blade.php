
@extends('layouts.master')
@section('page_title',ucfirst('wishlist'))
@section('main')
    <section class="main-wishlist">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="text-wishlist">
                        <h2>wishlist</h2>
                    </div>
                </div>
            </div>
            <div class="with-list">
                <form action="" method="POST" role="form">
                    <div class="table-responsive">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th>PRODUCT</th>
                                    <th></th>
                                    <th>PRICE</th>
                                    <th>STOCK STATUS</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($wl as $item)
                                    @if (Auth::guard('cus')->user()->id == $item->customer_id)
                                    <tr>
                                        <td class="product-thumnail">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <a href="product_single.html">
                                                        <img src="{{url('uploads')}}/{{$item->product->image}}" width="70" height="90">
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="product-name">
                                            <a href="">{{$item->product->name}}</a>
                                        </td>
                                        <td class="product-price">
                                            @if ($item->product->sale_price>0)
                                                <span><del>${{number_format($item->product->price,2)}}</del></span>
                                                <span>${{number_format($item->product->sale_price,2)}}</span>
                                            @else
                                                <span>${{number_format($item->product->price,2)}}</del></span>
                                            @endif
                                        </td>
                                        <td class="product-stock-status">
                                            <span>IN STOCK</span>
                                        </td>
                                        <td class="product-add-to-cart">
                                            <a href="{{route('cart.add',$item->id)}}">ADD TO CART</a>
                                        </td>
                                        <td class="product-remove">
                                            <form action="{{route('wishlist.destroy',$item->id)}}" method="POST">
                                                @csrf @method('DELETE')
                                                <button type="submit" class="btn-wishlist"><i class="kz-close"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
