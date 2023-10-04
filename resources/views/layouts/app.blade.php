<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>



    <!-- Fonts  -->

    <link rel="stylesheet" href="{{ asset('assets/fonts/Butler_Stencil_Webfont/stylesheet.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/the_secret/stylesheet.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/Butler_Webfont/stylesheet.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    <!-- Font icons -->
    <link rel="stylesheet" href="{{ asset('assets/cicon-fonts/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/cicon-fonts/remixicon/remixicon.css') }}">

</head>


<body class="smooth-scroll">

    {{-- preloader bro --}}
    {{-- <div id="preloader" class="preloader">
        <!-- <div class="txt">ඉවසන්න...</div> -->
        <div class="percentage">0%</div>
        <div class="progress"></div>

    </div> --}}
    <div id="app">
    <div class="tavonline-overlay"></div>


    <div id="cursor">
        <i class="fa-solid fa-magnifying-glass"></i>
        <i class="ri-arrow-right-up-line"></i>
        <div class="cursor__bg"></div>
    </div>

    <div id="content-scroll" data-scrollbar>
        <div class="site-wrap" data-barba="wrapper">
        <main  data-barba="container">


        <!-- HEADER
        ============================================= -->
        <header>
            <div class="header-container">
                <div class="row px-0 gx-0">
                    <div class="col-xl-2 col-md-6 col-6">
                        <a href="/" class="logo"><img src="assets/images/logo.png"
                         alt="logo"></a>
                    </div>
                    <div class="col-xl-10 col-md-6 col-6">
                        <div class="burger-menu">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>




            <!-- OVERLAY MENU -->
            <div class="overlay-menu">
                <div class="close">
                    <i class="ri-close-line"></i>
                </div>
                <div class="row overlay-wrap">
                    <div class="col-xl-8 col-md-7 left-area">
                        <nav>
                            <ul>
                                <li class="menu-item-has-children">
                                    <a href="#">Home</a>
                                    <ul class="sub">
                                        <li><a href="index.html">Creative Agency</a></li>
                                        <li><a href="corporate.html">Corporate</a></li>
                                        <li><a href="creative-portfolio.html">Creative Portfolio</a></li>
                                        <li><a href="freelancer.html">Freelancer</a></li>
                                        <li><a href="photographer.html">Photographer</a></li>
                                        <li><a href="projects-grid.html">Creative Grid</a></li>
                                        <li><a href="classic-menu.html">Classic Menu</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Portfolio</a>
                                    <ul class="sub">
                                        <li><a href="roll-showcase.html">Roll Showcase</a></li>
                                        <li><a href="cross-showcase.html">Cross Showcase</a></li>
                                        <li><a href="fullscreen-showcase.html">Fulllscreen Showcase</a></li>
                                        <li><a href="letterflow-showcase.html">Letter Showcase</a></li>
                                        <li><a href="half-showcase.html">Half Showcase</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li class="menu-item-has-children"><a href="#">Journal</a>
                                    <ul class="sub">
                                        <li class="current-menu-item"><a href="news-classic.html">Journal Classic</a></li>
                                        <li><a href="news-list.html">Journal List</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xl-4 col-md-5 right-area">
                        <ul>
                            <li><span class="title">Brief us</span></li>
                            <li><a href="mailto:hello@flencreative.com" target="_blank">hello@flencreative.com</a></li>
                            <li><a href="tel:34937606800" target="_blank">Tel. +34 937 606 800</a></li>
                        </ul>
                        <ul>
                            <li><span class="title">Our Office</span></li>
                            <li><p>Champataz Street , Colombo 9.<br> Sri Lanka</p></li>
                        </ul>
                        <ul>
                            <li><span class="title">Follow us</span></li>
                            <li>
                                <ul class="social-links">
                                    <li><a href="#" target="_blank">Behance</a></li>
                                    <li><a href="#" target="_blank">Dribbble</a></li>
                                    <li><a href="#" target="_blank">Instagram</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </main>


        <main class="py-4">
            @yield('content')
        </main>
        </div>
    </div>


    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/webgl.js"></script>
    {{-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC44qiQKRvAB1ETh4F1oQcSs9PIfLPbCQE&amp;sensor=false"></script> --}}
    <script src="assets/js/map.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>
