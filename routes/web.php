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

Route::get('/', [App\Http\Controllers\BlogController::class, 'index'])->name('home');
Route::get('/blog/{blog}', [App\Http\Controllers\BlogController::class, 'show'])->name('show');
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['role:admin'])->prefix('admin_panel')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');
    Route::resource('category', \App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('blog', \App\Http\Controllers\Admin\BlogController::class);
});
