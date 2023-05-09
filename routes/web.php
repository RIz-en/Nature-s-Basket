<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\CustomerReviewsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\FullItemsController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\RegistrationController;

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

Route::get('/', [WelcomeController::class,'welcome'])->name('welcome');

Route::get('/home', [WelcomeController::class,'welcome'])->name('welcome');

Route::get('/dashboard',[AdminController::class,'dashboard'])->middleware('admin')->name('dashboard');

Route::get('/create', [RegistrationController::class, 'create'])->name('create');

Route::post('/store', [RegistrationController::class, 'store'])->name('store');

Route::get('/show', [RegistrationController::class, 'index'])->middleware('admin')->name('index');

Route::get('/edit/{id}', [RegistrationController::class, 'edit'])->name('edit');

Route::get('/profile/{id}/edit',[WelcomeController::class,'profileedit'])->name('profileedit');

// !update
Route::patch('/update/profile/{id}',[RegistrationController::class,'update'])->name('update.profile');

Route::patch('/update/password/{id}',[RegistrationController::class,'update_password'])->name('update.password');


Route::delete('/destroy/{id}',[RegistrationController::class, 'destroy'])->name('destroy');


Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');



//log out
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');



//navbar
Route::get('/contact', [NavbarController::class, 'contact'])->name('contact');

Route::get('/blog', [NavbarController::class, 'blog'])->name('blog');

Route::get('/category', [FullItemsController::class,'category'] )->name('category');

//itemstore

Route::get('/item/form',[FullItemsController::class,'itemsform'])->middleware('admin')->name('itemsform');

Route::post('/item/store', [FullitemsController::class,'itemsstore'])->middleware('admin')->name('itemsstore');

Route::get('/item/show',[FullItemsController::class,'itemshow'])->middleware('admin')->name('itemshow');

Route::get('/item/edit/{id}', [FullItemsController::class, 'itemedit'])->middleware('admin')->name('itemedit');

Route::patch('/item/update/{id}', [FullItemsController::class, 'itemupdate'])->middleware('admin')->name('itemupdate');

Route::delete('/item/destroy/{id}',[FullitemsController::class, 'itemsdestroy'])->middleware('admin')->name('itemsdestroy');

//cart

Route::get('/shop',[CartController::class,'productstocart'])->name('productstocart');

Route::post('/cart/add',[CartController::class,'cartstore'])->name('cartstore');

Route::get('/cart',[CartController::class,'cart'])->name('cart');

Route::get('/cart/clear',[CartController::class,'cartclear'])->name('cartclear');



//About us
Route::get('/about', function () {
        return view('pages.about_us');
});

//profile page
// Route::get('/profile',[WelcomeController::class,'profile'])->name('profile');

//FAQ
Route::get('/page/FAQ',[WelcomeController::class,'FAQ'])->name('FAQ');

//newsletter
Route::post('/newsletter/store',[NewsletterController::class,'newsletterstore'])->name('newsletterstore');

Route::get('/newsletter/users',[NewsletterController::class,'newslettershow'])->middleware('admin')->name('newsletterusers');

Route::delete('/newsletterdestroy/{id}',[NewsletterController::class, 'newsletterdestroy'])->middleware('admin')->name('newsletterdestroy');

//customer reviews
Route::post('/review/store',[CustomerReviewsController::class,'review_store'])->name('review_store');

Route::get('/review/show',[CustomerReviewsController::class,'review_show'])->name('review_show');

//payment-CHECKOUT
Route::get('/checkout',[CheckOutController::class,'checkout'])->name('checkout');

//##
Route::get('/hello', [CartController::class,'hello'])->name('hello');
