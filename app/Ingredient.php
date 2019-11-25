<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    public $guarded = [];

    public function ingredientscategory(){
        return $this->belongsTo("App\IngredientsCategory", "category_id");
    }
    public function plates() {
        return $this->belongsToMany("App\Plate", "plates_ingredients", "ingredient_id", "plate_id");
    }


}
