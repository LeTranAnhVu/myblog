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
            $brands = Brand::withgetOrderBy(Input::get('order_by'))
                ->searchKeyword(Input::get('keyword'))
                ->paginate(5);
        } catch (\Exception $e) {
            return response(['message' => $e->getMessage()], 400);
        }
        return response([
            'data' => $brands
        ], 200);
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
            $brand = Brand::find($id);
            $products = $brand->products();
            foreach ($products as $product) {
                $product->brand_id = null;
                $product->save();
            }
            $brand->delete();
            return response(['message' => 'delete successfully'], 200);
        }catch(\Exception $e){
            return response(['message' => $e->getMessage()], 404);
        }
    }
}
