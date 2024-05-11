<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from enftx-html.vercel.app/bids.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Apr 2024 14:43:34 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!---- Website Information ---->
    <title>ENFTX - NFT Dashboard HTML Template</title>
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
                        <div class="brand-logo"><a class="mini-logo" href="index-2.html"><img src="/assets_dashboard/images/logoi.png" alt=""
                                    width="40"></a></div>
                        <div class="search">
                            <form action="#"><span><i class="ri-search-line"></i></span><input type="text"
                                    placeholder="Search Here"></form>
                        </div>
                    </div>
                    <div class="header-right">
                        <!-- <div class="theme-switch"><i class="ri-sun-line"></i></div> -->

                        <div class="dark-light-toggle theme-switch" onclick="themeToggle()">
                            <span class="dark"><i class="ri-moon-line"></i></span>
                            <span class="light"><i class="ri-sun-line"></i></span>
                        </div>


                        <div class="nav-item dropdown notification dropdown">
                            <div data-bs-toggle="dropdown" aria-haspopup="true" class="" aria-expanded="false">
                                <div class="notify-bell icon-menu"><span><i class="ri-notification-2-line"></i></span>
                                </div>
                            </div>
                            <div tabindex="-1" role="menu" aria-hidden="true"
                                class="dropdown-menu notification-list dropdown-menu dropdown-menu-right">
                                <h4>Recent Notification</h4>
                                <div class="lists">
                                    <a class="" href="index-2.html#">
                                        <div class="d-flex align-items-center"><span class="me-3 icon success"><i
                                                    class="ri-check-line"></i></span>
                                            <div>
                                                <p>Account created successfully</p><span>2020-11-04 12:00:23</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="" href="index-2.html#">
                                        <div class="d-flex align-items-center"><span class="me-3 icon fail"><i
                                                    class="ri-close-line"></i></span>
                                            <div>
                                                <p>2FA verification failed</p><span>2020-11-04 12:00:23</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="" href="index-2.html#">
                                        <div class="d-flex align-items-center"><span class="me-3 icon success"><i
                                                    class="ri-check-line"></i></span>
                                            <div>
                                                <p>Device confirmation completed</p><span>2020-11-04 12:00:23</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="" href="index-2.html#">
                                        <div class="d-flex align-items-center"><span class="me-3 icon pending"><i
                                                    class="ri-question-mark"></i></span>
                                            <div>
                                                <p>xs verification pending</p><span>2020-11-04 12:00:23</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">More<i class="ri-arrow-right-s-line"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown profile_log dropdown">
                            <div data-bs-toggle="dropdown" aria-haspopup="true" class="" aria-expanded="false">
                                <div class="user icon-menu active"><span><img src="/assets_dashboard/images/avatar/9.jpg" alt=""></span>
                                </div>
                            </div>
                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                <div class="user-email">
                                    <div class="user">
                                        <span class="thumb">
                                            <img src="/assets_dashboard/images/profile/3.png" alt="">
                                        </span>
                                        <div class="user-info">
                                            <h5>Jannatul Maowa</h5>
                                            <span>imsaifun@gmail.com</span>
                                        </div>
                                    </div>
                                </div>
                                <a class="dropdown-item" href="profile.html">
                                    <span><i class="ri-user-line"></i></span>Profile
                                </a>
                                <a class="dropdown-item" href="wallet.html">
                                    <span><i class="ri-wallet-line"></i></span>Wallet
                                </a>
                                <a class="dropdown-item" href="settings-profile.html">
                                    <span><i class="ri-settings-3-line"></i></span>Settings
                                </a>
                                <a class="dropdown-item" href="settings-activity.html">
                                    <span><i class="ri-time-line"></i></span>Activity
                                </a>
                                <a class="dropdown-item" href="lock.html">
                                    <span><i class="ri-lock-line"></i></span>Lock
                                </a>
                                <a class="dropdown-item logout" onclick="logout()"  href="">
                                    <button class="btn btn-primary px-3">
                                        <i class="ri-logout-circle-line"></i>Logout

                                    </button>
                                </a>
                                <form action="{{route ('logout')}}" id="logout" method="POST">@csrf
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
    <div class="brand-logo"><a class="full-logo" href="index-2.html"><img src="/assets_dashboard/images/logoi.png" alt="" width="30"></a></div>
    <div class="menu">
        <ul>
            <li>
                <a href="{{route ('user.dashboard') }}">
                    <span><i class="ri-layout-grid-fill"></i></span>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li class="">
                <a href="{{route ('user.wallet')}}">
                    <span><i class="ri-wallet-line"></i></span>
                    <span class="nav-text">Wallet</span></a>
            </li>
            <li class="">
                <a href="{{route ('user.mint')}}">
                    <span><i class="ri-briefcase-line"></i></span>
                    <span class="nav-text">Mint</span></a>
            </li>
            <li class="">
                <a href="saved.html">
                    <span><i class="ri-heart-line"></i></span>
                    <span class="nav-text">Saved</span></a>
            </li>
            <li class="">
                <a href="collection.html">
                    <span><i class="ri-star-line"></i></span>
                    <span class="nav-text">Collection</span></a>
            </li>

            <li class="">
                <a href="profile.html">
                    <span><i class="ri-account-box-line"></i></span>
                    <span class="nav-text">Profile</span></a>
            </li>
            <li class="">
                <a href="settings-profile.html">
                    <span><i class="ri-settings-3-line"></i></span>
                    <span class="nav-text">Settings</span></a>
            </li>
            <li class=" logout" >
                <a    onclick="logout()"   href="">

                    <span><i class="ri-logout-circle-line"></i>Signout</span>

                </a>
                <form action="{{route ('logout') }}" id="logout" method="POST"> @csrf

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
                            <h3>Mint</h3>
                            <p class="mb-2">Welcome ENFTX Arts Minting page</p>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="breadcrumbs"><a href="#">Home </a><span><i
                                    class="ri-arrow-right-s-line"></i></span><a href="#">Mints</a></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-sm-6">
                    <div class="stat-widget d-flex align-items-center">
                        <div class="widget-icon me-3 bg-primary"><span><i class="ri-file-copy-2-line"></i></span></div>
                        <div class="widget-content">
                            <h3>24K</h3>
                            <p>Artworks</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="stat-widget d-flex align-items-center">
                        <div class="widget-icon me-3 bg-success"><span><i class="ri-file-list-3-line"></i></span></div>
                        <div class="widget-content">
                            <h3>82K</h3>
                            <p>Auction</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="stat-widget d-flex align-items-center">
                        <div class="widget-icon me-3 bg-warning"><span><i class="ri-file-paper-line"></i></span></div>
                        <div class="widget-content">
                            <h3>200</h3>
                            <p>Creators</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="stat-widget d-flex align-items-center">
                        <div class="widget-icon me-3 bg-danger"><span><i class="ri-file-paper-2-line"></i></span></div>
                        <div class="widget-content">
                            <h3>89</h3>
                            <p>Canceled</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header flex-row">
                            <h4 class="card-title">Active Arts </h4><a class="btn btn-primary"
                                href="{{route ('upload.arts') }}">Mint My Arts</a>
                        </div>
                        <div class="card-body p-0 bs-0 bg-transparent">
                            <div class="bid-table">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="form-check"><input class="form-check-input"
                                                            type="checkbox" id="flexCheckDefault" value=""></div>
                                                </th>
                                                <th>Item List</th>
                                                <th>Open Price</th>
                                                <th>Your Offer</th>
                                                <th>Recent Offer</th>
                                                <th>Time Left</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check"><input class="form-check-input"
                                                            type="checkbox" id="flexCheckDefault" value=""></div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center"><img
                                                            src="/assets_dashboard/images/items/15.jpg" alt="" width="60"
                                                            class="me-3 rounded">
                                                        <div class="flex-grow-1">
                                                            <h6 class="mb-0">Cutes Cube Cool</h6>
                                                            <p class="mb-0">John Abraham</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>0.0025 ETH</td>
                                                <td> 0.0025 ETH</td>
                                                <td><img src="/assets_dashboard/images/avatar/1.jpg" alt="" width="40"
                                                        class="me-2 rounded-circle">0.0025 ETH</td>
                                                <td>2 Hours 1 min 30s</td>
                                                <td><span><i class="ri-close-line me-3"></i></span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check"><input class="form-check-input"
                                                            type="checkbox" id="flexCheckDefault" value=""></div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center"><img
                                                            src="/assets_dashboard/images/items/16.jpg" alt="" width="60"
                                                            class="me-3 rounded">
                                                        <div class="flex-grow-1">
                                                            <h6 class="mb-0">Cutes Cube Cool</h6>
                                                            <p class="mb-0">John Abraham</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>0.0025 ETH</td>
                                                <td> 0.0025 ETH</td>
                                                <td><img src="/assets_dashboard/images/avatar/2.jpg" alt="" width="40"
                                                        class="me-2 rounded-circle">0.0025 ETH</td>
                                                <td>2 Hours 1 min 30s</td>
                                                <td><span><i class="ri-close-line me-3"></i></span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check"><input class="form-check-input"
                                                            type="checkbox" id="flexCheckDefault" value=""></div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center"><img
                                                            src="/assets_dashboard/images/items/17.jpg" alt="" width="60"
                                                            class="me-3 rounded">
                                                        <div class="flex-grow-1">
                                                            <h6 class="mb-0">Cutes Cube Cool</h6>
                                                            <p class="mb-0">John Abraham</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>0.0025 ETH</td>
                                                <td> 0.0025 ETH</td>
                                                <td><img src="/assets_dashboard/images/avatar/3.jpg" alt="" width="40"
                                                        class="me-2 rounded-circle">0.0025 ETH</td>
                                                <td>2 Hours 1 min 30s</td>
                                                <td><span><i class="ri-close-line me-3"></i></span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check"><input class="form-check-input"
                                                            type="checkbox" id="flexCheckDefault" value=""></div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center"><img
                                                            src="/assets_dashboard/images/items/18.jpg" alt="" width="60"
                                                            class="me-3 rounded">
                                                        <div class="flex-grow-1">
                                                            <h6 class="mb-0">Cutes Cube Cool</h6>
                                                            <p class="mb-0">John Abraham</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>0.0025 ETH</td>
                                                <td> 0.0025 ETH</td>
                                                <td><img src="/assets_dashboard/images/avatar/4.jpg" alt="" width="40"
                                                        class="me-2 rounded-circle">0.0025 ETH</td>
                                                <td>2 Hours 1 min 30s</td>
                                                <td><span><i class="ri-close-line me-3"></i></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
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
<script src="/assets_dashboard/js/scripts.js"></script>

<script>
    function logout() {
        event.preventDefault();
        $('#logout').submit();
    }
</script>


</body>


<!-- Mirrored from enftx-html.vercel.app/bids.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Apr 2024 14:43:34 GMT -->
</html>
