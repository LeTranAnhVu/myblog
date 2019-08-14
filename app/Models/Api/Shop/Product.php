<?php

namespace App\Models\Api\Shop;

use App\Traits\UploadTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/*
 * @note :  state = [0 =>'deleted' , 'out_of_stock', 'unavailable', 'available']
 * */

class Product extends Model
{
    use UploadTrait;
    use SoftDeletes;
    protected $fillable = [
        'name',
        'image_urls',
        'quantity_sold',
        'quantity_in_stock',
        'description',
        'sku',
        'brand_id',
        'discount_id',
        'state',
        'price',
        'availabled_at'
    ];

    // relationships
    public function categories()
    {
        return $this->belongsToMany('App\Models\Api\Shop\PCategory', 'category_product', 'product_id', 'category_id');
    }

    public function brand()
    {
        return $this->belongsTo('App\Models\Api\Shop\Brand', 'brand_id', 'id');
    }

    public function discount()
    {
        return $this->belongsTo('App\Models\Api\Shop\Discount', 'discount_id', 'id');
    }

    // multator
    public function getImageUrlsAttribute($value)
    {
        if (!$value) return null;

        return $this->getUrls(explode(',', $value));
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

    /**
     * get the resource order by asc | desc by field
     * @param $query
     * @param $input as array = [$field, "asc|desc"]
     * @return $query
     */
    public function scopeGetOrderBy($query, $inputs)
    {
        if (!$inputs) return $query;

        foreach (explode(',', $inputs) as $input) {
            $arr = explode('_', $input);
            $field = $arr[0];
            $order = $arr[1];
            $query->orderBy($field, $order);
        }
        return $query;
    }


}
