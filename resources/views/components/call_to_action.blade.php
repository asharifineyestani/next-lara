<section class="section section-action section-action-contact   ">
    <div class="display-spacing">
        <div class="container">
            <x-section :items="$heading"  view="heading" />

            <div class="row">
                <div class="col-xl-4 col-md-4 col-sm-6"></div>
                <div class="col-xl-4 col-md-4 col-sm-6">
                    <div class="div-center">
                        <a href={{$items['href']}}>
                            <button class="button button-xl button-block button-primary  button-shape">
                                {{$items['text']}}
                            </button>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
