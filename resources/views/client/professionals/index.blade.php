<x-app-layout>
    <div class="bg-[#f8fafc] min-h-screen py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
                <div>
                    <h1 class="text-4xl font-black text-[#1e293b] tracking-tight">Nos Professionnels</h1>
                    <p class="text-slate-400 font-bold uppercase text-[10px] tracking-[0.2em] mt-2">Trouvez l'expertise dont vous avez besoin</p>
                </div>

                <div class="relative w-full md:w-96">
                    <input type="text" placeholder="Rechercher un service..."
                        class="w-full bg-white border-none rounded-2xl py-4 px-6 shadow-sm focus:ring-2 focus:ring-[#f97316] font-medium text-[#1e293b] placeholder-slate-300 transition">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($professionals as $pro)
                <div class="bg-white rounded-[2.5rem] p-8 shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition duration-300 group">
                    <div class="flex items-start justify-between mb-6">
                        <div class="h-16 w-16 bg-[#1e293b] rounded-2xl flex items-center justify-center text-white text-xl font-black shadow-lg shadow-blue-900/20">
                            {{ substr($pro->name, 0, 1) }}
                        </div>
                        <button class="text-slate-300 hover:text-[#f97316] transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                            </svg>
                        </button>
                    </div>

                    <div class="mb-8">
                        <h2 class="text-xl font-black text-[#1e293b] mb-1">{{ $pro->name }}</h2>
                        <span class="text-[10px] font-black uppercase tracking-widest text-[#f97316] bg-orange-50 px-3 py-1 rounded-full border border-orange-100">
                            {{ $pro->specialty ?? 'Expert' }}
                        </span>
                        <p class="mt-4 text-slate-500 text-sm font-medium line-clamp-2 leading-relaxed">
                            {{ $pro->bio ?? 'Prêt à vous accompagner dans vos projets avec expertise et professionnalisme.' }}
                        </p>
                    </div>

                    <div class="pt-6 border-t border-gray-50 flex items-center justify-between">
                        <div class="flex items-center gap-1">
                            <span class="text-[#f97316] font-black text-sm">★</span>
                            <span class="text-[#1e293b] font-black text-sm">4.9</span>
                        </div>
                        <a href="{{ route('client.professionals.show', $pro->id) }}"
                            class="bg-[#1e293b] text-white text-[10px] font-black uppercase tracking-widest px-6 py-3 rounded-xl hover:bg-[#f97316] transition duration-300">
                            Voir Profil
                        </a>
                    </div>
                </div>
                @empty
                <div class="col-span-full py-20 text-center">
                    <p class="text-slate-400 font-bold uppercase text-xs tracking-widest">Aucun professionnel trouvé</p>
                </div>
                @endforelse
            </div>
            <div class="mt-16 flex justify-center gap-3">
                <div class="bg-white px-6 py-4 rounded-[2rem] shadow-sm border border-gray-100">
                    {{ $professionals->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>