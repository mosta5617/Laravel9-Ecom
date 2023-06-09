@extends('admin.layouts.template')

@section('page_title')
    Add Category
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

    <form action="{{ route('storecategory') }}" method="POST">
      @csrf
        <div class="form-group row">
          <label for="category_name" class="col-sm-2 col-form-label">Category Name</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Category Name">
          </div>
        </div>
 
        <div class="form-group row text-right">
          <div class="col-sm-5 ">
            <button type="submit" class="btn btn-primary ">Add New Category</button>
          </div>
        </div>
      </form>
</div>

@endsection