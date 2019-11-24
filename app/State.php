<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public $timestamps = false;
    public $guarded = [];

    
    public function order() {
        return $this->hasMany('App\Order', 'state_id');
    }
}