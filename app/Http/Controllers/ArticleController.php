<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;

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

    public function create()
    {
        return view('account.articles.create');
    }

    public function store(StoreArticleRequest $request)
    {

        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'title' => 'required|max:150',
            'category' => 'required|max:20',
            'description' => 'required|max:150',
            'body' => 'required|max:5000',
        ], [
            'title.required' => 'Il campo titolo è obbligatorio.',
            'title.max' => 'Il campo titolo può contenere massimo 150 caratteri.',
        ]);

        if($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();

        } else {
            $article = new Article();

            $article->title = $request->title;
            $article->category = $request->category;
            $article->description = $request->description;
            $article->body = $request->body;

            $article->save();

            return redirect()->back()->with(['success' => 'Articolo creato correttamente.']);
        }
        
    }
}
