<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from thinkamentor.com/pixenx/nftport/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Apr 2024 14:37:17 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RainSeaPort- RainSea landing page</title>

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!-- main css for template -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- ===============>> Preloader start here <<================= -->
    <div class="preloader">
        <img src="assets/images/logo/preloader.png" alt="Apes land">
    </div>
    <!-- ===============>> Preloader end here <<================= -->



    <!-- ========== Multipage Header Section Starts Here========== -->
    <header class="header-section">
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo">
                        <a href="{{route('welcome')}}">
                            <img src="assets/images/logo/logo.png" alt="logo">
                        </a>
                    </div>
                    <div class="menu-area">
                        <ul class="menu">
                            <li>
                                <a href="{{route('welcome')}}">Home</a>
                            </li>

                            <li>
                                <a href="#about">About</a>
                            </li>
                            <li>
                                <a href="#team">Team</a>
                            </li>
                            <li>
                                <a href="#faq">FAQ</a>
                            </li>
                            <li>
                                <a href="#0">Pages</a>
                                <ul class="submenu">
                                    {{-- <li><a href="javsascript:void();">Home</a>
                                        <ul class="submenu">
                                            <li><a href="{{route('welcome')}}">Home 1</a></li>
                                            <li><a href="{{route('welcome')}}">Home 2</a></li>
                                        </ul>
                                    </li> --}}
                                    {{-- <li><a href="javsascript:void();">About</a>
                                        <ul class="submenu">
                                            <li><a href="">About</a></li>
                                            <li><a href="">Roadmap</a></li>
                                            <li><a href="">FAQ</a></li>
                                            <li><a href="">Team</a></li>
                                            <li><a href="">Team Single</a></li>
                                        </ul>
                                    </li> --}}
                                    {{-- <li><a href="javsascript:void();">Blog</a>
                                        <ul class="submenu">
                                            <li><a href="">Blog</a></li>
                                            <li><a href="">Blog single</a></li>
                                        </ul>
                                    </li> --}}
                                    <li><a href="">Collection</a></li>
                                    <li><a href="{{route('contact.us')}}">Contact</a></li>

                                </ul>
                            </li>
                        </ul>
                        <div class="header-btn">
                            <a href="{{route ('login')}}" class="default-btn" data-bs-toggle="modal" data-bs-target="#wallet-option">
                                <span>Connect <i class="fa-solid fa-wallet"></i></span>
                            </a>
                            <a href="{{route ('register')}}" class="default-btn default-btn--secondary">
                                <span>Join <i class="fa-brands fa-discord"></i></span>
                            </a>

                        </div>

                        <!-- toggle icons -->
                        <div class="header-bar d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ========== Multipage Header Section Ends Here========== -->





  @yield('content')



    <!-- ================> Footer section start here <================== -->
    <footer class="footer" style="background-image: url(assets/images/footer/bg.png);">
        <div class="footer__wrapper padding-top padding-bottom">
            <div class="container">
                <div class="footer__content text-center">
                    <a class="mb-4 d-inline-block" href="index-2.html"><img src="assets/images/logo/logo.png"
                            alt="Logo"></a>
                    <ul class="social justify-content-center">
                        <li class="social__item">
                            <a href="#" class="social__link"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="social__item">
                            <a href="#" class="social__link"><i class="fab fa-discord"></i></a>
                        </li>
                        <li class="social__item">
                            <a href="#" class="social__link"><i class="fab fa-twitch"></i></a>
                        </li>
                        <li class="social__item">
                            <a href="#" class="social__link"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li class="social__item">
                            <a href="#" class="social__link"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li class="social__item">
                            <a href="#" class="social__link"><i class="fab fa-facebook-f"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer__copyright">
            <div class="container">
                <div class="text-center py-4">
                    <p class=" mb-0">© 2022 | All Rights Reserved </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- ================> Footer section end here <================== -->


    <!-- vendor plugins -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/all.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/countdown.min.js"></script>
    <script src="assets/js/lightcase.js"></script>
    <script src="assets/js/purecounter_vanilla.js"></script>
    <script src="assets/js/custom.js"></script>
</body>


<!-- Mirrored from thinkamentor.com/pixenx/nftport/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Apr 2024 14:37:46 GMT -->
</html>
