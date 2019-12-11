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
    public function editIngredient($id) {
        $ingredient = Ingredient::find($id);
        $categories = IngredientsCategory::all();
        $vac = compact('ingredient', 'categories');
        return view('admin-edit-ingredients', $vac);
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
    public function editedIngredient(Request $req, $id) {
        $reglas = [
            'name' => 'required|string',
            'stock' => 'required|integer',
            'image' => 'file'
        ];
        $mensajes = [
            'required' => 'El campo es obligatorio',
            'string' => 'El campo debe ser una palabra',
            'integer' => 'El campo debe ser un numero',
        ];
        $this->validate($req, $reglas, $mensajes);
        $ingredient = Ingredient::find($id);
        if($req->image) {
            $ruta = $req->file('image')->store('public');
            $image = basename($ruta);
            $ingredient->image = $image;            
        }  
        $ingredient->name = $req['name'];
        $ingredient->stock = $req['stock'];
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
    public function editPlate($id) {
        $plate = Plate::find($id);
        $ingredients = Ingredient::all();
        $categories = PlatesCategory::all();
        $vac = compact('plate', 'ingredients', 'categories');
        return view('admin-edit-plates', $vac);
    }
    public function editedPlate(Request $req, $id) {
        $reglas = [
            'name' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'file'
        ];
        $mensajes = [
            'required' => 'El campo es obligatorio',
            'string' => 'El campo debe ser una palabra',
            'numeric' => 'El campo debe ser un numero',
        ];
        $this->validate($req, $reglas, $mensajes);
        $plate = Plate::find($id);
        if($req->image) {
            $ruta = $req->file('image')->store('public');
            $image = basename($ruta);
            $plate->image = $image;            
        }  
        $plate->name = $req['name'];
        $plate->price = $req['price'];
        $plate->description = $req['description'];
        $plate->save();   
        $plate->platescategories()->sync($req["category"]);
        $plate->ingredients()->sync($req["ingredient"]);
        return redirect('admin-plates');
    }
    public function products() {
        $ingredients = Ingredient::all();
        $plates = Plate::all();
        $categories = PlatesCategory::all();
        $ingredientsCategories = IngredientsCategory::all();

        $vac = compact('ingredients', 'plates', 'categories', 'ingredientsCategories');
        //dd($vac);
        return view('products', $vac);
    }

    public function fetchPlates(Request $req) {
        $idIngredients = explode(',', $req->get('ingredientsId'));
        $plates = Plate::all();
        $idPlates = [];

        foreach($plates as $plate) {
            $idPlate = [];
            foreach($plate->ingredients as $ingredient) {
                array_push($idPlate, $ingredient->id);
            }
            $idPlates[$plate->id] = $idPlate;
        }  
        foreach($idIngredients as $idIngredient) {
            foreach($idPlates as $clave => $valor) {
                if(in_array($idIngredient, $valor) === false) {
                    unset($idPlates[$clave]);
                } 
            }
        }
        $id = [];       
        foreach($idPlates as $clave => $valor) {
            array_push($id, $clave);
        }
        $platesFilter = Plate::whereIn('id', $id)->get();
        return json_encode($platesFilter);
    }


}

