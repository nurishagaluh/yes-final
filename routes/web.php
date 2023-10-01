<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PriceListController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TaskController;
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

// Route::get('/', function (){
//     return view('index');
// });
Route::middleware('auth')->prefix('dashboard')->group(function(){
    Route::get('/', function () {
        return view('index');
})->name('home');

Route::get('/task', [TaskController::class, 'index'])->name('task.index');
Route::get('/task/create', [TaskController::class, 'create'])->name('task.create');
Route::post('/task/store', [TaskController::class, 'store'])->name('task.store');
Route::get('/task/{id}/edit', [TaskController::class, 'edit'])->name('task.edit');
Route::post('/task/{id}/update', [TaskController::class, 'update'])->name('task.update');
Route::get('/task/{id}/show', [TaskController::class, 'show'])->name('task.show');
Route::get('/task/{id}/delete', [TaskController::class, 'delete'])->name('task.delete');

Route::get('/posts',[PostController::class, 'index'])->name('post.index');
Route::get('/posts/create',[PostController::class, 'create'])->name('post.create');
Route::post('/posts/store',[PostController::class, 'store'])->name('post.store');
Route::get('/posts/{id}/edit',[PostController::class, 'edit'])->name('post.edit');
Route::post('/posts/{id}/update',[PostController::class, 'update'])->name('post.update');
Route::get('/posts/{id}/destroy',[PostController::class, 'destroy'])->name('post.delete');

Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/category{id}/update', [CategoryController::class, 'update'])->name('category.update');
Route::get('/category{id}/delete', [CategoryController::class, 'destroy'])->name('category.delete');


});

Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'login'])->name('login.auth');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/contact',[ContactController::class,'index'])->name('contact.index');
Route::get('/contact/store',[ContactController::class,'store'])->name('contact.store');
Route::get('/contact/show',[ContactController::class,'show'])->name('contact.show');
Route::get('/', [BlogController::class, 'index'])->name('blog.index');
Route::get('/Location', [LocationController::class, 'index'])->name('location.index');
Route::get('/PriceList',[PriceListController::class, 'index'])->name('pricelist.index');
Route::get('/{slug}',[BlogController::class,'show'])->name('blog.show');


