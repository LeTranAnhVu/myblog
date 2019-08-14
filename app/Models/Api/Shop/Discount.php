<?php

namespace App\Models\Api\Shop;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    public function products() {
        return $this->hasMany('App\Models\Api\Shop\Product', 'discount_id', 'id');
    }
}
