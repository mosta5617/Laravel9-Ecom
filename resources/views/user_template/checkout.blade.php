@extends('user_template.layouts.template')

@section('page_title')
    Flayer | Checkout
@endsection

@section('main-content')

<h2> Checkout </h2>

<div class="row">
    <div class="col-4">
        <div class="box_main">
            <h3>Product will send at</h3>
            <p>City/Village- {{ $shipping_address->phonenumber	 }}</p>
            <p>Postal Code- {{ $shipping_address->address	 }}</p>
            <p>Phone Number {{ $shipping_address->postalcode	 }}</p>
        </div>
    </div>
    <div class="col-8">
        <div class="box_main">
            Your final Products Are-
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Image</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
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
              @endif
                  </tr>  
                </tbody>

          </table>
 
        </div>
    </div>
    <form action="" method="POST">
      @csrf
      <input type="submit" value="Cancel Order" class="btn btn-danger mr-3">
    </form>

    <form action="{{ route('placeorder') }}" method="POST">
      @csrf
      <input type="submit" value="Place Order" class="btn btn-primary">
    </form>
</div>

@endsection