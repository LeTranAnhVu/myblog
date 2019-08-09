<?php

namespace App\Http\Controllers\Web;

use App\Models\Api\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('shop.shop', [
            'categories' =>  $categories
        ]);
    }
}
