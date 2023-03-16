<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index(){
        $categories=Category::latest()->get();
        $subcategories=SubCategory::latest()->get();
        return view('admin.allsubcategory', compact('categories','subcategories'));
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

       Category::where('id',  $category_id)->increment('subcategory_count', 1);

        return redirect()->route('allsubcategory')->with('message', 'Sub Category Added Successfully!'); 
    }

    public function EditSubCategory($id){
        $subcategory_info=SubCategory::findOrFail($id);
        return view('admin.editsubcategory', compact('subcategory_info'));

    }
    public function UpdateSubCategory(Request $request){
        $subcategory_id=$request->subcategory_id;
        $request->validate([
            'subcategory_name' => 'required|unique:sub_categories|max:255',
        ]);

        SubCategory::findOrFail($subcategory_id)->update([
            'subcategory_name'=>$request->subcategory_name,
            'slug'=>strtolower(str_replace(' ','-',$request->subcategory_name))
        ]);
        return redirect()->route('allsubcategory')->with('message', 'Sub Category Updated Successfully!'); 

}
    public function DeleteSubCategory($id){
        $subcategory_id=SubCategory::where('id', $id)->value('category_id');
        SubCategory::findOrFail($id)->delete();
        Category::where('id',  $subcategory_id )->decrement('subcategory_count', 1);
        return redirect()->route('allsubcategory')->with('message', 'Sub Category Deleted Successfully!'); 
    }


}