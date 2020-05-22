<section class="section section-blog section-blog-1 ">
    <div class="display-spacing">
        <div class="container">
            <x-section :items="$heading" view="heading"/>
            <div class="row mb--30">
                @foreach($items as $item)
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="card ">
                            <div class="image overlay-image" style="background-image: url({{$item['image']}}"></div>
                            <div class="content">
                                <h3>{{$item['title']}}</h3>
                                <p>{{ Strip_tags(Str::words($item['content'],35)) }} </p>
                                <a href="{{$item['guid']}}">
                                    <button
                                        class="button button-md button-primary button-shape button-arrow">
                                        <span class="icon-arrow arrow-right"></span>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
