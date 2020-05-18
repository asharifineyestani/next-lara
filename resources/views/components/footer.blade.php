<footer class="section section-footer section-footer-1 ">
    <div class="display-spacing">
        <div class="container">
            <div class="footer-container">
                <div class="row">
                    <div class="col-xl-3 col-md-3 col-sm-12">
                        <h2>افرانکست</h2>
                        <div class="info">
                            <p>
                                <a href="tel:+11112222707">021-33666664</a>
                                <a href="mailto: info@afracode.com">info@afranext.com</a>
                                شرکت آینده باور افرا با نام تجاری افرانکست و به شماره ثبت 9973 شکل گرفت تا در ارایه خدمات ماشین لرنینگ و هوش مصنوعی پیشگام باشد.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-2 col-sm-6">
                        <h3>Services</h3>
                        <ul class="links">
                            @foreach($links as $link)
                                <li>
                                    <h4><a href="{{$link['url']}}">{{$link['title']}}</a></h4>
                                </li>
                            @endforeach
                        </ul>





                    </div>
                    <div class="col-xl-2 col-md-2 col-sm-6">
                        <h3>Pages</h3>
                        <ul class="links">
                            @foreach($links2 as $link2)
                                <li>
                                    <h4><a href="{{$link['url']}}">{{$link['title']}}</a></h4>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-xl-5 col-md-5 col-sm-12">
                        <h3>Articles</h3>
                        <ul class="articles">
                            @foreach($articles as $article)
                                <a href="{{$article['url']}}">
                                    <li>
                                        <div>
                                            <img src={{$article['image']}} />
                                        </div>
                                        <div>
                                            <h4>
                                                {{$article['title']}}
                                            </h4>
                                            <p>{{$article['created_at']}}</p>
                                        </div>
                                    </li>
                                </a>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="copyright">
                <p>کلیه حقوق این سایت به افرانکست تعلق دارد</p>
            </div>

        </div>
    </div>
</footer>
