<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlatesCategories extends Model
{
    public $guarded = [];
    
    public function plates(){
        return $this->belongsToMany("App\Plates", "plates_platesCategories", "category_id", "plate_id");
    }
}
