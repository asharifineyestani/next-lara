<section class="section section-features section-features-ml-benefit concave">
    <div class="display-spacing">
        <div class="container">
            <x-section :items="$heading" view="heading"/>
            <div class="owl-carousel carousel-blog-1" data-margin="30"
                 data-nav="true"
                 data-dots="true" data-loop="true" data-center="true" data-breakpoint="600:2,992:3">
                @foreach($items as $item)
                    <div class="item">
                        <div class=" card-feature">
                            <div class="image div-center">
                                <img src={{$item['image']}} alt="alt"/>
                            </div>
                            <div class="heading ">
                                <h3>{{$item['title']}}</h3>
                            </div>
                            <ul>
                                @foreach ($item['ul'] as $li)
                                    <li>{{$li}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


