<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Section extends Component
{
    public $items;
    public $view;
    public $heading;


    public function __construct($items = null, $view, $heading = null)
    {
        $this->items = $items;
        $this->view = $view;
        $this->heading = $heading;
    }


    public function render()
    {
        return view('components.' . $this->view);
    }
}
