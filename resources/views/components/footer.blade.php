<footer class="app-footer app-footer-1 ">
    <div class="footer-widgets">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-3 col-sm-12">
                    <div class="widget widget-info">
                        <h2>Afracode</h2>
                        <div class="widget-body">
                            <p>
                                <a href="tel:+17573862591">+1 (757) 386-2591</a>
                                <a href="mailto: info@afracode.com">info@afracode.com</a>
                                By choosing Afracode as a technology partner, you can take on more business and
                                growth
                                challenges and get unlimited support of our team.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-xl-2 col-md-2 col-sm-6">
                    <div class="widget">
                        <h3 class="widget-title">Services</h3>
                        <div class="widget-body">
                            <ul class="links">
                                @foreach($links2 as $link2)
                                    <li>
                                        <a href="{{$link2['url']}}">{{$link2['title']}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-xl-2 col-md-2 col-sm-6">
                    <div class="widget">
                        <h3 class="widget-title">Pages</h3>
                        <div class="widget-body">
                            <ul class="links">
                                @foreach($links as $link)
                                    <li>
                                        <a href="{{$link['url']}}">{{$link['title']}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 col-sm-12">
                    <div class="widget">
                        <h3 class="widget-title">Blog</h3>
                        <div class="widget-body">
                            <div class="articles">
                                @foreach($articles as $article)
                                    <div>
                                        <a href="{{$article['url']}}">
                                            <div class="image overlay-image"
                                                 style="background-image: url({{$article['image']}})"></div>
                                            <div class="content">
                                                <p>
                                                    {{$article['title']}}
                                                </p>
                                                <span>{{$article['created_at']}}</span>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <span class="line"></span>
            <div class="copyright">
                <p>© 2020 Afracode, Inc. All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>
