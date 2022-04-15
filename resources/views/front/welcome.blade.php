@extends('front.layouts.layout')

@section('content')

    <div class="container-fluid mt-5 mb-5">
        <div class="row d-flex align-items-center">
            <div class="col-12">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('img/carousel/Laravel.svg') }}" class="img-fluid" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/carousel/PHP-logo.svg') }}" class="img-fluid" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/carousel/Database-mysql.svg') }}" class="img-fluid" alt="...">
                        </div>

                    </div>
                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>


    {{--    <div class="container-fluid mt-5 mb-5">--}}
    {{--        <div class="row align-items-center justify-content-center">--}}
    {{--            <div class="col-12">--}}
    {{--                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">--}}
    {{--                    <div class="carousel-inner">--}}
    {{--                        <div class="carousel-item active h-100">--}}
    {{--                            <img src="{{ asset('img/carousel/Laravel.svg') }}" class="img-fluid d-block mx-auto min-vh-50" alt="...">--}}
    {{--                        </div>--}}
    {{--                        <div class="carousel-item h-100">--}}
    {{--                            <img src="{{ asset('img/carousel/PHP-logo.svg') }}" class="img-fluid d-block mx-auto min-vh-50" alt="...">--}}
    {{--                        </div>--}}
    {{--                        <div class="carousel-item h-100">--}}
    {{--                            <img src="{{ asset('img/carousel/Database-mysql.svg') }}" class="img-fluid d-block mx-auto min-vh-50" alt="...">--}}
    {{--                        </div>--}}
    {{--                    </div>--}}

    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}




@endsection
