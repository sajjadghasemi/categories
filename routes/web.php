<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('categories',CategoryController::class);

Route::get('api/categories',[CategoryController::class,'apiIndex']);
Route::post('api/categories/value',[CategoryController::class,'selectedCat']);

Route::get('ajax-crud-datatable', [CategoryController::class, 'ajaxIndex']);
Route::post('/store-category', [CategoryController::class, 'ajaxStore'])->name('storeCat');
Route::post('/edit-category/{id}', [CategoryController::class, 'ajaxEdit']);
Route::post('/update-category', [CategoryController::class, 'ajaxUpdate']);
Route::post('/delete-category', [CategoryController::class, 'ajaxDestroy']);
