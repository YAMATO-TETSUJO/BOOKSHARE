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

/*
Route::get('/login'){
    return view('\login');
}
*/

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//topページのルーティング
Route::get('/top', 'App\Http\Controllers\BookController@top')->name('book.top');

//Q&Aページのルーティング
Route::get('/ans', 'App\Http\Controllers\BookController@ans')->name('book.ans');

//書籍情報表示
Route::get('/books', 'App\Http\Controllers\BookController@index')->name('book.list');
Route::get('/book/{id}', 'App\Http\Controllers\BookController@show')->name('book.show');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
