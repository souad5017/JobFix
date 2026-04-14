<div class="flex flex-col lg:flex-row gap-10">
    <aside class="w-full lg:w-72 space-y-8">
        <div class="bg-white p-6 rounded-[2rem] shadow-sm border border-gray-100">
            <h3 class="text-[#1e293b] font-black uppercase text-[10px] tracking-[0.2em] mb-4">Recherche</h3>
            <div class="relative">
                <input
                    type="text"
                    wire:model.live="search"
                    placeholder="Nom ou métier..."
                    class="w-full bg-[#f8fafc] border-none rounded-2xl py-3 px-4 text-sm font-bold text-[#1e293b] placeholder-slate-300 focus:ring-2 focus:ring-[#f97316] transition" />
            </div>
        </div>

        <div class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-gray-100">
            <h3 class="text-[#1e293b] font-black uppercase text-[10px] tracking-[0.2em] mb-6 border-b border-gray-50 pb-4">Spécialités</h3>
            <div class="space-y-4">
                @foreach(['Plomberie', 'Électricité', 'Mécanique', 'Menuiserie'] as $spec)
                <label class="flex items-center group cursor-pointer">
                    <div class="relative flex items-center">
                        <input type="checkbox" wire:model.live="selectedSpecialties" value="{{ $spec }}"
                            class="peer appearance-none h-5 w-5 border-2 border-slate-100 rounded-lg checked:bg-[#f97316] checked:border-[#f97316] transition-all duration-300">
                        <svg class="absolute h-3 w-3 text-white opacity-0 peer-checked:opacity-100 top-1 left-1 pointer-events-none transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="4"><path d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <span class="ml-3 text-sm font-bold text-slate-500 group-hover:text-[#1e293b] transition-colors">{{ $spec }}</span>
                </label>
                @endforeach
            </div>
        </div>

        <div class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-gray-100">
            <h3 class="text-[#1e293b] font-black uppercase text-[10px] tracking-[0.2em] mb-6 border-b border-gray-50 pb-4">Évaluation</h3>
            <div class="space-y-3">
                @foreach([4, 3, 2] as $star)
                <label class="flex items-center gap-3 cursor-pointer group">
                    <input type="radio" wire:model.live="minRating" value="{{ $star }}" class="hidden peer">
                    <div class="w-full py-2 px-4 rounded-xl border border-slate-50 text-center peer-checked:bg-[#1e293b] peer-checked:text-white group-hover:bg-slate-50 transition font-black text-[10px] uppercase tracking-widest text-slate-400">
                        {{ $star }}+ Étoiles
                    </div>
                </label>
                @endforeach
            </div>
        </div>
    </aside>

    <div class="flex-1">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @forelse($professionals as $pro)
            <div class="bg-white rounded-[2.5rem] p-8 shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition duration-300 group">
                <div class="flex items-start justify-between mb-6">
                    <div class="h-16 w-16 bg-[#1e293b] rounded-2xl flex items-center justify-center text-white text-xl font-black shadow-lg shadow-blue-900/20">
                        {{ substr($pro->user->name ?? 'P', 0, 1) }}
                    </div>
                    <button class="text-slate-200 hover:text-[#f97316] transition">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" /></svg>
                    </button>
                </div>

                <div class="mb-8">
                    <h2 class="text-xl font-black text-[#1e293b] mb-1 tracking-tight">{{ $pro->user->name }}</h2>
                    <span class="text-[9px] font-black uppercase tracking-widest text-[#f97316] bg-orange-50 px-3 py-1.5 rounded-full border border-orange-100">
                        {{ $pro->specialty ?? 'Expert' }}
                    </span>
                    <p class="mt-4 text-slate-500 text-sm font-medium line-clamp-2 leading-relaxed italic">
                        "{{ $pro->bio ?? 'Expert prêt à intervenir pour vos besoins.' }}"
                    </p>
                </div>

                <div class="pt-6 border-t border-gray-50 flex items-center justify-between">
                    <div class="flex items-center gap-1 text-[#f97316] font-black text-xs italic">
                        ★ 4.9
                    </div>
                    <a href="{{ route('client.professionals.show', $pro->id) }}"
                        class="bg-[#1e293b] text-white text-[10px] font-black uppercase tracking-[0.2em] px-6 py-3 rounded-xl hover:bg-[#f97316] transition duration-300 shadow-lg shadow-blue-900/5">
                        Détails
                    </a>
                </div>
            </div>
            @empty
            <div class="col-span-full py-20 text-center bg-white rounded-[3rem] border border-dashed border-slate-200">
                <p class="text-slate-400 font-black uppercase text-[10px] tracking-[0.3em]">Aucun expert ne correspond à vos critères</p>
            </div>
            @endforelse
        </div>

        @if($professionals->hasPages())
        <div class="mt-16 flex justify-center">
            <div class="bg-white px-8 py-4 rounded-[2rem] shadow-sm border border-gray-100">
                {{ $professionals->links() }}
            </div>
        </div>
        @endif
    </div>
</div>