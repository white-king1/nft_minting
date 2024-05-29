<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from enftx-html.vercel.app/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Apr 2024 14:43:07 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!---- Website Information ---->
    <title>My Dashboard</title>
    <meta name="description"
        content="ENFTX is the complete UX & UI dashboard for NFT. Here included bids, collection, wallet, and all user setting pages including profile, application, activity, payment method, api, sign in & sign up etc.">


    <!-- Favicon icon -->
    <link rel="icon" type="/assets_dashboard/image/png" sizes="16x16" href="/assets_dashboard/images/favicon.png">
    <link rel="stylesheet" href="/assets_dashboard/css/style.css">
</head>

<body class="@@dashboard">

    <div id="preloader"><i>.</i><i>.</i><i>.</i></div>

    <div id="main-wrapper">

        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="header-content">
                            <div class="header-left">
                                <div class="brand-logo"><a class="mini-logo" href="{{ route('admin') }}"><img
                                            src="/assets_dashboard/images/logoi.png" alt="" width="40"></a>
                                </div>
                                <div class="search">
                                    <form action="#"><span><i class="ri-search-line"></i></span><input
                                            type="text" placeholder="Search Here"></form>
                                </div>
                            </div>
                            <div class="header-right">
                                <!-- <div class="theme-switch"><i class="ri-sun-line"></i></div> -->

                                <div class="dark-light-toggle theme-switch" onclick="themeToggle()">
                                    <span class="dark"><i class="ri-moon-line"></i></span>
                                    <span class="light"><i class="ri-sun-line"></i></span>
                                </div>


                                <div class="nav-item dropdown notification dropdown">
                                    <div data-bs-toggle="dropdown" aria-haspopup="true" class=""
                                        aria-expanded="false">
                                        <div class="notify-bell icon-menu"><span><i
                                                    class="ri-notification-2-line"></i></span>
                                        </div>
                                    </div>
                                    <div tabindex="-1" role="menu" aria-hidden="true"
                                        class="dropdown-menu notification-list dropdown-menu dropdown-menu-right">
                                        <h4>Recent Notification</h4>
                                        <div class="lists">
                                            <a class="" href="index-2.html#">
                                                <div class="d-flex align-items-center"><span
                                                        class="me-3 icon success"><i class="ri-check-line"></i></span>
                                                    <div>
                                                        <p>Account created successfully</p>
                                                        <span>{{ Auth::user()->created_at }}</span>

                                                    </div>
                                                </div>
                                            </a>
                                            <a class="" href="index-2.html#">
                                                <div class="d-flex align-items-center"><span class="me-3 icon fail"><i
                                                            class="ri-close-line"></i></span>
                                                    <div>
                                                        <p>2FA verification Not Successfull</p><span>{{ Auth::user()->created_at }}</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="" href="index-2.html#">
                                                <div class="d-flex align-items-center"><span
                                                        class="me-3 icon success"><i class="ri-check-line"></i></span>
                                                    <div>
                                                        <p>Device confirmation completed</p><span>{{ Auth::user()->created_at }}</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="" href="index-2.html#">
                                                <div class="d-flex align-items-center"><span
                                                        class="me-3 icon pending"><i
                                                            class="ri-question-mark"></i></span>
                                                    <div>
                                                        <p>Xs verification now still pending</p><span>{{ Auth::user()->created_at }}</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown profile_log dropdown">
                                    <div data-bs-toggle="dropdown" aria-haspopup="true" class=""
                                        aria-expanded="false">
                                        <div class="user icon-menu active"><span><img
                                                    src="/assets_dashboard/images/avatar/9.jpg" alt=""></span>
                                        </div>
                                    </div>
                                    <div tabindex="-1" role="menu" aria-hidden="true"
                                        class="dropdown-menu dropdown-menu-right">
                                        <div class="user-email">
                                            <div class="user">
                                                <span class="thumb">
                                                    <img src="/assets_dashboard/images/profile/3.png" alt="">
                                                </span>
                                                <div class="user-info">
                                                    <h5>{{ Auth::user()->name }}</h5>
                                                    <span>{{ Auth::user()->email }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="dropdown-item" href="{{ route('all.users') }}">
                                            <span><i class="ri-layout-grid-fill"></i></span>
                                            Users
                                        </a>

                                        <a class="dropdown-item" href="{{ route('admin.wallet') }}">
                                            <span><i class="ri-wallet-line"></i></span>Wallet
                                        </a>
                                        <a class="dropdown-item" href="{{ route('make.transfer') }}">
                                            <span><i class="ri-briefcase-line"></i></span>
                                            Transfer
                                        </a>
                                        <a class="dropdown-item" href="{{ route('admin.withdrawal') }}">
                                            <span><i class="ri-briefcase-line"></i></span>
                                            Withdraw
                                        </a>
                                        {{-- <a class="dropdown-item" href="{{ route('make.deposit') }}">
                                            <span><i class="ri-briefcase-line"></i></span>
                                            Deposit
                                        </a> --}}
                                        <a class="dropdown-item" href="{{ route('all.withdrawals') }}">
                                            <span><i class="ri-heart-line"></i></span>
                                            Transactions
                                        </a>
                                        <a class="dropdown-item" href="{{ route('art.collectionlist') }}">
                                            <span><i class="ri-star-line"></i></span>
                                            Collection
                                        </a>
                                        {{-- <a class="dropdown-item" href="profile.html">
                                            <span><i class="ri-user-line"></i></span>Profile
                                        </a> --}}
                                        {{-- <a class="dropdown-item" href="settings-profile.html">
                                            <span><i class="ri-settings-3-line"></i></span>Settings
                                        </a> --}}

                                        {{-- <a class="dropdown-item" href="{{route('login')}}">
                                            <span><i class="ri-lock-line"></i></span>Lock
                                        </a> --}}

                                        <a class="dropdown-item logout" onclick="logout()" href=""
                                            style="color: #dc3545;">
                                            <button class="btn  px-3" style="color: #dc3545; backgroun-color: #fff">
                                                <i class="ri-logout-circle-line" style="color: #dc3545;"></i>Logout
                                            </button>

                                        </a>
                                        <form action="{{ route('logout') }} " id="logout" method="POST">@csrf
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar">
            <div class="brand-logo"><a class="full-logo" href="{{ route('admin') }}"><img
                        src="/assets_dashboard/images/logoi.png" alt="" width="30"></a></div>
            <div class="menu">
                <ul>
                    <li>
                        <a href="{{ route('all.users') }}">
                            <span><i class="ri-layout-grid-fill"></i></span>
                            <span class="nav-text">Users</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ route('admin.wallet') }}">
                            <span><i class="ri-wallet-line"></i></span>
                            <span class="nav-text">Wallet</span></a>
                    </li>
                    <li class="">
                        <a href="{{ route('make.transfer') }}">
                            <span><i class="ri-briefcase-line"></i></span>

                            <span class="nav-text">Transfer</span>
                        </a>
                    </li>

                    <li class="">
                        <a href="{{ route('admin.withdrawal') }}">
                            <span><i class="ri-briefcase-line"></i></span>

                            <span class="nav-text">Withdraw</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ route('all.withdrawals') }}">
                            <span><i class="ri-heart-line"></i></span>
                            <span class="nav-text">Transactions</span></a>
                    </li>
                    {{-- <li class="">
                        <a href="">
                            <span><i class="ri-briefcase-line"></i></span>
                            <span class="nav-text">Deposit</span>
                        </a>
                    </li> --}}
                    <li class="">
                        <a href="{{ route('art.collectionlist') }}">
                            <span><i class="ri-star-line"></i></span>
                            <span class="nav-text">Collection</span></a>
                    </li>

                    {{-- <li class="">
                        <a href="">
                            <span><i class="ri-account-box-line"></i></span>
                            <span class="nav-text">Profile</span></a>
                    </li> --}}
                    {{-- <li class="" style="margin-bottom: 20px;">
                        <a href="">
                            <span><i class="ri-settings-3-line"></i></span>
                            <span class="nav-text">Settings</span></a>
                    </li>
                    <br>
                    <br> --}}
                    <li class=" logout">
                        <a onclick="logout()" href="" style="color: #dc3545;">

                            <span style="color: #dc3545;">
                                <i class="ri-logout-circle-line" style="color: #dc3545;"></i>
                                Signout
                            </span>

                        </a>
                        <form action="{{ route('logout') }}" id="logout" method="POST"> @csrf

                        </form>
                    </li>
                </ul>
            </div>
        </div>


        @yield('content')

    </div>





    <script src="/assets_dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="/assets_dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>






    <script src="/assets_dashboard/vendor/chartjs/chart.bundle.min.js"></script>


    <script src="/assets_dashboard/js/plugins/chartjs-line-init.js"></script>


    <script src="/assets_dashboard/js/plugins/chartjs-donut.js"></script>







    <script src="/assets_dashboard/js/scripts.js"></script>

    <script>
        function logout() {
            event.preventDefault();
            $('#logout').submit();
        }
    </script>


</body>


<!-- Mirrored from enftx-html.vercel.app/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Apr 2024 14:43:25 GMT -->

</html>
