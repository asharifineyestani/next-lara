<section class="section section-story section-story-about section-we-offer">
    <div class="display-spacing">
        <div class="container story-container">
            <x-section :items="$heading" view="heading"/>

            @foreach($items as $story)
                <div class="row mb--45">
                    <div class="col-xl-7 col-md-7">
                        <div class="row">
                            <div class="">
                                @foreach($story['items'] as $item)
                                    <div class="story-item">
                                        <button class="button button-circle button-icon-xl button-primary">
                                            <FaGem/>
                                        </button>
                                        <h3>{{$item['title']}}</h3>
                                        <p>{{$item['body']}}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-5">
                        <div class="story-image">
                            <img src="{{$story['image']}}" alt="alt"/>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
</section>
