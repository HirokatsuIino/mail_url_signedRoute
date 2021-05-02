<?php

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

// 入力フォーム
Route::get('/hello/create', 'HelloController@create')->name('hello.create');
// メール送信
Route::post('/hello', 'HelloController@send')->name('hello.send');
// 承諾リンクをクリック
Route::get('/hello/hi', 'HelloController@hi')->name('hello.hi');
// 拒否リンクをクリック
Route::get('/hello/bye', 'HelloController@bye')->name('hello.bye');
// 期限切れ or 無効URL
Route::get('/hello/invalid', 'HelloController@invalid')->name('hello.invalid');
