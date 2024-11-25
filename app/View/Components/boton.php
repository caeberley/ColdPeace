<?php

namespace App\View\Components;

use Illuminate\View\Component;

class boton extends Component
{
    public $url;
    public $text;

    public function __construct($url, $text)
    {
        $this->url = $url;
        $this->text = $text;
    }

    public function render()
    {
        return view('components.boton');
    }
}