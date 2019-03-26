<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cancel extends Model
{
    public $timestamps = false;

    protected $table = 'cancel_product_edit';

    public function orders() {
        return $this->belongsToMany('App\Cancel');
    }
}