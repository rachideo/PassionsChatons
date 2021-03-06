<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;

    public function orders() {
        return $this->belongsToMany('App\Order', 'product_order')
            ->withPivot('quantity');
    }
}