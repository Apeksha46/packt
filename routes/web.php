<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Web\BookStoreController;

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

Route::group(['prefix' => 'admin'], function () {

    Route::get('/', [AuthController::class, 'index']);
    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('showLogin');


    Route::group(['middleware' => ['auth:admin', 'prevent-back-history']], function() {
        Route::resource('books', BookController::class);
        Route::get('/book-delete', [BookController::class,'bookDestroy']);
        Route::get('/books-get', [BookController::class,'booksGet']);
        Route::post('/books-store',[BookController::class, 'bookStore']);
        Route::post('/books-update',[BookController::class, 'bookUpdate']);
        Route::get('/logout',[AuthController::class, 'logout'])->name('logout');

    });

});

Route::get('/', [BookStoreController::class, 'index'])->name('home');
Route::get('/get-all-book', [BookStoreController::class, 'getAllBooks']);
Route::get('/show-content', [BookStoreController::class, 'showContent']);
Route::get('/get-book-detail/{id}', [BookStoreController::class, 'getBookDetail']);
