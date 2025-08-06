<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ 'Portfolio Matías Orozco' }}</title>
    <meta name="description" content="Portfolio de Matías Orozco, aquí encontrarás información sobre mi experiencia, educación, habilidades y proyectos." />
    <meta name="author" content="Matías Orozco" />
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>




    <link rel="stylesheet" href="{{ asset('assets/css/banner.css') }}">
    <script src="{{ asset('assets/js/banner.js') }}" defer></script>


    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-800 font-sans antialiased dark:bg-gray-900 dark:text-gray-200">
    <!-- Header / Navbar -->
    @include('header')

    <!-- Main content -->
    <main class="">
        {{ $slot }}
    </main>

    <!-- Footer -->
    @include('footer')

</body>

</html>