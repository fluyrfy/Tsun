<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    /*public function eatin(Request $request)
    {
        return view('order.eatin');
        $order = new Order;
        $order->user_id = auth()->user()->id;
        $order->name = $request->input('name');
        $order->count = $request->input('value');
        $order->price = 100;

        //return $this->create($post);
        $order->save();
        return redirect('/pages')->with('success','Order Created');
    }*/
}
