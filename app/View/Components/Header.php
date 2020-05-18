<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Header extends Component
{
    public $items;
    public $logo = 'افرانکست';
    public $login = 'ورود';

    public function __construct($items = null)
    {
        $items = [
            [
                "url" => "/",
                "title" => "برگ نخست",
                "submenu" => false,
            ],
            [
                "url" => "/about-us",
                "title" => "درباره ما",
                "submenu" => false,
            ],
            [
                "url" => "/service",
                "title" => "خدمات",
                "submenu" => false,
            ],
            [
                "url" => "/b",
                "title" => "وبلاگ",
                "submenu" => false,
            ],
            [
                "url" => "/contact-us",
                "title" => "ارتباط با ما",
                "submenu" => false,
            ],
        ];


        $this->items = (object)$items;
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
