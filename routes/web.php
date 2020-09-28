<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\BorrowedController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Book;
use App\Http\Models\BroBook;
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
Route::resource('books',BooksController::class);
Route::resource('borrowed',BorrowedController::class);
Route::resource('users',UsersController::class);
//Route::get('books/{bookTitle}','BooksController@search');
Route::get('books/{id}','BooksController@softDelete')
->name('books.delete');
/*Route::get('borrowed/{id}','BorrowedController@softDelete')
->name('borrowed.create');*/

Route::get('books/trash','BooksController@trashedBooks')
->name('books.trash');

/*
Route::get('/books', function () {
    return view('allbooks');
});*/

/*
Route::get('/borrowed', function () {
    return view('borrowed');
});*/
Route::get('users/search','UsersController@search');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
