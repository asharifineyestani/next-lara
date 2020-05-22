<?php

namespace App\View\Components;

use Corcel\Model\Post;
use Illuminate\View\Component;

class Footer extends Component
{


    public $articles = [
        [
            "title" => "Introducing the new Next theme",
            "body" => "Brolly off his nut A bit of how�s your father chancer in my flat chinwag bog skive.",
            "image" => "/assets/images/blog/1-1.jpg",
            "url" => "/posts/1",
            "created_at" => "",
        ],
        [
            "title" => "Buying the most of beautiful theme",
            "body" => "Brolly off his nut A bit of how�s your father chancer in my flat chinwag bog skive.",
            "image" => "/assets/images/blog/1-2.jpg",
            "url" => "/posts/1",
            "created_at" => "",
        ],
        [
            "title" => "Introducing the new Next theme",
            "body" => "Brolly off his nut A bit of how�s your father chancer in my flat chinwag bog skive.",
            "image" => "/assets/images/blog/1-1.jpg",
            "url" => "/posts/1",
            "created_at" => "",
        ],

    ];


    public $links = [
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
            "url" => "/contact",
            "title" => "Contact us",
            "submenu" => false,
        ],
        [
            "url" => "/login",
            "title" => "Support",
            "submenu" => false,
        ],

    ];


    public $links2 = [
        [
            "title" => "Design",
            "url" => "/design",
        ],
        [
            "title" => "Mobile development",
            "url" => "/web-development",
        ],
        [
            "title" => "Web development",
            "url" => "/mobile-development",
        ],
        [
            "title" => "AI & ML",
            "url" => "/machine-learning",
        ]


    ];


    public function __construct(array $articles = [], array $links = [], array $links2 = [])
    {
        if ($articles)
            $this->articles = $articles;

        if ($links)
            $this->links = $links;

        if ($links2)
            $this->links2 = $links2;


        $this->articles = Post::status('publish')
            ->where('post_type', 'post')
            ->limit(3)
            ->get();
    }


    public function render()
    {
        return view('components.footer');
    }
}
