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

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// ダッシュボード表示
Route::get('/', 'PostsController@index');

Route::get('/dashboard', 'DashboardController@index');

// 登録処理
Route::post('/posts', 'PostsController@store');

// 更新画面
Route::post('/postedit/{post}', 'PostsController@edit');

// 更新処理
Route::post('/post/update', 'PostsController@update');

// 削除処理
Route::delete('/post/{post}', 'PostsController@destroy');



Auth::routes();

Route::get('/home', 'HomeController@index');
