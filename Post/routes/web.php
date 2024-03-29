<?php

use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('post', [PostController::class, 'index'])->name("post.index");
Route::get('post/show/{id}', [PostController::class, 'show'])->name("post.show");
Route::get('notification', [NotificationController::class, 'index'])->name("notification.index");
