<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#183E6E">
    <title>@yield('title', 'PT Wira Griya')</title>
    <meta name="description" content="@yield('description', 'PT Wira Griya provides integrated industrial products and equipment for manufacturing and production operations.')">
    <link rel="canonical" href="{{ request()->url() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="PT Wira Griya">
    <meta property="og:title" content="@yield('title', 'PT Wira Griya | Integrated Industrial Products')">
    <meta property="og:description" content="@yield('description', 'Integrated industrial products and equipment for manufacturing and production operations.')">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta property="og:image" content="{{ asset('assets/images/home/mainpage.webp') }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'PT Wira Griya | Integrated Industrial Products')">
    <meta name="twitter:description" content="@yield('description', 'Integrated industrial products and equipment for manufacturing and production operations.')">
    <meta name="twitter:image" content="{{ asset('assets/images/home/mainpage.webp') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen overflow-x-clip bg-white text-dark antialiased">
    @yield('content')

    @unless (request()->is('admin*'))
        @include('components.sidebar')
    @endunless

    @stack('scripts')
</body>
</html>