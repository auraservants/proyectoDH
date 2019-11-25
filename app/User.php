<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $guarded = [];

    public function orders() {
        return $this->hasMany('App\Order', 'user_id');
    }
    public function addresses() {
        return $this->belongsToMany('App\Address', 'users_address', 'user_id', 'address_id');
    }
    public function cards() {
        return $this->hasMany('App\Card', 'user_id');
    }
}
