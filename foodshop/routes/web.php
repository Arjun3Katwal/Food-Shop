<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\newsController;
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

Route::get('/home',[FrontendController::class,'home'])->name('home');
Route::get('/about',[FrontendController::class,'about'])->name('about');
Route::get('/contact',[FrontendController::class,'contact'])->name('contact');
Route::get('/news',[FrontendController::class,'news'])->name('news');

//BackendController
Route::get('/Dashboard',[BackendController::class,'home'])->name('Dashboard');
Route::get('/News',[BackendController::class,'News'])->name('News');
Route::get('/viewContact',[BackendController::class,'viewContact'])->name('viewContact');

//NewsController
Route::post('/storeNews',[newsController::class,'storeNews'])->name('storeNews');
Route::get('/viewNews',[newsController::class,'viewNews'])->name('viewNews');
Route::post('updateNews/{id}',[newsController::class,'update'])->name('updateNews');
Route::get('/editNews/{id}',[newsController::class,'edit'])->name('editNews');
Route::get('delete/{id}',[newsController::class,'delete'])->name('delete');
Route::get('bcontact',[newsController::class,'contact'])->name('bcontact');
Route::get('storecontact',[newsController::class,'storecontact'])->name('storecontact');
