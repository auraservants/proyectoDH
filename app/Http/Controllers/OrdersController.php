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
}
