<?php

namespace App\Http\Controllers\Api\V1\Admin\Shop;

use App\Models\Api\Shop\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $brands = Brand::getDataByState(Input::get('data_state'))
                ->getOrderBy(Input::get('order_by'))
                ->getDataByKeyword(Input::get('keyword'))
                ->paginate(5);

            return response([
                'data' => $brands
            ], 200);
        } catch (\Exception $e) {
            return response(['message' => $e->getMessage()], 400);
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $brand = Brand::findOrFail($id);
            return response(['data' => $brand], 200);
        } catch (\Exception $e) {
            return response(['message' => $e->getMessage()], 404);
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Brand::findOrFail($id)->delete();
            return response(['message' => 'delete successfully'], 200);
        } catch (\Exception $e) {
            return response(['message' => $e->getMessage()], 404);
        }
    }

    public function restore($id) {
        try{
            $result = Brand::onlyTrashed()->findOrFail($id)->restore();
            return response(['message' => $result], 200);
        }catch (\Exception $e) {
            return response(['message' => $e->getMessage()], 400);
        }
    }
}
