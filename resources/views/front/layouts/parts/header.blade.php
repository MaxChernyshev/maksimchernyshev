<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }}</title>

    <!-- Styles -->
    <style>
        body {
            font-family: 'Marmelad', sans-serif;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/front/css/app.css') }}">
</head>
<html>
<body>
<header id="header" class="">
    <div class="container">
        <div class="row pt-2 pb-2">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                            aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon text-muted"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link text-white" href="{{ route('main.page') }}">Home</a>
                            <a class="nav-link text-white" href="{{ route('contact.index') }}">Contact</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>


</header>
