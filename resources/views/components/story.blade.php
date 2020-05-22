<div>

    {{--    {{dd($items)}}--}}
    <section class="section section-story section-story-design">
        <div class="display-spacing">
            <div class="container story-container">
                <x-section :items="$heading" view="heading"/>

                @isset($image)
                    <div class="process-holder">
                        <img src="assets/images/story/design-process.png" alt=""/>
                    </div>
                @endisset

                @foreach($items as $story)
                    <div class="container story-container">
                        <div class="row mb--45">
                            <div class="col-xl-6 col-md-6 column column-1">
                                <div class="heading-holder">
                                    <div class="display-center">
                                        <x-section :items="$story['heading']" view="heading"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6 column column-2">
                                <div class="story-image">
                                    <img src={{$story['image']}} alt="alt"/>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>



