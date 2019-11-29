<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function storeData(Request $req)
    {
        $user = auth()->user();
        $addresses = $req->address;
        foreach($addresses as $clave=>$address) {
            $address_id = $clave;
            $add = Address::find($address_id);
            var_dump($req->address); exit; 


            foreach($address as $c=>$a){
                 
                if($c === "neighborhood"){
                  
                    $address->neighborhood = $req->address["neighborhood"];
                }                
            }

            
            if($req->address->street){
                $address->street = $req->address["street"];
            }
            if($req->address->number){
                $address->number = $req->address["number"];
            }
            if($req->address->floor){
                $address->floor = $req->address["floor"];
            }
            if($req->address->apartment){
                $address->apartment = $req->address["apartment"];
            }              
        }
        $address->save();              

        if($req->name){
            $user->name = $req["name"];
        }
        if($req->phone){
            $user->phone = $req["phone"];
        }
        if($req->image){
            $ruta = $req->file('image')->store('public');
            $image = basename($ruta);
            $user->image = $image;
        }


        $user->save(); 
        return redirect('home');
    }
}

