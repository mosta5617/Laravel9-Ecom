
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Eflyer</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('home/') }}/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('home/') }}/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('home/') }}/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="{{ asset('home/') }}/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('home/') }}/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <!-- font awesome -->
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--  -->
      <!-- owl stylesheets -->
      <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('home/') }}/css/owl.carousel.min.css">
      <link rel="stylesoeet" href="{{ asset('home/') }}/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body class="">
      <!-- banner bg main start -->
      <div class="banner_bg_main">
         <!-- header top section start -->
         <div class="container">
            <div class="header_section_top">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="custom_menu">
                        <ul>
                           <li class="fa-light fa-house"><a href="{{ route('home') }}">Home</a></li>
                           <li><a href="{{ route('allcategory') }}">All Category</a></li>
                           <li><a href="{{ route('addtocart') }}">Cart</a></li>
                           <li><a href="{{ route('checkout') }}">Checkout</a></li>
                           <li><a href="{{ route('newrelease') }}">New Releases</a></li>
                           <li><a href="{{ route('todaysdeal') }}">Today's Deals</a></li>
                           <li><a href="{{ route('customerservice') }}">Customer Service</a></li>
                           <li><a href="{{ route('userprofile') }}">My Account</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- header top section start -->
         <!-- logo section start -->
         <div class="logo_section">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="logo"><a href="{{ route('home') }}"><img src="{{ asset('home/') }}/images/logo.png"></a></div>
                  </div>
               </div>
            </div>
         </div>
         <!-- logo section end -->
         <!-- header section start -->
         <!-- header section end -->
         <!-- banner section start -->

         <!-- banner section end -->
      </div>
      <!-- banner bg main end -->
      <!-- fashion section start -->
      
 <div class="container py-5">
   @php
   $categories=App\Models\Category::latest()->get();
   @endphp

   <div class="py-5 font-weight-bold" style="text-align:center ">
      All Category:
      @foreach ($categories as $category)
      <a href="{{ route('category', [$category->id, $category->slug]) }}">{{ $category->category_name }} <span class="badge badge-info">{{ $category->product_count }} </span> | </a> 
      @endforeach  
   </div>  

   @yield('main-content')

   
 </div>
      <!-- fashion section end -->
      <!-- electronic section start -->

      <!-- electronic section end -->
      <!-- jewellery  section start -->

      <!-- jewellery  section end -->
      <!-- footer section start -->

      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">© 2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="{{ asset('home/') }}/js/jquery.min.js"></script>
      <script src="{{ asset('home/') }}/js/popper.min.js"></script>
      <script src="{{ asset('home/') }}/js/bootstrap.bundle.min.js"></script>
      <script src="{{ asset('home/') }}/js/jquery-3.0.0.min.js"></script>
      <script src="{{ asset('home/') }}/js/plugin.js"></script>
      <!-- sidebar -->
      <script src="{{ asset('home/') }}/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="{{ asset('home/') }}/js/custom.js"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script>
   </body>
</html>