<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Heading extends Component
{

    public $items;

    public function __construct($items)
    {
        $this->items = $items;
    }


    public function render()
    {
        return view('components.heading');
    }
}
