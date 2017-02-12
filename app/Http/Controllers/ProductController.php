<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function getIndex()
    {
    	$products = Product::all();                         // study this part
    	return view('shop.index')->withProducts($products);
    }
}
