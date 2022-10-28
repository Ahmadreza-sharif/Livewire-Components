<?php

use Termwind\Components\Li;
use App\Http\Livewire\Cart\Cart;
use App\Http\Livewire\Cart\Product;
use App\Http\Livewire\Comment\Comments;
use App\Http\Livewire\Componentlist;
use App\Http\Livewire\MultipleStepForm\MultipleStepForm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::get('/multistep', MultipleStepForm::class)->name('multistep');
Route::get('/comments', Comments::class)->name('comment');
