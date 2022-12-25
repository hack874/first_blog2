<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/',[PostController::class, "index"]); //"/検索したら"どのコントローラーのどの処理なのか
//postcontrollerの"index"
Route::get('/posts/create', [PostController::class,'create']); // 左が発動条件,postcontollerのcreateという関数をいく
Route::get('/posts/{post}', [PostController::class, 'show']);
Route::post('/posts',[PostController::class, 'store']);
Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
Route::put('posts/{post}', [PostController::class, 'update']);
Route::delete('/posts/{post}',[PostController::class, 'delete']);
//Route::get('/hello', function () {
   // echo "こんにちは！";
//});
