@extends('layouts.dashboard_layouts')
@section('content')
    <div class="content-body">
        <div class="container">
            <div class="page-title">
                <div class="row align-items-center justify-content-between">
                    <div class="col-6">
                        <div class="page-title-content">
                            <h3>Minted Arts Collection</h3>
                            <p class="mb-2">Your Minted Arts</p>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="breadcrumbs"><a href="#">Minted </a><span><i
                                    class="ri-arrow-right-s-line"></i></span><a href="#">Arts</a></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Minted Arts Collection</h4>
                        </div>
                        <div class="card-body">

                            <div class="container">
                                <div class="card-body">
                                    <div class="column ">
                                        <div class="row">
                                            <div class="row d-flex">
                                                {{-- @foreach ($post_uploadedarts->images as $img)
                                                       <div class="col-3">
                                                        <img src="/art_images/{{ $img->name }}" alt="Image 1"
                                                        style="width: 300px; height:300px;">
                                                       </div>

                                                    @endforeach --}}
                                                @if (!empty($post_uploadedarts))
                                                    @foreach ($post_uploadedarts as $img)
                                                        <div class="col-3">
                                                            <img src="/art_images/{{ $img->name }}" alt="Image"
                                                                style="width:100%; height: 100%;">
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <p>No images uploaded</p>
                                                @endif
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-4 mb-4"></div>
                                <div class="col-md-4 mb-4">
                                    <label class="form-label title_lab" for="exampleFormControlTextarea4">Art Title:</label>
                                    <div class="container card card-body">
                                        <h4 class="title_head">{{ $post_uploadedarts[0]->upload->title }}</h4>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4"></div>


                            </div>

                            <div class="col-xxl-12">
                                <br>
                                <div class="row">
                                    <div class="col-md-4 mb-4"></div>
                                    <div class="col-md-4 mb-4">
                                        <label class="form-label desc_lab">Art Description:</label>
                                        <div class="container card card-body">
                                            <h4 class="desc_head">{{ $post_uploadedarts[0]->upload->description }}</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4"></div>
                                </div>

                                <div class="container card card-body">
                                    <p>Congratulations Your Art has been successfully Minted,kindly copy the Url below and
                                        contact your buyer</p>
                                </div>

                                <div class="row">
                                     <div class="col-md-1"><h3>Url:</h3></div>
                                    <div class="col-md-9" style="margin-left:-30px; margin-top:8px;">
                                        <a href="">
                                            <p id="text">@auth
                                                    {{-- env('APP_URL'). '/user/upload_arts/'.$post_uploadedarts[0]->upload->id --}}
                                                    {{-- {{ env('DB_HOST').':8000'. '/user/order_details/'.$place->transaction_id}} --}}
                                                    <?php
                                                    $rootUrl = env('APP_ENV') == 'production' ? 'https://www.midfeeglobal.com' : 'http://127.0.0.1:8000';
                                                    ?>
                                                    {{ $rootUrl . '/user/upload_arts/' . $post_uploadedarts[0]->upload->id }}


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

                                <div class="col-xxl-12">
                                </div>
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
