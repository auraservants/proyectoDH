<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public $guarded = [];

    public function user() {
        return $this->belongsToMany('App\User', 'users_address', 'address_id', 'user_id');
    }
    public function fullAddress() {
        return $this->street . " N° " . $this->number . " Piso " . $this->floor . " Depto " . $this->apartment . " - " . $this->neighborhood;
    }
    public function orders() {
        return $this->hasMany('App\Order', 'address_id');
    }
}
