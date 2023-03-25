<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use App\Models\ShippingInfo;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $userid=Auth::id();
        $cart_items=Cart::where('user_id', $userid)->get();
        return view('user_template.addtocart', compact('cart_items')); 

    }

    public function AddProductToCart(Request $request){
        $product_price=$request->price;
        $quantity=$request->quantity;
        $price=$product_price * $quantity;
        Cart::insert([
            'product_id'=>$request->product_id,
            'user_id'=>Auth::id(),
            'quantity'=> $request->quantity,
            'price'=>$price,

        ]);

        return redirect()->route('addtocart')->with('message', 'Your item Added to Cart Successfully!'); 
    }
    public function RemoveItem($id){
        Cart::findOrFail($id)->delete();
        return redirect()->route('addtocart')->with('message', 'Item Removed Successfully!'); 
    }


    public function Checkout(){
        $userid= Auth::id();
        $cart_items= Cart::where('user_id', $userid)->get();
        $shipping_address= ShippingInfo::where('user_id', $userid)->first();
        return view('user_template.checkout', compact('cart_items','shipping_address')); 

    }

    public function ShippingAddress(){
        return view('user_template.shippingaddress'); 

    }
    public function AddShippingAddress(Request $request){
        $request->validate([
            'address' => 'required|unique:shipping_infos|max:255',
            'phonenumber' => 'required',
        ]);
        
        ShippingInfo::insert([
            'user_id'=>Auth()->id(),
            'phonenumber'=>$request->phonenumber,
            'address'=>$request->address,
            'postalcode'=>$request->postalcode,
        ]);

        return redirect()->route('checkout'); 
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
