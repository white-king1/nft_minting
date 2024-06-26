@extends('layouts.dashboard_layouts')
@section('content')
    <div class="content-body">
        <div class="container">
            <div class="page-title">
                <div class="row align-items-center justify-content-between">
                    <div class="col-6">
                        <div class="page-title-content">
                            <h3>Deposit In Progress</h3>
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
                            <h4>Your Deposit of ${{number_format($dptdetails->deposit_amount)}} is successfull</h4>
                            <h6>
                                Kindly click on Wallet to view your Available balance
                            </h6>

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
