<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--<meta name="robots" content="noindex">-->
    <meta name="robots" content="index,follow">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', env('APP_NAME'))</title>
    <meta name="description" content="@yield('description')"/>

    {{-- Facebook share --}}
    <meta property="og:url" content="@yield('canonical')" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title', env('APP_NAME'))" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:image" content="{{asset('imgs/logo.png')}}"/>

    {{-- Twitter share --}}
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="@yield('title', '')"/>
    <meta name="twitter:description" content="@yield('description',)"/>
    <meta name="twitter:image" content="{{asset('imgs/logo.png')}}"/>

    {{-- Canonical --}}
    <link rel="canonical" href="@yield('canonical', '')"/>

    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/apple-touch-icon')}}')}}">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">


    <!--{{-- AOS CSS CDN --}}-->
    <!--<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">-->

    <!--{{-- Tailwind CSS --}}-->
    <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}">

    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel='dns-prefetch' href='//fonts.gstatic.com' />

     <!--{{-- font family --}}-->
    <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>

    <!--{{-- testimonials --}}-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

   <!--{{-- intl Tel Input CSS --}}-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <style> .iti { width: 100%; } </style>

    {{--     --}}
    <script src="https://kit.fontawesome.com/2c6b599d00.js" crossorigin="anonymous"></script>

    {{-- Alpine JS --}}
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>

    @yield('links')
<!-- Swiper's CSS -->
<link
rel="stylesheet"
href="https://unpkg.com/swiper/swiper-bundle.min.css"
/>


<style>
     body {
        font-family: 'Comfortaa';font-size: 16px;
    }


</style>
</head>

<body class="">

    {{-- Web Navbar --}}
    @include('partials.frontend.navbar')

    @yield('content')

    {{-- Footer --}}
    @include('partials.frontend.footer')


   {{ TawkTo::widgetCode("https://embed.tawk.to/5bdb5fdd2ba6b31341712205/default")}}
    {{-- scripts --}}
    {{-- jQuery cdn --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    {{-- AJAX jQuery cdn --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    {{-- intl Tel Input JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    {{-- AOS JS CDN --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init();</script>

    @yield('scripts')
</body>

</html>
