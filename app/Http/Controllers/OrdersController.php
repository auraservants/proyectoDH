<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Order;

class OrdersController extends Controller
{
    public function userPlates() {
        
    }
    public function orders() {
        $orders  = Order::all();
        $vac = compact('orders');
        return view('admin-orders', $vac);
    }
}
