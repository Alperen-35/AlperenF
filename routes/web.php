<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Models\Product;
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

Route::get('/', function () {
    $mens=Product::whereCategory('Erkek')->take(5)->orderBy('point','DESC')->get();
    $womens=Product::whereCategory('Kadın')->take(5)->orderBy('point','DESC')->get();
    $kids=Product::whereCategory('Çocuk')->take(5)->orderBy('point','DESC')->get();
    $aks=Product::whereCategory('Aksesuar')->take(5)->orderBy('point','DESC')->get();
    return view('front.home',compact('mens','womens','kids','aks'));
})->name('/');

Route::get('home', function () {
    return view('front.home');
})->name('home');

Route::get('login', function () {
    return view('front.login');
})->name('login');

Route::get('register', function () {
    return view('front.register');
})->name('register');

Route::post('loginPost', [Controller::class, 'loginPost'])->name('loginPost');
Route::post('registerPost', [Controller::class, 'registerPost'])->name('registerPost');
Route::get('/detail/{id}', [Controller::class, 'detail'])->name('detail');
Route::get('/products/{kind}', [Controller::class, 'products'])->name('products');
Route::get('home', function () {return view('front.home');})->name('home');
Route::get('passwordResetPost',[Controller::class,'passwordResetPost'])->name('passwordResetPost');

Route::middleware('auth','verified')->group(function()
{
    Route::get('cart', function () {return view('front.cart');})->name('cart');
    Route::get('checkout', function () {return view('front.checkout');})->name('checkout');
    Route::get('contact', function () {return view('front.contact');})->name('contact');
    Route::get('checkout', function () {return view('front.checkout');})->name('checkout');
    Route::get('contact', function () {return view('front.contact');})->name('contact');
    Route::get('addCart',[Controller::class,'addCart'])->name('addCart');
    Route::get('addCartNumber',[Controller::class,'addCartNumber'])->name('addCartNumber');
    Route::get('detail', function () {return view('front.detail');})->name('detail');
    Route::get('shop', function () {return view('front.shop');})->name('shop');
    Route::post('profilePost', [Controller::class, 'profilePost'])->name('profilePost');
    Route::get('/userDelete/{id}', [Controller::class, 'userDelete'])->name('userDelete');
    Route::get('logOut', [Controller::class, 'logOut'])->name('logOut');
    Route::get('profile', function () {return view('front.profile');})->name('profile');
});
