<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {

        $nome = 'Francesco';
    
        $cognome = 'macchittesencula!';
    
        return view('home', ['nome' => $nome, 'cognome' => $cognome]);
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
