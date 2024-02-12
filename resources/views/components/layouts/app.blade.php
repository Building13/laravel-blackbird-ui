<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="apple-mobile-web-app-status-bar-style" content="#0D0B14">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>{{ $title ?? 'Blackbird UI' }}</title>

    <!-- Standard favicon -->
    <link rel="icon" type="image/x-icon" href="/favicons/favicon.ico">

    <!-- Recommended favicon sizes -->
    <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="48x48" href="/favicons/favicon-48x48.png">

    <!-- Apple Touch Icons (used by iOS devices) -->
    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">

    <!-- Android/Google Icons -->
    <link rel="shortcut icon" href="/favicons/favicon.ico">

    <!-- Microsoft Tiles (for Windows) -->
    <meta name="msapplication-config" content="/browserconfig.xml" />
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/favicons/mstile-144x144.png">

    <!-- Safari Pinned Tab Icon -->
    <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#5bbad5">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-base font-brand-sans-regular text-foreground antialiased">
    <div class="min-h-screen">
        {{ $header ?? '' }}
        <main>
            {{ $slot }}
        </main>
        {{ $footer ?? '' }}
    </div>
    @stack('scripts')
</body>

</html>
