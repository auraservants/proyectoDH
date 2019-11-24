<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IngredientsCategories extends Model
{
    public $guarded = [];

    public function ingredients(){
        return $this->hasMany("App\Ingredients", "category_id");
    }
}
