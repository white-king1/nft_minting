@extends('layouts.admin_dashboard_layouts')
@section('content')
<div class="content-body">
    <div class="container">
        <div class="row">
            <div class="col-xxl-6">
                <div class="promotion d-flex justify-content-between align-items-center">
                    <div class="promotion-detail">
                        <h3 class="text-white mb-3">Welcome to your NFT Minting ADMIN DASHBOARD</h3>
                        <p>Digital marketplace for crypto collectibles and non fungable tokens</p><a
                            class="btn btn-primary me-3">Explore</a><a class="btn btn-secondary">Create</a>
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
                                            <div class="activity-user-img me-3"><img src="/assets_dashboard/images/avatar/1.jpg"
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
                                            <div class="activity-user-img me-3"><img src="/assets_dashboard/images/avatar/2.jpg"
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
                                            <div class="activity-user-img me-3"><img src="/assets_dashboard/images/avatar/3.jpg"
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
                                            <div class="activity-user-img me-3"><img src="/assets_dashboard/images/avatar/4.jpg"
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
                                            <div class="activity-user-img me-3"><img src="/assets_dashboard/images/avatar/5.jpg"
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
                                        <div class="top-creators-user-img me-3"><img src="/assets_dashboard/images/avatar/1.jpg"
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
                                        <div class="top-creators-user-img me-3"><img src="/assets_dashboard/images/avatar/2.jpg"
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
                                        <div class="top-creators-user-img me-3"><img src="/assets_dashboard/images/avatar/3.jpg"
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
                                        <div class="top-creators-user-img me-3"><img src="/assets_dashboard/images/avatar/4.jpg"
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
                                        <div class="top-creators-user-img me-3"><img src="/assets_dashboard/images/avatar/5.jpg"
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
                                        <div class="top-creators-user-img me-3"><img src="/assets_dashboard/images/avatar/6.jpg"
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
                                        <div class="top-creators-user-img me-3"><img src="/assets_dashboard/images/avatar/7.jpg"
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
                                        <div class="top-creators-user-img me-3"><img src="/assets_dashboard/images/avatar/8.jpg"
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

        </div>
    </div>
</div>
@endsection
