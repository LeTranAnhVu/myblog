<?php
/**
 * Created by PhpStorm.
 * User: vule
 * Date: 2019-08-14
 * Time: 14:12
 */

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;


trait ScopeOrderByTrait
{
    /**
     * get the resource order by asc | desc by field
     * @param $query
     * @param string $input [$field, "asc|desc"]
     * @return $query
     */
    public function scopeGetOrderBy(Builder $query, $inputs)
    {
        if (!$inputs) return $query;

        foreach (explode(',', $inputs) as $input) {
            $arr = explode('_', $input);

            $order = array_pop($arr);
            $field = implode('_', $arr);
            try {
                $query->orderBy($field, $order);
            } catch (\Exception $e) {
                throw $e;
            }
        }
        return $query;
    }
}