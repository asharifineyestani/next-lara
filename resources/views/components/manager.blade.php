<section class="section section-testimonial section-testimonial-manager">
    <div class="display-spacing">
        <x-section :items="$heading"  view="heading" />
        <div class="container">
            <Slider1 class="el-slider-1">
                <div class="item">
                    <div class="row">
                        <div class="col-xl-5 col-md-5">
                            <div class="testimonial-image">
                                <div class="circle">
                                    <div class="image overlay-image"
                                         style="background-image: url({{$items['image']}})"></div>
                                </div>
                                <FaQuoteLeft class="icon"/>
                            </div>
                        </div>
                        <div class="col-xl-7 col-md-7">
                            <div class="testimonial-item">
                                <div>
                                    <span class="name">{{$items['name']}}</span>
                                    <span class="role">{{$items['role']}}</span>
                                </div>
                                <p>{{$items['bio']}}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </Slider1>
        </div>
    </div>
</section>
