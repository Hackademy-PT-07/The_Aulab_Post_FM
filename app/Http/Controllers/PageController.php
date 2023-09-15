<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {

        $nome = 'Francesco';
    
        $cognome = 'macchittesencula!';

        $auth = [
            'name' => 'Francesco',
            'cognome' => 'Margarito',
            'email' => 'francesco@example.com',
        ];
    
        $auth = [];
    
        return view('home', ['auth' => $auth, 'nome' => $nome, 'cognome' => $cognome]);
    }

    public function contatti() {

        $nome = 'Francesco';
    
        $welcome = 'nottesenculamo manco qui!!!';
    
        return view('contatti', ['nome' => $nome, 'welcome' => $welcome]);
    }

    public function chisono() {

        $france = 'Francé';
    
        $description = 'ma chi te conosce!!!';
    
        return view('chisono', ['france' => $france, 'description' => $description]);
    }
}
