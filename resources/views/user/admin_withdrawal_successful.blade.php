@extends('layouts.admin_dashboard_layouts')
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
                            <h4>Your Withdrawal of ${{number_format($adminwtdetails->adminwithdrawal_amount)}} from</h4>
                            <h6>
                                 Account Number: {{$adminwtdetails->account_number}} <br>
                                 was successfull.
                            </h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
