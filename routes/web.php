<?php

use App\Http\Livewire\Quiz\Quiz;
use App\Http\Livewire\Vote\Vote;
use App\Http\Livewire\Cart\Product;
use App\Http\Livewire\Componentlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Comment\Comments;
use App\Http\Livewire\Filter\Filtering;
use App\Http\Livewire\Automatic\Autolinks;
use App\Http\Livewire\Crud\SimpleCrud\Crud;
use App\Http\Livewire\Automatic\AutoValidation;
use App\Http\Livewire\Category\ThreeCategories;
use App\Http\Livewire\Chart\Chart;
use App\Http\Livewire\InlineUpdate\InlineUpdate;
use App\Http\Livewire\MoreButton\More;
use App\Http\Livewire\MultipleStepForm\MultipleStepForm;

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
Route::get('/inlineupdate', InlineUpdate::class)->name('inlineupdate');
Route::get('/quiz', Quiz::class)->name('quiz'); 
Route::get('/autolinks', Autolinks::class)->name('autolinks'); 
Route::get('/threecategory' , ThreeCategories::class)->name('threecategory');
Route::get('/vote' , Vote::class)->name('votes');
Route::get('/simplecrud', Crud::class)->name('simplecrud');
Route::get('/filter', Filtering::class)->name('filter');
Route::get('/autoValidation', AutoValidation::class)->name('autoValidation');
Route::get('/chart', Chart::class)->name('chart');
Route::get('/more', More::class)->name('more');
