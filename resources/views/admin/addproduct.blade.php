@extends('admin.layouts.template')

@section('page_title')
    Add Products
@endsection

@section('content')
    
<div class="container">
    <form action="" method="POST">
        <div class="form-group row">
          <label for="product_name" class="col-sm-2 col-form-label"> Product Name</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Product Name">
          </div>
        </div>
        <div class="form-group row">
            <label for="product_short_desc" class="col-sm-2 col-form-label">Product Short Description</label>
            <div class="col-sm-5">
            <textarea name="product_short_desc" class="form-control" id="product_short_desc" cols="30" rows="5"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="product_long_desc" class="col-sm-2 col-form-label">Product Long Description</label>
            <div class="col-sm-5">
            <textarea name="product_long_desc" class="form-control" id="product_long_desc" cols="30" rows="5"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="product_price" class="col-sm-2 col-form-label"> Product Price</label>
            <div class="col-sm-5">
              <input type="number" class="form-control" id="product_price" name="product_price" placeholder="Product Price">
            </div>
        </div>
        <div class="form-group row">
            <label for="product_category_name" class="col-sm-2 col-form-label">Select Category</label>
             <select class="col-sm-5 form-control" id="product_category_name" name="product_category_name">
                 <option selected>Select one Category</option>
                 <option value="1">One</option>
                 <option value="2">Two</option>
                 <option value="3">Three</option>
               </select>
        </div>
        <div class="form-group row">
            <label for="product_subcategory_name" class="col-sm-2 col-form-label">Select Sub Category</label>
             <select class="col-sm-5 form-control" id="product_subcategory_name" name="product_subcategory_name">
                 <option selected>Select one Sub Category</option>
                 <option value="1">One</option>
                 <option value="2">Two</option>
                 <option value="3">Three</option>
               </select>
        </div>
        <div class="form-group row">
            <label for="product_image" class="col-sm-2 col-form-label"> Product Image</label>
            <div class="col-sm-5">
              <input type="file" class="form-control" id="product_image" name="product_image" placeholder="Product Image">
            </div>
        </div>
        <div class="form-group row text-right">
          <div class="col-sm-5 ">
            <button type="submit" class="btn btn-primary ">Add New product</button>
          </div>
        </div>
      </form>
</div>

@endsection