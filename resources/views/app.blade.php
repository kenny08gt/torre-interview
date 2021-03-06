<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Share your professional opportunities with the networks and contacts you know, get relevant referrals, and chat.">

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://torre.co">
    <meta property="og:title" content="Torre - matching talent with opportunities.">
    <meta property="og:description" content="Share your professional opportunities with the networks and contacts you know, get relevant referrals, and chat.">
    <meta property="og:image" content="https://s3-us-west-2.amazonaws.com/torre-media/static/opportunities-opengraph.png">
    <meta property="og:image:width" content="474">
    <meta property="og:image:height" content="248">

    <meta name="twitter:title" content="Torre - matching talent with opportunities.">
    <meta name="twitter:image" content="https://s3-us-west-2.amazonaws.com/torre-media/static/opportunities-opengraph.png">
    <meta name="twitter:card" content="summary_large_image">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/imgs/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/imgs/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/imgs/icons/favicon-16x16.png">
{{--    <link rel="manifest" href="/site.webmanifest">--}}

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
        nav hr {
            margin: -8px;
            border-left: 0;
            border-right: 0;
            border-bottom: 0;
            width: calc(100% + 16px);
            z-index: 1;
            border-top: 1px solid rgba(255,255,255,.12);
        }

        .torre-shadow {
            -webkit-box-shadow: -2px -2px 6px #383b40, 6px 6px 6px rgb(0 0 0 / 24%);
            box-shadow: -2px -2px 6px #383b40, 6px 6px 6px rgb(0 0 0 / 24%);
        }
        .background-image {
            background-image: url(/imgs/bk.jpg);
            background-size: cover;
            background-position: center center;
            height: calc(100vh - 54px);
        }
        .ps {
            height: 80vh;
        }
    </style>
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="font-sans antialiased">
<nav class="flex flex-wrap items-center justify-between bg-torre-black text-torre-white sticky z-10 top-0 overflow-hidden">
    <!-- logo -->
    <!-- hamburger -->
    <!-- links -->
    <!-- cta -->
    <div class="w-screen mt-3"></div>
    <div class="mb-2 sm:mb-0">
        <a href="https://torre.co/" target="_blank" class="text-2xl no-underline text-grey-darkest hover:text-blue-dark px-4">Torre</a>
    </div>
    <div>
{{--        <a href="/one" class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">One</a>--}}
{{--        <a href="/two" class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">Two</a>--}}
{{--        <a href="/three" class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">Three</a>--}}
    </div>
    <hr class="w-screen pt-2 mt-2">
</nav>
@inertia
</body>
</html>
