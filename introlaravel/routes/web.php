<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BooksController;

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

Route::get('/', [HomeController::class, 'home'] );
Route::get('/register', [AuthController::class, 'register'] );
Route::post('/welcome', [AuthController::class, 'welcome']);

Route::get('/', function(){
    return view('home');
});
Route::get('/table', function(){
    return view('layouts.table');
});
Route::get('/data-tables', function(){
    return view('layouts.data-tables');
});
//CRUD CATEGORY
//creat data
Route::get('/category/create', [CategoryController::class,'create']);
Route::post('/category', [CategoryController::class,'store']);
//read data
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/{id}', [CategoryController::class, 'show']);
//update data
Route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/category/{id}', [CategoryController::class, 'update'])->name('category.update');
//delete data
Route::delete('/category/{category_id}', [CategoryController::class, 'destroy'])->name('category.destroy');

//CRUD BOOKS
Route::resource('/books', BooksController::class);

