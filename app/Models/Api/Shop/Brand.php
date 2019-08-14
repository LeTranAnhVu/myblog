<?php

namespace App\Models\Api\Shop;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function products() {
        return $this->hasMany('App\Models\Api\Shop\Product', 'brand_id', 'id');
    }
}
