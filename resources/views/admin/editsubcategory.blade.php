@extends('admin.layouts.template')

@section('page_title')
   Edit Sub Category
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

    <form action="{{ route('updatesubcategory') }}" method="POST">
      @csrf
      <input type="hidden" value="{{ $subcategory_info->id }}" name="subcategory_id">
        <div class="form-group row">
          <label for="category_name" class="col-sm-2 col-form-label">Sub Category Name</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="category_name" name="subcategory_name" value="{{ $subcategory_info->subcategory_name }}" >
          </div>
        </div>
 
        <div class="form-group row text-right">
          <div class="col-sm-5 ">
            <button type="submit" class="btn btn-primary ">Update SubCategory</button>
          </div>
        </div>
      </form>
</div>

@endsection