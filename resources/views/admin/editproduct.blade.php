@extends('admin.layouts.template')

@section('page_title')
   Edit Product
@endsection

@section('content')
    
<div class="container">

  @if ($errors->any())
  <div class="alert alert-danger" role="alert">
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
    </div>
  @endif

    <form action="{{ route('updateproduct') }}" method="POST">
      @csrf
      <input type="hidden" value="{{ $product_info->id }}" name="product_id">
        <div class="form-group row">
          <label for="category_name" class="col-sm-2 col-form-label">Product Name</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="product_name" name="product_name" value="{{ $product_info->product_name }}" >
          </div>
        </div>
        <div class="form-group row">
            <label for="product_short_desc" class="col-sm-2 col-form-label">Product Short Description</label>
            <div class="col-sm-5">
            <textarea name="product_short_desc" class="form-control" id="product_short_desc" cols="30" rows="2" > {{ $product_info->product_short_desc }} </textarea>

            </div>
          </div>
          <div class="form-group row">
            <label for="product_long_desc" class="col-sm-2 col-form-label">Product Long Description</label>
            <div class="col-sm-5">
            <textarea name="product_long_desc" class="form-control" id="product_long_desc" cols="30" rows="5" > {{ $product_info->product_long_desc }} </textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="product_price" class="col-sm-2 col-form-label">Product Price</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="product_price" name="product_price" value="{{ $product_info->product_price }}" >
            </div>
          </div>
          <div class="form-group row">
            <label for="product_quantity" class="col-sm-2 col-form-label">Product Quantity</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="product_quantity" name="product_quantity" value="{{ $product_info->product_quantity }}" >
            </div>
          </div>
       
        <div class="form-group row text-right">
          <div class="col-sm-5 ">
            <button type="submit" class="btn btn-primary ">Update Product</button>
          </div>
        </div>
      </form>
</div>

@endsection