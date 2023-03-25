@extends('user_template.layouts.template')

@section('page_title')
    Flayer | Add to Cart 
@endsection

@section('main-content')
<h2>Add to Cart Page</h2>my wife beside me cutting vegetable an me working on computer in a room

@if(session()->has('message'))
<div class="alert alert-success " role="alert">
  {{ session()->get('message') }}
</div>
@endif

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Product Name</th>
      <th scope="col">Product Image</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @php
    $total=0;
@endphp
    @foreach ( $cart_items as $item )
    <tr>
      @php
         $product_name=App\Models\Product::where('id', $item->product_id)->value('product_name'); 
         $img=App\Models\Product::where('id', $item->product_id)->value('product_image'); 
         
      @endphp
      <td>{{ $product_name }}</td>
      <td><img src="{{ asset($img) }}" alt="" style="height: 50px"></td>
      <td><span class="badge badge-pill badge-primary">{{ $item->quantity }}</span></td>
      <td><span class="badge badge-pill badge-primary">{{ $item->price }}</span></td>
      <td>
          <a href="{{ route('removeitem', $item->id) }}" class="btn btn-warning btn-sm">Remove</a>
      </td>
    </tr>
    @php
        $total=$total+$item->price;
    @endphp
                 
    @endforeach
    <tr>


@if ($total<=0)
<td></td><td></td><td>Your Cart is Empty!</td>
@else
<td></td><td></td>
<td>Total</td>
<td>{{ $total }}</td>
<td><a href="{{ route('shippingaddress') }}" class="btn btn-primary btn-sm">Checkout Now</a></td>
@endif
    </tr>  
  </tbody>
</table>


@endsection