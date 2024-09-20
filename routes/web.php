<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController; //外部にあるPostControllerクラスを使えるようにします。

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

Route::get('/', [PostController::class, 'index']);


Route::get('/posts' , [PostController::class, 'index']);
// PostsにGETリクエストが来たらPostController class のindexを実行


Route::get('/posts/create', [PostController::class, 'create']);
// /posts/{post}よりも上に書くこと！！
Route::get('/posts/{post}' , [PostController::class ,'show']);
// '/posts/{対象データのID}'にGetリクエストが来たら、PostControllerのshowメソッドを実行する

Route::post('/posts', [PostController::class, 'store']);