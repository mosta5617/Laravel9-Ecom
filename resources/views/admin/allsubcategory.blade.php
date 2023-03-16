@extends('admin.layouts.template')

@section('page_title')
    All Sub Category
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
            <th scope="col">Sub Category Name</th>
            <th scope="col">Category</th>
            <th scope="col">Product</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($subcategories as $subcategory)      
          <tr>
            <th scope="row"> {{ $subcategory->id }} </th>
            <td>{{ $subcategory->subcategory_name }}</td>
            <td>{{ $subcategory->category_name }}</td>
            <td>{{ $subcategory->	slug }}</td>
            <td>
                <a href="" class="btn btn-primary btn-sm">Edit</a>
                <a href="" class="btn btn-warning btn-sm">Delete</a>
            </td>
          </tr>
          @endforeach     
        </tbody>
      </table>
</div>

@endsection