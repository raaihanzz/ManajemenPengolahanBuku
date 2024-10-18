<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoriesController;
<<<<<<< HEAD
<<<<<<< HEAD
use App\Models\Categories;
=======
>>>>>>> 20f0b5a (DotIntership DONE)
=======
use App\Models\Categories;
>>>>>>> 6467420 (Fix - Tambahan fitur list view untuk Kategori)
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::apiResource('books', BookController::class);
Route::get('/', [BookController::class, 'index'])->name('home');
Route::get('/createBook', [BookController::class, 'create'])->name('createBook');
Route::post('/storeBook', [BookController::class, 'storeBook'])->name('storeBook');
Route::get('/editBook/{id}', [BookController::class, 'edit'])->name('editBook');
Route::post('/updateBook/{id}', [BookController::class, 'update'])->name('updateBook');
Route::get('/deleteBook/{id}', [BookController::class, 'destroy'])->name('deleteBook');
Route::get('/searchBooks', [BookController::class, 'searchBooks'])->name('searchBooks');

Route::get('/createCategories', [CategoriesController::class, 'create'])->name('createCategories');
Route::post('/storeCategories', [CategoriesController::class, 'storeCategories'])->name('storeCategories');
<<<<<<< HEAD
<<<<<<< HEAD
Route::get('/deleteCategory/{id}', [CategoriesController::class, 'destroy'])->name('deleteCategory');
=======
>>>>>>> 20f0b5a (DotIntership DONE)
=======
Route::get('/deleteCategory/{id}', [CategoriesController::class, 'destroy'])->name('deleteCategory');
>>>>>>> 6467420 (Fix - Tambahan fitur list view untuk Kategori)

// Route::get('/', [BookController::class, 'index']);
