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
                        <h4 class="text-2xl font-black text-on-background">1 420,50 €</h4>
                        <div class="mt-2 text-xs text-green-600 font-bold flex items-center gap-1">
                            <span class="material-symbols-outlined text-sm" data-icon="trending_up">trending_up</span>
                            <span>+12% vs mois dernier</span>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm border border-transparent hover:border-orange-100 transition-all">
                        <p class="text-secondary text-sm font-medium mb-1">Services complétés</p>
                        <h4 class="text-2xl font-black text-on-background">12</h4>
                        <div class="mt-2 text-xs text-primary-container font-bold">Depuis Janvier 2024</div>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm border border-transparent hover:border-orange-100 transition-all">
                        <p class="text-secondary text-sm font-medium mb-1">Prochain rendez-vous</p>
                        <h4 class="text-2xl font-black text-on-background">Demain</h4>
                        <div class="mt-2 text-xs text-secondary font-medium">Révision chaudière - 09:30</div>
                    </div>
                </div>
            </section>

            <div class="flex justify-end mb-10">

                <!-- Filters -->
                <div class="flex p-1.5 bg-surface-container-high rounded-full overflow-x-auto whitespace-nowrap scrollbar-hide">
                    <button class="px-6 py-2.5 rounded-full text-sm font-bold bg-white text-primary-container shadow-sm transition-all">Toutes</button>
                    <button class="px-6 py-2.5 rounded-full text-sm font-medium text-secondary hover:text-primary transition-all">En attente</button>
                    <button class="px-6 py-2.5 rounded-full text-sm font-medium text-secondary hover:text-primary transition-all">En cours</button>
                    <button class="px-6 py-2.5 rounded-full text-sm font-medium text-secondary hover:text-primary transition-all">Terminées</button>
                </div>
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
                            <span class="material-symbols-outlined text-sm" data-icon="calendar_today">calendar_today</span>
                            <span>{{ $request->scheduled_at }}</span>
                        </div>
                        <p class="text-secondary leading-relaxed">Le technicien est actuellement sur place pour identifier et colmater la fuite principale sous la baignoire.</p>
                    </div>
                    <div class="flex items-center justify-between pt-6 border-t border-surface-container">
                        <div>
                            <p class="text-xs text-secondary uppercase font-bold tracking-widest">Estimation</p>
                            <p class="text-2xl font-black text-on-background">180,00 €</p>
                        </div>
                        <div class="flex gap-3">
                            <button class="p-3 rounded-full bg-surface-container-high text-secondary hover:bg-primary-container hover:text-white transition-all">
                                <span class="material-symbols-outlined" data-icon="chat">chat</span>
                            </button>
                            <button class="px-6 py-3 rounded-full bg-primary-container text-white font-bold hover:scale-105 active:scale-95 transition-all">Voir détails</button>
                        </div>
                    </div>
                </div>

                @empty
                <p class="text-slate-400 italic">Aucune requête active.</p>
                @endforelse
                <!-- Card 2: En Attente -->
                <div class="group bg-surface-container-lowest rounded-lg p-8 shadow-[0px_20px_40px_rgba(25,28,30,0.04)] hover:shadow-[0px_30px_60px_rgba(25,28,30,0.08)] transition-all duration-300">
                    <div class="flex justify-between items-start mb-6">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 rounded-full bg-primary-container/10 flex items-center justify-center">
                                <span class="material-symbols-outlined text-primary-container text-3xl" data-icon="electric_bolt">electric_bolt</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-on-background leading-tight">En attente d'artisan</h3>
                                <p class="text-sm text-secondary">Électricité Générale</p>
                            </div>
                        </div>
                        <span class="px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider bg-primary-container/10 text-primary-container">En attente</span>
                    </div>
                    <div class="mb-8">
                        <h2 class="text-xl font-bold mb-2">Installation bornes de recharge VE</h2>
                        <div class="flex items-center gap-2 text-secondary text-sm mb-4">
                            <span class="material-symbols-outlined text-sm" data-icon="schedule">schedule</span>
                            <span>Posté il y a 2 heures</span>
                        </div>
                        <p class="text-secondary leading-relaxed">Recherche d'un électricien certifié IRVE pour l'installation d'une Wallbox dans un garage individuel.</p>
                    </div>
                    <div class="flex items-center justify-between pt-6 border-t border-surface-container">
                        <div class="flex -space-x-3 overflow-hidden">
                            <img alt="" class="inline-block h-8 w-8 rounded-full ring-2 ring-white" data-alt="Portrait of a craftsman" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAbZSwfzUBPLtvRNO_89G-oRd9SnLc6NgBHa5IaHa_a-JT_9K_QradNpbrqbQM8I8OLIrjuS4VwmkdtCUmYZWwN93WGU9SsvNJONB-vIwd4pXtrjnofBRKS7AS3ErtHMLb94EvckOY4Ljx3X3yKCqjW5OoZGfaBcBJO_nmN-WHhIiNAEjgS62Y03t5SZ6Yre2Wl8ocbmVTY6bEqdBtgJGnk1KKTr-YXXB8DIE1IgGc7P_jaCpemoSm1-FLyl7AaNyvVvpsoJjp17T54" />
                            <img alt="" class="inline-block h-8 w-8 rounded-full ring-2 ring-white" data-alt="Portrait of a craftsman" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB5b1_pmTeUk5NtBDsM1yWCH9pZT5ErAmkp0JM8TNlTlw5HUAzZNM5N2K-DsiZ72NwsgK3NVDSmRuFSkXJxLjhQS5nqNOYJT7rNOiro00DtJr6ZLeJlU7kiPzr_wEtj1sNWje1QOZYthcuXFOC3e0vHHgJR5yy2luH8xVah9BJh1LLt2QHrR1fDHxZWhfEvqNr7CLXgiyDxhXs9A21e6J0n7CB9_aohntV6WnNFLf5yjjevFqnSiy6iXUYSjasAPO5txl70Ssc_O0bU" />
                            <div class="flex items-center justify-center h-8 w-8 rounded-full bg-surface-container-high text-[10px] font-bold text-secondary ring-2 ring-white">+3</div>
                        </div>
                        <div class="flex gap-3">
                            <button class="px-6 py-3 rounded-full border border-primary-container text-primary-container font-bold hover:bg-primary-container hover:text-white transition-all">Comparer devis</button>
                        </div>
                    </div>
                </div>
                <!-- Card 3: Terminé -->
                <div class="group bg-surface-container-lowest rounded-lg p-8 shadow-[0px_20px_40px_rgba(25,28,30,0.04)] hover:shadow-[0px_30px_60px_rgba(25,28,30,0.08)] transition-all duration-300">
                    <div class="flex justify-between items-start mb-6">
                        <div class="flex items-center gap-4">
                            <img alt="Pro Photo" class="w-14 h-14 rounded-full object-cover" data-alt="Friendly male carpenter with a beard, wearing a plaid shirt and canvas apron, posing in a woodworking studio." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAmid77Ams1HQfNCalMpfo30A7-cs9rhbtDhZj7V0U8hsNOPDs9A6Rx7l_s3vTrYtxzFI_M_DBHcUbfQx1CtdWHUTxPWHelJHkZH37yT7W4cYg74uqE8pEZJKITTKyWQ7ux63cyETC6bvMXaPsFzGkw6Dnpsx4H8yXbLjkTve7ak5Gz7t49l381LU-qwGfJds6DHGeid24YP19qhbf7GhIPus1WqSG_8I9T3PoPc9SEp48WrjKafUrKlKfIOKhuK5qatzFlGkOpPqE4" />
                            <div>
                                <h3 class="text-lg font-bold text-on-background leading-tight">Thomas Durand</h3>
                                <p class="text-sm text-secondary">Menuiserie Ébénisterie</p>
                            </div>
                        </div>
                        <span class="px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider bg-green-100 text-green-700">Terminée</span>
                    </div>
                    <div class="mb-8">
                        <h2 class="text-xl font-bold mb-2">Pose étagères sur mesure</h2>
                        <div class="flex items-center gap-2 text-secondary text-sm mb-4">
                            <span class="material-symbols-outlined text-sm" data-icon="check_circle">check_circle</span>
                            <span>Terminé le 12 Octobre</span>
                        </div>
                        <p class="text-secondary leading-relaxed">Fabrication et installation de 4 étagères en chêne massif pour le salon. Travail impeccable.</p>
                    </div>
                    <div class="flex items-center justify-between pt-6 border-t border-surface-container">
                        <div>
                            <p class="text-xs text-secondary uppercase font-bold tracking-widest">Total payé</p>
                            <p class="text-2xl font-black text-on-background">350,00 €</p>
                        </div>
                        <div class="flex gap-3">
                            <button class="px-6 py-3 rounded-full bg-surface-container-high text-on-surface font-bold hover:bg-surface-variant transition-all">Laisser un avis</button>
                        </div>
                    </div>
                </div>
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
                        <button class="bg-white text-orange-600 px-10 py-4 rounded-full font-bold hover:shadow-xl hover:-translate-y-1 transition-all">Lancer une nouvelle demande</button>
                    </div>
                </div>
            </div>
        </section>

    </main>

</x-app-layout>