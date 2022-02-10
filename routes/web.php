<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\JointableController;

use App\Http\Controllers\PaymentController;


use App\Http\Controllers\sellercontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');




route::get('/payment',[HomeController::class,'index']);
route::post('/charge',[HomeController::class,'charge']);
route::get('/success',[HomeController::class,'success']);
route::get('/error',[HomeController::class,'error']);




route::get('/payment',[sellercontroller::class,'index']);
route::post('/charge',[sellercontroller::class,'charge']);
route::get('/success',[sellercontroller::class,'success']);
route::get('/error',[sellercontroller::class,'error']);



 




















route::get('/redirect',[HomeController::class,'redirect']);


route::get('/',[HomeController::class,'index']);
route::get('/product_details/{id}',[HomeController::class,'product_details']);
route::get('/product_checkout/{id}',[HomeController::class,'product_checkout']);

////______________________________MY ChECKOUT______________________________________

// route::get('/checkout',[HomeController::class,'checkout']);
route::get('/checkout/{id}',[HomeController::class,'checkout']);
route::get('/orderSuccess',[HomeController::class,'orderSuccess']);
route::post('/placeorder',[HomeController::class,'placeorder']);


////______________________________MY ACCOUNT______________________________________
route::get('/profile',[HomeController::class,'profile']);
route::get('/profile_edit',[HomeController::class,'profile_edit']);  
route::post('/profile_update',[HomeController::class,'profile_update']);

////_____________________________Buying______________________________________
route::get('/buying',[HomeController::class,'buying']);


////______________________________watchlist______________________________________
route::get('/add_watchlist/{id}',[HomeController::class,'add_watchlist']);
route::get('/watchlist',[HomeController::class,'watchlist']);
route::get('/watchlist_delete/{id}',[HomeController::class,'watchlist_delete']);

////______________________________SETTTING______________________________________
route::get('/profile_setting',[HomeController::class,'profile_setting']);
route::get('/profile_setting_edit',[HomeController::class,'profile_setting_edit']);  
route::post('/profile_setting_update',[HomeController::class,'profile_setting_update']);

//____________________________faq User

route::get('/faq_user',[HomeController::class,'faq_user']);
route::get('/faq_buying_user',[HomeController::class,'faq_buying_user']);
route::get('/faq_selling_user',[HomeController::class,'faq_selling_user']);
route::get('/faq_myaccount_user',[HomeController::class,'faq_myaccount_user']);
route::get('/faq_product_guidelines_user',[HomeController::class,'faq_product_guidelines_user']);
route::get('/faq_shipping_user',[HomeController::class,'faq_shipping_user']);




//_________about

route::get('/about',[HomeController::class,'about']);
route::get('/about_buying',[HomeController::class,'about_buying']);
route::get('/about_selling',[HomeController::class,'about_selling']);
 

























/////ADMIN_____________________________________________________

route::get('/product',[AdminController::class,'product']);

route::post('/uploadproduct',[AdminController::class,'uploadproduct']);

route::get('/showproduct',[AdminController::class,'showproduct']);


route::get('/deleteproduct/{id}',[AdminController::class,'deleteproduct']);
route::get('/updateview/{id}',[AdminController::class,'updateview']);
route::post('/updateproduct/{id}',[AdminController::class,'updateproduct']);




//Route::get('/join_table', [JointableController::class, 'index']);
route::get('/show_buyer_order',[AdminController::class,'show_buyer_order']);
route::get('/delete_buyer_order/{id}',[AdminController::class,'delete_buyer_order']);

route::get('/show_seller_order',[AdminController::class,'show_seller_order']);
route::get('/delete_seller_order/{id}',[AdminController::class,'delete_seller_order']);



// ---------------------------faq_buying
route::get('/faq_buying',[AdminController::class,'faq_buying']);
route::post('/upload_faq_buying',[AdminController::class,'upload_faq_buying']);
route::get('/show_faq_buying',[AdminController::class,'show_faq_buying']);
route::get('/delete_faq_buying/{id}',[AdminController::class,'delete_faq_buying']);
route::get('/update_faq_buying_view/{id}',[AdminController::class,'update_faq_buying_view']);
route::post('/update_faq_buying/{id}',[AdminController::class,'update_faq_buying']);



// ---------------------------faq_selling
route::get('/faq_selling',[AdminController::class,'faq_selling']);
route::post('/upload_faq_selling',[AdminController::class,'upload_faq_selling']);
route::get('/show_faq_selling',[AdminController::class,'show_faq_selling']);
route::get('/delete_faq_selling/{id}',[AdminController::class,'delete_faq_selling']);
route::get('/update_faq_selling_view/{id}',[AdminController::class,'update_faq_selling_view']);
route::post('/update_faq_selling/{id}',[AdminController::class,'update_faq_selling']);



