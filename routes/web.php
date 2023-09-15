<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/articoli', [ArticleController::class, 'articles'])->name('articles');

/* /articolo/{5} */
Route::get('/articolo/{id}', [ArticleController::class, 'article'])->name('article');

/* Route::get('/contatti', [PageController::class, 'contatti'])->name
('contatti'); */

Route::get('/contatti', [ContactController::class, 'form'])->name('contatti');

/* ATTENZIONE! La rotta del form non è di tipo get, ma di tipo post */
Route::post('/contatti/save', [ContactController::class, 'save'])->name('contatti.save');

Route::get('/chisono', [PageController::class, 'chisono'])->name('chisono');