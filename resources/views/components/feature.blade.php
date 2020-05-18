<section class="section section-features section-features-1">
    <div class="display-spacing">
        <div class="container">
            <x-section :items="$heading"  view="heading" />
            <div class="row mb--30">
                @foreach($items as $item)
                    <div class="col-xl-4 col-md-4 col-sm-6">
                        <div class="feature-item">
                            <div class="image">
                                <img src={{$item['image']}} alt="alt"/>
                            </div>
                            <h3>{{$item['title']}}</h3>
                            <p></p>
                            <a href="{{$item['url']}}">
                                <button class="button button-md button-primary button-shape button-arrow">
                                    <span class="icon-arrow arrow-right"></span>
                                </button>

                            </a>

                        </div>
                    </div>
            @endforeach
        </div>
    </div>
    </div>
</section>
