@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="en">


    <!-- Mirrored from enftx-html.vercel.app/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Apr 2024 14:43:48 GMT -->
    <!-- Added by HTTrack -->
    <meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!---- Website Information ---->
        <title>RainSea - RainSea NFT Dashboard </title>
        <meta name="description"
            content="ENFTX is the complete UX & UI dashboard for NFT. Here included bids, collection, wallet, and all user setting pages including profile, application, activity, payment method, api, sign in & sign up etc.">


        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body class="@@dashboard">

        <div id="preloader"><i>.</i><i>.</i><i>.</i></div>

        <div class="authincation section-padding" style="margin-top: -80px;">
            <div class="container h-100">
                <div class="row justify-content-center h-100 align-items-center">
                    <div class="col-xl-8 col-md-8">
                        <div class="mini-logo text-center my-4"><a href="index.html"><img src="images/logo.png"
                                    alt=""></a>
                            <h4 class="card-title mt-5">Sign up to RainSea NFT</h4>
                        </div>
                        <div class="auth-form card">
                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12 mb-3"><label class="form-label">Full Name</label><input
                                                name="name" type="text" class="form-control" placeholder="enter your fullname"
                                                value="{{ old('name') }}" required autocomplete="name">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-12 mb-3"><label class="form-label">Email</label><input
                                                name="email" type="email" class="form-control" placeholder="enter your email" value="" required
                                                autocomplete="email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-12 mb-3"><label class="form-label">Phone</label><input
                                                name="phone" type="phone" class="form-control" placeholder="enter your phone number"
                                                value="{{ old('phone') }}" required autocomplete="phone">
                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-12 mb-3"><label class="form-label">Ethereum Wallet Address</label><input
                                            name="ethereum" type="ethereum" class="form-control" placeholder="enter your ethereum wallet address"
                                            value="{{ old('ethereum') }}" required autocomplete="phone">
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                        <div class="col-12 mb-3"><label class="form-label">Password</label><input
                                                name="password" type="text" class="form-control" placeholder="enter your password" value="" required
                                                autocomplete="password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-12 mb-3"><label class="form-label">Confirm Password</label><input
                                                name="password_confirmation" type="text" class="form-control" placeholder="confirm your password"
                                                value="" required autocomplete="new password"></div>
                                        <div class="col-12">
                                            <div class="form-check"><input name="acceptTerms" type="checkbox"
                                                    class="form-check-input " value="false"><label
                                                    class="form-check-label">I
                                                    certify that I am 18 years of age or older, and agree to the <a
                                                        href="#" class="text-primary">User Agreement</a> and <a
                                                        href="#" class="text-primary">Privacy Policy</a>.</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3 d-grid gap-2"><button type="submit" class="btn btn-primary mr-2">Sign
                                            Up</button></div>
                                </form>
                                <div class="text-center">
                                    <p class="mt-3 mb-0"><a class="text-primary" href="{{ route('login') }}">Sign in</a>to
                                        your
                                        account</p>
                                </div>
                            </div>
                        </div>
                        <div class="privacy-link"><a href="signup-2.html#">Have an issue with 2-factor
                                authentication?</a><br><a href="signup-2.html#">Privacy Policy</a></div>
                    </div>
                </div>
            </div>
        </div>



        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>














        <script src="js/scripts.js"></script>


    </body>


    <!-- Mirrored from enftx-html.vercel.app/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Apr 2024 14:43:49 GMT -->

    </html>

    {{-- ////////////////////////////////////////////////////////////////// --}}
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="phone"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                                <div class="col-md-6">
                                    <input id="phone" type="phone"
                                        class="form-control @error('phone') is-invalid @enderror" name="phone" required
                                        autocomplete="phone">

                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
