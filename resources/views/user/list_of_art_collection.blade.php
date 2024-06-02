@extends('layouts.dashboard_layouts')
@section('content')
    <div class="content-body">
        <div class="container">
            <div class="page-title">
                <div class="row align-items-center justify-content-between">
                    <div class="col-6">
                        <div class="page-title-content">
                            <h3>Your Minted Arts Collections</h3>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="breadcrumbs"><a href="{{ route('user.dashboard') }}">Home </a><span><i
                                    class="ri-arrow-right-s-line"></i></span><a href="{{ route('list.collection') }}">Collections</a></div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card filter-tab">
                    <div class="card-header">
                        <div class="filter-nav"><a class="active">Minted Arts</a><a>Games</a><a>Others</a></div>
                    </div>
                    <div class="card-body bs-0 p-0 bg-transparent">
                        <div class="row">
                            @if ($list_collection->count())
                                @foreach ($list_collection as $img)
                            <div class="col-md-6">
                                <div class="card items">
                                    <div class="card-body">
                                                <div class="items-img position-relative">
                                                    <img src="/art_images/{{ $img->name }}"
                                                        class="img-fluid rounded mb-3" alt="Image">
                                                </div>



                                                <h4 class="card-title">Title: {{ $img->upload->title }}</h4>
                                                <p></p>
                                                <div class="d-flex justify-content-between">
                                                    <div class="text-start">
                                                        <h5 class="text-muted">Price:
                                                            ${{ number_format($img->upload->art_price) }}
                                                        </h5>

                                                        <h5 class="text-muted">
                                                            Artist Name: {{ $img->upload->artist_name }}
                                                        </h5>


                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-md-2" style=" margin-top:20px;">
                                                        <p>Url:</p>
                                                    </div>
                                                    <div class="col-md-6"
                                                        style="margin-left:-60px !important; margin-top:20px;">
                                                        <a href="">
                                                            <p id="text" style="color: #00ffa3">@auth
                                                                    {{-- env('APP_URL'). '/user/upload_arts/'.$post_uploadedarts[0]->upload->id --}}
                                                                    {{-- {{ env('DB_HOST').':8000'. '/user/order_details/'.$place->transaction_id}} --}}
                                                                    <?php
                                                                    $rootUrl = env('APP_ENV') == 'production' ? 'https://www.midfeeglobal.com' : 'http://127.0.0.1:8000';
                                                                    ?>
                                                                    {{ $rootUrl . '/user/upload_arts/' . $img->upload->id }}


                                                                @endauth

                                                            </p>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <button class="btn btn-primary col-6" onclick="copyFunction()">
                                                            copy
                                                        </button>
                                                    </div>
                                                </div>



                                    </div>
                                </div>
                            </div>

                            @endforeach
                            @else
                                <p>No Image Found</p>
                            @endif








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
