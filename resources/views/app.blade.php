<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@500;600;900&family=Ovo&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    @routes
    <style>
        :root {
            --size: 120px;
            --font-size: 75px;
            --border-width: 4px;
            --torre-black: #272a2d;
            --torre-green: #c4d23a;
            --torre-white: #ffffffe6;
        }
    </style>
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="font-sans antialiased">
<nav class="flex flex-wrap items-center justify-between bg-torre-black text-torre-white sticky z-10 top-0">
    <!-- logo -->
    <!-- hamburger -->
    <!-- links -->
    <!-- cta -->
    <div class="w-screen mt-3"></div>
    <div class="mb-2 sm:mb-0">
        <a href="/home" class="text-2xl no-underline text-grey-darkest hover:text-blue-dark">Home</a>
    </div>
    <div>
        <a href="/one" class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">One</a>
        <a href="/two" class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">Two</a>
        <a href="/three" class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">Three</a>
    </div>
    <hr class="w-screen mt-3">
</nav>
@inertia
</body>
</html>
