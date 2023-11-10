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

/* Route::get('seeder', function () {

    App\Models\Article::create([
        'title' => 'Articolo #1',
        'category' => 'Cronaca',
        'description' => '1 Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        'body' => '...',
    ]);

    App\Models\Article::create([
        'title' => 'Articolo #2',
        'category' => 'Politica',
        'description' => '2 Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        'body' => '...',
    ]);

    App\Models\Article::create([
        'title' => 'Articolo #3',
        'category' => 'Economia',
        'description' => '3 Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        'body' => '...',
    ]);

    App\Models\Article::create([
        'title' => 'Articolo #4',
        'category' => 'Sport',
        'description' => '4 Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        'body' => '...',
    ]);

    App\Models\Article::create([
        'title' => 'Articolo #5',
        'category' => 'Gossip',
        'description' => '5 Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        'body' => '...',
    ]);

}); */



Route::middleware('auth')->group(function() {

    Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
    Route::post('/articles/store', [ArticleController::class, 'store'])->name('articles.store');

    Route::get('/account', [App\Http\Controllers\AccountController::class, 'index'])->name('account.index');

    Route::resource('categories', App\Http\Controllers\CategoryController::class);

});
