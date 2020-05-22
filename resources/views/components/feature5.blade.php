<section class="section section-features section-features-1">
    <div class="display-spacing">
        <div class="container">
            <x-section :items="$heading" view="heading"/>
            <div class="row mb--30">
                @foreach($items as $item)
                    <div class="col-6 col-xl-2 col-md-2 col-sm-4">
                        <div class="feature-item">
                            <div class="image">
                                <img src={{$item['image']}} alt="alt"/>
                            </div>
                            <h3>{{$item['title']}}</h3>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
