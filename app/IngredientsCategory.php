<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredientscategory extends Model
{
    public $guarded = [];

    public function ingredients(){
        return $this->hasMany("App\Ingredient", "category_id");
    }
}
