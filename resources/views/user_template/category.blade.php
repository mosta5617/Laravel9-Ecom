@extends('user_template.layouts.template')

@section('page_title')
    Flayer | Category Page 
@endsection

@section('main-content')

<h2> </h2>

<div class="fashion_section">
    <div id="main_slider" class="carousel slide" data-ride="carousel">
       <div class="carousel-inner">
          <div class="carousel-item active">
             <div class="container">
                <h1 class="fashion_taital">{{ $category->category_name }} - ({{ $category->product_count }})</h1>
                <div class="fashion_section_2">
                   <div class="row">
                    @foreach ( $products as $product)
                      <div class="col-lg-4 col-sm-4">
                         <div class="box_main">
                            <h4 class="shirt_text">{{ $product->product_name }}</h4>
                            <p class="price_text">Price  <span style="color: #262626;">$ {{ $product->product_price }}</span></p>
                            <div class="tshirt_img"><img src="{{ asset($product->product_image) }}"></div>
                            <div class="btn_main">
                               <div class="buy_bt"><a href="{{ route('editproduct', $product->id ) }}">Buy Now</a></div>
                               <div class="seemore_bt"><a href="{{ route('editproduct', $product->id ) }}">See More</a></div>
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