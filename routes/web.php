<?php

use Illuminate\Support\Facades\Route;
use App\Models\Orders;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\PublishersController;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\PagesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('/home');
});

Auth::routes();
Route::post('/crbooks',[App\Http\Controllers\BookCRUDController::class, 'store']);
Route::get('/home/books',[App\Http\Controllers\BookCRUDController::class, 'index'])->name('crudbook');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/books/edit/{Код_книги}', [App\Http\Controllers\BookCRUDController::class, 'editInline']);
Route::get('/home/createBook',[App\Http\Controllers\BookCRUDController::class, 'create']);
Route::delete('/deleteBook/{Код_книги}', [App\Http\Controllers\BookCRUDController::class, 'destroy']);
Route::get('/viewBooks',[App\Http\Controllers\BookCRUDController::class, 'viewBooks']);
Route::get('/adminLTE',[App\Http\Controllers\AdminLTEController::class, 'index']);

Route::post('/cartAdd/{Код_книги}',[App\Http\Controllers\CartController::class, 'addToCart'])->name('cart.add');
Route::post('/cartRemove/{Код_книги}',[App\Http\Controllers\CartController::class, 'removeFromCart'])->name('cart.remove');
Route::get('/cart',[App\Http\Controllers\HomeController::class, 'cartView']);
Route::get('/order',[App\Http\Controllers\CartController::class, 'addOrder']);
Route::get('/ords',[App\Http\Controllers\CartController::class, 'showOrders']);

Route::resource('suppliers', SuppliersController::class);
Route::resource('publishers', PublishersController::class);

Route::resource('authors', AuthorsController::class);

Route::resource('pages', PagesController::class);

Route::resource('suppliers', SuppliersController::class);









