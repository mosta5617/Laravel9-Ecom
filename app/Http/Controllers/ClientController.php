<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function CategoryPage($id){
        $category=Category::findOrFail($id);
        $products=Product::where('product_category_id', $id)->latest()->get();
        return view('user_template.category', compact('category', 'products')); 


    }
    public function ProductDetails($id){
        $products=Product::findOrFail($id);
        $subcat_id=Product::where('product_category_id', $id)->value('product_subcategory_id');
        $related_products=Product::where('product_subcategory_id', $subcat_id)->latest()->get();
        return view('user_template.productdetails', compact('products', 'related_products')); 

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
    public function PendingOders(){
        return view('user_template.pendingoders'); 

    }
    public function History(){
        return view('user_template.history'); 

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
