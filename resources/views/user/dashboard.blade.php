@extends('layouts.dashboard_layouts')
@section('content')
<div class="content-body">
    <div class="container">
        <div class="row">
            <div class="col-xxl-6">
                <div class="promotion d-flex justify-content-between align-items-center">
                    <div class="promotion-detail">
                        <h3 class="text-white mb-3">Discover, Collect, Sell <br> and Create your Own NFT</h3>
                        <p>Digital marketplace for crypto collectibles and non fungable tokens</p><a
                            class="btn btn-primary me-3">Explore</a><a class="btn btn-secondary">Create</a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6">
                <div class="card top-bid">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-6"><img src="assets_dashboard/images/items/11.jpg" class="img-fluid rounded"
                                    alt="..."></div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center mb-3"><img src="assets_dashboard/images/avatar/1.jpg" alt=""
                                        class="me-3 avatar-img">
                                    <div class="flex-grow-1">
                                        <h6 class="mb-0">John Abraham<span class="circle bg-success"></span></h6>
                                    </div>
                                </div>
                                <h4 class="card-title">Brighten LQ</h4>
                                <div class="d-flex justify-content-between mt-3 mb-3">
                                    <div class="text-start">
                                        <p class="mb-2">Auction Time</p>
                                        <h5 class="text-muted">3h 1m 50s</h5>
                                    </div>
                                    <div class="text-end">
                                        <p class="mb-2">Current Bid :
                                            <!-- --> <strong class="text-primary">0.05 ETH</strong>
                                        </p>
                                        <h5 class="text-muted">0.15 ETH</h5>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center"><a href="#" class="btn btn-primary">Place
                                        a Bid</a><a href="#" class="btn btn-secondary">Details</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card filter-tab m-0">
                    <div class="card-header">
                        <h4 class="card-title">Trending Bids</h4>
                        <div class="filter-nav"><a href="#" class="active">All</a><a href="#">Games</a><a
                                href="#">Artwork</a></div>
                    </div>
                    <div class="card-body bs-0 p-0 bg-transparent">
                        <div class="row">
                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="card items">
                                    <div class="card-body">
                                        <div class="items-img position-relative"><img src="assets_dashboard/images/items/1.jpg"
                                                class="img-fluid rounded mb-3" alt=""><img
                                                src="assets_dashboard/images/avatar/1.jpg" class="creator" width="50" alt=""></div>
                                        <h4 class="card-title">Liguid Wave</h4>
                                        <p></p>
                                        <div class="d-flex justify-content-between">
                                            <div class="text-start">
                                                <p class="mb-2">Auction Time</p>
                                                <h5 class="text-muted">3h 1m 50s</h5>
                                            </div>
                                            <div class="text-end">
                                                <p class="mb-2">Current Bid : <strong class="text-primary">0.15
                                                        <!-- --> ETH
                                                    </strong></p>
                                                <h5 class="text-muted">0.15
                                                    <!-- --> ETH
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center mt-3"><a href="#"
                                                class="btn btn-primary">Place a Bid</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="card items">
                                    <div class="card-body">
                                        <div class="items-img position-relative"><img src="assets_dashboard/images/items/2.jpg"
                                                class="img-fluid rounded mb-3" alt=""><img
                                                src="assets_dashboard/images/avatar/2.jpg" class="creator" width="50" alt=""></div>
                                        <h4 class="card-title">Liguid Wave</h4>
                                        <p></p>
                                        <div class="d-flex justify-content-between">
                                            <div class="text-start">
                                                <p class="mb-2">Auction Time</p>
                                                <h5 class="text-muted">3h 1m 50s</h5>
                                            </div>
                                            <div class="text-end">
                                                <p class="mb-2">Current Bid : <strong class="text-primary">0.15
                                                        <!-- --> ETH
                                                    </strong></p>
                                                <h5 class="text-muted">0.15
                                                    <!-- --> ETH
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center mt-3"><a href="#"
                                                class="btn btn-primary">Place a Bid</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="card items">
                                    <div class="card-body">
                                        <div class="items-img position-relative"><img src="assets_dashboard/images/items/3.jpg"
                                                class="img-fluid rounded mb-3" alt=""><img
                                                src="assets_dashboard/images/avatar/3.jpg" class="creator" width="50" alt=""></div>
                                        <h4 class="card-title">Liguid Wave</h4>
                                        <p></p>
                                        <div class="d-flex justify-content-between">
                                            <div class="text-start">
                                                <p class="mb-2">Auction Time</p>
                                                <h5 class="text-muted">3h 1m 50s</h5>
                                            </div>
                                            <div class="text-end">
                                                <p class="mb-2">Current Bid : <strong class="text-primary">0.15
                                                        <!-- --> ETH
                                                    </strong></p>
                                                <h5 class="text-muted">0.15
                                                    <!-- --> ETH
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center mt-3"><a href="#"
                                                class="btn btn-primary">Place a Bid</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="card items">
                                    <div class="card-body">
                                        <div class="items-img position-relative"><img src="assets_dashboard/images/items/4.jpg"
                                                class="img-fluid rounded mb-3" alt=""><img
                                                src="assets_dashboard/images/avatar/4.jpg" class="creator" width="50" alt=""></div>
                                        <h4 class="card-title">Liguid Wave</h4>
                                        <p></p>
                                        <div class="d-flex justify-content-between">
                                            <div class="text-start">
                                                <p class="mb-2">Auction Time</p>
                                                <h5 class="text-muted">3h 1m 50s</h5>
                                            </div>
                                            <div class="text-end">
                                                <p class="mb-2">Current Bid : <strong class="text-primary">0.15
                                                        <!-- --> ETH
                                                    </strong></p>
                                                <h5 class="text-muted">0.15
                                                    <!-- --> ETH
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center mt-3"><a href="#"
                                                class="btn btn-primary">Place a Bid</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="card items">
                                    <div class="card-body">
                                        <div class="items-img position-relative"><img src="assets_dashboard/images/items/5.jpg"
                                                class="img-fluid rounded mb-3" alt=""><img
                                                src="assets_dashboard/images/avatar/5.jpg" class="creator" width="50" alt=""></div>
                                        <h4 class="card-title">Liguid Wave</h4>
                                        <p></p>
                                        <div class="d-flex justify-content-between">
                                            <div class="text-start">
                                                <p class="mb-2">Auction Time</p>
                                                <h5 class="text-muted">3h 1m 50s</h5>
                                            </div>
                                            <div class="text-end">
                                                <p class="mb-2">Current Bid : <strong class="text-primary">0.55
                                                        <!-- --> ETH
                                                    </strong></p>
                                                <h5 class="text-muted">0.55
                                                    <!-- --> ETH
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center mt-3"><a href="#"
                                                class="btn btn-primary">Place a Bid</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="card items">
                                    <div class="card-body">
                                        <div class="items-img position-relative"><img src="assets_dashboard/images/items/6.jpg"
                                                class="img-fluid rounded mb-3" alt=""><img
                                                src="assets_dashboard/images/avatar/6.jpg" class="creator" width="50" alt=""></div>
                                        <h4 class="card-title">Liguid Wave</h4>
                                        <p></p>
                                        <div class="d-flex justify-content-between">
                                            <div class="text-start">
                                                <p class="mb-2">Auction Time</p>
                                                <h5 class="text-muted">3h 1m 50s</h5>
                                            </div>
                                            <div class="text-end">
                                                <p class="mb-2">Current Bid : <strong class="text-primary">0.15
                                                        <!-- --> ETH
                                                    </strong></p>
                                                <h5 class="text-muted">0.15
                                                    <!-- --> ETH
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center mt-3"><a href="#"
                                                class="btn btn-primary">Place a Bid</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="card items">
                                    <div class="card-body">
                                        <div class="items-img position-relative"><img src="assets_dashboard/images/items/7.jpg"
                                                class="img-fluid rounded mb-3" alt=""><img
                                                src="assets_dashboard/images/avatar/7.jpg" class="creator" width="50" alt=""></div>
                                        <h4 class="card-title">Liguid Wave</h4>
                                        <p></p>
                                        <div class="d-flex justify-content-between">
                                            <div class="text-start">
                                                <p class="mb-2">Auction Time</p>
                                                <h5 class="text-muted">3h 1m 50s</h5>
                                            </div>
                                            <div class="text-end">
                                                <p class="mb-2">Current Bid : <strong class="text-primary">0.15
                                                        <!-- --> ETH
                                                    </strong></p>
                                                <h5 class="text-muted">0.15
                                                    <!-- --> ETH
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center mt-3"><a href="#"
                                                class="btn btn-primary">Place a Bid</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="card items">
                                    <div class="card-body">
                                        <div class="items-img position-relative"><img src="assets_dashboard/images/items/8.jpg"
                                                class="img-fluid rounded mb-3" alt=""><img
                                                src="assets_dashboard/images/avatar/8.jpg" class="creator" width="50" alt=""></div>
                                        <h4 class="card-title">Liguid Wave</h4>
                                        <p></p>
                                        <div class="d-flex justify-content-between">
                                            <div class="text-start">
                                                <p class="mb-2">Auction Time</p>
                                                <h5 class="text-muted">3h 1m 50s</h5>
                                            </div>
                                            <div class="text-end">
                                                <p class="mb-2">Current Bid : <strong class="text-primary">0.15
                                                        <!-- --> ETH
                                                    </strong></p>
                                                <h5 class="text-muted">0.15
                                                    <!-- --> ETH
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center mt-3"><a href="#"
                                                class="btn btn-primary">Place a Bid</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-12">
                <div class="card m-0">
                    <div class="card-header">
                        <h4 class="card-title">Trending Bids</h4>
                    </div>
                    <div class="card-body bs-0 bg-transparent p-0">
                        <div class="row">
                            <div class="col-xxl-12 col-xl-4 col-md-4 col-sm-6">
                                <div class="stat-widget d-flex align-items-center">
                                    <div class="widget-icon me-3 bg-primary"><span><i
                                                class="ri-wallet-line"></i></span></div>
                                    <div class="widget-content">
                                        <h3>24K</h3>
                                        <p>Artworks</p>
                                    </div>
                                    <div class="widget-arrow">
                                        <p class="text-success mb-0">+168.001%
                                            <!-- --> <span><i class="bi bi-arrow-up"></i></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-xl-4 col-md-4 col-sm-6">
                                <div class="stat-widget d-flex align-items-center">
                                    <div class="widget-icon me-3 bg-secondary"><span><i
                                                class="ri-wallet-2-line"></i></span></div>
                                    <div class="widget-content">
                                        <h3>82K</h3>
                                        <p>Auction</p>
                                    </div>
                                    <div class="widget-arrow">
                                        <p class="text-danger mb-0">+168.001%
                                            <!-- --> <span><i class="bi bi-arrow-down"></i></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-xl-4 col-md-4 col-sm-6">
                                <div class="stat-widget d-flex align-items-center">
                                    <div class="widget-icon me-3 bg-success"><span><i
                                                class="ri-wallet-3-line"></i></span></div>
                                    <div class="widget-content">
                                        <h3>1K</h3>
                                        <p>Creators</p>
                                    </div>
                                    <div class="widget-arrow">
                                        <p class="text-success mb-0">+168.001%
                                            <!-- --> <span><i class="bi bi-arrow-up"></i></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-8 col-lg-6">
                <div id="user-activity" class="card">
                    <div class="card-header">
                        <h4 class="card-title">ETH Price</h4>
                    </div>
                    <div class="card-body">
                        <div class="chartjs-size-monitor">
                            <div class="chartjs-size-monitor-expand">
                                <div class=""></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink">
                                <div class=""></div>
                            </div>
                        </div><canvas height="280" width="670" id="activity"
                            style="display: block; width: 670px; height: 280px;"
                            class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
            <div class=" col-xxl-3 col-xl-4 col-lg-6">
                <div class="card">
                    <div class="card-header justify-content-center">
                        <h4 class="card-title">Statistics</h4>
                    </div>
                    <div class="card-body bs-0">
                        <div class="chartjs-size-monitor">
                            <div class="chartjs-size-monitor-expand">
                                <div class=""></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink">
                                <div class=""></div>
                            </div>
                        </div><canvas height="280" width="295" id="most-selling-items"
                            class="chartjs-render-monitor"
                            style="display: block; width: 295px; height: 280px;"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-12">
                <div class="card m-0">
                    <div class="card-header">
                        <h4 class="card-title">Recent Activity</h4><a href="#">See more</a>
                    </div>
                    <div class="card-body p-0">
                        <div class="activity-content">
                            <div class="scrollbar-container ps">
                                <ul>
                                    <li class="d-flex justify-content-between align-items-center active">
                                        <div class="d-flex align-items-center">
                                            <div class="activity-user-img me-3"><img src="assets_dashboard/images/avatar/1.jpg"
                                                    alt="" width="50"></div>
                                            <div class="activity-info">
                                                <h5 class="mb-0">Papaya</h5>
                                                <p>Purchase by you for 0.05 ETH</p>
                                            </div>
                                        </div>
                                        <div class="text-end"><span class=" text-muted">12 min ago</span></div>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <div class="activity-user-img me-3"><img src="assets_dashboard/images/avatar/2.jpg"
                                                    alt="" width="50"></div>
                                            <div class="activity-info">
                                                <h5 class="mb-0">ETH Received</h5>
                                                <p>0.06 ETH Received</p>
                                            </div>
                                        </div>
                                        <div class="text-end"><span class=" text-muted">12 min ago</span></div>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <div class="activity-user-img me-3"><img src="assets_dashboard/images/avatar/3.jpg"
                                                    alt="" width="50"></div>
                                            <div class="activity-info">
                                                <h5 class="mb-0">John Adams</h5>
                                                <p>Started Following you</p>
                                            </div>
                                        </div>
                                        <div class="text-end"><span class=" text-muted">12 min ago</span></div>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <div class="activity-user-img me-3"><img src="assets_dashboard/images/avatar/4.jpg"
                                                    alt="" width="50"></div>
                                            <div class="activity-info">
                                                <h5 class="mb-0">Nature with Beauty</h5>
                                                <p>Has been sold by 12.05 ETH</p>
                                            </div>
                                        </div>
                                        <div class="text-end"><span class=" text-muted">12 min ago</span></div>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <div class="activity-user-img me-3"><img src="assets_dashboard/images/avatar/5.jpg"
                                                    alt="" width="50"></div>
                                            <div class="activity-info">
                                                <h5 class="mb-0">Nature with Beauty</h5>
                                                <p>Has been sold by 12.05 ETH</p>
                                            </div>
                                        </div>
                                        <div class="text-end"><span class=" text-muted">12 min ago</span></div>
                                    </li>
                                </ul>
                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                </div>
                                <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-8 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Top Creators</h4><a href="#">See more</a>
                    </div>
                    <div class="card-body bs-0 p-0 top-creators-content  bg-transparent">
                        <div class="row">
                            <div class="col-xl-6">
                                <div
                                    class="d-flex justify-content-between creator-widget active  align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="top-creators-user-img me-3"><img src="assets_dashboard/images/avatar/1.jpg"
                                                alt="" width="60"></div>
                                        <div class="top-creators-info">
                                            <h5 class="mb-0">Terry Camacho</h5>
                                            <p class="mb-2">60 Items</p>
                                        </div>
                                    </div>
                                    <div class="text-end"><a class="btn btn-outline-primary">Follow</a></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div
                                    class="d-flex justify-content-between creator-widget active  align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="top-creators-user-img me-3"><img src="assets_dashboard/images/avatar/2.jpg"
                                                alt="" width="60"></div>
                                        <div class="top-creators-info">
                                            <h5 class="mb-0">Terry Camacho</h5>
                                            <p class="mb-2">60 Items</p>
                                        </div>
                                    </div>
                                    <div class="text-end"><a class="btn btn-secondary">Following</a></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div
                                    class="d-flex justify-content-between creator-widget active  align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="top-creators-user-img me-3"><img src="assets_dashboard/images/avatar/3.jpg"
                                                alt="" width="60"></div>
                                        <div class="top-creators-info">
                                            <h5 class="mb-0">Terry Camacho</h5>
                                            <p class="mb-2">60 Items</p>
                                        </div>
                                    </div>
                                    <div class="text-end"><a class="btn btn-outline-primary">Follow</a></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div
                                    class="d-flex justify-content-between creator-widget active  align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="top-creators-user-img me-3"><img src="assets_dashboard/images/avatar/4.jpg"
                                                alt="" width="60"></div>
                                        <div class="top-creators-info">
                                            <h5 class="mb-0">Terry Camacho</h5>
                                            <p class="mb-2">60 Items</p>
                                        </div>
                                    </div>
                                    <div class="text-end"><a class="btn btn-outline-primary">Follow</a></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div
                                    class="d-flex justify-content-between creator-widget active  align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="top-creators-user-img me-3"><img src="assets_dashboard/images/avatar/5.jpg"
                                                alt="" width="60"></div>
                                        <div class="top-creators-info">
                                            <h5 class="mb-0">Terry Camacho</h5>
                                            <p class="mb-2">60 Items</p>
                                        </div>
                                    </div>
                                    <div class="text-end"><a class="btn btn-outline-primary">Follow</a></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div
                                    class="d-flex justify-content-between creator-widget active  align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="top-creators-user-img me-3"><img src="assets_dashboard/images/avatar/6.jpg"
                                                alt="" width="60"></div>
                                        <div class="top-creators-info">
                                            <h5 class="mb-0">Terry Camacho</h5>
                                            <p class="mb-2">60 Items</p>
                                        </div>
                                    </div>
                                    <div class="text-end"><a class="btn btn-outline-primary">Follow</a></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div
                                    class="d-flex justify-content-between creator-widget active  align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="top-creators-user-img me-3"><img src="assets_dashboard/images/avatar/7.jpg"
                                                alt="" width="60"></div>
                                        <div class="top-creators-info">
                                            <h5 class="mb-0">Terry Camacho</h5>
                                            <p class="mb-2">60 Items</p>
                                        </div>
                                    </div>
                                    <div class="text-end"><a class="btn btn-outline-primary">Follow</a></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div
                                    class="d-flex justify-content-between creator-widget active  align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="top-creators-user-img me-3"><img src="assets_dashboard/images/avatar/8.jpg"
                                                alt="" width="60"></div>
                                        <div class="top-creators-info">
                                            <h5 class="mb-0">Terry Camacho</h5>
                                            <p class="mb-2">60 Items</p>
                                        </div>
                                    </div>
                                    <div class="text-end"><a class="btn btn-outline-primary">Follow</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header flex-row">
                        <h4 class="card-title">Recent Bid </h4>
                    </div>
                    <div class="card-body bs-0 bg-transparent p-0">
                        <div class="bid-table">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>
                                                <div class="form-check"><input type="checkbox"
                                                        class="form-check-input" value="" id="flexCheckDefault">
                                                </div>
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
                                                <div class="form-check"><input type="checkbox"
                                                        class="form-check-input" value="" id="flexCheckDefault">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"><img
                                                        src="assets_dashboard/images/items/15.jpg" alt="" width="60"
                                                        class="me-3 rounded">
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-0">Cutes Cube Cool</h6>
                                                        <p class="mb-0">John Abraham</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>0.0025 ETH</td>
                                            <td> 0.0025 ETH</td>
                                            <td><img src="assets_dashboard/images/avatar/1.jpg" alt="" width="40"
                                                    class="me-2 rounded-circle">0.0025 ETH</td>
                                            <td>2 Hours 1 min 30s</td>
                                            <td><span><i class="ri-close-line me-3"></i></span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check"><input type="checkbox"
                                                        class="form-check-input" value="" id="flexCheckDefault">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"><img
                                                        src="assets_dashboard/images/items/16.jpg" alt="" width="60"
                                                        class="me-3 rounded">
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-0">Cutes Cube Cool</h6>
                                                        <p class="mb-0">John Abraham</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>0.0025 ETH</td>
                                            <td> 0.0025 ETH</td>
                                            <td><img src="assets_dashboard/images/avatar/2.jpg" alt="" width="40"
                                                    class="me-2 rounded-circle">0.0025 ETH</td>
                                            <td>2 Hours 1 min 30s</td>
                                            <td><span><i class="ri-close-line me-3"></i></span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check"><input type="checkbox"
                                                        class="form-check-input" value="" id="flexCheckDefault">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"><img
                                                        src="assets_dashboard/images/items/17.jpg" alt="" width="60"
                                                        class="me-3 rounded">
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-0">Cutes Cube Cool</h6>
                                                        <p class="mb-0">John Abraham</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>0.0025 ETH</td>
                                            <td> 0.0025 ETH</td>
                                            <td><img src="assets_dashboard/images/avatar/3.jpg" alt="" width="40"
                                                    class="me-2 rounded-circle">0.0025 ETH</td>
                                            <td>2 Hours 1 min 30s</td>
                                            <td><span><i class="ri-close-line me-3"></i></span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check"><input type="checkbox"
                                                        class="form-check-input" value="" id="flexCheckDefault">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"><img
                                                        src="assets_dashboard/images/items/18.jpg" alt="" width="60"
                                                        class="me-3 rounded">
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-0">Cutes Cube Cool</h6>
                                                        <p class="mb-0">John Abraham</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>0.0025 ETH</td>
                                            <td> 0.0025 ETH</td>
                                            <td><img src="assets_dashboard/images/avatar/4.jpg" alt="" width="40"
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


@endsection
