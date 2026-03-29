<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- SEO: Title and Description --}}
    <title>@yield('title', 'Notion Rescue — 4-Week Workspace Cleanup & Optimization | Notion Providers')</title>
    <meta name="description" content="@yield('meta_description', 'Notion Rescue is a fixed-scope, 4-week Notion workspace cleanup, reorganization, and optimization service. Hands-on expert help to get your workspace working again. By Notion Providers.')">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="author" content="Notion Providers">

    {{-- SEO: Canonical --}}
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- SEO: Open Graph --}}
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('og_title', 'Notion Rescue — 4-Week Workspace Cleanup & Optimization')">
    <meta property="og:description" content="@yield('og_description', 'Fixed-scope, 4-week Notion workspace cleanup, reorganization, and optimization. Hands-on expert help by certified Notion consultants.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="Notion Providers">
    <meta property="og:locale" content="en_US">
    <meta property="og:image" content="{{ asset('images/NP-wide-3x-close.png') }}">
    <meta property="og:image:alt" content="Notion Providers logo">

    {{-- SEO: Twitter Card --}}
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="@yield('og_title', 'Notion Rescue — 4-Week Workspace Cleanup & Optimization')">
    <meta name="twitter:description" content="@yield('og_description', 'Fixed-scope, 4-week Notion workspace cleanup, reorganization, and optimization. Hands-on expert help by certified Notion consultants.')">
    <meta name="twitter:image" content="{{ asset('images/NP-wide-3x-close.png') }}">

    {{-- Favicons --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('images/site.webmanifest') }}">
    <meta name="theme-color" content="#1e1e1e">

    {{-- Performance: Preconnect and Preload --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://www.googletagmanager.com">
    <link rel="dns-prefetch" href="https://www.googletagmanager.com">
    <link rel="dns-prefetch" href="https://cdn.tailwindcss.com">
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&family=Montserrat:wght@400;500;600;700;800;900&display=swap" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"></noscript>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#fefbf0',
                            100: '#fef3cd',
                            200: '#fde49b',
                            300: '#fbd269',
                            400: '#f5b731',
                            500: '#e29700',
                            600: '#c67d00',
                            700: '#a46200',
                            800: '#874d08',
                            900: '#6f3f0e',
                            950: '#412110',
                        },
                        surface: {
                            50: '#f5f5f5',
                            100: '#ebebeb',
                            200: '#d6d6d6',
                            300: '#b8b8b8',
                            400: '#8f8f8f',
                            500: '#6e6e6e',
                            600: '#4a4a4a',
                            700: '#3a3a3a',
                            800: '#2e2e2e',
                            900: '#252525',
                            950: '#1e1e1e',
                        },
                    },
                    fontFamily: {
                        sans: ['Poppins', 'Montserrat', 'ui-sans-serif', 'system-ui', 'sans-serif'],
                    },
                },
            },
        }
    </script>

    <style>
        html { scroll-behavior: smooth; }
        ::selection { background-color: #e29700; color: #fff; }
        body { -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; }

        @keyframes fade-in-up {
            from { opacity: 0; transform: translateY(24px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in-up {
            animation: fade-in-up 0.6s ease-out forwards;
            opacity: 0;
        }
        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
        .delay-400 { animation-delay: 0.4s; }
        .delay-500 { animation-delay: 0.5s; }

        .dot-grid {
            background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.08) 1px, transparent 0);
            background-size: 40px 40px;
        }

        .sr-only { position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);border:0; }
    </style>

    {{-- SEO: JSON-LD Structured Data --}}
    @stack('structured_data')

    {{-- Google Analytics --}}
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-51W5RR4G65"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-51W5RR4G65');
    </script>

    @yield('head')
</head>
<body class="bg-surface-950 text-white font-sans">
    {{-- Accessibility: Skip Link --}}
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 focus:z-[100] focus:px-4 focus:py-2 focus:bg-primary-500 focus:text-white focus:rounded-sm focus:text-sm focus:font-semibold">
        Skip to main content
    </a>

    @yield('content')

    @yield('scripts')
</body>
</html>
