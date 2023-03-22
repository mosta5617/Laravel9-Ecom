@extends('user_template.layouts.template')

@section('page_title')
    Flayer | Home Page 
@endsection

@section('main-content')

<div class="fashion_section">
    <div id="main_slider" class="carousel slide" data-ride="carousel">
       <div class="carousel-inner">
          <div class="carousel-item active">
             <div class="container">
                <h1 class="fashion_taital">Man & Woman Fashion</h1>
                <div class="fashion_section_2">
                   <div class="row">
                    @foreach ( $products as $product)
                      <div class="col-lg-4 col-sm-4">
                         <div class="box_main">
                            <h4 class="shirt_text"><a href="{{ route('productdetails', [$product->id, $product->slug] ) }}"> {{ $product->product_name }}</a></h4>
                            <p class="price_text">Price  <span style="color: #262626;">$ {{ $product->product_price }}</span></p>
                            <div class="tshirt_img"><img src="{{ asset($product->product_image) }}"></div>
                            <div class="btn_main">
                              <form action="{{ route('addproducttocart') }}" method="POST">
                                 @csrf
                                 <input type="hidden" value="{{ $product->id }}" name="product_id">
                                 <input type="hidden" value="{{ $product->product_price }}" name="price">
                                 <input type="hidden" value="1" name="quantity">
                                 <br>
                                 <input type="submit" class="btn btn-warning" value="Buy Now">
                              </form>
                               <div class="seemore_bt"><a href="{{ route('productdetails', [$product->id, $product->slug] ) }}">See More</a></div>
                            </div>
                         </div>
                      </div>
                      @endforeach
                   </div>
                </div>
             </div>
          </div>

       </div>

    </div>
 </div>
 

@endsection