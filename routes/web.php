<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home'); 
    
});

Route::controller(ClientController::class)->group(function () {
    Route::get('/category/{id}/{slug}', 'CategoryPage')->name('category'); 
    Route::get('/product-details/{id}/{slug}', 'ProductDetails')->name('productdetails');  
    Route::get('/new-release', 'NewRelease')->name('newrelease'); 
    
});


Route::middleware(['auth', 'role:user'])->group(function () {
    Route::controller(ClientController::class)->group(function () {
        Route::get('/add-to-cart', 'AddToCart')->name('addtocart'); 
        Route::post('/add-product-to-cart', 'AddProductToCart')->name('addproducttocart'); 
        Route::get('/checkout', 'Checkout')->name('checkout'); 
        Route::get('/shipping-address', 'ShippingAddress')->name('shippingaddress'); 
        Route::post('/add-shipping-address', 'AddShippingAddress')->name('addshippingaddress'); 
        Route::post('/place-order', 'PlaceOrder')->name('placeorder'); 
        
        Route::get('/user-profile', 'UserProfile')->name('userprofile'); 
        Route::get('/user-profile/pending-oders', 'PendingOders')->name('pendingoders'); 
        Route::get('/user-profile/history', 'History')->name('history'); 
        Route::get('/todays-deal', 'TodaysDeal')->name('todaysdeal'); 
        Route::get('/customer-service', 'CustomerService')->name('customerservice'); 
        Route::get('/remove-item/{id}', 'RemoveItem')->name('removeitem');

       
    });    
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

Route::middleware(['auth'])->group(function () {
   
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/admin/dashboard', 'index')->name('admindashboard');
        
    });
    Route::controller(CategoryController::class)->group(function () {
        Route::get('/admin/all-category', 'index')->name('allcategory');
        Route::get('/admin/add-category', 'AddCategory')->name('addcategory');
        Route::post('/admin/store-category', 'StoreCategory')->name('storecategory');
       
        Route::get('/admin/edit-category/{id}', 'EditCategory')->name('editcategory');
        Route::post('/admin/update-category', 'UpdateCategory')->name('updatecategory');
        Route::get('/admin/delete-category/{id}', 'DeleteCategory')->name('deletecategory');
        
        
    });
    Route::controller(SubCategoryController::class)->group(function () {
        Route::get('/admin/all-subcategory', 'index')->name('allsubcategory');
        Route::get('/admin/add-subcategory', 'AddSubCategory')->name('addsubcategory');
        Route::post('/admin/store-subcategory', 'StoreSubCategory')->name('storesubcategory');
       
        Route::get('/admin/edit-subcategory/{id}', 'EditSubCategory')->name('editsubcategory');
        Route::post('/admin/update-subcategory', 'UpdateSubCategory')->name('updatesubcategory');
        Route::get('/admin/delete-subcategory/{id}', 'DeleteSubCategory')->name('deletesubcategory');
        
    });
    Route::controller(ProductController::class)->group(function () {
        Route::get('/admin/all-product', 'index')->name('allproduct');
        Route::get('/admin/add-product', 'AddProduct')->name('addproduct');
        Route::post('/admin/store-product', 'StoreProduct')->name('storeproduct');

        Route::get('/admin/edit-image/{id}', 'EditImage')->name('editimage');
        Route::post('/admin/update-image', 'UpdateImage')->name('updateimage');

        Route::get('/admin/edit-product/{id}', 'EditProduct')->name('editproduct');
        Route::post('/admin/update-product', 'UpdateProduct')->name('updateproduct');
        Route::get('/admin/delete-product/{id}', 'DeleteProduct')->name('deleteproduct'); 
    });
    Route::controller(OrderController::class)->group(function () {
        Route::get('/admin/all-order', 'index')->name('pendingorders');
        
    });

});



require __DIR__.'/auth.php';


//hello


    Route::controller(AuthenticatedSessionController ::class)->group(function () {
        Route::get('/get-admin-login', 'AdminLogin')->name('getadminlogin');
        Route::post('/get-admin-login', 'store')->name('postadminlogin'); 
           
    }); 


