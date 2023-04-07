
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
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <!-- owl stylesheets -->
      <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('home/') }}/css/owl.carousel.min.css">
      <link rel="stylesoeet" href="{{ asset('home/') }}/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.8/sweetalert2.min.css" integrity="sha512-ZCCAQejiYJEz2I2a9uYA3OrEMr8ZN4BGTwlVYNxsYopLS/WH2bey53SObOKRF4ciHo5gqxgVP/muDloHvWZXHw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Data Table CSS -->
      <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
 


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
                           <li><a href="{{ route('home') }}" class="fa fa-home" aria-hidden="true"></a></li>
                           <li><a href="{{ route('allcategory') }}">All Category</a></li>
                           <li><a href="{{ route('addtocart') }}">Cart</a></li>
                           <li><a href="{{ route('newrelease') }}">New Releases</a></li>
                           <li><a href="{{ route('todaysdeal') }}">Today's Deals</a></li>
                           <li><a href="{{ route('customerservice') }}">Customer Service</a></li>
                           <li><a href="{{ route('getadminlogin') }}"> Admin</a></li>

                           @if (Auth::guest())
                           <li><a href="{{ route('userprofile') }}" class="fa fa-sign-in" ></a></li>
                           @else
                           <li><a href="{{ route('userprofile') }}" class="fa fa-user"></a></li>
                           @endif
                            
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
      
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
      <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>


         <script>	
         let table = new DataTable('#myTable');
         table.row(':first')
        .data();
         </script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script>
{{-- Tostr CDN script --}}
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

      <script>
         @if (Session::has('message'))
         var type="{{ Session::get('alert-type', 'info') }}"
            switch(type){
               case 'info':
                  toastr.info("{{ Session::get('message') }}");
                  break;
                  case 'success':
                  toastr.success("{{ Session::get('message') }}");
                  break;
                  case 'warning':
                  toastr.warning("{{ Session::get('message') }}");
                  break;
                  case 'error':
                  toastr.error();("{{ Session::get('message') }}");
                  break;
            }
         @endif
      </script>
{{-- Sweet Alert script --}}
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.8/sweetalert2.min.js" integrity="sha512-ySDkgzoUz5V9hQAlAg0uMRJXZPfZjE8QiW0fFMW7Jm15pBfNn3kbGsOis5lPxswtpxyY3wF5hFKHi+R/XitalA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@if(session::has('message'))
<script>
   swal("Congratulations!", "{!!session::get('message')!!}", "success", {
      button: 'OK',
   });
</script>
   
@endif

<script>
   $('.remove').click(function(event){
      var form = $(this).closest('href');
      event.preventDefault();
  swal.fire({
    title: 'Confirm',
    text: 'Are you sure to delete this message?',
    type: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Yes, sir',
    cancelButtonText: 'Not at all',
    reverseButtons: true
  }).then(result)=>{
   if (result.isConfirmed){
      form.submit()
   }
  }
});
</script>
   </body>
</html>