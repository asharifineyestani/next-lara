<section class="section section-features section-features-mobile ">
    <div class="display-spacing">
        <div class="container">
            <x-section :items="$heading"  view="heading" />
            <div class="row mb--30">
                @foreach($items as $item)
                    <div class="col-xl-4 col-md-4">
                        <div class=" card-feature">
                            <div class="row" >
                                <div class="col-4">
                                    <div class="image div-center">
                                        <img src={{$item['image']}} alt="alt"/>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="heading ">
                                        <h3>{{$item['title']}}</h3>
                                    </div>
                                </div>
                            </div>
                            <p>{{$item['description']}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
