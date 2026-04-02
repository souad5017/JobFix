<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>JobFix - Connexion</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-br from-[#1e293b] to-[#475569]">
            <div class="w-full sm:max-w-md mt-6 px-6 py-8 bg-white/10 backdrop-blur-md shadow-2xl overflow-hidden sm:rounded-3xl border border-white/20">
                <div class="flex justify-center mb-6">
                    <span class="text-3xl font-bold text-white tracking-wider">Job<span class="text-[#f97316]">Fix</span></span>
                </div>
                
                {{ $slot }}
            </div>

            <div class="mt-4 text-white/70 text-sm">
                &copy; {{ date('Y') }} JobFix - Services de Maintenance
            </div>
        </div>
    </body>
</html>