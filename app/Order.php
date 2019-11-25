<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
    public $guarded = [];

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function plates() {
        return $this->belongsToMany('App\Plate', 'orders_plates', 'order_id', 'plate_id');
    }
    public function state() {
        return $this->belongsTo('App\State', 'state_id');
    }
    public function address() {
        return $this->belongsTo('App\Address', 'address_id');
    }
}