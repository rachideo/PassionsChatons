<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function products() {
        return $this->belongsToMany('App\Product', 'product_order')
            ->withPivot('quantity');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function addressBilling() {
        return $this->belongsTo('App\Address', 'address_id_billing');
    }

    public function addressDelivery() {
        return $this->belongsTo('App\Address', 'address_id_delivery');
    }

}

