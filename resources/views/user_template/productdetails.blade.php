@extends('user_template.layouts.template')

@section('page_title')
    Flayer | Product Details
@endsection

@section('main-content')

<h2> Product Details </h2>
<div class="container">

       <div class="row">

          <div class="col-lg-4">
             <div class="box_main">
                    <div class="tshirt_img"><img src="{{ asset($products->product_image) }}">
                        <button type="button" class="btn btn-primary">Add to Cart</button>
                    </div>
             </div>
           
          </div>
          <div class="col-lg-8">
             <div class="box_main">
                <div class="product-info">
                    <h4 class="shirt_text">{{ $products->product_name }}</h4>
                    <p class="price_text">Price  <span style="color: #262626;">$ {{ $products->product_price }}</span></p>
                </div>
                <ul class="p-2 bg-light my-2">
                    <li>Category - {{ $products->product_category_name }}</li>
                    <li>Sub Category - {{ $products->product_subcategory_name }}</li>
                    <li>Available Quantity - {{ $products->product_quantity }}</li>
                </ul>
                <div class="my-3 product-details">
                    <p class=""> {{ $products->product_short_desc }}  </p>
                    <p class=""> {{ $products->product_long_desc }}  </p>

                </div>
             </div>
           </div>

        </div>
       

 <div class="row">
    
    <div class="container">
        <h1 class="fashion_taital">Related Products</h1>
        <div class="fashion_section_2">
           <div class="row">
            @foreach ( $related_products as $product)
              <div class="col-lg-4 col-sm-4">
                 <div class="box_main">
                    <h4 class="shirt_text"><a href="{{ route('productdetails', [$product->id, $product->slug] ) }}"> {{ $product->product_name }}</a></h4>
                    <p class="price_text">Price  <span style="color: #262626;">$ {{ $product->product_price }}</span></p>
                    <div class="tshirt_img"><img src="{{ asset($product->product_image) }}"></div>
                    <div class="btn_main">
                       <div class="buy_bt"><a href="{{ route('productdetails', [$product->id, $product->slug] ) }}">Buy Now</a></div>
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


 Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam nulla odio sint itaque amet atque quaerat magni vitae minus earum architecto minima, ipsa debitis necessitatibus fugit voluptas totam doloribus? Itaque? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam eius, blanditiis est asperiores porro quis odit id velit eum sed sunt a sit quos aliquid ut nobis tempore animi? Quidem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque tempore voluptate quaerat nisi est rem omnis voluptates cumque odit dicta optio, similique doloribus, doloremque esse culpa iste eaque sed obcaecati!

@endsection