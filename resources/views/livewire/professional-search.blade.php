<div class="flex flex-col lg:flex-row gap-8">

    <aside class="w-full lg:w-80 space-y-6">
        <div class="bg-[#1e293b] p-8 rounded-[2.5rem] shadow-2xl border border-slate-800 sticky top-10">
            <h3 class="text-white font-black uppercase text-[11px] tracking-[0.2em] mb-8 flex items-center gap-2">
                <span class="w-2 h-2 bg-[#f97316] rounded-full shadow-[0_0_10px_#f97316]"></span> Filtrer par
            </h3>

            <div class="mb-8 text-left">
                <label class="text-[9px] font-black text-slate-500 uppercase tracking-widest mb-3 block">Nom ou métier</label>
                <input type="text" wire:model.live="search"
                    class="w-full bg-[#0f172a] border-2 border-slate-800 rounded-2xl py-4 px-5 text-sm font-bold text-white focus:ring-2 focus:ring-[#f97316] focus:border-transparent transition-all outline-none"
                    placeholder="Ex: Plombier...">
            </div>

            <div class="space-y-3">
                <p class="text-[9px] font-black text-slate-500 uppercase tracking-widest mb-4">Spécialités</p>
                @foreach($categories as $cat)
                <label class="flex items-center group cursor-pointer p-3 rounded-2xl hover:bg-[#0f172a] transition-all border border-transparent hover:border-slate-800">

                    <input
                        type="checkbox"
                        class="peer hidden"
                        wire:model.live="selectedSpecialties"
                        value="{{ $cat->id }}">

                    <div class="w-6 h-6 border-2 border-slate-700 rounded-lg flex items-center justify-center peer-checked:bg-[#f97316] peer-checked:border-[#f97316] transition-all">
                        <svg class="w-3 h-3 text-white opacity-0 peer-checked:opacity-100" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="4">
                            <path d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>

                    <span class="ml-4 text-sm font-bold text-slate-400 group-hover:text-white transition-colors">
                        {{ $cat->name }}
                    </span>

                </label>
                @endforeach
            </div>
        </div>
    </aside>

    <main class="flex-1">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @forelse($professionals as $pro)
            <div class="group bg-[#1e293b] rounded-[3rem] p-8 border border-slate-800 shadow-xl hover:shadow-[#f97316]/10 hover:-translate-y-2 transition-all duration-500 relative overflow-hidden">

                <div class="absolute -top-10 -left-10 w-32 h-32 bg-[#f97316] opacity-0 group-hover:opacity-5 rounded-full blur-3xl transition-opacity"></div>

                <div class="flex items-start justify-between mb-8">
                    <div class="w-16 h-16 bg-[#0f172a] rounded-[1.5rem] flex items-center justify-center text-white text-2xl font-black group-hover:bg-[#f97316] transition-colors shadow-xl">
                        {{ substr($pro->user->name ?? 'P', 0, 1) }}
                    </div>
                    <span class="px-4 py-2 bg-[#f97316]/10 text-[#f97316] text-[9px] font-black uppercase tracking-widest rounded-full border border-[#f97316]/20">
                        {{ $pro->specialty ?? 'Expert' }}
                    </span>
                </div>

                <div class="space-y-4">
                    <h2 class="text-2xl font-black text-white group-hover:text-[#f97316] transition-colors tracking-tight italic">
                        {{ $pro->user->name ?? 'Utilisateur' }}
                    </h2>
                    <p class="text-slate-400 font-medium leading-relaxed text-sm line-clamp-2">
                        {{ $pro->bio ?? 'Prêt à vous accompagner dans vos projets avec rigueur et savoir-faire.' }}
                    </p>
                </div>

                <div class="mt-10 pt-8 border-t border-slate-800 flex items-center justify-between">
                    <div class="flex items-center gap-1.5">
                        <span class="text-[#f97316] text-lg shadow-orange-500">★</span>
                        <span class="font-black text-white text-sm tracking-tighter">4.9/5</span>
                    </div>
                    <a href="{{ route('client.professionals.show', $pro->id) }}"
                        class="bg-[#f97316] text-white text-[10px] font-black uppercase tracking-[0.2em] px-8 py-4 rounded-2xl hover:bg-white hover:text-[#f97316] transition-all shadow-lg shadow-orange-900/20">
                        Profil Complet
                    </a>
                </div>
            </div>
            @empty
            <div class="col-span-full bg-[#1e293b] rounded-[3rem] p-20 text-center border-4 border-dashed border-slate-800">
                <p class="text-slate-500 font-black uppercase text-xs tracking-widest">Aucun professionnel trouvé</p>
            </div>
            @endforelse
        </div>

        @if($professionals->hasPages())
        <div class="mt-16 flex justify-center">
            <div class="bg-[#1e293b] px-8 py-4 rounded-[2rem] shadow-2xl border border-slate-800 text-white">
                {{ $professionals->links() }}
            </div>
        </div>
        @endif
    </main>
</div>
</div>
</div>