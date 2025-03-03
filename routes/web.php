<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', [Controllers\PageController::class, 'about']);

Route::get('articles', [Controllers\ArticleController::class, 'index'])
    ->name('articles.index');
