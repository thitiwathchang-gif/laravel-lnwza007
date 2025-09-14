<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title', 'Movie News Hub') - Movie News Hub</title>
    <meta name="description" content="@yield('description', 'Stay updated with the latest movie news, reviews, and industry insights')">
    <meta name="keywords" content="@yield('keywords', 'movie news, film reviews, cinema, entertainment')">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Active
  * Template URL: https://bootstrapmade.com/active-bootstrap-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                <h1 class="sitename">Movie News Hub</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('news.index') }}" class="active">Movie News</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>

    <main class="main">
        {{ $slot }}
    </main>

    <footer id="footer" class="footer light-background">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                    <div class="widget">
                        <h3 class="widget-heading">About Us</h3>
                        <p class="mb-4">
                            Your ultimate destination for the latest movie news, reviews, and industry insights. 
                            Stay connected with the world of cinema.
                        </p>
                        <p class="mb-0">
                            <a href="#" class="btn-learn-more">Learn more</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ps-lg-5 mb-3 mb-md-0">
                    <div class="widget">
                        <h3 class="widget-heading">Navigation</h3>
                        <ul class="list-unstyled float-start me-5">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('news.index') }}">News</a></li>
                            <li><a href="#about">About Us</a></li>
                        </ul>
                        <ul class="list-unstyled float-start">
                            <li><a href="#services">Services</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li><a href="#privacy">Privacy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 pl-lg-5">
                    <div class="widget">
                        <h3 class="widget-heading">Recent Posts</h3>
                        <ul class="list-unstyled footer-blog-entry">
                            <li>
                                <span class="d-block date">Latest Movie News</span>
                                <a href="{{ route('news.index') }}">Stay Updated with Cinema</a>
                            </li>
                            <li>
                                <span class="d-block date">Industry Insights</span>
                                <a href="{{ route('news.index') }}">Behind the Scenes Stories</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 pl-lg-5">
                    <div class="widget">
                        <h3 class="widget-heading">Connect</h3>
                        <ul class="list-unstyled social-icons light mb-3">
                            <li>
                                <a href="#"><span class="bi bi-facebook"></span></a>
                            </li>
                            <li>
                                <a href="#"><span class="bi bi-twitter-x"></span></a>
                            </li>
                            <li>
                                <a href="#"><span class="bi bi-linkedin"></span></a>
                            </li>
                            <li>
                                <a href="#"><span class="bi bi-instagram"></span></a>
                            </li>
                            <li>
                                <a href="#"><span class="bi bi-youtube"></span></a>
                            </li>
                        </ul>
                    </div>

                    <div class="widget">
                        <div class="footer-subscribe">
                            <h3 class="widget-heading">Subscribe</h3>
                            <form action="#" method="post" class="php-email-form">
                                <div class="mb-2">
                                    <input type="email" class="form-control" name="email" placeholder="Enter your email">
                                    <button type="submit" class="btn btn-link">
                                        <span class="bi bi-arrow-right"></span>
                                    </button>
                                </div>
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">
                                    Your subscription request has been sent. Thank you!
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="copyright d-flex flex-column flex-md-row align-items-center justify-content-md-between">
                <p>© <span>Copyright</span> <strong class="px-1 sitename">Movie News Hub</strong> <span>All Rights Reserved</span></p>
                <div class="credits">
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>