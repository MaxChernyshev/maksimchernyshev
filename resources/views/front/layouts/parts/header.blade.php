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
    {{ localization()->getSupportedLocales()->count() }}
    <div class="container">
        <div class="row pt-2 pb-2">
            <div class="col-10">
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
            <div class="col-2">
                <div class="dropdown show">
                    <a class="btn btn-secondary text-uppercase" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ localization()->getCurrentLocale() }}
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        @foreach(localization()->getSupportedLocales() as $key => $locale)
                            <li>
                                <a hreflang="{{ $key }}"
                                   href="{{ localization()->getLocalizedURL($key) }}"
                                   class="p-2 link text-uppercase {{ localization()->getCurrentLocale() == $key ? 'is-active' : '' }}"
                                >{{ $key }}
                                </a>
                            </li>
                            {{--                        @if(localization()->getSupportedLocales()->count())--}}
                            <div class="dropdown-divider"></div>
                            {{--                            @endif--}}
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>


</header>
