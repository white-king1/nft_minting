@extends('layouts.dashboard_layouts')
@section('content')
<div class="content-body">
    <div class="container">
        <div class="row">

            <div class="col-xxl-6">
                <div class="promotion d-flex justify-content-between align-items-center">
                    <div class="promotion-detail">
                        <h3 class="text-white mb-3">Welcome {{Auth::user()->name}} <br> To your RAINSEA NFT Dashboard</h3>
                        <p>A Digital Marketplace for Crypto Collectibles and Non Fungable Tokens</p><a
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

        </div>
    </div>
</div>


@endsection
