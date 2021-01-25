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

//認証
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//topページのルーティング
Route::get('/top', 'App\Http\Controllers\BookController@top')->name('book.top');

//Q&Aページのルーティング
Route::get('/ans', 'App\Http\Controllers\BookController@ans')->name('book.ans');

//bookのルーティング
Route::get('/books', 'App\Http\Controllers\BookController@index')->name('book.list');
Route::get('/book/new', 'App\Http\Controllers\BookController@create')->name('book.new');
Route::post('book', 'App\Http\Controllers\BookController@store')->name('book.store');

Route::get('/book/edit/{id}', 'App\Http\Controllers\BookController@edit')->name('book.edit');
Route::post('/book/update/{id}', 'App\Http\Controllers\BookController@update')->name('book.update');

Route::get('/book/{id}', 'App\Http\Controllers\BookController@show')->name('book.show');
Route::delete('/book/{id}', 'App\Http\Controllers\BookController@destroy')->name('book.delete');

//ログイン後の処理
/* 元のコード
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
*/
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');