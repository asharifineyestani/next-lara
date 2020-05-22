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
                    <button class="button button-md button-line-dark button-radius button-login">
                        {{$login}}
                    </button>
                </a>
                <button class="button-menu button-open-sidenav">
                <span></span>
                </button>
            </div>
        </div>
    </div>
</header>
<div class="app-sidenav">
    <div class="sidenav-menu">
        <div class="logo">
            {{--            <img src="assets/images/logo/logo-dark.png" alt="Relevant textual alternative to the sidenav logo image">--}}
            <span>Afracode</span>
        </div>
        <button class="button button-circle button-close-sidenav"></button>
        <ul class="menu">
            @foreach($items as $item)
                <li>
                    <a href="{{$item['url']}}">
                        {{$item['title']}}
                        <i class="fa fa-chevron-right"></i>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
