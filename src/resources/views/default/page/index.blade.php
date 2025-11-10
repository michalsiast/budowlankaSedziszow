@extends('default.layout')
@section('content')
{{--{!! getPhoneLink('phone', 'phone', '<b>icon</b> ') !!}--}}
{{--{!! getEmailLink('email', 'email',  '<b>icon</b> ') !!}--}}
{{--    <span style="display: block">{!! getAddressString() !!}</span>--}}
{{--    <span style="display: block">{!! getFooterCreator() !!}</span>--}}

@include('default.rotator.base', ['id_rotator' => $fields->rotator, 'type' => 'main'])

<section id="about" class="atf-about-area atf-section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 position-relative text-center text-lg-start">
                <div class="experience-counter rounded p-3 shadow d-flex align-item-center gap-3">
                    <div class="icon-circle">
                        <i class="fa-light fa-building fa-2x"></i> 
                    </div>
                    <div class="experience-counter_ceontent text-start">
                        <h4 class="mb-0">
                            @php($years = now()->year - 2005)
                            <span class="counter-number number">{{ $years }}</span>+
                        </h4>
                        <span class="mb-0 year">Lat doświadczenia</span>
                    </div>
                </div>

                <div class="about-image-gallery d-flex flex-column align-items-start">
                    <div class="worker-image rounded-3 shadow-lg overflow-hidden p-relative spread zoom-out">
                        <img src="{{ asset('images/about_us_2.jpg') }}" style="width: 100%; height: 400px; object-fit: cover" alt="" class="img-fluid">
                    </div>
                    <div class="secondary-image rounded-3 shadow-lg overflow-hidden p-relative spread zoom-out">
                        <img src="{{ asset('images/about_us_1.jpg') }}" style="width: 100%; height: 400px; object-fit: cover" alt="" class="img-fluid">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 ps-lg-5 mt-lg-40">
                <div class="atf-section-title mb-40">
                    @if(!empty($fields->subtitle_about_us))
                        <span class="sub-title wow fadeInUp">{{ $fields->subtitle_about_us }}</span>
                    @endif

                    @if(!empty($fields->title_about_us))
                        <h2 class="title split-content end mb-30 title_highlight">{{ $fields->title_about_us }}</h2>
                    @endif

                    @if(!empty($fields->description_about_us))
                        {!! str_replace('<p>', '<p class="describtion">', $fields->description_about_us) !!}
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<section id="service" class="atf-service-area pb-90 p-relative">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-xxl-7 col-xl-7 col-lg-8">
                <div class="atf-section-title mb-50">
                    @if(!empty($fields->subtitle_offer))
                        <span class="sub-title wow fadeInUp">{{ $fields->subtitle_offer }}</span>
                    @endif

                    @if(!empty($fields->title_offer))
                        <h2 class="title split-content end mb-30 title_highlight">{{ $fields->title_offer }}</h2>
                    @endif
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-5">
                <div class="service-thumb position-relative rounded-5 overflow-hidden shadow-lg p-relative spread start">
                    <img src="{{asset('images/offer.jpg')}}" style="height: 567px;object-fit:cover" class="img-fluid w-100" alt="">
                </div>
            </div>
            <div class="col-lg-7 mt-lg-40">
                <div class="atf-service-item d-flex align-items-center wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".5s">
                    <div class="atf-service-box d-flex align-items-center">
                        <div class="atf-service-box-content">
                            @if(!empty($fields->offer_item_title))
                                <h3 class="atf-service-title">
                                    {{ $fields->offer_item_title }}
                                </h3>
                            @endif

                            @if(!empty($fields->offer_item_description))
                                <p>{!! $fields->offer_item_description !!}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="how-it-works-section p-relative atf-section-padding fix">
    <div class="abstract-waves-bg"></div> 
    <div class="container position-relative z-1">
        <div class="row justify-content-center text-center">
            <div class="col-xxl-7 col-xl-7 col-lg-8">
                <div class="atf-section-title mb-50">
                    @if(!empty($fields->subtitle_why_us))
                        <span class="sub-title wow fadeInUp">{{ $fields->subtitle_why_us }}</span>
                    @endif

                    @if(!empty($fields->title_why_us))
                        <h2 class="title split-content end title_highlight">{{ $fields->title_why_us }}</h2>
                    @endif
                </div>
            </div><!--- END COL -->
        </div>

        @include('default.article.home')
    </div>
</section>
<section id="contact" class="atf-contact-area p-relative atf-section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-6 col-md-6 mb-lg-40 wow fadeInLeft" data-wow-duration=".5s" data-wow-delay=".5s">
                <div class="atf-contact-info">
                    <div class="atf-contact-details d-flex align-items-center justify-content-between mb-20 rounded-5">
                        <div class="atf-contact-address">
                            <h3>Dane firmy</h3>
                            <p>{{getConstField('company_name')}}<br>
                            NIP: {{getConstField('company_nip')}}<br>
                            <a href="{{getConstField('google_map')}}">{{getConstField('company_address')}}, {{getConstField('company_post_code')}} {{getConstField('company_city')}}</a></p>
                        </div>
                        <div class="atf-contact-icon">
                            <i class="fa-light fa-user"></i>
                        </div>
                    </div>
                    <div class="atf-contact-details d-flex align-items-center justify-content-between mb-20 rounded-5">
                        <div class="atf-contact-address">
                            <h3>Adres e-mail</h3>
                            <p><a href="mailto:{{getConstField('email')}}">{{getConstField('email')}}</a></p>
                        </div>
                        <div class="atf-contact-icon">
                            <i class="fa-light fa-envelope"></i>
                        </div>
                    </div>
                    <div class="atf-contact-details d-flex align-items-center justify-content-between rounded-5">
                        <div class="atf-contact-address">
                            <h3>Telefon</h3>
                            <p><a href="tel:{{str_replace(' ', '', getConstField('phone'))}}">{{getConstField('phone')}}</a></p>
                        </div>
                        <div class="atf-contact-icon">
                            <i class="fa-light fa-phone-volume"></i>
                        </div>
                    </div>
                </div><!--- END CONTACT -->
            </div>
            <div class="col-xl-7 col-lg-6 col-md-6 ps-xl-5 wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".5s">
                <div class="service-thumb position-relative rounded-5 overflow-hidden shadow-lg p-relative spread start">
                    <img src="{{asset('images/contact.jpg')}}" style="height: 550px;object-fit:cover" class="img-fluid w-100" alt="">
                </div>
            </div><!--- END COL -->
        </div><!--- END ROW -->
    </div><!--- END CONTAINER -->
</section>
@endsection
