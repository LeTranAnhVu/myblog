<?php

namespace App\Models\Api\Shop;

use App\Traits\UploadTrait;
use Illuminate\Database\Eloquent\Model;

/*
 * @note :  state = [0 =>'deleted' , 'out_of_stock', 'unavailable', 'available']
 * */
class Product extends Model
{
    use UploadTrait;
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
    public function categories() {
        return $this->belongsToMany('App\Models\Api\Shop\PCategory','category_product', 'product_id', 'category_id');
    }
    public function brand() {
        return $this->belongsTo('App\Models\Api\Shop\Brand', 'brand_id', 'id');
    }
    public function discount() {
        return $this->belongsTo('App\Models\Api\Shop\Discount', 'discount_id', 'id');
    }

    public function getImageUrlsAttribute($value)
    {
        if (!$value) return null;
        return $this->getUrl($value);
    }


}
