<div class="max-w-7xl mx-auto px-6 py-12">
    <div class="mb-12">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-8">
            <div class="max-w-2xl">
                <h1 class="text-5xl font-extrabold tracking-tight mb-4 leading-tight">
                    Find the <span class="text-primary-container">Perfect Artisan</span> for Your Next Project
                </h1>
                <p class="text-secondary text-lg">Browse through our curated list of certified professionals ready to tackle your home maintenance and repair needs.</p>
            </div>
        </div>


        <div class="space-y-6">
            <div class="relative group">
                <div class="absolute inset-y-0 left-6 flex items-center pointer-events-none">
                    <span class="material-symbols-outlined text-secondary opacity-50">search</span>
                </div>
                <input wire:model.debounce.500ms="search" class="w-full pl-16 pr-6 py-6 bg-surface-container-high border-none rounded-lg text-lg focus:bg-surface-container-lowest focus:ring-2 focus:ring-primary-container/20 transition-all outline-none"
                    placeholder="Search for professionals, skills or locations..."
                    type="text" />
            </div>
            <div class="flex flex-wrap gap-3">

                <!-- All Services -->
                <button
                    wire:click="resetFilters"
                    class="px-6 py-3 rounded-full font-medium flex items-center gap-2
        {{ empty($selectedSpecialties) 
            ? 'bg-primary-container text-on-primary-container' 
            : 'bg-surface-container-low text-secondary' }}">

                    <span class="material-symbols-outlined text-[20px]">tune</span>
                    All Services
                </button>

                @foreach($categories as $cat)
                <label
                    class="cursor-pointer px-6 py-3 rounded-full font-medium transition-all
        {{ in_array($cat->id, $selectedSpecialties) 
            ? 'bg-primary-container text-on-primary-container' 
            : 'bg-surface-container-low text-secondary hover:bg-surface-container-high' }}">

                    <input type="checkbox"
                        class="hidden"
                        wire:model.live="selectedSpecialties"
                        value="{{ $cat->id }}">

                    <span>{{ $cat->name }}</span>
                </label>
                @endforeach
            </div>
        </div>
    </div>

    <div class="flex flex-col lg:flex-row gap-12">
        <!-- Sidebar Filters -->
        <aside class="w-full lg:w-72 flex-shrink-0 space-y-10">
            <div>
                <h3 class="text-xl font-bold mb-6">Filters</h3>
                <!-- Rating Filter -->
                <div class="mb-8">
                    <label class="text-sm font-bold uppercase tracking-wider text-secondary mb-4 block">
                        Minimum Rating
                    </label>

                    <div class="space-y-3">
                        <label wire:click="$set('rating', 0)" class="text-sm text-secondary cursor-pointer">
                            All ratings
                        </label>
                        <label class="flex items-center gap-3 cursor-pointer group"
                            wire:click="$set('rating', 4.5)">

                            <div class="w-5 h-5 rounded border-2 flex items-center justify-center
                {{ $rating == 4.5 ? 'bg-primary-container border-primary-container' : 'border-outline-variant group-hover:border-primary-container' }}">
                            </div>

                            <div class="flex items-center gap-1">
                                <span class="material-symbols-outlined text-orange-400 text-lg" style="font-variation-settings: 'FILL' 1;">
                                    star
                                </span>
                                <span class="text-on-surface font-medium">4.5 & up</span>
                            </div>
                        </label>
                        <label class="flex items-center gap-3 cursor-pointer group"
                            wire:click="$set('rating', 4.0)">

                            <div class="w-5 h-5 rounded border-2 flex items-center justify-center
                {{ $rating == 4.0 ? 'bg-primary-container border-primary-container' : 'border-outline-variant group-hover:border-primary-container' }}">
                            </div>

                            <div class="flex items-center gap-1">
                                <span class="material-symbols-outlined text-orange-400 text-lg" style="font-variation-settings: 'FILL' 1;">
                                    star
                                </span>
                                <span class="text-on-surface font-medium">4.0 & up</span>
                            </div>
                        </label>
                        <label class="flex items-center gap-3 cursor-pointer group"
                            wire:click="$set('rating', 3.5)">

                            <div class="w-5 h-5 rounded border-2 flex items-center justify-center
        {{ $rating == 3.5 ? 'bg-primary-container border-primary-container' : 'border-outline-variant group-hover:border-primary-container' }}">
                            </div>

                            <div class="flex items-center gap-1">
                                <span class="material-symbols-outlined text-orange-400 text-lg"
                                    style="font-variation-settings: 'FILL' 1;">
                                    star
                                </span>
                                <span class="text-on-surface font-medium">3.5 & up</span>
                            </div>
                        </label>

                        <label class="flex items-center gap-3 cursor-pointer group"
                            wire:click="$set('rating', 3.0)">

                            <div class="w-5 h-5 rounded border-2 flex items-center justify-center
        {{ $rating == 3.0 ? 'bg-primary-container border-primary-container' : 'border-outline-variant group-hover:border-primary-container' }}">
                            </div>

                            <div class="flex items-center gap-1">
                                <span class="material-symbols-outlined text-orange-400 text-lg"
                                    style="font-variation-settings: 'FILL' 1;">
                                    star
                                </span>
                                <span class="text-on-surface font-medium">3.0 & up</span>
                            </div>
                        </label>

                    </div>
                </div>
            </div>
            <!-- Promo Card -->
            <div class="bg-secondary-fixed p-8 rounded-xl relative overflow-hidden">
                <div class="relative z-10">
                    <h4 class="text-on-secondary-fixed text-xl font-bold mb-2">Artisan Pro</h4>
                    <p class="text-on-secondary-fixed-variant text-sm mb-4">Get 20% off your first booking with Pro Artisans.</p>

                </div>
                <div class="absolute -right-4 -bottom-4 opacity-10">
                    <span class="material-symbols-outlined text-8xl">verified</span>
                </div>
            </div>
        </aside>

        <div class="flex-grow">

            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-2 gap-8">
                @forelse($professionals as $pro)
                <div class="bg-surface-container-lowest rounded-lg p-8 group transition-all duration-300 hover:shadow-[0px_20px_40px_rgba(25,28,30,0.06)] flex flex-col">
                    <div class="flex items-start gap-6 mb-6">
                        <div class="relative w-24 h-24 flex-shrink-0">
                            <img alt="Marcus Chen" class="w-full h-full object-cover rounded-xl" data-alt="professional portrait of a confident male plumber wearing a clean blue uniform smiling in a workshop environment"
                                src="{{ asset('storage/'.$pro->image) }}" />
                            <div class="absolute -bottom-2 -right-2 bg-green-500 w-6 h-6 rounded-full border-4 border-white"></div>
                        </div>
                        <div class="flex-grow">
                            <div class="flex items-center justify-between mb-1">
                                <h3 class="text-2xl font-bold tracking-tight"> {{ $pro->user->name ?? 'Utilisateur' }}</h3>
                            </div>
                            <p class="text-primary-container font-bold text-sm uppercase tracking-wider mb-2"> {{ $pro->category->name }}</p>
                            <div class="flex items-center gap-1 text-sm font-bold">
                                <span class="material-symbols-outlined text-orange-400 text-lg" style="font-variation-settings: 'FILL' 1;">star</span>
                                <span>4.9</span>
                                <span class="text-secondary font-normal ml-1">(128 reviews)</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-auto flex items-center justify-between gap-4">
                        <div class="bg-surface-container-low p-3 text-center font-bold px-8 py-3 rounded-full">
                            <span class="block text-xs text-secondary font-bold uppercase tracking-tighter">Completed Jobs</span>
                            <span class="text-lg font-bold">450+</span>
                        </div>
                        <a href="{{ route('client.professionals.show', $pro->id) }}"
                            class="bg-primary-container text-on-primary-container font-bold px-8 py-3 rounded-full hover:scale-95 transition-all">
                            View Profile
                        </a>
                    </div>
                </div>
                @empty
                <div class="col-span-full rounded-[3rem] p-20 text-center border-4 border-dashed">
                    <p class="text-slate-500 font-black uppercase text-xs tracking-widest">
                        Aucun professionnel trouvé
                    </p>
                </div>
                @endforelse
            </div>
            <!-- Pagination -->
            @if($professionals->hasPages())
            <div class="mt-16 flex justify-center items-center gap-4">

                {{-- Prev --}}
                <button
                    wire:click="previousPage"
                    class="w-12 h-12 flex items-center justify-center rounded-full bg-surface-container-high text-on-surface hover:bg-primary-container hover:text-on-primary-container transition-all">
                    <span class="material-symbols-outlined">chevron_left</span>
                </button>

                {{-- Pages --}}
                @for($i = 1; $i <= $professionals->lastPage(); $i++)

                    @if($i == $professionals->currentPage())
                    <button class="w-12 h-12 flex items-center justify-center rounded-full bg-primary-container text-on-primary-container font-bold">
                        {{ $i }}
                    </button>
                    @else
                    <button wire:click="gotoPage({{ $i }})"
                        class="w-12 h-12 flex items-center justify-center rounded-full bg-surface-container-low font-bold hover:bg-surface-container-high transition-all">
                        {{ $i }}
                    </button>
                    @endif

                    @endfor

                    {{-- Next --}}
                    <button
                        wire:click="nextPage"
                        class="w-12 h-12 flex items-center justify-center rounded-full bg-surface-container-high text-on-surface hover:bg-primary-container hover:text-on-primary-container transition-all">
                        <span class="material-symbols-outlined">chevron_right</span>
                    </button>

            </div>
            @endif
        </div>
    </div>
</div>