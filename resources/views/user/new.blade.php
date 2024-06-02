@extends('layouts.dashboard_layouts')
@section('content')
    <div class="content-body">
        <div class="container">
            <div class="page-title">
                <div class="row align-items-center justify-content-between">
                    <div class="col-6">
                        <div class="page-title-content">
                            <h3>Make A Deposit</h3>
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
                            <h4 class="card-title">Two Steps To a simple Deposit</h4>
                        </div>
                        <div class="card-body">
                            <form  method="post" action="{{ route('deposit.details') }}">
                                @csrf
                                <div class="container">
                                    <div class="card-body">
                                        <div class="column ">
                                            <div class="row">
                                                <div class="card-body col-md-3 ml-3"></div>
                                                <div class="card-body col-md-6 ml-6"
                                                    style=" height:300px; background-color:grey;">
                                                    <center>
                                                        <h4 class="card-title mb-0 pl-50">UPLOAD ART</h4>
                                                    </center>
                                                    <center>
                                                        <div class="panel-body" style="color: black;">

                                                            @if (Auth::user()->image == null)
                                                                <div class="col-md-4" style="margin-left: 30px;">
                                                                    <img class="rounded-circle img-fluid"
                                                                        src="/assets/imgs/fabstock.jpg" style="height: 30%;"
                                                                        alt="uploadArt">
                                                                </div>
                                                            @else
                                                                <div class="col-md-2" style="margin-left: 30px;">
                                                                    <img class="rounded-circle img-fluid"
                                                                        src="/upload_images/{{ $post_style->filename }}"
                                                                        alt="UploadArt">
                                                                </div>
                                                            @endif


                                                            @if (count($errors) > 0)
                                                                <div class="alert alert-danger">
                                                                    <strong>Whoops!</strong> There were some problems
                                                                    with your input.
                                                                    <ul>
                                                                        @foreach ($errors->all() as $error)
                                                                            <li>{{ $error }}</li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            @endif
                                                            <br>

                                                        </div>
                                                    </center>

                                                </div>
                                                <div class="card-body col-md-3 ml-3"></div>


                                            </div>
                                            <center>
                                                {{-- <div class="col-3">
                                                    <label class="w-100" for="images">Display Image</label>
                                                    <input type="file" class="custom-file-input" name="image"
                                                         id="exampleInputFile">
                                                </div> --}}
                                                <div class="col-3">
                                                    <label class="w-100" for="images">Upload Images</label>
                                                    <input type="file" class="custom-file-input" name="images[]" multiple
                                                        id="exampleInputFile">
                                                </div>
                                            </center>
                                        </div>
                                    </div>
                                </div>
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
