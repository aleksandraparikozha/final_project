<?php

use Illuminate\Support\Facades\Auth;
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

//Route::get('/', function () {
//    return view('index');
//});

Route::get('/', [\App\Http\Controllers\MainController::class, 'index'])
    ->name('index');

Route::get('/categories', [\App\Http\Controllers\MainController::class, 'categories'])
    ->name('categories');

Route::get('/products/{category}', [\App\Http\Controllers\MainController::class, 'category'])
    ->name('category');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get("/email/new/create", [\App\http\Controllers\MailController::class, 'create'] )->name('mails.create');
Route::post('/email/new/send', [\App\http\Controllers\MailController::class, 'send'])->name('mails.send');


Route::group(['middleware' => ['role:admin']], function () {
    Route::get("/products/{product}/edit", [\App\http\Controllers\MainController::class, 'edit'] )->name('products.edit');
    Route::put('/products/{product}/update', [\App\http\Controllers\MainController::class, 'update'])->name('products.update');
    Route::delete('/products/{product}/delete', [\App\http\Controllers\MainController::class, 'delete'])->name('products.delete');
    Route::get("/create/new/product", [\App\http\Controllers\MainController::class, 'create'] )->name('products.create');
    Route::post('/products/save_product/new', [\App\http\Controllers\MainController::class, 'save'])->name('products.save');});

