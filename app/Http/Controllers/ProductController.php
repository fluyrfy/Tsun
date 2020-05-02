<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Product;
//use Session;
use App\Cart;

class ProductController extends Controller
{
    public function getIndex()
    {
        $products = Product::all();
        return view('order.eatin', ['products' => $products]);
    }

    public function getAddToCart(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart, $cart');
        return redirect('/eatin');
    }
    public function getCart()
    {
        if(!Session::has('cart'))
        {
                return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shop.shopping-cart',['products' => $cart->items, 
        'totalPrice' =>$cart->totalPrice]);
    }
}
