<?php

namespace App\Http\Controllers\Web;

use App\Models\Api\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function list()
    {
        return view('shop.products', [
        ]);
    }

    public function detail()
    {
        return view('shop.product-detail', [
        ]);
    }

}
