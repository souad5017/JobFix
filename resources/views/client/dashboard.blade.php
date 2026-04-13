<x-app-layout>
    <div class="bg-[#f8fafc] min-h-screen py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="mb-12">
                <h1 class="text-4xl font-black text-[#1e293b] tracking-tight">Espace Client</h1>
                <div class="h-1.5 w-20 bg-[#f97316] mt-4 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <div class="bg-[#1e293b] rounded-[2rem] p-8 shadow-2xl relative overflow-hidden group">
                    <div class="relative z-10">
                        <p class="text-slate-400 font-bold uppercase text-[10px] tracking-[0.2em] mb-2">Demandes Actives</p>
                        <h3 class="text-5xl font-black text-white italic tracking-tighter">{{ $requestsCount }}</h3>
                    </div>
                    <div class="absolute -right-4 -bottom-4 h-24 w-24 bg-white/5 rounded-full group-hover:scale-150 transition duration-700"></div>
                </div>

                <div class="bg-white rounded-[2rem] p-8 border border-gray-200 shadow-sm hover:border-[#f97316] transition-colors">
                    <p class="text-slate-400 font-bold uppercase text-[10px] tracking-[0.2em] mb-2">Professionnels Favoris</p>
                    <h3 class="text-5xl font-black text-[#1e293b] italic tracking-tighter">{{ $favoritesCount }}</h3>
                </div>

                <div class="bg-gradient-to-br from-[#f97316] to-[#ea580c] rounded-[2rem] p-8 shadow-xl flex flex-col justify-between hover:scale-[1.02] transition duration-300 cursor-pointer">
                    <h3 class="text-2xl font-black text-white leading-tight">Besoin d'un<br>nouveau service ?</h3>
                    <div class="flex items-center gap-2 text-white font-black uppercase text-[10px] tracking-widest mt-4">
                        Lancer la recherche 
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-[2.5rem] p-10 border border-gray-100 shadow-sm">
                <div class="flex justify-between items-end mb-10">
                    <div>
                        <h2 class="text-2xl font-black text-[#1e293b] tracking-tight">Activité Récente</h2>
                        <p class="text-slate-400 text-sm font-medium mt-1">Suivi de vos dernières interventions</p>
                    </div>
                    <a href="#" class="text-[10px] font-black uppercase tracking-widest text-[#f97316] border-b-2 border-[#f97316] pb-1">Voir tout</a>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="text-left border-b border-gray-100">
                                <th class="pb-6 font-black uppercase text-[10px] tracking-widest text-slate-400">Prestataire</th>
                                <th class="pb-6 font-black uppercase text-[10px] tracking-widest text-slate-400 text-center">Date d'envoi</th>
                                <th class="pb-6 font-black uppercase text-[10px] tracking-widest text-slate-400 text-center">Statut</th>
                                <th class="pb-6 font-black uppercase text-[10px] tracking-widest text-slate-400 text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50">
                            @forelse($recentRequests as $request)
                            <tr class="group">
                                <td class="py-6">
                                    <div class="flex items-center gap-4">
                                        <div class="h-10 w-10 bg-[#1e293b] rounded-xl flex items-center justify-center text-white font-bold text-xs">
                                            {{ substr($request->professionnel->name ?? 'P', 0, 1) }}
                                        </div>
                                        <span class="font-bold text-[#1e293b]">{{ $request->professionnel->name ?? 'Indisponible' }}</span>
                                    </div>
                                </td>
                                <td class="py-6 text-center text-slate-600 font-bold text-sm">
                                    {{ $request->created_at->format('d.m.Y') }}
                                </td>
                                <td class="py-6 text-center">
                                    <span class="px-4 py-1 rounded-md text-[9px] font-black uppercase tracking-widest
                                        @if($request->status == 'en_attente') bg-amber-50 text-amber-600 border border-amber-100
                                        @elseif($request->status == 'accepte') bg-emerald-50 text-emerald-600 border border-emerald-100
                                        @else bg-slate-50 text-slate-600 border border-slate-100 @endif">
                                        {{ $request->status }}
                                    </span>
                                </td>
                                <td class="py-6 text-right">
                                    <button class="text-[#1e293b] font-black text-[10px] uppercase tracking-widest hover:text-[#f97316] transition">Gérer</button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="py-20 text-center">
                                    <p class="text-slate-400 font-bold uppercase text-xs tracking-widest italic text-center">Aucun enregistrement trouvé</p>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>