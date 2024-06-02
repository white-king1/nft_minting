@extends('layouts.admin_dashboard_layouts')
@section('content')
    <div class="content-body">
        <div class="container">
            <div class="page-title">
                <div class="row align-items-center justify-content-between">
                    <div class="col-6">
                        <div class="page-title-content">
                            <h3>Transactions</h3>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="breadcrumbs"><a href="{{ route('admin') }}">Home </a><span><i
                                    class="ri-arrow-right-s-line"></i></span><a href="{{route('all.withdrawals')}}">Transactions</a></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xxl-12">

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All Withdrawals</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table-icon">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Email</th>
                                            <th>Account Number</th>
                                            <th>Withdraw Amount</th>
                                            <th>Crypto Currency</th>
                                            <th>Wallet Address</th>
                                            <th>Satus</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($all_withdrawals as $wtd)
                                            <tr>
                                                <td>{{ $wtd->user->email }}</td>
                                                <td>{{ $wtd->account_number }}</td>
                                                <td>${{ number_format($wtd->withdrawal_amount) }}</td>
                                                <td>{{ $wtd->crypto_currency }}</td>
                                                <td>{{ $wtd->wallet_address }}</td>
                                                <td>{{ $wtd->status }}</td>

                                                <td>
                                                    @if ($wtd->status != 'paid')

                                                  <span>Click if paid-></span> <a href="{{route('paid.withdrawals',$wtd->id)}}" class="btn btn-success" type="submit">Paid</a>
                                                    @endif
                                                    {{-- <span><i class="ri-check-line text-success me-1"></i></span><span><i
                                                            class="ri-close-line text-danger"></i>
                                                    </span> --}}
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All Deposits</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Email</th>
                                            <th>Account Number</th>
                                            <th>Deposit Amount </th>
                                            <th>Wallet Paid to</th>
                                            <th>Satus</th>
                                            <th>Actiion</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($all_deposits as $dpt)
                                            <tr>
                                                <td>{{ $dpt->user->email }}</td>
                                                <td>{{ $dpt->account_number }}</td>

                                                <td>${{ number_format($dpt->deposit_amount) }}</td>
                                                <td>{{ $dpt->crypto_currency }}</td>
                                                <td>{{ $dpt->status }}</td>


                                                <td>
                                                    @if ($dpt->status != 'recieved')

                                                  <span>Click if paid-></span> <a href="{{route('recieved.deposit',$dpt->id)}}" class="btn btn-success" type="submit">Recieved</a>
                                                    @endif
                                                    {{-- <span><i class="ri-check-line text-success me-1"></i></span><span><i
                                                            class="ri-close-line text-danger"></i>
                                                    </span> --}}
                                                </td>
                                            </tr>
                                        @endforeach



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card transparent">
                        <div class="card-header">
                            <h4 class="card-title">Close Account</h4>
                        </div>
                        <div class="card-body">
                            <p>Withdraw funds and close your Xtrader account - <span class="text-danger">this cannot be
                                    undone</span></p><a href="#" class="btn btn-danger">Close Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
