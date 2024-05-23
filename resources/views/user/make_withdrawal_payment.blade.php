@extends('layouts.dashboard_layouts')
@section('content')
    <div class="content-body">
        <div class="container">
            <div class="page-title">
                <div class="row align-items-center justify-content-between">
                    <div class="col-6">
                        <div class="page-title-content">
                            <h3>Payment Page</h3>
                            <p class="mb-2">Welcome ENFTX Payment page</p>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="breadcrumbs"><a href="#">Payment </a><span><i
                                    class="ri-arrow-right-s-line"></i></span><a href="#">Page</a></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-4 col-xl-12">
                    <div class="card welcome-profile">
                        <div class="card-body"><img src="images/avatar/1.jpg" alt="">
                            <h4>Withdrawal Fee 0.25 ETH!</h4>
                            <p>You are required to copy the ETH Wallet Address below to pay a withdrawal fee, and <br>
                                kindly click on i've paid below to confirm your payment.</p>

                            <div class="row"
                                style="background-color: #030b21; padding:10px 10px;margin:0px 5px; border-radius:10px;">
                                <div class="col-md-4">
                                    <h3 style="color: #00ffa3;">ETH WALLET ADDRESS:</h3>
                                </div>

                                <div class="col-md-6"
                                    style="margin-left:-30px; margin-top:8px; display:flex; flex-direction:row;">

                                    <a href="">

                                        <p id="text" style="color: #00ffa3; margin-left:-60px;">@auth
                                                dfg876hjkleyhTHGBT7Uil


                                            @endauth

                                        </p>
                                    </a>
                                </div>

                                <div class="col-md-2">
                                    <button class="btn btn-primary col-6" onclick="copyFunction()">
                                        copy
                                    </button>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="text-end">

                                <a class="btn btn-primary" href="{{ route('withdrawal.inprogress') }}">I've Paid</a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script>
        function copyFunction() {

            var text = $('#text').html();
            console.log(text);
            navigator.clipboard.writeText(text);
            alert('Text copied');
        }
    </script>
@endsection
