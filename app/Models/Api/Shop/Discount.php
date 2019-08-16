<?php

namespace App\Models\Api\Shop;

use App\Traits\ScopeCommonTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Discount extends Model
{
    use SoftDeletes;
    use ScopeCommonTrait;
    protected $searchedField = ['name'];

    public function products() {
        return $this->hasMany('App\Models\Api\Shop\Product', 'discount_id', 'id');
    }
}
