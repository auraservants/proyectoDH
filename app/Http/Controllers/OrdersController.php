<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Order;
use App\Address;
use App\Plate;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    public function orders() {
        $orders  = Order::all();
        $vac = compact('orders');
        return view('admin-orders', $vac);
    }
    public function cart(){
        $orders = Order::where('user_id', '=', Auth::user()->id)->get();
        $platesId = [];
        foreach($orders as $order) {
        foreach($order->plates as $plate) {
            array_push($platesId, $plate->pivot->plate_id);
            }            
        }
        $plates = [];
        foreach($platesId as $plateId) {
            array_push($plates, Plate::where('id', $plateId)->get());
        }
        $vac = compact('plates');
        return view('cart', $vac); 
    }

    public function addPlateToCart(Request $req){
        $idPlate = $req->get('plateId');
        $plate = Plate::find($idPlate);
        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->price = intval($plate->price);
        $order->save();
        $order->plates()->attach($idPlate);  

        return json_encode(true); 
    }
    public function removePlate(Request $req){
        $idPlate = $req->get('plateId');
        $plate = Plate::find($idPlate);
        foreach($plate->orders as $order) {
            
        }
        $plate->orders()->detach($idPlate);
        
        


    }
   

}

