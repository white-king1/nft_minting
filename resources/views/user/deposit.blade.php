@extends('layouts.dashboard_layouts')
@section('content')
    <div class="content-body">
        <div class="container">
            <div class="page-title">
                <div class="row align-items-center justify-content-between">
                    <div class="col-6">
                        <div class="page-title-content">
                            <h4 class="card-title">Make a deposit into your wallet here...</h4>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="breadcrumbs"><a href="{{route ('user.dashboard')}}">Home </a><span><i
                                    class="ri-arrow-right-s-line"></i></span><a href="{{route ('make.deposit')}}">Deposit</a></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-body">
                            <form  method="post" action="{{ route('deposit.details') }}">
                                @csrf
                                <div class="col-md-4"></div>
                                <div class="container col-md-4 ">
                                    <img src="/assets_dashboard/images/items/withdrawnow.png" alt=""
                                                         style="margin-top:-20px; margin-left:-50px; height:400px; border-radius:10px;">

                                </div>
                                <div class="col-md-4"></div>
                                <br>
                                <div class="row">
                                    <div class="col-md-4 mb-4">

                                    </div>
                                    <div class="col-md-4 mb-4"><label class="form-label">Account Number</label><input
                                            name="account_number" type="text" class="form-control" value="">
                                    </div>
                                    <div class="col-md-4 mb-4">

                                    </div>

                                </div>

                                <div class="col-xxl-12">
                                    <br>
                                    <div class="row">
                                        <div class="col-md-4 mb-4"></div>
                                        <div class="col-md-4 mb-4">
                                            <label class="form-label">Deposit  Amount $</label><input
                                            name="deposit_amount" type="text" class="form-control" value="">
                                        </div>
                                        <div class="col-md-4 mb-4"></div>
                                    </div>

                                    <br>
                                    <div class="row">
                                        <div class="col-md-4 mb-4"></div>
                                        <div class="col-md-4 mb-4">
                                            <label class="form-label">Crypto Currency</label><input
                                            name="crypto_currency" type="text" class="form-control" value=""
                                            placeholder="BTC OR USDT OR ETH"
                                            >
                                        </div>
                                        <div class="col-md-4 mb-4"></div>
                                    </div>



                                    <div class="col-xxl-12">
                                    </div>
                                    <div class="btn minting_nft_art"><button type="submit" class="btn btn-primary mr-2">deposit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
