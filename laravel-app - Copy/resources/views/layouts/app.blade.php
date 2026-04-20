<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>{{ config('app.name', 'Pixora') }} - {{ $title ?? 'Home' }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-white dark:bg-slate-950 text-slate-900 dark:text-slate-50 transition-colors duration-300">
        <div class="flex flex-col min-h-screen">
            @include('partials.navbar')
            <main class="flex-1">
                @yield('content')
            </main>
            @include('partials.footer')
        </div>
    </body>
</html>
