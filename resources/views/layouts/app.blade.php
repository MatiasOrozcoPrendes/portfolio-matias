<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ config('app.name', 'Portfolio Matías Orozco') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-800 font-sans antialiased">

    <!-- Header / Navbar -->
    @include('header')

    <!-- Main content -->
    <main class="py-10">
        {{ $slot }}
    </main>

    <!-- Footer -->
    @include('footer')
    
</body>

</html>