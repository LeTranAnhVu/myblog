<?php

namespace App\Http\Controllers\Api\V1\Admin\Shop;

use App\Models\Api\Shop\Product;
use App\Traits\UploadTrait;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    use UploadTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('brand')->with('discount')->with('categories')->latest()->get();
        return response([
            'products' => $products
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
        $validator = Validator::make($request->except('images'), [
            'name' => 'required|unique:products|min:3|max:30',
            'quantity_sold' => 'nullable|integer|gte:0',
            'quantity_in_stock' => 'nullable|integer|gte:0',
            'description' => 'required|string',
            'sku' => 'nullable|string|min:3|max:10|unique:products',
            'brand_id' => 'nullable|integer|gte:1',
            'discount_id' => 'nullable|integer|gte:1',
            'state' => 'nullable|string',
            'price' => 'required|numeric',
            'availabled_at' => 'nullable|date',
            'categories' => 'nullable|string'
        ]);
        if ($validator->fails()) {
            return response(['message' => $validator->errors()], 400);
        }

        //check images
        if (!$request->has('images')) {
            return response(['message' => 'images field is empty'], 400);
        }
        //save images
        $image_urls = $this->uploadMultiple($request->file('images'), 'images');

        // create model
        $product = new Product($validator->valid());
        $product->image_urls = $image_urls;

        //update pivot
        try {
            $product->save();
            $product->categories()->attach(explode(',', $validator->valid()['categories']));
        } catch (\Exception $e) {
            return response(['message' => $e->getMessage()], 500);
        }

        return response(['message' => "create success"], 200);
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
            $product = Product::with('categories')->with('discount')->with('brand')->find($id);
            return response(['product' => $product], 200);
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
            $result = Product::find($id)->delete();
            return response(['message' => $result], 200);
        } catch (\Exception $e) {
            return response(['message' => $e->getMessage()], 404);
        }
    }
}
