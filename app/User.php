<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $guarded = [];

    public function order() {
        return $this->hasMany('App\Order', 'user_id');
    }
    public function address() {
        return $this->hasMany('App\Address', 'user_id');
    }
    public function card() {
        return $this->hasMany('App\Card', 'user_id');
    }
}
