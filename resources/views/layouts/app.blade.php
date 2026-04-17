<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @livewireStyles
    @livewireScripts
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>JobFix - Dashboard</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireScripts
    @livewireStyles
</head>

<body class="font-sans antialiased bg-[#f8fafc]">
    <div class="min-h-screen">
        @include('layouts.navigation')

        @if (isset($header))
        <header class="bg-white shadow-sm border-b border-gray-100">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h2 class="font-bold text-2xl text-[#1e293b] leading-tight">
                    {{ $header }}
                </h2>
            </div>
        </header>
        @endif

        <main>
            {{ $slot }}
        </main>
    </div>
</body>

</html>