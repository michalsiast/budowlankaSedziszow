<section id="home" class="atf-slick-slider-1 slick-arrow-1">
    @foreach($rotator->gallery->items as $item)
        <div class="atf-single-slider atf_attach_bg atf_attach_bg_1" data-background="{{renderImage($item->url, 1920, 700, `fit`)}}">
            <div class="atf-home-overlay">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10">
                            <div class="atf-slider-content text-center">
                                <span class="sub-title mb-10">USŁUGI REMONTOWO-BUDOWLANE</span>
                                <h2 class="title mb-25">{{$item->name}}</h2>
                                {!! $item->text !!}
                                <p class="description mb-35">We build with precision, passion, and purpose. From residential projects to large <br>scale industrial our team delivers high-quality construction.</p>
                                <!-- Main-btn -->
                                <div class="atf-main-btn">
                                    <a class="atf-themes-btn bg-white" href="{{ route('gallery.show') }}">Zobacz galerię
                                        <span class="icon ml-10">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                <path d="M12 0.514515V9.43267C12 9.56914 11.9459 9.7 11.8494 9.79647C11.7528 9.89294 11.6219 9.94721 11.4856 9.94721C11.3491 9.94721 11.2183 9.89294 11.1217 9.79647C11.0252 9.7 10.971 9.56914 10.971 9.43267V1.75791L0.869497 11.8508C0.77398 11.9463 0.644425 12 0.509332 12C0.374252 12 0.244696 11.9463 0.149179 11.8508C0.0536616 11.7554 0 11.6258 0 11.4907C0 11.3556 0.0536616 11.2261 0.149179 11.1306L10.2421 1.02903H2.56737C2.43092 1.02903 2.30005 0.974819 2.20356 0.878326C2.10707 0.781834 2.05286 0.650973 2.05286 0.514515C2.05286 0.378056 2.10707 0.247196 2.20356 0.150703C2.30005 0.0542101 2.43092 1.21958e-05 2.56737 0H11.4856C11.6219 1.21958e-05 11.7528 0.0542101 11.8494 0.150703C11.9459 0.247196 12 0.378056 12 0.514515Z" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div><!--- END COL -->
                    </div><!--- END ROW -->
                </div><!--- END CONTAINER -->
            </div><!--- END Overlay -->
        </div><!--- END slide -->
    @endforeach
</section>

@push('scripts.body.bottom')
    <script>
        $('.atf-slick-slider-1').slick({
            arrows: {{$rotator->arrows ? 'true' : 'false'}},
            autoplay: true,
            autoplaySpeed: {{$rotator->time ?? 3000}},
            dots: false,
            infinite: true,
            speed: {{$rotator->speed ?? 500}},
            loop: true,
            fade: true,
            cssEase: 'linear',
            slidesToShow: 1,
            adaptiveHeight: true,
            slidesToScroll: 1,
            prevArrow: '<a class="slick-prev"><i class="fa-light fa-arrow-left-long" alt="Arrow Icon"></i></a>',
            nextArrow: '<a class="slick-next"><i class="fa-light fa-arrow-right-long" alt="Arrow Icon"></i></a>',
        });
    </script>
@endpush
