<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/articoli', [ArticleController::class, 'articles'])->name('articles');

/* /articolo/{5} */
Route::get('/articolo/{id}', [ArticleController::class, 'article'])->name('article');

Route::get('/contatti', [PageController::class, 'contatti'])->name('contatti');

Route::get('/chisono', [PageController::class, 'chisono'])->name('chisono');