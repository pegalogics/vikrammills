<?php

use App\Http\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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



//middlewareGroups
Route::middleware(['authentication'])->group(function () {
    Route::get('/index',[UserController::class,'index']);
});

Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function () {
    Route::get('/', function () {
        return view('admin/login');
    });
    Route::get('/index', function () {
       return view('admin/index'); 
    });
    Route::get('dashboard',[AdminController::class, 'dashboard']);
    Route::get('/testimonials', [TestimonialController::class, 'index'] );

    Route::get('/books', [BookController::class, 'index']);
});
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
