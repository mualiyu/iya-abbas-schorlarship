
<!Doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Sanator Aminu Iya Abbas | Scholarship</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('/assets/main/logo.png')}}">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="{{asset('/assets/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('/assets/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('/assets/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('/assets/fontawesome-all.min.css')}}">
        <link rel="stylesheet" href="{{asset('/assets/odometer.min.css')}}">
        {{-- <link rel="stylesheet" href="{{asset('/assets/nice-select.css')}}"> --}}
        <link rel="stylesheet" href="{{asset('/assets/meanmenu.css')}}">
        <link rel="stylesheet" href="{{asset('/assets/swiper-bundle.min.css')}}">
        <link rel="stylesheet" href="{{asset('/assets/main.css')}}">

        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> --}}
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
     
    <body>
       <!-- sidebar-information-area-start -->
        {{-- <div class="sidebar-info side-info">
            <div class="sidebar-logo-wrapper mb-25">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-8">
                        <div class="sidebar-logo">
                            <a href="/" style="font-size: 20px; color:white; text-decoration: none;" >Senator Aminu Iya Abbas</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-4">
                        <div class="sidebar-close-wrapper text-end">
                            <button class="sidebar-close side-info-close"><i class="fal fa-times"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar-menu-wrapper fix">
                <div class="mobile-menu"></div>
            </div>
        </div> --}}
        <div class="offcanvas-overlay"></div>
        <!-- sidebar-information-area-end -->

        <!-- header area start -->
        <header> 
            <div class="h3_header-area header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-5 col-sm-7 col-12">
                            <div class="h3_header-logo">
                                <a href="/" style="font-size: 20px; color:black; text-decoration: none; ">
                                    <img src="{{asset('/assets/main/logo.png')}}" alt="logo" style="width: 65px; height: 65px;">
                                    <span class="font-size-10"> Senator Aminu Iya Abbas</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 d-none d-xl-block">
                            <div class="h3_header-middle">
                                <nav class="h3_main-menu mobile-menu" id="mobile-menu">
                                    <ul>
                                        
                                        <!-- <li><a href="contact.html">Contact</a></li> -->
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-5 col-6">
                            <div class="h3_header-right">
                                <div class="h3_header-btn d-none d-sm-block">
                                    <a href="/application" class="header-btn theme-btn theme-btn-medium theme-btn-3" style="text-decoration: none; background-color:rgb(104,12,13);">Apply for Scholarship Now<i class="fa-light fa-arrow-up-right"></i></a>
                                </div>
                                {{-- <div class="header-menu-bar d-xl-none ml-10">
                                    <span class="header-menu-bar-icon side-toggle">
                                        <i class="fa-light fa-bars"></i>
                                    </span>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header area end -->

        <main>
            
            @yield('content')

        </main>

        <!-- footer area start -->
        <!-- <footer class="footer-area h3_footer-area">
            <div class="footer-top pt-240 pb-55">
                <div class="container">
                   <div class="row justify-content-between">
                        <div class="col-xl-3 col-lg-7 col-md-7 col-sm-12">
                            <div class="footer-widget mb-40">
                                <div class="footer-logo">
                                    <a href="index.html"><img src="assets/img/logo/logo-white.png" alt=""></a>
                                </div>
                                <p class="footer-widget-text mb-35">
                                    Through a combination of lectures, readings, discussions, students will gain solid foundation in educational.
                                </p>
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright-area">
                    <div class="row">
                        <div class="col-12">
                            <div class="copyright-text">
                                <p>Copyright © 2025 All Rights Reserved by Iya Abbas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer> -->
        <!-- footer area end -->

		<!-- JS here -->
        <script src="{{asset('/assets/jquery.min.js')}}"></script>
        <script src="{{asset('/assets/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('/assets/swiper-bundle.min.js')}}"></script>
        <script src="{{asset('/assets/jquery.meanmenu.min.js')}}"></script>
        <script src="{{asset('/assets/wow.min.js')}}"></script>
        {{-- <script src="{{asset('/assets/jquery.nice-select.min.js')}}"></script> --}}
        <script src="{{asset('/assets/jquery.scrollUp.min.js')}}"></script>
        <script src="{{asset('/assets/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('/assets/odometer.min.js')}}"></script>
        <script src="{{asset('/assets/appear.min.js')}}"></script>
        <script src="{{asset('/assets/main.js')}}"></script>
    </body>
</html>