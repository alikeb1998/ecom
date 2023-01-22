<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Livewire;

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
//

//Route::get('/', function () {
//    return view('welcome');
//});
 Route::get('/',Livewire\HomeComponent ::class);
 Route::get('/checkOut',Livewire\CheckoutComponent ::class);
 Route::get('/cart',Livewire\CartComponent ::class);
 Route::get('/shop',Livewire\ShopComponent ::class);
