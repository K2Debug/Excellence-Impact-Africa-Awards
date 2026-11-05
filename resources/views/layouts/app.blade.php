<!doctype html>
<html lang="en-GB">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $description ?? $site['description'] }}">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" href="{{ asset('images/hero-placeholder.svg') }}" type="image/svg+xml">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{ $site['name'] }}">
    <meta property="og:title" content="{{ ($title ?? $site['short_name']) . ', ' . $site['short_name'] }}">
    <meta property="og:description" content="{{ $description ?? $site['description'] }}">
    <title>{{ ($title ?? $site['short_name']) . ', ' . $site['short_name'] }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex min-h-screen flex-col font-sans">
    <a href="#main-content" class="skip-link">Skip to main content</a>
    @include('partials.header')
    <main id="main-content" class="flex-1">
        @yield('content')
    </main>
    @include('partials.footer')
</body>
</html>
