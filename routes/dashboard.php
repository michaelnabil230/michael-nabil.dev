<?php

use App\Http\Controllers\Dashboard\ArticleController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->name('dashboard.')->group(function () {
    Route::view('/', 'dashboard')->name('index');
    Route::resource('articles', ArticleController::class);
});

require __DIR__.'/auth.php';
