<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    public $timestamps = false;
    public $guarded = [];

    
    public function plates() {
        return $this->hasMany("App\Plates", "state_id");
    }
}
