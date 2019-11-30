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
        
        if(!empty($req->delete)){
            $addresses = $req->delete;
            foreach($addresses as $clave => $address) {
                $address_id = $clave;
                $address = Address::find($address_id);
                $address->delete(); 
            }  
            return redirect('home');              
        }

        $user = auth()->user();
        if($req->name) {
            $user->name = $req["name"];
        }
        if($req->phone) {
            $user->phone = $req["phone"];
        }
        if($req->image) {
            $ruta = $req->file('image')->store('public');
            $image = basename($ruta);
            $user->image = $image;            
        }  
        $user->save(); 

        if(!empty($req->add)) {
            $address = new Address();
            $address->neighborhood = $req->add['neighborhood'];
            $address->street = $req->add['street'];
            $address->number = $req->add['number'];
            $address->floor = $req->add['floor'];
            $address->apartment = $req->add['apartment'];
            $address->user_id = $user->id;
            $address->save();     
        }

        if(!empty($req->address)) {
            $addresses = $req->address;
            foreach($addresses as $clave => $address) {
                $address_id = $clave;
                $add = Address::find($address_id);            
                $add->neighborhood = $address['neighborhood'];
                $add->street = $address['street'];
                $add->number = $address['number'];
                $add->floor = $address['floor'];
                $add->apartment = $address['apartment'];
                $add->save();             
            }         
        }

        return redirect('home');

    }



              
}


