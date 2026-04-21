<div class="flex flex-col lg:flex-row gap-8">

    <aside class="w-full lg:w-80 space-y-6">
        <div class="bg-[#1e293b] p-8 rounded-[2.5rem] shadow-2xl border border-slate-800 sticky top-10">

            <h3 class="text-white font-black uppercase text-[11px] tracking-[0.2em] mb-8 flex items-center gap-2">
                <span class="w-2 h-2 bg-[#f97316] rounded-full shadow-[0_0_10px_#f97316]"></span>
                Filtrer par
            </h3>

            <div class="mb-8 text-left">
                <label class="text-[9px] font-black text-slate-500 uppercase tracking-widest mb-3 block">
                    Nom ou métier
                </label>

                <input type="text" wire:model.live="search"
                    class="w-full bg-[#0f172a] border-2 border-slate-800 rounded-2xl py-4 px-5 text-sm font-bold text-white focus:ring-2 focus:ring-[#f97316] focus:border-transparent transition-all outline-none"
                    placeholder="Ex: Plombier...">
            </div>

            <div class="space-y-3">
                <p class="text-[9px] font-black text-slate-500 uppercase tracking-widest mb-4">
                    Spécialités
                </p>

                @foreach($categories as $cat)
                <label class="flex items-center group cursor-pointer p-3 rounded-2xl hover:bg-[#0f172a] transition-all border border-transparent hover:border-slate-800">

                    <input type="checkbox"
                        class="peer hidden"
                        wire:model.live="selectedSpecialties"
                        value="{{ $cat->id }}">

                    <div class="w-6 h-6 border-2 border-slate-700 rounded-lg flex items-center justify-center peer-checked:bg-[#f97316] peer-checked:border-[#f97316] transition-all">
                        <svg class="w-3 h-3 text-white opacity-0 peer-checked:opacity-100"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="4">
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

    <div class="flex-1">

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-2 gap-8">

            @forelse($professionals as $pro)
            <div class="bg-surface-container-lowest rounded-lg p-8 group transition-all duration-300 hover:shadow-[0px_20px_40px_rgba(25,28,30,0.06)] flex flex-col">

                <div class="flex items-start gap-6 mb-6">
                    <div class="relative w-24 h-24 flex-shrink-0">
                        <div class="w-16 h-16 bg-[#0f172a] rounded-[1.5rem] flex items-center justify-center text-white text-2xl font-black group-hover:bg-[#f97316] transition-colors shadow-xl">
                            {{ substr($pro->user->name ?? 'P', 0, 1) }}
                        </div>
                    </div>

                    <div class="flex-grow">
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="text-2xl font-bold tracking-tight">
                                {{ $pro->user->name ?? 'Utilisateur' }}
                            </h3>

                            <span class="material-symbols-outlined text-secondary hover:text-red-500 cursor-pointer transition-colors">
                                favorite
                            </span>
                        </div>

                        <p class="text-primary-container font-bold text-sm uppercase tracking-wider mb-2">
                            {{ $pro->specialty ?? 'Expert' }}
                        </p>

                        <div class="flex items-center gap-1 text-sm font-bold">
                            <span class="material-symbols-outlined text-orange-400 text-lg" style="font-variation-settings: 'FILL' 1;">
                                star
                            </span>
                            <span>5.0</span>
                            <span class="text-secondary font-normal ml-1">(310 reviews)</span>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4 mb-8">
                    <div class="bg-surface-container-low p-3 rounded-lg text-center">
                        <span class="block text-xs text-secondary font-bold uppercase tracking-tighter">
                            Completed Jobs
                        </span>
                        <span class="text-lg font-bold">890+</span>
                    </div>
                </div>

                <div class="mt-auto flex items-center justify-between gap-4">
                    <a href="{{ route('client.professionals.show', $pro->id) }}"
                        class="bg-primary-container text-on-primary-container font-bold px-8 py-3 rounded-full hover:scale-95 transition-all">
                        View Profile
                    </a>
                </div>

            </div>
            @empty
            <div class="col-span-full bg-[#1e293b] rounded-[3rem] p-20 text-center border-4 border-dashed border-slate-800">
                <p class="text-slate-500 font-black uppercase text-xs tracking-widest">
                    Aucun professionnel trouvé
                </p>
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

    </div>

</div>