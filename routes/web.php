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

// 入力フォーム画面(inputForm)のURL割当、起動コントローラ・関数指定
Route::get('/inputForm', 'postTestController@inputForm'); 
//結果画面(resultPage)のURL割当、起動コントローラ・関数指定
Route::post('/formPost', 'postTestController@formPost');
