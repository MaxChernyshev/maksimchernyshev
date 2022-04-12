@extends('front.layouts.layout')

@section('content')

    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-12 my-auto">

                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif


                @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif


                @if ($message = Session::get('warning'))
                    <div class="alert alert-warning alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif


                @if ($message = Session::get('info'))
                    <div class="alert alert-info alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif


                @if ($errors->any())
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        Please check the form below for errors
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/carousel/Laravel.svg') }}" class="d-block mx-auto my-auto align-middle w-25" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/carousel/PHP-logo.svg') }}" class="d-block mx-auto my-auto align-middle w-25" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/carousel/Database-mysql.svg') }}" class="d-block mx-auto my-auto align-middle w-25" alt="...">
            </div>
{{--            <div class="carousel-item">--}}
{{--                <img src="..." class="d-block w-100" alt="...">--}}
{{--            </div>--}}
{{--            <div class="carousel-item">--}}
{{--                <img src="..." class="d-block w-100" alt="...">--}}
{{--            </div>--}}
        </div>
    </div>


@endsection
