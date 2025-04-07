<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;


Route::get('/', [ArticleController::class, 'index'])->name('article.index');

Route::get('/article/new', [ArticleController::class, 'create'])->name('article.create');

Route::post('/article/new', [ArticleController::class, 'store'])->name('article.store');

Route::get('/article/{article}', [ArticleController::class, 'show'])->name('article.show');

