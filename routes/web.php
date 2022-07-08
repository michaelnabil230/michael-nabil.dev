<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
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

Route::view('/', 'index')->name('welcome');
Route::view('/contact', 'contact.index')->name('contact');
Route::post('/contact', ContactController::class)->name('contact.store');
Route::view('/contact/thanks', 'contact.thanks')->name('contact.thanks');
Route::view('/cv', 'cv')->name('cv');
Route::resource('/articles', ArticleController::class)->only(['index', 'show']);
Route::fallback(fn () => view('404'));
