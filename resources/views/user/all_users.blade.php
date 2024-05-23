@extends('layouts.admin_dashboard_layouts')
@section('content')
    <div class="content-body">
        <div class="container">
            <div class="page-title">
                <div class="row align-items-center justify-content-between">
                    <div class="col-6">
                        <div class="page-title-content">
                            <h3>ALL USERS</h3>
                            <p class="mb-2">ALL USERS DETAILS</p>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="breadcrumbs"><a href="#">All </a><span><i
                                    class="ri-arrow-right-s-line"></i></span><a href="#">Users</a></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-sm-6">
                    <div class="stat-widget d-flex align-items-center">
                        <div class="widget-icon me-3 bg-primary"><span><i class="ri-file-copy-2-line"></i></span></div>
                        <div class="widget-content">
                            <h3>24K</h3>
                            <p>Total Number Users</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="stat-widget d-flex align-items-center">
                        <div class="widget-icon me-3 bg-success"><span><i class="ri-file-list-3-line"></i></span></div>
                        <div class="widget-content">
                            <h3>82K</h3>
                            <p>Auction</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="stat-widget d-flex align-items-center">
                        <div class="widget-icon me-3 bg-warning"><span><i class="ri-file-paper-line"></i></span></div>
                        <div class="widget-content">
                            <h3>200</h3>
                            <p>Creators</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="stat-widget d-flex align-items-center">
                        <div class="widget-icon me-3 bg-danger"><span><i class="ri-file-paper-2-line"></i></span></div>
                        <div class="widget-content">
                            <h3>89</h3>
                            <p>Canceled</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card">
                            <a class="btn btn-primary" href="create-invoice.html">Place a Bid</a>

                        <div class="card-body p-0 bs-0 bg-transparent">
                            <div class="bid-table">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="form-check"><input class="form-check-input" type="checkbox"
                                                            id="flexCheckDefault" value=""></div>
                                                </th>
                                                <th>User ID</th>
                                                <th>Email</th>
                                                <th>Phone Number</th>
                                                <th>Balance</th>
                                                <th>Account Number</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($all_users as $user)

                                            <tr>
                                                <td>
                                                    <div class="form-check"><input class="form-check-input" type="checkbox"
                                                            id="flexCheckDefault" value=""></div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center"><img src="images/items/15.jpg"
                                                            alt="" width="60" class="me-3 rounded">
                                                        <div class="flex-grow-1">
                                                            <h6 class="mb-0">Name</h6>
                                                            <p class="mb-0">{{ $user->name }}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{ $user->email }}</td>

                                                <td>{{ $user->phone }}</td>
                                                <td> ${{ number_format($user->wallet->balance ) }}</td>
                                                <td><img src="images/avatar/1.jpg" alt="" width="40"
                                                        class="me-2 rounded-circle">{{ $user->account_number }}</td>
                                                <td>
                                                    <a href="{{ route('delete.users', $user->id) }}" class="btn btn-danger"
                                                        type="submit">Delete
                                                    </a>
                                                </td>
                                            </tr>

                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
