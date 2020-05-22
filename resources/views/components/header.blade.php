
<header class="app-header app-header-1 {{$className ?? null}}">
    <div class="container">
        <div class="header-wrap">
            <div class="header-left">
                <div class="header-logo">
                    <a href="/">
                        {{$logo}}
                    </a>
                </div>
                <div class="header-menu">
                    <ul>
                        @foreach($items as $item)
                            <li>
                                <a href="{{$item['url']}}">
                                    {{$item['title']}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="header-right">
                <a href="/login">
                    <button class="button button-md button-line-dark button-radius">
                        {{$login}}
                    </button>
                </a>
            </div>
        </div>
    </div>
</header>
