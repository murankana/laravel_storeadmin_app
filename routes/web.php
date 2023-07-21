<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;

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
})->name('home');

Route::get('/login',[AuthManager::class,'login'])->name('login');
Route::post('/login',[AuthManager::class,'loginPost'])->name('login.post');
Route::get('/register',[AuthManager::class, 'register'])->name('register');
Route::post('/register',[AuthManager::class,'registerPost'])->name('register.post');
Route::get('/aboutus',[AuthManager::class,'aboutus'])->name('aboutus');
Route::post('/aboutus',[AuthManager::class,'about_upload'])->name('about_upload.post');
Route::get('/about_view',[AuthManager::class,'about_view'])->name('about_view');;
Route::get('/delete/{id}',[AuthManager::class,'delete']);
Route::get('/update_view/{id}',[AuthManager::class,'update_view']);
Route::post('/update/{id}',[AuthManager::class,'update']);
Route::get('/blog',[AuthManager::class,'blog'])->name('blog');
Route::get('/services',[AuthManager::class,'services'])->name('services');
Route::get('/logout',[AuthManager::class,'logout'])->name('logout');


