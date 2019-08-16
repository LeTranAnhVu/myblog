<?php

namespace App\Models\Api\Shop;

use App\Traits\ScopeCommonTrait;
use App\Traits\UploadTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use UploadTrait;
    use SoftDeletes;
    use ScopeCommonTrait;

    // properties
    protected $searchedField = ['name'];

    // relationships
    public function products() {
        return $this->hasMany('App\Models\Api\Shop\Product', 'brand_id', 'id');
    }
}
