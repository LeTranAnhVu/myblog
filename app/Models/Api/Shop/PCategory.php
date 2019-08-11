<?php

namespace App\Models\Api\Shop;

use Illuminate\Database\Eloquent\Model;

class PCategory extends Model
{
    protected $table = 'p_categories';

    public function products() {
        return $this->belongsToMany('App\Models\Api\Shop\Product','category_product', 'category_id', 'product_id');
    }
}
