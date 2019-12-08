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

        $reglas = [];

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

        if($req->address != null) {
            foreach($req->address as $id => $valores) {
                foreach($valores as $clave => $valor) {
                    if($valor && $clave == 'neighborhood') {
                        $reglas['address.' . $id . "." . $clave] = 'string';
                    } 
                    if($valor && $clave == 'street') {
                        $reglas['address.' . $id . "." . $clave] = 'string';
                    }   
                    if($valor && $clave == 'number') {
                        $reglas['address.' . $id . "." . $clave] = 'integer';
                    }   
                    if($valor && $clave == 'floor') {
                        $reglas['address.' . $id . "." . $clave] = 'integer';
                    }   
                    if($valor && $clave == 'apartment') {
                        $reglas['address.' . $id . "." . $clave] = 'string';
                    }                      
                }
            }                    
        }
        if($req->add != null) {
            foreach($req->add as $clave => $valor) {
                if($valor && $clave == 'neighborhood') {
                    $reglas['add.' . $clave] = 'string';
                } 
                if($valor && $clave == 'street') {
                    $reglas['add.' . $clave] = 'string';
                }   
                if($valor && $clave == 'number') {
                    $reglas['add.' . $clave] = 'integer';
                }   
                if($valor && $clave == 'floor') {
                    $reglas['add.' . $clave] = 'integer';
                }   
                if($valor && $clave == 'apartment') {
                    $reglas['add.' . $clave] = 'string';
                }                      
            }               
        }

    
    
        $mensajes = [
            'string' => 'El campo debería ser una palabra',
            'integer' => 'El campo debería ser un número'
        ];

        $this->validate($req, $reglas, $mensajes); 
           
        if(!empty($req->delete)){
            $addresses = $req->delete;
            foreach($addresses as $clave => $address) {
                $address_id = $clave;
                $address = Address::find($address_id);
                $address->delete(); 
            }  
            return redirect('home');              
        }




        $newAddress = false;
        if($req->add != null) {
            foreach($req->add as $valor) {
                if($valor != null) {
                    $newAddress = true;
                }
            }
            if($newAddress) {
                $address = new Address();
                $address->neighborhood = $req->add['neighborhood'];
                $address->street = $req->add['street'];
                $address->number = $req->add['number'];
                $address->floor = $req->add['floor'];
                $address->apartment = $req->add['apartment'];
                $address->user_id = $user->id;
                $address->save();     
            }            
        }


        $address = false;
        if($req->address != null) {
            foreach($req->address as $valor) {
                if($valor != null) {
                    $address = true;
                }
            }
            if($address) {
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
        }

        return redirect('home');

    }



              
}


