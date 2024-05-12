@extends('layouts.dashboard_layouts')
@section('content')
    <div class="content-body">
        <div class="container">
            <div class="page-title">
                <div class="row align-items-center justify-content-between">
                    <div class="col-6">
                        <div class="page-title-content">
                            <h3>Minting fee</h3>
                            <p class="mb-2">Welcome ENFTX Mint Fee Confirmation page</p>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="breadcrumbs"><a href="#">Mint </a><span><i
                                    class="ri-arrow-right-s-line"></i></span><a href="#">Fee</a></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-4 col-xl-12">
                    <div class="card welcome-profile">
                        <div class="card-body"><img src="images/avatar/1.jpg" alt="">
                            <h4>Mint Fee 0.11 ETH!</h4>
                            <p>You are requied to pay 0.11ETH Minting Fee, kindly click on proceed below to make payments.</p>

                            <div class="text-end">

                                <a class="btn btn-primary" href="{{route ('make.payments')}}">Proceed</a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
