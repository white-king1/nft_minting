@extends('layouts.admin_dashboard_layouts')
@section('content')
    <div class="content-body">
        <div class="container">
            <div class="page-title">
                <div class="row align-items-center justify-content-between">
                    <div class="col-6">
                        <div class="page-title-content">
                            <h3>Make Transfers</h3>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="breadcrumbs"><a href="#">Transfer </a><span><i
                                    class="ri-arrow-right-s-line"></i></span><a href="#">Page</a></div>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top:-30px;">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="{{ route('transfer.details') }}">
                                @csrf
                                <div class="container">
                                    <div class="column ">
                                        <div class="row">
                                            <div class="card-body col-md-2 ml-2"></div>
                                            <div class="card-body col-md-8 ml-8">
                                                <center style="border-radius: 10px;border-colo:yellow;">
                                                    <img src="/assets_dashboard/images/items/withdrawnow.png" alt=""
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
        </div>
    </div>
@endsection
