@extends('admin.layouts.template')

@section('page_title')
     Add Sub Category
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
     <form action="{{ route('storesubcategory') }}" method="POST">
      @csrf
         <div class="form-group row">
           <label for="subcategory_name" class="col-sm-2 col-form-label">Sub Category Name</label>
           <div class="col-sm-5">
             <input type="text" class="form-control" id="subcategory_name" name="subcategory_name" placeholder="Sub Category Name">
           </div>
         </div>
         <div class="form-group row">
          <label for="subcategory_name" class="col-sm-2 col-form-label">Select Category</label>
           <select class="col-sm-5 form-control" id="category" name="category_id">
               <option value="" selected>Select one Category</option>
              @foreach ($categories as $category )

               <option value="{{ $category->id }}" >{{ $category->category_name }}</option>
                               
              @endforeach

             </select>
         </div>
         <div class="form-group row text-right">
           <div class="col-sm-5 ">
             <button type="submit" class="btn btn-primary ">Add New SubCategory</button>
           </div>
         </div>
       </form>
 </div>

@endsection