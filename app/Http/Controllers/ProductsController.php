<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingredient;
use App\Ingredientscategory;
use App\Plate;
use App\Platescategory;

class ProductsController extends Controller
{
    public function ingredients() {
        $ingredients  = Ingredient::all();
        $vac = compact('ingredients');
        return view('admin-ingredients', $vac);
    }
    public function addIngredient() {
        $categories = IngredientsCategory::all();
        $vac = compact('categories');
        return view('admin-add-ingredients', $vac);
    }
    public function newIngredient(Request $req) {
        $reglas = [
            'name' => 'required|string|unique:ingredients',
            'stock' => 'required|integer',
            'image' => 'file'
        ];
        $mensajes = [
            'required' => 'El campo es obligatorio',
            'string' => 'El campo debe ser una palabra',
            'integer' => 'El campo debe ser un numero',
            'unique' => 'El ingrediente ya existe'
        ];
        $this->validate($req, $reglas, $mensajes);
        $ingredient = new Ingredient();
        $ruta = $req->file('image')->store('public');
        $image = basename($ruta);
        $ingredient->name = $req['name'];
        $ingredient->stock = $req['stock'];
        $ingredient->image = $image;
        $ingredient->category_id = $req['category'];
        $ingredient->save();
        return redirect('admin-ingredients');
    }
    public function plates() {
        $plates = Plate::all();
        $vac = compact('plates');
        return view('admin-plates', $vac);
    }
    public function addPlate() {
        $ingredients = Ingredient::all();
        $categories = PlatesCategory::all();
        $vac = compact('ingredients', 'categories');
        return view('admin-add-plates', $vac);
    }
    public function newPlate(Request $req) {
        $reglas = [
            'name' => 'required|string|unique:plates',
            'price' => 'required|numeric',
            'image' => 'file'
        ];
        $mensajes = [
            'required' => 'El campo es obligatorio',
            'string' => 'El campo debe ser una palabra',
            'numeric' => 'El campo debe ser un numero',
            'unique' => 'El ingrediente ya existe'
        ];
        $this->validate($req, $reglas, $mensajes);
        $plate = new Plate();
        $ruta = $req->file('image')->store('public');
        $image = basename($ruta);
        $plate->name = $req['name'];
        $plate->price = $req['price'];
        $plate->image = $image;
        $plate->description = $req['description'];
        $plate->save();
        $plate->platescategories()->attach($req["category"]);
        $plate->ingredients()->attach($req["ingredient"]);
        return redirect('admin-plates');
    }  
    public function editPlate() {
        $ingredients = Ingredient::all();
        $categories = PlatesCategory::all();
        $vac = compact('ingredients', 'categories');
        return view('admin-edit-plates', $vac);
    }
}
