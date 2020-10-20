<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => 'admin'], function () {

// });


 //Words
 Route::get('words',[App\Http\Controllers\WordsController::class, 'index'])->name('words');
 Route::get('words/create', [App\Http\Controllers\WordsController::class, 'create'])->name('words.create');
 Route::post('words', [App\Http\Controllers\WordsController::class, 'store'])->name('words.store');
 Route::get('words/{word}', [App\Http\Controllers\WordsController::class, 'show'])->name('words.show')->where('word', '[0-9]+');
 Route::get('words/{word}/edit', [App\Http\Controllers\WordsController::class, 'edit'])->name('words.edit')->where('word', '[0-9]+');
 Route::put('words/{word}', [App\Http\Controllers\WordsController::class, 'update'])->name('words.update')->where('word', '[0-9]+');
 Route::any('words/{word}/destroy', [App\Http\Controllers\WordsController::class, 'destroy'])->name('words.destroy')->where('word', '[0-9]+');




  //Catgories
  Route::get('categories', [App\Http\Controllers\CategoriesController::class, 'index'])->name('categories');
  Route::get('categories/create', [App\Http\Controllers\CategoriesController::class, 'create'])->name('categories.create');
  Route::post('categories', [App\Http\Controllers\CategoriesController::class, 'store'])->name('categories.store');
  Route::get('categories/{category}', [App\Http\Controllers\CategoriesController::class, 'show'])->name('categories.show')->where('category', '[0-9]+');
  Route::get('categories/{category}/edit', [App\Http\Controllers\CategoriesController::class, 'edit'])->name('categories.edit')->where('category', '[0-9]+');
  Route::put('categories/{category}', [App\Http\Controllers\CategoriesController::class, 'update'])->name('categories.update')->where('category', '[0-9]+');
  Route::any('categories/{category}/destroy', [App\Http\Controllers\CategoriesController::class, 'destroy'])->name('categories.destroy')->where('category', '[0-9]+');