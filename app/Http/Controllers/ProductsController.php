<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    function getProducts()
    {
        $products = Product::all();
        return response()->json($products, 200);
    }
}
