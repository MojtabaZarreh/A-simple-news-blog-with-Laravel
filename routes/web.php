<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

Route::get('/', [PostController::class, 'home'])->name('home');
Route::get('categories', [CategoryController::class, 'home'])->name('categories');
Route::get('detail/{id}', [PostController::class, 'showDetail'])->name('showdetail');
Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::group(['prefix' => 'panel', 'middleware' => ['auth', 'verified']], function () {

    Route::get('/', function () {
        return view('panel.index');
    })->name('panel');

    //Category
    Route::get('category', [CategoryController::class, 'index'])->name('index');
    Route::get('category/create', [CategoryController::class, 'create']);
    Route::post('category/store', [CategoryController::class, 'store']);
    Route::get('category/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
    Route::post('category/update/{id}', [CategoryController::class, 'update'])->name('update');
    Route::get('category/delete/{id}', [CategoryController::class, 'destroy'])->name('delete');
    //Post
    Route::get('posts', [PostController::class, 'index'])->name('postindex');
    Route::get('posts/create', [PostController::class, 'create']);
    Route::post('posts/store', [PostController::class, 'store']);
    Route::get('posts/changeStaus/{id}', [PostController::class, 'change_status'])->name('changeStaus');
    Route::get('posts/edit/{id}', [PostController::class, 'edit'])->name('postedit');
    Route::post('posts/update/{id}', [PostController::class, 'update'])->name('postupdate');
    Route::get('posts/delete/{id}', [PostController::class, 'destroy'])->name('postdelete');
});

require __DIR__.'/auth.php';
