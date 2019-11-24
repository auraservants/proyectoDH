<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plate extends Model
{
    public $guarded = [];

    public function order() {
        return $this->belongsToMany("App\Order", "orders_plates", "plate_id", "order_id");
    }

    public function ingredient() {
        return $this->belongsToMany("App\Ingredient", "plates_ingredients", "plate_id", "ingredient_id");
    }

    public function platesCategory() {
        return $this->belongsToMany("App\Platescategory", "plates_platescategories", "plate_id", "category_id");
    }
}