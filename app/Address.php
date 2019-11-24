<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public $guarded = [];

    public function user() {
        return $this->belongTo('App\User', 'user_id');
    }
}
