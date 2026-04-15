

        <div class="flex flex-col lg:flex-row gap-8">
            
            <aside class="w-full lg:w-80 space-y-6">
                <div class="bg-white p-8 rounded-[2.5rem] shadow-[0_20px_50px_rgba(0,0,0,0.03)] border border-white sticky top-10">
                    <h3 class="text-[#0f172a] font-black uppercase text-[11px] tracking-[0.2em] mb-8 flex items-center gap-2">
                        <span class="w-2 h-2 bg-[#f97316] rounded-full"></span> Filtrer par
                    </h3>
                    
                    <div class="mb-8 text-left">
                        <label class="text-[9px] font-black text-slate-400 uppercase tracking-widest mb-3 block">Nom ou métier</label>
                        <input type="text" wire:model.live="search" 
                               class="w-full bg-[#f8fafc] border-2 border-slate-50 rounded-2xl py-4 px-5 text-sm font-bold text-[#0f172a] focus:ring-2 focus:ring-[#f97316] focus:border-transparent transition-all outline-none" 
                               placeholder="Ex: Plombier...">
                    </div>

                    <div class="space-y-3">
                        <p class="text-[9px] font-black text-slate-400 uppercase tracking-widest mb-4">Spécialités</p>
                        @foreach(['Plomberie', 'Électricité', 'Mécanique', 'Menuiserie'] as $spec)
                        <label class="flex items-center group cursor-pointer p-3 rounded-2xl hover:bg-slate-50 transition-all border border-transparent hover:border-slate-100">
                            <input type="checkbox" class="peer hidden" wire:model.live="selectedSpecialties" value="{{ $spec }}">
                            <div class="w-6 h-6 border-2 border-slate-200 rounded-lg flex items-center justify-center peer-checked:bg-[#f97316] peer-checked:border-[#f97316] transition-all">
                                <svg class="w-3 h-3 text-white opacity-0 peer-checked:opacity-100" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="4"><path d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <span class="ml-4 text-sm font-bold text-slate-500 group-hover:text-[#0f172a] transition-colors">{{ $spec }}</span>
                        </label>
                        @endforeach
                    </div>
                </div>
            </aside>

            <main class="flex-1">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    @forelse($professionals as $pro)
                    <div class="group bg-white rounded-[3rem] p-8 border border-white shadow-[0_10px_40px_rgba(0,0,0,0.02)] hover:shadow-[0_30px_60px_rgba(0,0,0,0.08)] hover:-translate-y-2 transition-all duration-500 relative">
                        
                        <div class="flex items-start justify-between mb-8">
                            <div class="w-16 h-16 bg-[#0f172a] rounded-[1.5rem] flex items-center justify-center text-white text-2xl font-black group-hover:bg-[#f97316] transition-colors shadow-lg shadow-blue-900/10">
                                {{ substr($pro->user->name ?? 'P', 0, 1) }}
                            </div>
                            <span class="px-4 py-2 bg-orange-50 text-[#f97316] text-[9px] font-black uppercase tracking-widest rounded-full border border-orange-100">
                                {{ $pro->specialty ?? 'Expert' }}
                            </span>
                        </div>

                        <div class="space-y-4">
                            <h2 class="text-2xl font-black text-[#0f172a] group-hover:text-[#f97316] transition-colors tracking-tight italic">
                                {{ $pro->user->name ?? 'Utilisateur' }}
                            </h2>
                            <p class="text-slate-500 font-medium leading-relaxed text-sm line-clamp-2">
                                {{ $pro->bio ?? 'Prêt à vous accompagner dans vos projets avec rigueur et savoir-faire.' }}
                            </p>
                        </div>

                        <div class="mt-10 pt-8 border-t border-slate-50 flex items-center justify-between">
                            <div class="flex items-center gap-1.5">
                                <span class="text-[#f97316] text-lg">★</span>
                                <span class="font-black text-[#0f172a] text-sm tracking-tighter">4.9/5</span>
                            </div>
                            <a href="{{ route('client.professionals.show', $pro->id) }}" 
                               class="bg-[#0f172a] text-white text-[10px] font-black uppercase tracking-[0.2em] px-8 py-4 rounded-2xl hover:bg-[#f97316] transition-all shadow-lg shadow-blue-900/5">
                                Profil Complet
                            </a>
                        </div>
                    </div>
                    @empty
                    <div class="col-span-full bg-white rounded-[3rem] p-20 text-center border-4 border-dashed border-slate-100">
                        <div class="mb-6 opacity-20 flex justify-center">
                             <svg class="w-20 h-20 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        </div>
                        <p class="text-slate-400 font-black uppercase text-xs tracking-widest">Aucun professionnel trouvé</p>
                    </div>
                    @endforelse
                </div>

                @if($professionals->hasPages())
                <div class="mt-16 flex justify-center">
                    <div class="bg-white px-8 py-4 rounded-[2rem] shadow-sm border border-slate-100">
                        {{ $professionals->links() }}
                    </div>
                </div>
                @endif
            </main>
        </div>
    </div>
</div>