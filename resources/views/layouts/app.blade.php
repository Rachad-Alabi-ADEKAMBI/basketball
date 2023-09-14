<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href=" {{ asset('/css/main.css') }} " />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="icon" type="image/x-icon" href="{{ asset('/images/logos/ico.ico')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <meta name='description' content='' />

    <meta name="robots" content='index, follow'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />



    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <x-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endif

        <!-- Page Content -->
        <main>
            <div class="app" id="app">
                {{ $slot }}
            </div>
        </main>

        <!--page footer-->
        <hr>
        <footer class="footer">
            <div class="footer__infos">
                <div class="logo">
                    <img src="{{ asset('images/logos/cruspher-text.png')}}" alt="">
                </div>
                <span>
                    Unification of fans from different continents
                    and regions, based on basketball interactive.
                </span>
            </div>
            <div class="footer__menu">
                <h4>
                    Links
                </h4>
                <ul>
                    <li><a href="">Clubs</a></li>
                    <li><a href="">Shop</a></li>
                    <li><a href="">Fans tokens</a></li>
                    <li><a href="">Cryptos news</a></li>
                </ul>
            </div>

            <div class="footer__menu">
                <h4>
                    About us
                </h4>
                <ul>
                    <li><a href="">Register</a></li>
                    <li><a href="">Partnership</a></li>
                    <li><a href="">Terms of use</a></li>
                    <li><a href="">Privacy policy</a></li>
                </ul>
            </div>
        </footer>
    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>