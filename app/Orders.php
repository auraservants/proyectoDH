<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Orders extends Model
{
    public $guarded = [];

    public function user() {
        return $this->belongsTo("App\User", "user_id");
    }

    public function plates() {
        return $this->belongsToMany("App\Plates", "orders_plates", "order_id", "plate_id");
    }
    public function states() {
        return $this->belongsTo("App\States", "state_id");
    }

    
}
