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
        <div class="row">
            <div class="col-12">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('main.page') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('contact.index') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
