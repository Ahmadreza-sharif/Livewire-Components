<?php

use App\Http\Livewire\Cart\Cart;
use App\Http\Livewire\Cart\Product;
use App\Http\Livewire\Componentlist;
use Illuminate\Support\Facades\Route;
use Termwind\Components\Li;

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

Auth::routes();

Route::get('/', Componentlist::class);
Route::get('/cart', Product::class)->name('cart');
