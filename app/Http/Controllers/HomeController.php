<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $products=Product::latest()->get();
        $categories=Category::latest()->get();
        $subcategories=SubCategory::latest()->get();
        return view('user_template.home', compact('products','categories','subcategories')); 

    }
}
