@extends('admin.layouts.template')

@section('page_title')
    Pending Oders
    <hr class="featurette-divider">
@endsection


@section('content')
    
<div class="container">
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">SL#</th>
            <th scope="col">Product Name</th>
            <th scope="col">Address</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @php
                $i=0;
            @endphp
          @foreach ($products as $product )
          <tr>
            @php
                 $product_name=App\Models\Product::where('id', $product->product_id )->value('product_name');
                 $i++;
             @endphp
            <th scope="row"> {{ $i }} </th>
            <td>{{ $product_name }}</td> 
            <td>
                {{ $product->address }}
                {{ $product->postalcode }}
            </td> 
            <td>{{ $product->phonenumber }}</td> 
            <td>{{ $product->total_price }}</td> 
            <td><span class="badge badge-pill badge-primary">{{  $product->product_quantity }}</span></td>

            <td>
                <a href="{{ route('editproduct', $product->id ) }}" class="btn btn-primary btn-sm">Approve</a>
                
                <a href="{{ route('deleteproduct', $product->id ) }}" class="btn btn-danger btn-sm">Cancle</a>
            </td>
          </tr>
                                
          @endforeach
        </tbody>
      </table>
</div>

@endsection