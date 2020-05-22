<section class="section section-story section-story-about">
    <div class="display-spacing">
        <div class="container story-container">
            <div class="row mb--45">
                <div class="col-xl-12">
                    <x-section :items="$heading" view="heading"/>
                    <div class="row">
                        @foreach($items as $item)
                            <div class="col-xl-6 col-md-6">
                                <div class="story-item">
                                    <button class="button button-circle button-icon-xl button-primary">
                                     <span class="ti-save-alt"></span>
                                    </button>
                                    <h3>{{$item['title']}}</h3>
                                    <p>{{$item['body']}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
