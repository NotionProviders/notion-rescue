<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Notion Rescue — 4-Week Workspace Cleanup | Notion Providers')</title>
    <meta name="description" content="@yield('meta_description', 'Fixed-scope, 4-week Notion workspace cleanup, reorganization, and optimization for teams and individuals. By Notion Providers.')">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

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
                            100: '#f3f3f3',
                            200: '#e5e5e5',
                            300: '#d4d4d4',
                            400: '#a3a3a3',
                            500: '#737373',
                            600: '#525252',
                            700: '#262626',
                            800: '#1a1a1a',
                            900: '#131313',
                            950: '#0a0a0a',
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
            background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.3) 1px, transparent 0);
            background-size: 40px 40px;
        }
    </style>

    @yield('head')
</head>
<body class="bg-surface-950 text-white font-sans">
    @yield('content')

    @yield('scripts')
</body>
</html>
