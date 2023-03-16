@extends('admin.layouts.template')

@section('page_title')
    All Category
@endsection

@section('content')
    
<div class="container">

  @if(session()->has('message'))
  <div class="alert alert-success " role="alert">
    {{ session()->get('message') }}
  </div>
  @endif

    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Category Name</th>
            <th scope="col">Sub Category</th>
            <th scope="col">Product</th>
            <th scope="col">Slug</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($categories as $category )
          <tr>
            <th scope="row"> {{ $category->id }} </th>
            <td>{{ $category->category_name }}</td>
            <td><span class="badge badge-pill badge-primary">{{ $category->subcategory_count }}</span></td>
            <td><span class="badge badge-pill badge-primary">{{ $category->product_count }}</span></td>
            <td>{{ $category->slug }}</td>
            <td>
                <a href="{{ route('editcategory', $category->id ) }}" class="btn btn-primary btn-sm">Edit</a>
                <a href="{{ route('deletecategory', $category->id ) }}" class="btn btn-warning btn-sm">Delete</a>
            </td>
          </tr>
                                
          @endforeach
        </tbody>
      </table>
</div>

@endsection