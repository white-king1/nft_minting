@extends('layouts.dashboard_layouts')
@section('content')
    @if (Session::has('flash_message'))
        <center>
            <div class="alert {{ Session::get('flash_type') }} col-md-4">
                <h6>{{ Session::get('flash_message') }}</h6>
            </div>
        </center>
    @endif
    <div class="content-body">
        <div class="container">
            <div class="page-title">
                <div class="row align-items-center justify-content-between">
                    <div class="col-6">
                        <div class="page-title-content">
                            <h6>Make Withdrawals Into Your Private Crypto Wallet(BTC/ETH/USDT)</h6>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="breadcrumbs"><a href="{{ route('user.dashboard') }}">Home </a><span><i
                                    class="ri-arrow-right-s-line"></i></span><a
                                href="{{ route('make.withdrawal') }}">withdrawal</a></div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="container">

                    <form method="post" action="{{ route('withdrawal.details') }}">
                        @csrf
                        <div class="container">
                            <div class="column ">
                                <div class="row">
                                    <div class="card-body col-md-2 ml-2"></div>
                                    <div class="card-body col-md-8 ml-8">
                                        <center style="border-radius: 10px;border-colo:yellow;">
                                            <img src="/assets_dashboard/images/items/depositnow.png" alt=""
                                                width="300">
                                        </center>
                                        <center>
                                            <div class="panel-body" style="color: black;">


                                            </div>
                                        </center>

                                    </div>
                                    <div class="card-body col-md-2 ml-2"></div>


                                </div>

                            </div>
                        </div>
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
                                    <label class="form-label">Crypto Currency</label><input name="crypto_currency"
                                        type="text" class="form-control" value="">
                                </div>
                                <div class="col-md-4 mb-4"></div>
                            </div>

                            <br>
                            <div class="row">
                                <div class="col-md-4 mb-4"></div>
                                <div class="col-md-4 mb-4">
                                    <label class="form-label">Wallet Address</label><input name="wallet_address"
                                        type="text" class="form-control" value="">
                                </div>
                                <div class="col-md-4 mb-4"></div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-4 mb-4"></div>
                                <div class="col-md-4 mb-4">
                                    <label class="form-label">Withdraw Amount $</label><input
                                        name="withdrawal_amount" type="text" class="form-control" value="">
                                </div>
                                <div class="col-md-4 mb-4"></div>
                            </div>



                            <div class="col-xxl-12">
                            </div>
                            <div class="btn minting_nft_art"><button type="submit"
                                    class="btn btn-primary mr-2">withdraw</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
