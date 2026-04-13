<x-app-layout>
    <div class="py-12 bg-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-3xl p-8 mb-8 border border-gray-100">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-3xl font-bold text-[#1e293b]">Bonjour, {{ Auth::user()->name }} ! 👋</h1>
                        <p class="text-gray-500 mt-2">Trouvez le meilleur professionnel pour vos travaux aujourd'hui.</p>
                    </div>
                    <a href="{{ route('client.pros.index') }}" class="bg-[#f97316] text-white px-6 py-3 rounded-2xl font-bold hover:bg-[#ea580c] transition shadow-lg">
                        + Nouvelle Demande
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100 border-l-4 border-l-blue-500">
                    <p class="text-gray-500 text-sm font-medium uppercase">Demandes en cours</p>
                    <p class="text-2xl font-bold text-gray-900 mt-1">03</p>
                </div>
                <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100 border-l-4 border-l-[#f97316]">
                    <p class="text-gray-500 text-sm font-medium uppercase">Mes Favoris</p>
                    <p class="text-2xl font-bold text-gray-900 mt-1">12</p>
                </div>
                <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100 border-l-4 border-l-green-500">
                    <p class="text-gray-500 text-sm font-medium uppercase">Total Dépensé</p>
                    <p class="text-2xl font-bold text-gray-900 mt-1">1,250 DH</p>
                </div>
            </div>

            <div class="bg-white p-4 rounded-3xl shadow-sm border border-gray-100 mb-8 flex items-center gap-4">
                <div class="flex-1 relative">
                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">🔍</span>
                    <input type="text" placeholder="Rechercher un plombier, électricien..." class="w-full pl-10 pr-4 py-3 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-[#f97316]">
                </div>
                <button class="bg-[#1e293b] text-white px-6 py-3 rounded-2xl font-medium">Filtrer</button>
            </div>

            <h2 class="text-xl font-bold text-[#1e293b] mb-6">Professionnels Recommandés</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @for ($i = 0; $i < 3; $i++)
                <div class="bg-white rounded-3xl shadow-sm overflow-hidden border border-gray-100 group hover:shadow-xl transition-all duration-300">
                    <div class="h-32 bg-gradient-to-r from-blue-500 to-cyan-400"></div>
                    <div class="px-6 pb-6 relative">
                        <div class="absolute -top-10 left-6">
                            <img class="h-20 w-20 rounded-2xl border-4 border-white shadow-md object-cover" src="https://ui-avatars.com/api/?name=Ahmed+Pro&background=f97316&color=fff" alt="">
                        </div>
                        <div class="pt-12">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h3 class="font-bold text-lg text-gray-900">Ahmed Mansouri</h3>
                                    <p class="text-[#f97316] text-sm font-semibold">Électricien Qualifié</p>
                                </div>
                                <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-lg font-bold">★ 4.8</span>
                            </div>
                            <p class="text-gray-500 text-sm mt-3 line-clamp-2">Expert en installation et réparation électrique domestique avec 10 ans d'expérience.</p>
                            <div class="mt-4 pt-4 border-t border-gray-50 flex justify-between items-center">
                                <span class="text-gray-900 font-bold">À partir de 150 DH</span>
                                <button class="text-[#1e293b] font-bold hover:underline">Voir Profil</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor
            </div>

        </div>
    </div>
</x-app-layout>