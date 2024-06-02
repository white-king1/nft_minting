@extends('layouts.admin_dashboard_layouts')
@section('content')
    <div class="content-body" style="margin-top:-20px;">
        <div class="container">
            <div class="page-title">
                <div class="row align-items-center justify-content-between">
                    <div class="col-6">
                        <div class="page-title-content">
                            <h3>Make Transfers</h3>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="breadcrumbs"><a href="{{ route('admin') }}">Home </a><span><i
                                    class="ri-arrow-right-s-line"></i></span><a href="{{ route('make.transfer') }}">Transfer</a></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="container">

                            <form method="post" action="{{ route('transfer.details') }}">
                                @csrf
                                <div class="col-md-4"></div>
                                <div class="container col-md-4 ">
                                    <img src="/assets_dashboard/images/items/withdrawnow.png" alt=""
                                                         style="margin-top:-20px; margin-left:-50px; height:400px; border-radius:10px;">

                                </div>
                                <div class="col-md-4"></div>
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
                                            <label class="form-label">Transfer Amount $</label><input name="transfer_amount"
                                                type="text" class="form-control" value="">
                                        </div>
                                        <div class="col-md-4 mb-4"></div>
                                    </div>

                                    <div class="col-xxl-12">
                                    </div>
                                    <div class="btn minting_nft_art"><button type="submit"
                                            class="btn btn-primary mr-2">Transfer</button>
                                    </div>
                                </div>
                            </form>

                </div>
            </div>
        </div>
    </div>
@endsection
