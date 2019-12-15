<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Order;
use App\Address;
use App\Plate;

class OrdersController extends Controller
{
    public function orders() {
        $orders  = Order::all();
        $vac = compact('orders');
        return view('admin-orders', $vac);
    }
    public function cart(){
        return view('cart');
    }

    public function addPlateToCart(Request $req){
        $plate = Plate::find($req->plateId);
        $cart = session()->get('cart');

        if(!$cart){
            $cart = [
                $id => [
                    "name" => $plate->name,
                    "price" => $plate->price,
                    "image" => $plate->imgage,
                    "description" => $plate->description
                    ]
                ];
                session()->put('cart', $cart);
                return view('cart');
        }

        $cart[$id] = [
            "name" => $plate->name,
            "price" => $plate->price,
            "image" => $plate->imgage,
            "description" => $plate->description
        ];
        session()->put('cart', $cart);
        return view('cart');
    }
    public function createOrder() {

    }
}
