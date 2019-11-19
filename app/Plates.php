<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plates extends Model
{
    public $guarded = [];

    public function orders() {
        return $this->belongsToMany("App\Orders", "orders_plates", "plate_id", "order_id");
    }

    public function ingredients() {
        return $this->belongsToMany("App\Ingredients", "plates_ingredients", "plate_id", "ingredient_id");
    }

    public function platesCategories() {
        return $this->belongsToMany("App\Platescategories", "plates_platescategories", "plate_id", "category_id");
    }
}
