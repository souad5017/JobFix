<x-app-layout>
    <main class="min-h-screen">
        <!-- Content Area -->
        <section class="p-8 max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-10">
                <div>
                    <h1 class="text-4xl font-extrabold font-headline text-on-background tracking-tight mb-2">Mes Demandes de Services</h1>
                    <p class="text-secondary font-medium">Gérez vos projets et suivez l'avancement de vos travaux.</p>
                </div>

            </div>
            <!-- Stats Section -->
            <section class="p-8 max-w-7xl mx-auto pt-0">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                    <div class="bg-white p-6 rounded-lg shadow-sm border border-transparent hover:border-orange-100 transition-all">
                        <p class="text-secondary text-sm font-medium mb-1">Dépenses totales</p>
                        <h4 class="text-2xl font-black text-on-background">{{ $amountSum ?? '0.00' }} MAD</h4>
                       
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm border border-transparent hover:border-orange-100 transition-all">
                        <p class="text-secondary text-sm font-medium mb-1">Services totales</p>
                        <h4 class="text-2xl font-black text-on-background">{{ $requestsTotals ?? '0' }}</h4>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm border border-transparent hover:border-orange-100 transition-all">
                        <p class="text-secondary text-sm font-medium mb-1">Services complétés   </p>
                        <h4 class="text-2xl font-black text-on-background">{{ $requestsCount ?? '0' }}</h4>
                    </div>
                </div>
            </section>

            <div class="flex justify-end mb-10">

                <!-- Filters
                <div class="flex p-1.5 bg-surface-container-high rounded-full overflow-x-auto whitespace-nowrap scrollbar-hide">
                    <button class="px-6 py-2.5 rounded-full text-sm font-bold bg-white text-primary-container shadow-sm transition-all">Toutes</button>
                    <button class="px-6 py-2.5 rounded-full text-sm font-medium text-secondary hover:text-primary transition-all">En attente</button>
                    <button class="px-6 py-2.5 rounded-full text-sm font-medium text-secondary hover:text-primary transition-all">En cours</button>
                    <button class="px-6 py-2.5 rounded-full text-sm font-medium text-secondary hover:text-primary transition-all">Terminées</button>
                </div> -->
            </div>
            <!-- Bento-Style Grid of Request Cards -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Card 1: En Cours -->
                @forelse($requests as $request)
                <div class="group bg-surface-container-lowest rounded-lg p-8 shadow-[0px_20px_40px_rgba(25,28,30,0.04)] hover:shadow-[0px_30px_60px_rgba(25,28,30,0.08)] transition-all duration-300 relative overflow-hidden">
                    <div class="flex justify-between items-start mb-6">
                        <div class="flex items-center gap-4">
                            <img alt="Pro Photo" class="w-14 h-14 rounded-full object-cover" data-alt="Headshot of a professional plumber with a friendly expression, wearing a grey work uniform against a blurred workshop background."
                                src="{{ $request->professional->image }}" />
                            <div>
                                <h3 class="text-lg font-bold text-on-background leading-tight">{{ $request->professional->user->name }}</h3>
                                <p class="text-sm text-secondary">{{ $request->professional->category->name }}</p>
                            </div>
                        </div>
                        @if($request->status === 'pending')
                        <span class="px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider bg-amber-100 text-amber-600">
                            En attente
                        </span>

                        @elseif($request->status === 'accepted')
                        @if ($request->progress === 'in_progress')
                        <span class="px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider bg-blue-100 text-blue-600">
                            In Progress
                        </span>

                        @elseif($request->progress === 'completed')
                        <span class="px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider bg-emerald-100 text-emerald-600">
                            Terminé
                        </span>

                        @endif

                        @elseif($request->status === 'rejected')
                        <span class="px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider bg-rose-100 text-rose-600">
                            Rejeté
                        </span>
                        @endif
                    </div>
                    <div class="mb-8">
                        <h2 class="text-xl font-bold mb-2">{{ $request->title }}</h2>
                        <div class="flex items-center gap-2 text-secondary text-sm mb-4">
                            @if ($request->status === 'accepted')
                            @if ($request->progress === 'in_progress')
                            <span class="material-symbols-outlined text-sm">calendar_today</span>
                            {{ $request->scheduled_at->format('d M Y - h:i A') }}
                            @elseif($request->progress === 'completed')
                            <span class="material-symbols-outlined text-sm">check_circle</span>
                            <span>
                                Terminé le
                                {{ $request->scheduled_at ? $request->scheduled_at->format('d M Y') : '' }}
                            </span> @endif

                            @else
                            <span class="material-symbols-outlined text-sm">schedule</span>
                            <span>Posté le {{ $request->created_at->format('d M Y') }}</span>
                            @endif

                        </div>
                        <p class="text-secondary leading-relaxed">{{ $request->description }}</p>
                    </div>
                    <div class="flex items-center justify-between pt-6 border-t border-surface-container">
                        
                        <div>
                            @if ($request->status === 'accepted')
                            <p class="text-xs text-secondary uppercase font-bold tracking-widest">Estimation</p>
                           
                            <p class="text-2xl font-black text-on-background">{{ $request->payment->amount ?? '0.00' }} MAD</p>

                            @endif
                        </div>
                        <div class="flex gap-3">
                            @if ($request->status === 'accepted' && $request->progress === 'in_progress')
                            <button class="p-3 rounded-full bg-surface-container-high text-secondary hover:bg-primary-container hover:text-white transition-all">
                                <span class="material-symbols-outlined" data-icon="chat">chat</span>
                            </button>
                            @endif
                            <button class="px-6 py-3 rounded-full bg-primary-container text-white font-bold hover:scale-105 active:scale-95 transition-all">Voir détails</button>
                        </div>
                    </div>
                </div>

                @empty
                <p class="text-slate-400 italic">Aucune requête active.</p>
                @endforelse

                <!-- Empty State or CTA Card -->
                <div class="bg-orange-600 rounded-lg p-8 flex flex-col items-center justify-center text-center text-white relative overflow-hidden group">
                    <div class="absolute -right-10 -bottom-10 opacity-10 group-hover:scale-110 transition-transform duration-700">
                        <span class="material-symbols-outlined text-[200px]" data-icon="construction">construction</span>
                    </div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mb-6 mx-auto">
                            <span class="material-symbols-outlined text-3xl" data-icon="add_task">add_task</span>
                        </div>
                        <h3 class="text-2xl font-extrabold mb-3">Besoin d'autre chose ?</h3>
                        <p class="text-white/80 mb-8 max-w-xs">Décrivez votre projet en quelques clics et recevez des devis gratuits d'artisans qualifiés.</p>
                        <a href="{{ route('client.professionals.index') }}" class="bg-white text-orange-600 px-10 py-4 rounded-full font-bold hover:shadow-xl hover:-translate-y-1 transition-all">Lancer une nouvelle demande</a>
                    </div>
                </div>
            </div>
        </section>

    </main>

</x-app-layout>