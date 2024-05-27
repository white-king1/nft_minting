@extends('layouts.dashboard_layouts')
@section('content')
    <div class="content-body">
        <div class="container">
            <div class="page-title">
                <div class="row align-items-center justify-content-between">
                    <div class="col-6">
                        <div class="page-title-content">
                            <h3>Withdrawal In Progress</h3>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="breadcrumbs"><a href="#">Withdrawal </a><span><i
                                    class="ri-arrow-right-s-line"></i></span><a href="#">In Progress</a></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-4 col-xl-12">
                    <div class="card welcome-profile">
                        <div class="card-body"><img src="images/avatar/1.jpg" alt="">
                            @if ($wtdetails)
                                <h4>Your Withdrawal of ${{ number_format($wtdetails->withdrawal_amount) }} to</h4>
                                <h6>
                                    {{ $wtdetails->crypto_currency }} Wallet: {{ $wtdetails->wallet_address }} <br>
                                    is in progress.

                                </h6>
                            @else
                                <p>No withdrawals in progress.</p>
                            @endif

                            <br>
                            <br>
                            <p>Note:Your Wallet will be Credited within 10-15minutes.</p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