// ---------------------------faq_myaccount
route::get('/faq_myaccount',[AdminController::class,'faq_myaccount']);
route::post('/upload_faq_myaccount',[AdminController::class,'upload_faq_myaccount']);
route::get('/show_faq_myaccount',[AdminController::class,'show_faq_myaccount']);
route::get('/delete_faq_myaccount/{id}',[AdminController::class,'delete_faq_myaccount']);
route::get('/update_faq_myaccount_view/{id}',[AdminController::class,'update_faq_myaccount_view']);
route::post('/update_faq_myaccount/{id}',[AdminController::class,'update_faq_myaccount']);


// ---------------------------faq_product_guidelines
route::get('/faq_product_guidelines',[AdminController::class,'faq_product_guidelines']);
route::post('/upload_faq_product_guidelines',[AdminController::class,'upload_faq_product_guidelines']);
route::get('/show_faq_product_guidelines',[AdminController::class,'show_faq_product_guidelines']);
route::get('/delete_faq_product_guidelines/{id}',[AdminController::class,'delete_faq_product_guidelines']);
route::get('/update_faq_product_guidelines_view/{id}',[AdminController::class,'update_faq_product_guidelines_view']);
route::post('/update_faq_product_guidelines/{id}',[AdminController::class,'update_faq_product_guidelines']);


// ---------------------------faq_shipping
route::get('/faq_shipping',[AdminController::class,'faq_shipping']);
route::post('/upload_faq_shipping',[AdminController::class,'upload_faq_shipping']);
route::get('/show_faq_shipping',[AdminController::class,'show_faq_shipping']);
route::get('/delete_faq_shipping/{id}',[AdminController::class,'delete_faq_shipping']);
route::get('/update_faq_shipping_view/{id}',[AdminController::class,'update_faq_shipping_view']);
route::post('/update_faq_shipping/{id}',[AdminController::class,'update_faq_shipping']);


 
















///Seller___________________________________________

route::get('/seller_redirect',[sellercontroller::class,'redirect']);


route::get('/seller',[sellercontroller::class,'index']);
route::get('/seller_product_details/{id}',[sellercontroller::class,'product_details']);
route::get('/seller_product_checkout/{id}',[sellercontroller::class,'product_checkout']);


////______________________________MY ChECKOUT______________________________________

// route::get('/checkout',[HomeController::class,'checkout']);
route::get('/seller_checkout/{id}',[sellercontroller::class,'checkout']);
route::get('/seller_orderSuccess',[sellercontroller::class,'orderSuccess']);
route::post('/seller_placeorder',[sellercontroller::class,'placeorder']);



 




 ///______________________________MY ACCOUNT______________________________________
route::get('/seller_profile',[sellercontroller::class,'profile']);
route::get('/seller_profile_edit',[sellercontroller::class,'profile_edit']);  
route::post('/seller_profile_update',[sellercontroller::class,'profile_update']);


//_____________________________Buying______________________________________
route::get('/seller_buying',[sellercontroller::class,'buying']);


//_____________________________selling______________________________________

route::get('/seller_details_selling/{id}',[sellercontroller::class,'seller_details_selling']);
route::get('/seller_selling',[sellercontroller::class,'selling']);
route::get('/seller_selling_delete/{id}',[sellercontroller::class,'selling_delete']);
route::post('/sell_placeorder',[sellercontroller::class,'sell_placeorder']);
route::post('/sell_placeorder_details/{id}',[sellercontroller::class,'sell_placeorder_details']);


//______________________________watchlist______________________________________
route::get('/seller_add_watchlist/{id}',[sellercontroller::class,'add_watchlist']);
route::get('/seller_watchlist',[sellercontroller::class,'watchlist']);
route::get('/seller_watchlist_delete/{id}',[sellercontroller::class,'watchlist_delete']);

////______________________________SETTTING______________________________________
route::get('/seller_profile_setting',[sellercontroller::class,'profile_setting']);
route::get('/seller_profile_setting_edit',[sellercontroller::class,'profile_setting_edit']);  
route::post('/seller_profile_setting_update',[sellercontroller::class,'profile_setting_update']);

//____________________________faq User

route::get('/seller_faq_user',[sellercontroller::class,'faq_user']);
route::get('/seller_faq_buying_user',[sellercontroller::class,'faq_buying_user']);
route::get('/seller_faq_selling_user',[sellercontroller::class,'faq_selling_user']);
route::get('/seller_faq_myaccount_user',[sellercontroller::class,'faq_myaccount_user']);
route::get('/seller_faq_product_guidelines_user',[sellercontroller::class,'faq_product_guidelines_user']);
route::get('/seller_faq_shipping_user',[sellercontroller::class,'faq_shipping_user']);


//_________about

route::get('/seller_about',[sellercontroller::class,'about']);
route::get('/seller_about_buying',[sellercontroller::class,'about_buying']);
route::get('/seller_about_selling',[sellercontroller::class,'about_selling']);

































 

 




 
 