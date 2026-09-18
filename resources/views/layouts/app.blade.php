<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="purple">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'John Paul Gonzaga — Full-Stack Developer (cmndrpaul)')</title>
    <meta name="description" content="@yield('meta_description', 'Official portfolio of John Paul Gonzaga (cmndrpaul) — Full-Stack Developer specializing in Laravel, React, PHP, JavaScript, and modern web architectures.')">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Technology Brand Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">

    <!-- Styles & Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body x-data="portfolioApp()" class="min-h-screen flex flex-col relative antialiased transition-colors duration-300 overflow-x-hidden">

    <!-- Top Glow Gradient Backgrounds -->
    <div class="fixed top-0 left-1/2 -translate-x-1/2 w-[1000px] h-[400px] bg-purple-600/10 blur-[130px] rounded-full pointer-events-none -z-10"></div>
    <div class="fixed top-[40%] right-[-10%] w-[500px] h-[500px] bg-cyan-600/10 blur-[140px] rounded-full pointer-events-none -z-10"></div>

    <!-- Navigation Header with Scroll-Driven Indicator -->
    @include('components.nav')

    <!-- Main Content Area -->
    <main class="flex-grow pt-24">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('components.footer')

    <!-- Live Visitor Chat Floating Widget -->
    @include('components.chat-widget')

    <!-- Request CV Modal -->
    @include('components.cv-modal')

    <!-- Command Palette (Ctrl+K) -->
    @include('components.command-palette')

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            lucide.createIcons();
        });
        document.addEventListener('alpine:initialized', () => {
            lucide.createIcons();
        });
    </script>
</body>
</html>
