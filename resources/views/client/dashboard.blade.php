<x-app-layout>
    <div class="relative bg-[#1e293b] py-16 mb-10 overflow-hidden rounded-b-[3rem] shadow-2xl">
        <div class="absolute top-0 right-0 -mt-20 -mr-20 w-96 h-96 bg-[#f97316] opacity-10 rounded-full blur-3xl"></div>
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <h1 class="text-4xl font-black text-white tracking-tight">Bonjour, <span class="text-[#f97316]">{{ auth()->user()->name }}</span></h1>
            <p class="text-slate-400 font-bold uppercase text-[10px] tracking-[0.3em] mt-2">Votre espace personnel JobFix</p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-6 pb-20">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-6">

            <div class="md:col-span-4 bg-white rounded-[2.5rem] p-8 shadow-sm border border-slate-200/60 flex flex-col justify-between hover:shadow-xl transition-all duration-500 group">
                <div>
                    <div class="w-12 h-12 bg-blue-50 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24 font-bold">
                            <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                    </div>
                    <h3 class="text-slate-400 font-black uppercase text-[10px] tracking-widest">Total Demandes</h3>
                    <p class="text-5xl font-black text-[#1e293b] mt-2 italic">{{ $requestsCount }}</p>
                </div>
                <div class="mt-8 text-blue-600 font-bold text-xs uppercase tracking-tighter">Suivre mes projets →</div>
            </div>

            <div class="md:col-span-8 bg-gradient-to-br from-[#f97316] to-[#ea580c] rounded-[2.5rem] p-10 shadow-lg shadow-orange-200/50 flex flex-col md:flex-row items-center justify-between overflow-hidden relative group cursor-pointer">
                <div class="relative z-10">
                    <h2 class="text-3xl font-black text-white leading-tight">Besoin d'un coup<br>de main expert ?</h2>
                    <p class="text-orange-100 mt-4 font-medium opacity-80">Parcourez nos meilleurs prestataires qualifiés.</p>
                    <button class="mt-8 bg-white text-[#f97316] font-black uppercase text-xs tracking-widest px-8 py-4 rounded-2xl hover:bg-slate-900 hover:text-white transition-all">Chercher un Pro</button>
                </div>
                <div class="relative z-10 mt-8 md:mt-0 opacity-20 group-hover:opacity-40 transition-opacity">
                    <svg class="w-40 h-40 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
            </div>

            <div class="md:col-span-3 bg-white rounded-[2.5rem] p-8 border border-slate-200/60 shadow-sm hover:border-[#f97316] transition">
                <div class="w-12 h-12 bg-red-50 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-red-500" fill="currentColor" viewBox="0 0 24 24 font-bold">
                        <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="text-slate-400 font-black uppercase text-[10px] tracking-widest">Favoris</h3>
                <p class="text-4xl font-black text-[#1e293b] mt-2 italic">{{ $favoritesCount }}</p>
            </div>

            <div class="md:col-span-9 bg-white rounded-[2.5rem] p-8 shadow-sm border border-slate-200/60 overflow-hidden">
                <div class="flex justify-between items-center mb-8">
                    <h2 class="text-xl font-black text-[#1e293b] tracking-tight">Activité Récente</h2>
                    <span class="text-[10px] font-black uppercase tracking-widest text-[#f97316] bg-orange-50 px-4 py-1.5 rounded-full">Dernières 24h</span>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead>
                            <tr class="border-b border-slate-100 text-slate-400 text-[10px] font-black uppercase tracking-[0.2em]">
                                <th class="pb-4">Expert</th>
                                <th class="pb-4 text-center">Date</th>
                                <th class="pb-4 text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-50">
                            @forelse($recentRequests as $request)
                            <tr class="group hover:bg-slate-50/50 transition">
                                <td class="py-5 font-bold text-[#1e293b] flex items-center gap-3">
                                    <div class="w-8 h-8 bg-slate-800 rounded-lg text-white flex items-center justify-center text-[10px]">
                                        {{ substr($request->professional?->name ?? 'P', 0, 1) }}
                                    </div>
                                    {{ $request->professional?->name ?? 'Expert non défini' }}
                                </td>
                                <td class="py-5 text-center text-slate-500 text-sm font-medium">{{ $request->created_at->format('d.m.Y') }}</td>
                                <td class="py-5 text-center">
                                    <span class="px-4 py-1 rounded-lg text-[9px] font-black uppercase tracking-widest border
                                        @if($request->status == 'en_attente') bg-amber-50 text-amber-600 border-amber-100
                                        @elseif($request->status == 'accepte') bg-emerald-50 text-emerald-600 border-emerald-100
                                        @else bg-slate-50 text-slate-500 border-slate-200 @endif">
                                        {{ $request->status }}
                                    </span>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3" class="py-10 text-center text-slate-400 italic text-sm font-bold uppercase tracking-widest">Vide</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>