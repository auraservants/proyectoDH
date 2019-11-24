<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public $guarded = [];
    
    public function user() {
        return $this->belongTo('App\User', 'user_id');
    }
}
