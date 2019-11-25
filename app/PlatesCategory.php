<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Platescategory extends Model
{
    public $guarded = [];
    
    public function plates(){
        return $this->belongsToMany("App\Plate", "plates_platescategories", "category_id", "plate_id");
    }
}
