<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products=Product::latest()->get();
        return view('admin.allproduct', compact('products'));
    }
    public function AddProduct(){
        $categories=Category::latest()->get();
        $subcategories=SubCategory::latest()->get();
        return view('admin.addproduct', compact('categories','subcategories'));
    }

    public function StoreProduct(Request $request){
        $request->validate([
            'product_name' => 'required|unique:products|max:255',
            'product_short_desc' => 'required|max:500',
            'product_long_desc' => 'required',
            'product_price' => 'required',
            'product_category_id' => 'required',
            'product_subcategory_id' => 'required',
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $image=$request->file('product_image');
        $image_name=time().'.'. $image->getClientOriginalExtension();
        $request->product_image->move(public_path('upload'),$image_name);
        $image_url= 'upload/'. $image_name;
        $category_id=$request->product_category_id;
        $subcategory_id=$request->product_subcategory_id;

        $category_name= Category::where('id', $category_id )->value('category_name');
        $subcategory_name= SubCategory::where('id', $subcategory_id )->value('subcategory_name');

        Product::insert([
            'product_name'=>$request->product_name,
            'product_short_desc'=>$request->product_short_desc,
            'product_long_desc'=>$request->product_long_desc,
            'product_price'=>$request->product_price,
            'product_quantity'=>$request->product_quantity,
            'product_category_id'=>$request->product_category_id,
            'product_subcategory_id'=>$request->product_subcategory_id,
            'product_category_name'=>$category_name,
            'product_subcategory_name'=>$subcategory_name,
            'product_image'=>$image_url,
            'slug'=>strtolower(str_replace(' ','-',$request->product_name)),
        ]);

       Category::where('id',  $category_id)->increment('product_count', 1);
       SubCategory::where('id',  $subcategory_id)->increment('product_count', 1);

        return redirect()->route('allproduct')->with('message', 'Product Added Successfully!'); 
    }


    public function EditImage($id){
        $image_info=Product::findOrFail($id);
        return view('admin.editimage', compact('image_info'));

    }


    public function UpdateImage(Request $request){
 
        $request->validate([
            'product_new_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image_id=$request->image_id;
        $image=$request->file('product_new_image');
        $image_name=time().'.'. $image->getClientOriginalExtension();
        $request->product_new_image->move(public_path('upload'),$image_name);
        $image_url= 'upload/'. $image_name;

        Product::findOrFail($image_id)->update([
            'product_image'=>$image_url,
            
        ]);
      

        return redirect()->route('allproduct')->with('message', 'Product Image Updated Successfully!'); 
    }

    public function EditProduct($id){
        $product_info=Product::findOrFail($id);
        return view('admin.editproduct', compact('product_info'));

    }

    public function UpdateProduct(Request $request){
        $product_id=$request->product_id;
        $request->validate([
            'product_name' => 'required|max:255',
            'product_short_desc' => 'required',
            'product_long_desc' => 'required',
            'product_price' => 'required',
            'product_quantity' => 'required',
        ]);
    
        Product::findOrFail($product_id)->update([
            'product_name'=>$request->product_name,
            'product_short_desc'=>$request->product_short_desc,
            'product_long_desc'=>$request->product_long_desc,
            'product_price'=>$request->product_price,
            'product_quantity'=>$request->product_quantity,
            'slug'=>strtolower(str_replace(' ','-',$request->product_name))
        ]);
        return redirect()->route('allproduct')->with('message', 'Product Updated Successfully!'); 
    }

}
