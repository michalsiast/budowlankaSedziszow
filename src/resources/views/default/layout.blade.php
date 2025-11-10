<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {!! SEOMeta::generate() !!}

    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('image/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('image/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('image/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('image/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('image/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('image/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('image/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('image/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('image/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('image/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('image/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('image/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('image/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('image/favicon//manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <link href="{{asset('css/vendors/bootstrap.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link href="{{asset('css/main.css')}}?version=1" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.10.3/simple-lightbox.min.css" integrity="sha512-Ne9/ZPNVK3w3pBBX6xE86bNG295dJl4CHttrCp3WmxO+8NQ2Vn8FltNr6UsysA1vm7NE6hfCszbXe3D6FUNFsA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/plugin.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/theme-spacing.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

    <script>
        const BASE_URL = '{{url()->to('/')}}/';
        const CSRF_TOKEN = '{{csrf_token()}}';
        const SITE_LANG = '{{app()->getLocale()}}';
    </script>

    @stack('scrips.head.bottom')
</head>
<body>
{{--@include('default._helpers.lang_nav')--}}
    <div class="page-wrapper">
		
        <!-- CURSOR BODY START -->
        <div class="cursor_body">
            <div class="cursor-in"></div>
            <div class="cursor-out"></div>
        </div>		  
        <!-- CURSOR BODY END -->
        
        <!-- Preloader Start -->
        <div class="preloader">
            <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
                <path id="loader" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
            </svg>
            <div class="loader-inner">
                <div class="loaded">
                    <span>C</span>
                    <span>O</span>
                    <span>N</span>
                    <span>C</span>
                    <span>O</span>
                    <span>C</span>
                    <span>T</span>
                </div>
            </div>
        </div>
        <!-- Preloader End -->
        
        <!-- Back to Top Start -->
        <a href="#" id="back_to_top" class="active"><i class="fa fa-long-arrow-up"></i></a>
        <!-- Back to Top End -->
        
        <!-- Start Search Area -->
        <div class="atf-searching-area">
            <form class="atf-searching-form">
                <input type="text" name="#0" placeholder="Search ...">
                <button type="submit"><i class="fa-light fa-magnifying-glass"></i></button>
            </form>
            <button type="button" class="atf-searching-close-btn"><i class="fa-solid fa-xmark"></i></button>
        </div>
        <!-- Start Search Area -->

        <!-- Start Hamburger area  -->
        <div class="atf-hamburger">
            <div class="atf-hamburger-wrapper">
                <div class="atf-hamburger-header d-flex justify-content-between align-items-center mb-50">
                    <div class="atf-hamburger-logo">
                        <a href="index.html"><img src="assets/img/logo/logo-black.png" alt=""></a>
                    </div>
                    <div class="atf-hamburger-close">
                        <button class="atf-hamburger-close-toggle"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                
                <div class="atf-hamburger-menu d-block d-xl-none mb-50">
                    <nav></nav>
                </div>
                

                <div class="atf-hamburger-info mb-50">
                    <h3 class="atf-hamburger-sm-title">Your Address</h3>
                    <span><a href="tel:{{str_replace(' ', '', getConstField('phone'))}}"><i class="fa-light fa-phone me-2"></i> {{getConstField('phone')}}</a></span>
                    <span><a href="mailto:{{getConstField('email')}}"><i class="fa-light fa-envelope me-2"></i> {{getConstField('email')}}</a></span>
                    <span><a href="{{getConstField('google_map')}}"><i class="fa-light fa-map-marker-alt me-2"></i> {{getConstField('company_address')}}, {{getConstField('company_post_code')}} {{getConstField('company_city')}}</a></span>
                </div>
            </div>
        </div>

        
        <div class="atf-hamburger-overlay"></div>
        <header class="atf-header-area">
            <div class="atf-top-header d-none d-md-block black-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-9 col-md-9">
                            <div class="atf-top-header-in justify-content-start">
                                <ul class="atf-top-header-list">
                                    <li><i class="fa-light fa-phone-volume"></i><a href="tel:{{str_replace(' ', '', getConstField('phone'))}}"> {{getConstField('phone')}}</a></li>
                                    <li><i class="fa-light fa-envelope"></i><a href="mailto:{{getConstField('email')}}">{{getConstField('email')}}</a></li>
                                    <li><i class="fa-light fa-map-marker-alt"></i><a href="{{getConstField('google_map')}}">{{getConstField('company_address')}}, {{getConstField('company_post_code')}} {{getConstField('company_city')}}</a></li>
                                </ul>
                            </div>
                        </div><!-- END COL -->
                    </div><!-- END ROW -->
                </div><!-- END CONTAINER -->
            </div>
            <div class="atf-site-header atf-style1 atf-sticky-header atf_bg_skew">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-6 ">
                            <div class="atf-site-logo">
                                <a href="index.html"><img class="logo-black" src="assets/img/logo/logo.png" alt="Logo"></a>
                            </div>
                        </div>
                        
                        <div class="col-xl-6 d-none d-xl-block">
                            <div class="atf-main-menu landing-page d-flex justify-content-center text-center">
                                <nav class="atf-nav atf-mobile-menu-active">
                                    <ul class="atf-nav-list">
                                        @include('default.nav_item.main', ['name' => 'main'])
                                    </ul>
                                </nav>
                            </div>
                        </div><!-- END COL -->

                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="atf-header-bottom-right gap-4 d-flex align-items-center justify-content-end">
                                <div class="atf-menu-btn d-flex align-items-center">
                                    <a class="atf-themes-btn active d-none d-md-block" href="tel:{{str_replace(' ', '', getConstField('phone'))}}">Zadzwoń do nas
                                        <span class="icon ml-10">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                <path d="M12 0.514515V9.43267C12 9.56914 11.9459 9.7 11.8494 9.79647C11.7528 9.89294 11.6219 9.94721 11.4856 9.94721C11.3491 9.94721 11.2183 9.89294 11.1217 9.79647C11.0252 9.7 10.971 9.56914 10.971 9.43267V1.75791L0.869497 11.8508C0.77398 11.9463 0.644425 12 0.509332 12C0.374252 12 0.244696 11.9463 0.149179 11.8508C0.0536616 11.7554 0 11.6258 0 11.4907C0 11.3556 0.0536616 11.2261 0.149179 11.1306L10.2421 1.02903H2.56737C2.43092 1.02903 2.30005 0.974819 2.20356 0.878326C2.10707 0.781834 2.05286 0.650973 2.05286 0.514515C2.05286 0.378056 2.10707 0.247196 2.20356 0.150703C2.30005 0.0542101 2.43092 1.21958e-05 2.56737 0H11.4856C11.6219 1.21958e-05 11.7528 0.0542101 11.8494 0.150703C11.9459 0.247196 12 0.378056 12 0.514515Z" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                                <div class="atf-main-menu-bars d-block d-xl-none">
                                    <button class="atf-hamburger-toogle">
                                        <i class="fa fa-bars"></i>
                                    </button>
                                </div>
                            </div>
                        </div><!-- END COL -->
                    </div><!-- END ROW -->
                </div><!-- END CONTAINER -->
            </div>
        </header>
        
        <main>	
            @yield('content')
        </main>
		
        <footer>
            <div class="atf-copyright-area pt-20 atf-copyright-style">
                <div class="container">
                    <div class="row align-items-center">
                       <div class="col-lg-12">
                          <div class="atf-copyright-text text-center">
                             <p><?php echo date("Y") ?> &copy; Wszelkie prawa zastrzeżone. Strona stworzona przez: <a href="https://palmax.pl" target="_blank">Palmax</a></p>
                          </div>
                       </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.10.3/simple-lightbox.jquery.min.js" integrity="sha512-iJCzEG+s9LeaFYGzCbDInUbnF03KbE1QV1LM983AW5EHLxrWQTQaZvQfAQgLFgfgoyozb1fhzhe/0jjyZPYbmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script><script src="{{asset('js/frontend.js')}}"></script>
<script src="{{asset('js/main.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/plugin.min.js')}}"></script>
<script src="{{asset('js/form-contact.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>

@stack('scripts.body.bottom')
</body>
</html>
