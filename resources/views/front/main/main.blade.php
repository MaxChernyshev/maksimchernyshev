@extends('front.layouts.layout')

@section('content')
    <section id="main-div"
        class="font-sans antialiased text-gray-900 leading-normal tracking-wider bg-cover sm-cover h-screen flex items-center"
        style="background-image:url('{{ asset('storage/front/images/landscape.jpg') }}');">
        <div class="max-w-4xl flex items-center justify-center h-auto lg:h-screen flex-wrap mx-auto lg:my-0">
            <!--Main Col-->
            <div id="profile" class="w-full rounded-xl shadow-2xl bg-white opacity-75 mx-12 lg:mx-0">
                <div class="p-4 md:p-12 text-center lg:text-left">

                    <h1 class="text-3xl font-bold pt-8 lg:pt-0 text-center">Max Chernyshev</h1>
                    <h2 class="text-2xl font-bold pt-8 lg:pt-0 text-center">Laravel backend developer</h2>

                    <div class="flex flex-row items-center justify-center my-4">
                        <div class="w-1/6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-8 h-8 text-green-700 mx-auto">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
                            </svg>

                        </div>
                        <div class="w-5/6">
                            <p class=" pt-2 text-gray-600 text-xs lg:text-sm text-left">
                                Hi! I am a PHP/Laravel backend developer.
                                I have gained experience in PHP/Laravel, MySQL/Eloquent, Admin panels,
                                TailwindCSS, Bootstrap, Blade, Livewire, LAMP, third party API, Postman, Github, Gitlab.
                                I have worked on a variety of projects, from small-scale websites to large-scale enterprise
                                applications,
                                and have consistently delivered quality work that meets client expectations.
                            </p>

                        </div>
                    </div>

                    <div class="flex flex-row items-center justify-center my-4">
                        <div class="w-1/6">


                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-8 h-8  text-green-700 mx-auto">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M20.893 13.393l-1.135-1.135a2.252 2.252 0 01-.421-.585l-1.08-2.16a.414.414 0 00-.663-.107.827.827 0 01-.812.21l-1.273-.363a.89.89 0 00-.738 1.595l.587.39c.59.395.674 1.23.172 1.732l-.2.2c-.212.212-.33.498-.33.796v.41c0 .409-.11.809-.32 1.158l-1.315 2.191a2.11 2.11 0 01-1.81 1.025 1.055 1.055 0 01-1.055-1.055v-1.172c0-.92-.56-1.747-1.414-2.089l-.655-.261a2.25 2.25 0 01-1.383-2.46l.007-.042a2.25 2.25 0 01.29-.787l.09-.15a2.25 2.25 0 012.37-1.048l1.178.236a1.125 1.125 0 001.302-.795l.208-.73a1.125 1.125 0 00-.578-1.315l-.665-.332-.091.091a2.25 2.25 0 01-1.591.659h-.18c-.249 0-.487.1-.662.274a.931.931 0 01-1.458-1.137l1.411-2.353a2.25 2.25 0 00.286-.76m11.928 9.869A9 9 0 008.965 3.525m11.928 9.868A9 9 0 118.965 3.525" />
                            </svg>
                        </div>
                        <div class="w-5/6">
                            <p class=" pt-2 text-gray-600 text-xs lg:text-sm text-left">
                                Almere, Flevoland, Netherlands
                            </p>

                        </div>
                    </div>

                    <div class="flex flex-row items-center justify-center my-4">
                        <div class="w-1/6">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-8 h-8  text-green-700 mx-auto">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                        </div>
                        <div class="w-5/6">
                            <p class=" pt-2 text-gray-600 text-xs lg:text-sm text-left">
                                52.376946958092795° N, 5.217234364630099° W
                            </p>

                        </div>
                    </div>

                    {{-- <div class="w-full flex items-center justify-center mx-auto">
                        <div class="pt-12 pb-8">
                            <button class="bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded-full">
                                Get In Touch
                            </button>
                        </div>
                    </div> --}}

                    <div
                        class="mt-6 pb-16 lg:pb-0 w-4/5 lg:w-full mx-auto flex flex-wrap items-center justify-center space-x-10">
                        <a class="link" href="#" data-tippy-content="@github">
                            <svg class="h-6 fill-current text-gray-600 hover:text-green-700" role="img"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <title>GitHub</title>
                                <path
                                    d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                            </svg>
                        </a>

                        <a class="link" href="https://www.linkedin.com/in/maksimchernyshev/"
                            data-tippy-content="@linkedin" target="_blank">
                            <svg class="h-6 fill-current text-gray-600 hover:text-green-700" role="img"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <title>LinkedIn</title>
                                <path
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Pin to top right corner -->
            <div class="absolute top-0 right-0 h-12 w-18 p-4">
                <button class="js-change-theme focus:outline-none">🌙</button>
            </div>

        </div>

        <script src="https://unpkg.com/popper.js@1/dist/umd/popper.min.js"></script>
        <script src="https://unpkg.com/tippy.js@4"></script>
        <script>
            //Init tooltips
            tippy('.link', {
                placement: 'bottom'
            })

            //Toggle mode
            const toggle = document.querySelector('.js-change-theme');
            const body = document.getElementById('main-div');
            // const body = document.querySelector('body');
            const profile = document.getElementById('profile');


            toggle.addEventListener('click', () => {

                if (body.classList.contains('text-gray-900')) {
                    toggle.innerHTML = "☀️";
                    body.classList.remove('text-gray-900');
                    body.classList.add('text-gray-100');
                    profile.classList.remove('bg-white');
                    profile.classList.add('bg-gray-900');
                } else {
                    toggle.innerHTML = "🌙";
                    body.classList.remove('text-gray-100');
                    body.classList.add('text-gray-900');
                    profile.classList.remove('bg-gray-900');
                    profile.classList.add('bg-white');

                }
            });
        </script>

    </section>
@endsection
