<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Helper\CartHelper;
use Illuminate\Http\Request;

class CartController extends Controller
{

    function view()
    {
        return view('shopping_cart');
    }

    function add(CartHelper $cart,$id)
    {
        $product=Product::find($id);
        $cart->add($product);

        return view('mini-cart');
    }

    function add_single(CartHelper $cart,$id)
    {
        $product=Product::find($id);
        $cart->add($product);

        return redirect()->back();
    }

    function remove(CartHelper $cart,$id)
    {
        $cart->remove($id);
        return view('mini-cart');
    }

    function remove_list(CartHelper $cart,$id)
    {
        $cart->remove($id);
        return view('list-cart');
    }

    function update(CartHelper $cart,Request $request)
    {
        $qtts = $request->quantity;
        $ids = $request->id;

        $cart->update($ids,$qtts);
        return redirect()->back();
    }

    function clear(CartHelper $cart)
    {
        $cart->clear();
        return view('list-cart');
    }
}
