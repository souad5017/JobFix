<x-app-layout>
    <div class="min-h-screen bg-[#f8fafc] flex">
        
        <aside class="w-64 bg-white border-r border-slate-200 hidden lg:flex flex-col p-6 sticky top-0 h-screen">
            <div class="mb-10 px-2">
                <span class="text-2xl font-black text-slate-800 italic">Job<span class="text-[#f97316]">Fix</span></span>
            </div>
            
            <nav class="space-y-2 flex-1">
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-400 hover:bg-slate-50 rounded-xl transition font-bold text-sm">
                    <span>📊</span> Dashboard
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 bg-orange-50 text-[#f97316] rounded-xl transition font-bold text-sm shadow-sm shadow-orange-100">
                    <span>📋</span> My Requests
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-400 hover:bg-slate-50 rounded-xl transition font-bold text-sm">
                    <span>🕒</span> History
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-400 hover:bg-slate-50 rounded-xl transition font-bold text-sm">
                    <span>⭐</span> Favorite Pros
                </a>
            </nav>

            <div class="pt-6 border-t border-slate-100 space-y-2">
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-400 hover:bg-slate-50 rounded-xl transition font-bold text-sm">
                    <span>❓</span> Help Center
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="w-full flex items-center gap-3 px-4 py-3 text-red-400 hover:bg-red-50 rounded-xl transition font-bold text-sm">
                        <span>🚪</span> Sign Out
                    </button>
                </form>
            </div>
        </aside>

        <main class="flex-1 p-8 md:p-12 overflow-y-auto">
            
            <header class="mb-10">
                <h1 class="text-4xl font-black text-slate-900 tracking-tight">Bonjour, {{ auth()->user()->name }}</h1>
                <p class="text-slate-500 font-medium mt-1 italic">Ravi de vous revoir. Voici l'état de vos demandes de services.</p>
            </header>

            <div class="grid grid-cols-1 xl:grid-cols-12 gap-8">
                
                <div class="xl:col-span-8 space-y-10">
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-slate-100 relative overflow-hidden">
                            <h3 class="text-slate-400 font-black uppercase text-[10px] tracking-widest">Demandes en cours</h3>
                            <p class="text-5xl font-black text-slate-900 mt-2">{{ $requestsCount }}</p>
                            <span class="inline-block mt-4 px-3 py-1 bg-emerald-50 text-emerald-600 text-[10px] font-black rounded-full uppercase italic tracking-tighter">~ Actif</span>
                        </div>

                        <div class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-slate-100">
                            <h3 class="text-slate-400 font-black uppercase text-[10px] tracking-widest">Total Dépensé</h3>
                            <p class="text-4xl font-black text-slate-900 mt-2">1,240 <span class="text-xl">€</span></p>
                            <p class="text-slate-400 text-[10px] mt-4 font-bold uppercase tracking-tight italic">Dernière facture le 12 Oct.</p>
                        </div>

                        <div class="bg-[#f97316] p-8 rounded-[2.5rem] shadow-xl shadow-orange-200 text-white relative group cursor-pointer overflow-hidden">
                            <div class="absolute -right-4 -top-4 w-24 h-24 bg-white/10 rounded-full blur-2xl group-hover:scale-150 transition-transform"></div>
                            <h3 class="text-orange-100 font-black uppercase text-[10px] tracking-widest">Pros Favoris</h3>
                            <p class="text-6xl font-black mt-2 italic">{{ $favoritesCount }}</p>
                            <button class="mt-4 bg-white/20 hover:bg-white/30 px-4 py-2 rounded-xl text-[10px] font-black uppercase tracking-widest transition">Voir la liste</button>
                        </div>
                    </div>

                    <section>
                        <div class="flex justify-between items-end mb-6">
                            <h2 class="text-2xl font-black text-slate-900 tracking-tight">Active Requests</h2>
                            <a href="#" class="text-xs font-black text-[#f97316] uppercase tracking-widest">Tout voir</a>
                        </div>
                        
                        <div class="space-y-4">
                            @forelse($recentRequests as $request)
                            <div class="bg-white p-6 rounded-[2rem] shadow-sm border border-slate-100 flex items-center justify-between group hover:border-[#f97316] transition-all duration-300">
                                <div class="flex items-center gap-5">
                                    <div class="w-16 h-16 bg-slate-900 rounded-2xl flex items-center justify-center text-white text-xl font-black shadow-lg">
                                        {{ substr($request->professional?->name ?? 'P', 0, 1) }}
                                    </div>
                                    <div>
                                        <h4 class="font-black text-slate-900 text-lg tracking-tight">{{ $request->professional?->name }}</h4>
                                        <p class="text-slate-400 text-sm font-bold">Intervention en cours : <span class="text-blue-500 italic">Prévue pour 16:30</span></p>
                                    </div>
                                </div>
                                <span class="px-4 py-2 bg-blue-50 text-blue-600 text-[9px] font-black uppercase tracking-widest rounded-full border border-blue-100">{{ $request->professional?->category ?? 'Service' }}</span>
                            </div>
                            @empty
                            <p class="text-slate-400 italic">Aucune requête active.</p>
                            @endforelse
                        </div>
                    </section>

                    <section>
                        <h2 class="text-2xl font-black text-slate-900 tracking-tight mb-6">Recommended Pros for you</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-slate-100 hover:shadow-xl transition-all duration-500">
                                <div class="flex items-center gap-4 mb-6">
                                    <div class="w-12 h-12 bg-orange-100 rounded-xl"></div>
                                    <div>
                                        <h4 class="font-black text-slate-900 tracking-tight">Thomas Durand</h4>
                                        <div class="flex items-center gap-1 text-[10px] font-black">
                                            <span class="text-orange-500">★ 4.9</span> <span class="text-slate-300">(128 avis)</span>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-slate-500 text-xs font-medium leading-relaxed mb-8">Expert en menuiserie sur-mesure et restauration de meubles anciens à Paris.</p>
                                <button class="w-full bg-slate-50 hover:bg-slate-100 text-slate-800 py-4 rounded-2xl text-[10px] font-black uppercase tracking-widest transition">Consulter le profil</button>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="xl:col-span-4">
                    <div class="bg-white p-10 rounded-[3rem] shadow-sm border border-slate-100 sticky top-12 h-fit">
                        <h2 class="text-2xl font-black text-slate-900 tracking-tight mb-10 italic">Recent History</h2>
                        
                        <div class="space-y-12 relative before:absolute before:left-2 before:top-2 before:bottom-2 before:w-[2px] before:bg-slate-50">
                            <div class="relative pl-10">
                                <div class="absolute left-0 top-1 w-4 h-4 rounded-full bg-orange-500 border-4 border-white shadow-sm ring-1 ring-orange-200"></div>
                                <span class="text-[9px] font-black text-slate-300 uppercase tracking-widest">15 OCTOBRE 2023</span>
                                <h4 class="font-black text-slate-800 mt-1">Réparation Lave-vaisselle</h4>
                                <p class="text-slate-400 text-xs font-bold mt-1 italic">Avec Michel P.</p>
                                <div class="mt-2 flex text-orange-400 text-xs">★★★★★</div>
                            </div>

                            <div class="relative pl-10">
                                <div class="absolute left-0 top-1 w-4 h-4 rounded-full bg-slate-200 border-4 border-white shadow-sm"></div>
                                <span class="text-[9px] font-black text-slate-300 uppercase tracking-widest">02 OCTOBRE 2023</span>
                                <h4 class="font-black text-slate-800 mt-1">Peinture Salon</h4>
                                <div class="mt-3 inline-block px-3 py-1 bg-emerald-50 text-emerald-600 text-[9px] font-black rounded-lg uppercase">Noté 5/5</div>
                            </div>
                        </div>

                        <button class="w-full mt-16 py-5 border-2 border-slate-50 text-slate-400 rounded-3xl text-[10px] font-black uppercase tracking-widest hover:border-slate-100 transition">Voir tout l'historique</button>
                    </div>
                </div>

            </div>
        </main>
    </div>
</x-app-layout>