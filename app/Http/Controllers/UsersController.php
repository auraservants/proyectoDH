<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function signup(Request $req) {
        $reglas = [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
         ];
         $mensajes = [
            'required' => 'No ingresaste tu :attribute',
            'email' => 'Tu email es invalido',
            'unique' => 'El email ya esta registrado',
            'min' => 'Tu :attribute debe tener 8 caracteres o más'
         ];             
        $this->validate($req, $reglas, $mensajes);
        $user = new User();
        $user->name = $req['name'];
        $user->email = $req['email'];
        $user->password = $req['password'];
        $user->administrator = 0;
        $user->save();
        $id = $user->id;
        return redirect('profile/' . $id);        
    }

    public function profile($id) {
        $user = User::find($id);
        $vac = compact('user');
        return view('profile', $vac);
    }
}
