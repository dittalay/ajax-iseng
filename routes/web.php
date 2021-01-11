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
    return view('index');
});

Route::resource('/user', 'UserController');
Route::get('table/user', 'UserController@dataTable')->name('table.user');

Route::resource('articles', ArticleController::class);
Route::get('get-articles', [ArticleController::class,'getArticles'])->name('get-articles');
