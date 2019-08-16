<?php
/**
 * Created by PhpStorm.
 * User: vule
 * Date: 2019-08-14
 * Time: 14:12
 */

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait ScopeCommonTrait
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


    public function scopeGetDataByKeyword(Builder $query, $keyword) {
        $fields = $this->searchedField;

        if (!$keyword) return $query;

        $pattern = '%' . $keyword . '%';
        $firstField = array_shift($fields);
        $query = $query->where($firstField, 'LIKE' , $pattern);
        foreach ($fields as $f) {
            $query = $query->orWhere($f, 'LIKE' , $pattern);
        }
        return $query;
    }

    /**
     * @param: $input : 0 => without deleted items, 1 => only deleted items, 2 => all
     * @return : $query
     */

    public function scopeGetDataByState(Builder $query, $input){
        if (!$input || $input == 0) {
            return $query->withoutTrashed();
        } else if ($input == 1) {
            return $query->onlyTrashed();
        } else if ($input == 2) {
            return $query->withTrashed();
        } else {
            return $query;
        }
    }
}