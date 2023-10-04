<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    /* public function __construct()
    {

        $title = 'Articoli';
    
        $subtitle = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores culpa praesentium dignissimos facilis eius modi rem officia. Omnis id quo inventore. Possimus, quae cumque fuga ullam voluptates tempora harum totam!';
    
        $this->articles = [
            1 => ['key' => 1, 'title' => 'Articolo #1', 'category' => 'Cronaca', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.'],
            2 => ['key' => 2, 'title' => 'Articolo #2', 'category' => 'Politia', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.'],
            3 => ['key' => 3, 'title' => 'Articolo #3', 'category' => 'Economia', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.'],
            4 => ['key' => 4, 'title' => 'Articolo #4', 'category' => 'Sport', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.'],
            5 => ['key' => 5, 'title' => 'Articolo #5', 'category' => 'Gossip', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.']
        ];
    
        // return view('articoli.articoli', compact('title', 'subtitle', 'articles'));     
    
    } */

    public function articles() {

        $title = 'Articoli';
    
        $subtitle = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores culpa praesentium dignissimos facilis eius modi rem officia. Omnis id quo inventore. Possimus, quae cumque fuga ullam voluptates tempora harum totam!';
    
        $articles = Article::all();
  
        return view('articoli.articoli', compact('title', 'subtitle', 'articles'));      
    
    }

    public function article(Article $article, $id) {

        $article = Article::findOrFail($id);
    
        return view('articoli.articolo', compact('article'));
    
    }
}
