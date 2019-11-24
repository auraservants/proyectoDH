<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredients extends Model
{
    public $guarded = [];

    public function ingredientsCategories(){
        return $this->belongsTo("App\IngredientsCategories", "category_id");
    }
    public function plates() {
        return $this->belongsToMany("App\Plates", "plates_ingredients", "ingredient_id", "plate_id");
    }


}
