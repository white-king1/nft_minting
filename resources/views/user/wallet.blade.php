<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from enftx-html.vercel.app/wallet.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Apr 2024 14:43:28 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!---- Website Information ---->
    <title>Wallet Page</title>
    <meta name="description"
        content="ENFTX is the complete UX & UI dashboard for NFT. Here included bids, collection, wallet, and all user setting pages including profile, application, activity, payment method, api, sign in & sign up etc.">


    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/assets_dashboard/images/favicon.png">
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
                                <div class="brand-logo"><a class="mini-logo" href="{{ route('user.dashboard') }}"><img
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
                                            <a class="" href="#">
                                                <div class="d-flex align-items-center"><span
                                                        class="me-3 icon success"><i class="ri-check-line"></i></span>
                                                    <div>
                                                        <p>Account created successfully</p>
                                                        <span>{{ Auth::user()->created_at }}</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="" href="#">
                                                <div class="d-flex align-items-center"><span class="me-3 icon fail"><i
                                                            class="ri-close-line"></i></span>
                                                    <div>
                                                        <p>2FA verification Not Successfull</p>
                                                        <span>{{ Auth::user()->created_at }}</span>                                                    </div>
                                                </div>
                                            </a>
                                            <a class="" href="#">
                                                <div class="d-flex align-items-center"><span
                                                        class="me-3 icon success"><i class="ri-check-line"></i></span>
                                                    <div>
                                                        <p>Device confirmation completed</p>
                                                        <span>{{ Auth::user()->created_at }}</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="" href="#">
                                                <div class="d-flex align-items-center"><span
                                                        class="me-3 icon pending"><i
                                                            class="ri-question-mark"></i></span>
                                                    <div>
                                                        <p>Xs verification..... is still pending</p>
                                                        <span>{{ Auth::user()->created_at }}</span>                                                    </div>
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

                                        <a class="dropdown-item" href="{{ route('user.wallet') }}">
                                            <span><i class="ri-wallet-line"></i></span>Wallet
                                        </a>
                                        <a class="dropdown-item" href="{{ route('user.mint') }}">
                                            <span><i class="ri-heart-line"></i></span>
                                            Mint
                                        </a>
                                        <a class="dropdown-item" href="{{ route('make.withdrawal') }}">
                                            <span><i class="ri-briefcase-line"></i></span>
                                            Withdrawal
                                        </a>
                                        <a class="dropdown-item" href="{{ route('make.deposit') }}">
                                            <span><i class="ri-briefcase-line"></i></span>
                                            Deposit
                                        </a>
                                        <a class="dropdown-item" href="{{ route('list.collection') }}">
                                            <span><i class="ri-star-line"></i></span>
                                            Collection
                                        </a>
                                        {{-- <a class="dropdown-item" href="profile.html">
                                            <span><i class="ri-user-line"></i></span>Profile
                                        </a>
                                        <a class="dropdown-item" href="settings-profile.html">
                                            <span><i class="ri-settings-3-line"></i></span>Settings
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
            <div class="brand-logo"><a class="full-logo" href="{{ route('user.dashboard') }}"><img
                        src="/assets_dashboard/images/logoi.png" alt="" width="30"></a></div>
            <div class="menu">
                <ul>

                    <li class="">
                        <a href="{{ route('user.wallet') }}">
                            <span><i class="ri-wallet-line"></i></span>
                            <span class="nav-text">Wallet</span></a>
                    </li>
                    <li class="">
                        <a href="{{ route('user.mint') }}">
                            <span><i class="ri-heart-line"></i></span>
                            <span class="nav-text">Mint</span></a>
                    </li>
                    <li class="">
                        <a href="{{route ('make.withdrawal')}}">
                            <span><i class="ri-briefcase-line"></i></span>

                            <span class="nav-text">Withdrawal</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{route ('make.deposit')}}">
                            <span><i class="ri-briefcase-line"></i></span>
                            <span class="nav-text">Deposit</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ route('list.collection') }}">
                            <span><i class="ri-star-line"></i></span>
                            <span class="nav-text">Collection</span></a>
                    </li>

                    {{-- <li class="">
                        <a href="profile.html">
                            <span><i class="ri-account-box-line"></i></span>
                            <span class="nav-text">Profile</span></a>
                    </li>
                    <li class="" style="margin-bottom: 20px;">
                        <a href="settings-profile.html">
                            <span><i class="ri-settings-3-line"></i></span>
                            <span class="nav-text">Settings</span></a>
                    </li>
                    <br>
                    <br> --}}
                    <li class=" logout">
                        <a onclick="logout()" href="">

                            <span><i class="ri-logout-circle-line"></i>Signout</span>

                        </a>
                        <form action="{{ route('logout') }}" id="logout" method="POST"> @csrf

                        </form>
                    </li>
                </ul>
            </div>
        </div>

        <div class="content-body">
            <div class="container">
                <div class="page-title">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-6">
                            <div class="page-title-content">
                                <h3>Wallet</h3>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="breadcrumbs"><a href="{{ route('user.dashboard') }}">Home </a><span><i
                                        class="ri-arrow-right-s-line"></i></span><a href="{{ route('user.wallet') }}">Wallet</a></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h1 class="card-title">Account Balance: ${{ number_format(Auth::user()->wallet->balance) }}</h1>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    {{-- <div class="col-12">
                                        <div class="total-balance">
                                            <p>Withdrawal Balance</p>
                                            <h2>${{ number_format(Auth::user()->wallet->balance) }}</h2>
                                        </div>
                                    </div> --}}
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="balance-stats active">
                                            <p style="color: #111">Available Balance</p>
                                            <h3>${{ number_format(Auth::user()->wallet->balance) }}</h3>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="balance-stats">
                                            <p>Available Withdrawal Amount</p>
                                            <h3>${{ number_format(Auth::user()->wallet->balance) }}</h3>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="balance-stats">
                                            <p>Mint Fee</p>
                                            <h3>0.11ETH</h3>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="balance-stats">
                                            <p>Withdrawal Fee</p>
                                            <h3>0.22ETH</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Latest Activity</h4>
                            </div>
                            <div class="card-body bs-0 p-0 top-creators-content  bg-transparent">
                                <div class="d-flex justify-content-between creator-widget active  align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="top-creators-user-img me-3"><img
                                                src="/assets_dashboard/images/items/item_1.html" alt=""
                                                width="60"></div>
                                        <div class="top-creators-info">
                                            <h5 class="mb-0">Account Number</h5>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <h5 class="text-primary">{{ Auth::user()->account_number }}</h5>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between creator-widget active  align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="top-creators-user-img me-3"><img
                                                src="/assets_dashboard/images/items/item_1.html" alt=""
                                                width="60"></div>
                                        <div class="top-creators-info">
                                            <h5 class="mb-0">Minted Arts</h5>
                                            <p class="mb-2">{{ $artCount }}</p>
                                        </div>
                                    </div>

                                </div>
                                <div class="d-flex justify-content-between creator-widget active  align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="top-creators-user-img me-3"><img
                                                src="/assets_dashboard/images/items/item_1.html" alt=""
                                                width="60"></div>
                                        <div class="top-creators-info">
                                            <h5 class="mb-0">My Arts</h5>
                                            <p class="mb-2">{{ $artCount }}</p>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-8 col-xl-8 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Investment</h4>
                            </div>
                            <div class="card-body">
                                <div class="chartjs-size-monitor">
                                    <div class="chartjs-size-monitor-expand">
                                        <div class=""></div>
                                    </div>
                                    <div class="chartjs-size-monitor-shrink">
                                        <div class=""></div>
                                    </div>
                                </div><canvas height="300" width="920" id="activity"
                                    style="display: block; width: 920px; height: 300px;"
                                    class="chartjs-render-monitor"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class=" col-xxl-4 col-xl-4 col-lg-6">
                        <div class="row">
                            <div class="col-xxl-12 col-xl-12 col-lg-12">
                                <div class="credit-card visa">
                                    <div class="type-brand">
                                        <h4>Debit Card</h4><img src="/assets_dashboard/images/cc/visa.png"
                                            alt="">
                                    </div>
                                    <div class="cc-number">
                                        <h6>1234</h6>
                                        <h6>5678</h6>
                                        <h6>7890</h6>
                                        <h6>9875</h6>
                                    </div>
                                    <div class="cc-holder-exp">
                                        <h5> {{ Auth::user()->name }}</h5>
                                        <div class="exp"><span>EXP:</span><strong>12/28</strong></div>
                                    </div>
                                    <div class="cc-info">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-5">
                                                <div class="d-flex">
                                                    <p class="me-3">Status</p>
                                                    <p><strong>Active</strong></p>
                                                </div>
                                                <div class="d-flex">
                                                    <p class="me-3">Currency</p>
                                                    <p><strong>USD</strong></p>
                                                </div>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="d-flex justify-content-between">
                                                    <div class="ms-3">
                                                        <p>Credit Limit</p>
                                                        <p><strong>2000 USD</strong></p>
                                                    </div>
                                                    <div id="circle1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-xl-12 col-lg-12">
                                <div class="credit-card payoneer">
                                    <div class="type-brand">
                                        <h4>Debit Card</h4><img src="/assets_dashboard/images/cc/payoneer.png"
                                            alt="">
                                    </div>
                                    <div class="cc-number">
                                        <h6>1234</h6>
                                        <h6>5678</h6>
                                        <h6>7890</h6>
                                        <h6>9875</h6>
                                    </div>
                                    <div class="cc-holder-exp">
                                        <h5> {{ Auth::user()->name }}</h5>
                                        <div class="exp"><span>EXP:</span><strong>12/28</strong></div>
                                    </div>
                                    <div class="cc-info">
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="d-flex">
                                                    <p class="me-3">Status</p>
                                                    <p><strong>Active</strong></p>
                                                </div>
                                                <div class="d-flex">
                                                    <p class="me-3">Currency</p>
                                                    <p><strong>USD</strong></p>
                                                </div>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="d-flex justify-content-between">
                                                    <div class="ms-3">
                                                        <p>Credit Limit</p>
                                                        <p><strong>1500/2000 USD</strong></p>
                                                    </div>
                                                    <div id="circle3"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>



    <script src="/assets_dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="/assets_dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>






    <script src="/assets_dashboard/vendor/chartjs/chart.bundle.min.js"></script>


    <script src="/assets_dashboard/js/plugins/chartjs-line-init.js"></script>








    <script src="/assets_dashboard/js/scripts.js"></script>

    <script>
        function logout() {
            event.preventDefault();
            $('#logout').submit();
        }
    </script>


</body>



<!-- Mirrored from enftx-html.vercel.app/wallet.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Apr 2024 14:43:30 GMT -->

</html>
