<?php

namespace App\Models\Api\Shop;

use App\Traits\ScopeOrderByTrait;
use App\Traits\UploadTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Brand extends Model
{
    use UploadTrait;
    use ScopeOrderByTrait;
    // relationships
    public function products() {
        return $this->hasMany('App\Models\Api\Shop\Product', 'brand_id', 'id');
    }

    /**
     * Scope.
     *
     * @param  \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSearchKeyword(Builder $query, $keyword)
    {
        if (!$keyword) return $query;

        $pattern = '%' . $keyword . '%';
        return $query->where('name', 'LIKE', $pattern)
            ->orWhere('description', 'LIKE', $pattern)
            ->orWhere('sku', 'LIKE', $pattern);
    }

//    /**
//     * get the resource order by asc | desc by field
//     * @param $query
//     * @param $input as array = [$field, "asc|desc"]
//     * @return $query
//     */
//    public function scopeGetOrderBy($query, $inputs)
//    {
//        if (!$inputs) return $query;
//
//        foreach (explode(',', $inputs) as $input) {
//            $arr = explode('_', $input);
//            $field = $arr[0];
//            $order = $arr[1];
//            $query->orderBy($field, $order);
//        }
//        return $query;
//    }
}
