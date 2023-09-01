<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    public $nav;

    public function __construct()
    {
        $this->nav = [
            route('home') => 'Home',
            route('articles') => 'Articoli',
            route('contatti') => 'Contatti',
            route('chisono') => 'Chi sono'
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar');
    }
}
