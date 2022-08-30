<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TokenController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('add', function () {
    return 'add!';
});

Route::get('add2', [TestController::class, 'add']);


Route::get('test1', [TestController::class, 'test1']);

Route::get('test2', [TestController::class, 'test2']);

Route::resources([
    'tokens' => TokenController::class,
    'posts' => PostController::class
]);

// Route::post('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/', [PostController::class, 'index'])->name('posts.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

