<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;
use App\Order;
use Session;
// use Illuminate\Support\Facades\Session;
use App\Cart;
use Stripe\Stripe;
use Stripe\Charge;
use Illuminate\Support\Facades\Auth;
use Nexmo\Laravel\Facade\Nexmo;
use App\User;
use Carbon\Carbon;


class ProductController extends Controller
{
    public function getIndex(){
        $products = Product::all();
        return view('order.eatin', ['products' => $products]);
    }

    //購物車
    public function getAddToCart(Request $request, $id){
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        //dd($request->session()->get('cart'));
        return redirect()->route('order.eatin');
    }

    public function getReductByOne($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);

        //Session::put('cart', $cart);
        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect()->route('product.shoppingCart');
    }

    public function getRemoveItem($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }

        return redirect()->route('product.shoppingCart');

    }

    public function getCart(){
        if (!Session::has('cart')) {
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shop.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);

    }

    // 結帳
    public function getCheckout(){
        if (!Session::has('cart')) {
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('shop.checkout', ['total' => $total]);
    }

    public function postCheckout(Request $request){
        if (!Session::has('cart')) {
            return redirect()->route('product.shoppingCart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        Stripe::setApiKey('sk_test_qzzTn9h3LuEueBJxHVx2qYWT00zHooQWc3');
        try {
            $charge = Charge::create(array(
                "amount" => $cart->totalPrice,
                "currency" => "usd",
                 "source" => 'tok_visa',//$request->input('stripeToken'), // obtained with Stripe.js
                "description" => "便當購買"
            ));

            $order = new Order();
            $order->cart = serialize($cart);
            $time = Carbon::now()->toDateString().' '.$request->input('time1').':'.$request->input('time2');//取餐時間
            $order->time = $time;
            $order->name = $request->input('name');
            $order->method = $request->input('diningway');
            $order->pay = $request->input('pay');
            $order->address = $request->input('address');
            $order->payment_id = $charge->id;
            $order->remark = $request->input('remark');


            Auth::user()->orders()->save($order);
        } catch (\Exception $e) {
            return redirect()->route('checkout')->with('error', $e->getMessage());
        }

        Session::forget('cart');

        // $phonenum=User::find($phone);
        Nexmo::message()->send(
            [

                'to' => '886925311245',
                'from' => '886912345678',
                'text' => '便當購買成功，請記得依規定時間來店取餐或向外送人員取餐',
                'type' => 'unicode'
            ]
            );
        return redirect()->route('order.eatin')->with('success', '購買成功！');
    }
}
