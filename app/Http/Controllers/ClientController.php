<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function CategoryPage(){
        $products=Product::latest()->get();
        return view('user_template.layouts.category', compact('products')); 

    }
    public function SingleProduct(){
        return view('user_template.singleproduct'); 

    }
    public function AddToCart(){
        return view('user_template.addtocart'); 

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
        return view('user_template.customerservice'); 

    }
}
