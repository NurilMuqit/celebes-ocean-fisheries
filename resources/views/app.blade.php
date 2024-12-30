<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="icon" href="{{ asset('images/logopt2.png') }}" type="image/png">

    {{-- AlpineJS --}}

    {{-- Tailwind --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-montserrat bg-biru">

    {{-- header --}}
    <x-navbar />

    <main>
        @yield('content')
    </main>

    {{-- footer --}}
    <x-footer />

</body>

</html>
