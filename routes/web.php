<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoriesController;
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

// Authentication Routes
Auth::routes();

// Home Route
Route::get('/', [BookController::class, 'index'])->name('home');

// Book Routes
Route::apiResource('books', BookController::class);
Route::get('/createBook', [BookController::class, 'create'])->name('createBook');
Route::post('/storeBook', [BookController::class, 'storeBook'])->name('storeBook');
Route::get('/editBook/{id}', [BookController::class, 'edit'])->name('editBook');
Route::post('/updateBook/{id}', [BookController::class, 'update'])->name('updateBook');
Route::get('/deleteBook/{id}', [BookController::class, 'destroy'])->name('deleteBook');
Route::get('/searchBooks', [BookController::class, 'searchBooks'])->name('searchBooks');

// Category Routes
Route::get('/createCategories', [CategoriesController::class, 'create'])->name('createCategories');
Route::post('/storeCategories', [CategoriesController::class, 'storeCategories'])->name('storeCategories');
Route::get('/deleteCategory/{id}', [CategoriesController::class, 'destroy'])->name('deleteCategory');
