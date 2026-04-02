<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JobFix - Trouvez un professionnel qualifié</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased bg-slate-50">

    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex-shrink-0">
                    <span class="text-2xl font-bold text-[#1e293b]">Job<span class="text-[#f97316]">Fix</span></span>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="{{ route('login') }}" class="text-gray-600 hover:text-[#f97316] px-3 py-2 font-medium">Se connecter</a>
                        <a href="{{ route('register') }}" class="bg-[#f97316] text-white px-5 py-2 rounded-full font-medium hover:bg-[#ea580c] transition">s'inscrire</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <header class="relative bg-white overflow-hidden py-16 lg:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-12 lg:gap-8 items-center">
                <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left">
                    <h1 class="text-4xl tracking-tight font-extrabold text-[#1e293b] sm:text-5xl md:text-6xl">
                        <span class="block">Besoin d'un pro ?</span>
                        <span class="block text-[#f97316]">C'est déjà réglé.</span>
                    </h1>
                    <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                        La plateforme de confiance pour trouver les meilleurs électriciens, plombiers et techniciens qualifiés près de chez vous au Maroc.
                    </p>
                    <div class="mt-8 sm:flex sm:justify-center lg:justify-start space-x-4">
                        <div class="rounded-md shadow">
                            <a href="{{ route('register') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-xl text-white bg-[#1e293b] hover:bg-slate-800 md:py-4 md:text-lg md:px-10">
                                s'inscrire
                            </a>
                        </div>
                        <div class="mt-3 sm:mt-0">
                            <a href="{{ route('login') }}" class="w-full flex items-center justify-center px-8 py-3 border border-[#f97316] text-base font-medium rounded-xl text-[#f97316] bg-transparent hover:bg-orange-50 md:py-4 md:text-lg md:px-10">
                                Se connecter
                            </a>
                        </div>
                    </div>
                </div>
                <div class=" rounded-3xl shadow-2xl overflow-hidden border-4 border-white group mt-12 lg:mt-0 lg:col-span-6 flex justify-center items-center">
                    <img class="w-full h-full object-cover transform"
                        src="https://i.pinimg.com/1200x/02/94/c2/0294c268b773a8d6710974d082ae872d.jpg"
                        alt="Professionnel JobFix">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#1e293b]/40 to-transparent"></div>
                </div>
            </div>
        </div>
    </header>

    <section class="py-12 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Nos Spécialités</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-md transition">
                    <div class="bg-orange-100 text-[#f97316] w-12 h-12 rounded-lg flex items-center justify-center mx-auto mb-4">🔧</div>
                    <h3 class="font-bold">Mécanique</h3>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-md transition">
                    <div class="bg-blue-100 text-blue-600 w-12 h-12 rounded-lg flex items-center justify-center mx-auto mb-4">⚡</div>
                    <h3 class="font-bold">Électricité</h3>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-md transition">
                    <div class="bg-red-100 text-red-600 w-12 h-12 rounded-lg flex items-center justify-center mx-auto mb-4">🚿</div>
                    <h3 class="font-bold">Plomberie</h3>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-md transition">
                    <div class="bg-green-100 text-green-600 w-12 h-12 rounded-lg flex items-center justify-center mx-auto mb-4">🛠️</div>
                    <h3 class="font-bold">Technicien</h3>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-[#1e293b] text-white py-12">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p>&copy; 2026 JobFix. Fait avec ❤️ pour le Maroc.</p>
        </div>
    </footer>

</body>

</html>