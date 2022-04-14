@extends('front.layouts.layout')

@section('content')




    <div class="container-fluid mt-5 mb-5 d-flex justify-content-center" style="max-height: 100%">
        <div class="row justify-content-center">
            <div class="col-12">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('img/carousel/Laravel.svg') }}" class="d-block mx-auto my-auto align-middle" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/carousel/PHP-logo.svg') }}" class="d-block mx-auto my-auto align-middle" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/carousel/Database-mysql.svg') }}" class="d-block mx-auto my-auto align-middle" alt="...">
                        </div>
                        {{--            <div class="carousel-item">--}}
                        {{--                <img src="..." class="d-block w-100" alt="...">--}}
                        {{--            </div>--}}
                        {{--            <div class="carousel-item">--}}
                        {{--                <img src="..." class="d-block w-100" alt="...">--}}
                        {{--            </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
