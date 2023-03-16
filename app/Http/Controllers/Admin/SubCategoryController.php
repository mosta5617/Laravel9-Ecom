<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index(){
        return view('admin.allsubcategory');
    }
    public function AddSubCategory(){
        $categories=Category::latest()->get();
        return view('admin.addsubcategory', compact('categories'));
    }

    public function StoreSubCategory(Request $request){
        $request->validate([
            'subcategory_name' => 'required|unique:sub_categories|max:255',
            'category_id' => 'required',
        ]);
        $category_id=$request->category_id;
        $category_name=Category::where('id', $category_id )->value('category_name');
        SubCategory::insert([
            'subcategory_name'=>$request->subcategory_name,
            'slug'=>strtolower(str_replace(' ','-',$request->subcategory_name)),
            'category_id'=>$category_id,
            'category_name'=>$category_name,
        ]);

        return redirect()->route('allsubcategory')->with('message', 'Sub Category Added Successfully!'); 
    }


}
