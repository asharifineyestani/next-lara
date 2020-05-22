<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Header extends Component
{
    public $items;
    public $logo = 'Afracode';
    public $login = 'Login';
    public $className;

    public function __construct($items = null , $className = null)
    {
        $items = [
            [
                "url" => "/",
                "title" => "Home",
                "submenu" => false,
            ],
            [
                "url" => "/about-us",
                "title" => "About us",
                "submenu" => false,
            ],
            [
                "url" => "/service",
                "title" => "Services",
                "submenu" => false,
            ],
            [
                "url" => "/b",
                "title" => "Blog",
                "submenu" => false,
            ],
            [
                "url" => "/contact-us",
                "title" => "Contact us",
                "submenu" => false,
            ],
        ];


        $this->items = (object)$items;
        $this->className = $className;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.header');
    }
}
