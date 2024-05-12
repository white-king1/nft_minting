@extends('layouts.dashboard_layouts')
@section('content')
    <div class="content-body">
        <div class="container">
            <div class="page-title">
                <div class="row align-items-center justify-content-between">
                    <div class="col-6">
                        <div class="page-title-content">
                            <h3>Transaction In Progress</h3>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="breadcrumbs"><a href="#">Transaction </a><span><i
                                    class="ri-arrow-right-s-line"></i></span><a href="#">In Progress</a></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-4 col-xl-12">
                    <div class="card welcome-profile">
                        <div class="card-body"><img src="images/avatar/1.jpg" alt="">
                            <h4>Mint Fee 0.11 ETH!</h4>
                            <h6>Your payment of 0.11ETH is in progress,
                               please kindly contact your Buyer.</h6>
                               <br>
                               <br>



                           <p>Note:Once your Payment is confirmed,Quickly go to your collection here on your dashboard, <br>
                            copy your "Minted Art Link" and send to your Buyer. </p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
