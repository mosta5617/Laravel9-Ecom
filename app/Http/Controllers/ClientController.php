<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function CategoryPage(){
        $products=Product::latest()->get();        
        $categories=Category::latest()->get();
        $subcategories=SubCategory::latest()->get();
        return view('user_template.layouts.category', compact('products','categories','subcategories')); 


    }
    public function SingleProduct(){
        return view('user_template.singleproduct'); 

    }
    public function AddToCart(){
        $products=Product::latest()->get();
        $categories=Category::latest()->get();
        $subcategories=SubCategory::latest()->get();
        return view('user_template.addtocart', compact('products','categories','subcategories')); 

    }
    public function Checkout(){
        return view('user_template.checkout'); 

    }
    public function UserProfile(){
        return view('user_template.userprofile'); 

    }
    public function NewRelease(){
        return view('user_template.newrelease'); 

    }
    public function TodaysDeal(){
        return view('user_template.todaysdeal'); 

    }
    public function CustomerService(){
        $categories=Category::latest()->get();

        return view('user_template.customerservice', compact('categories')); 

    }
}
