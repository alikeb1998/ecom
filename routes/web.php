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
Route::get('/', Livewire\HomeComponent ::class);
Route::get('/checkOut', Livewire\CheckoutComponent ::class);
Route::get('/cart', Livewire\CartComponent ::class);
Route::get('/shop', Livewire\ShopComponent ::class);

//Route::middleware([
//    'auth:sanctum',
//    config('jetstream.auth_session'),
//    'verified'
//])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
//});
// for user or customer
Route::middleware(['auth:sanctum','verified'])->group(function (){
    Route::get('/user/dashboard',Livewire\User\UserDashboardComponent::class)->name('user.dashboard');
});
//for admin
Route::middleware(['auth:sanctum','verified','authadmin'])->group(function (){
    Route::get('/admin/dashboard', Livewire\Admin\AdminDashboardComponent::class)->name('admin.dashboard');
});
