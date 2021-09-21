<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerAccount;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AboutAdminController;
use App\Http\Controllers\ClientlogoController;
use App\Http\Controllers\ContactPageController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ContactSubmitsController;

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

Route::any('login',[AuthenticationController::class,'login']);
Route::any('logout',[AuthenticationController::class,'logout']);
Route::any('signup',[AuthenticationController::class,'signup']);
Route::any('forgot-password',[AuthenticationController::class,'forgotPassword']);
Route::any('reset-password',[AuthenticationController::class,'resetPassword']);
Route::any('verify-email',[AuthenticationController::class,'verifyEmail']);

Route::any('admin/login',[AuthenticationController::class,'adminlogin']);
Route::any('admin/logout',[AuthenticationController::class,'adminlogout']);
Route::any('admin/singup',[AuthenticationController::class,'signup']);
Route::any('admin/forgot-password',[AuthenticationController::class,'adminforgotPassword']);
Route::any('admin/reset-password',[AuthenticationController::class,'adminresetPassword']);
Route::any('admin/verify-email',[AuthenticationController::class,'adminverifyEmail']);


// Customer Routes
Route::get('/index',[UserController::class,'index']);
Route::get('/',[UserController::class,'index']);
Route::get('/profile',[UserController::class,'index']);
Route::get('/profile/edit/{id}',[UserController::class,'edit']);
//add to cards
Route::post('/profile/{customer_id}/add-to-cards{product_id}',[UserController::class,'addToCards']);


Route::get('about',[AboutController::class,'index_customer'])->name('customer.about');

//For submitting contact form by customer
Route::get('contact',[ContactPageController::class,'index_customer'])->name('customer.contact');
Route::post('contact',[ContactSubmitsController::class,'mail'])->name('contact.mail');



Route::get('blog',[BlogController::class,'index_customer'])->name('customer.blog');




Route::group([
          'prefix' => 'customer', 
            //  'middleware' => ['authentication']
    ], function () {
    Route::resource('account',CustomerAccount::class);
});


Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function () {
    //Dashboard
    Route::get('/dashboard',[AdminController::class,'index']);

    Route::get('/', function () {
        return view('admin/login');
    });
    Route::get('/index', function () {
       return view('admin/index'); 
    });

    Route::get('dashboard',[DashboardController::class, 'dashboard']);


    //Order resource
    Route::resource('orders', OrderController::class);
    Route::get('order-returns', [OrderController::class,'indexOrderReturn'])->name('order.return');

    //Customer resource
    Route::resource('customers', CustomerController::class);
    

    //product
    Route::resource('product', ProductController::class);
    Route::get('product/add/view', [ProductController::class,'add_view'])->name('product.add.view');

    Route::get('product/view',[ProductController::class,'view']);
    Route::any('/add-product', [AdminController::class, 'addProducts'] );
    Route::any('/products', [AdminController::class, 'products'] );
    Route::post('/products/edit/{id}', [AdminController::class, 'productEdit']);
    Route::get('/products/delete/{id}', [AdminController::class, 'productDelete'] );

    Route::any('/category',[CategoryController::class, 'view']);
    Route::any('/category/create',[CategoryController::class, 'create']);
    Route::any('/category/edit/{id}',[CategoryController::class, 'edit']);
    Route::any('/category/delete/{id}',[CategoryController::class, 'delete']);

    //Testimonial
    Route::any('/testimonial',[TestimonialController::class, 'view']);
    Route::any('/testimonial/create',[TestimonialController::class, 'create']);
    Route::any('/testimonial/edit/{id}',[TestimonialController::class, 'edit']);
    Route::any('/testimonial/delete/{id}',[TestimonialController::class, 'delete']);
    //END Testimonial

    //for showing contact details of customers
    Route::resource('contactSubmits',ContactSubmitsController::class);
    // Pages
    Route::group(['prefix' => 'pages'],function(){
        Route::resource('about', AboutController::class);
        Route::resource('banner', BannerController::class);
        Route::resource('home', HomeController::class);
        Route::resource('clientlogo', ClientlogoController::class);
        Route::resource('contactPage', ContactPageController::class);
    });
    Route::get('admin/logout', [AdminController::class, 'adminlogout']);
});
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
