@extends('admin.layouts.template')

@section('page_title')
    All Product
@endsection

@section('content')
    
<div class="container">
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Product Name</th>
            <th scope="col">Image</th>
            <th scope="col">Image Edit</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($products as $product )
          <tr>
            <th scope="row"> {{ $product->id }} </th>
            <td>{{ $product->product_name }}</td> 
            <td> <img src="{{ asset($product->product_image) }}" alt="" style="width: 100px" class="img-thumbnail"> </td>
            <td><a href="{{ route('editimage', $product->id) }}" class="badge badge-pill badge-secondary" id="" >Edit</a></td>
            <td><span class="badge badge-pill badge-primary">{{ $product->product_price }}</span></td>
            <td><span class="badge badge-pill badge-primary">{{ $product->product_quantity }}</span></td>
            <td>
                <a href="{{ route('editproduct', $product->id ) }}" class="btn btn-primary btn-sm">Edit</a>
                <a href="{{ route('deleteproduct', $product->id ) }}" class="btn btn-warning btn-sm">Delete</a>
            </td>
          </tr>
                                
          @endforeach
        </tbody>
      </table>
</div>

@endsection