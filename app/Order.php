<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
    public $guarded = [];

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function plate() {
        return $this->belongsToMany('App\Plate', 'orders_plates', 'order_id', 'plate_id');
    }
    public function state() {
        return $this->belongsTo('App\State', 'state_id');
    }
    
}