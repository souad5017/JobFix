<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Mes Demandes de Services | Artisan Portal</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-tertiary-fixed": "#001e2f",
                        "surface-container-low": "#f2f4f6",
                        "on-primary-container": "#541f00",
                        "on-secondary-container": "#596373",
                        "inverse-surface": "#2d3133",
                        "on-primary-fixed-variant": "#7a3000",
                        "surface-container-lowest": "#ffffff",
                        "on-tertiary": "#ffffff",
                        "primary-container": "#f37021",
                        "surface": "#f8f9fb",
                        "surface-variant": "#e0e3e5",
                        "on-secondary-fixed-variant": "#3d4757",
                        "on-background": "#191c1e",
                        "secondary-container": "#d6e0f3",
                        "surface-dim": "#d8dadc",
                        "error-container": "#ffdad6",
                        "tertiary-fixed-dim": "#8bceff",
                        "outline-variant": "#e0c0b2",
                        "on-secondary": "#ffffff",
                        "tertiary": "#006492",
                        "surface-container": "#eceef0",
                        "on-error-container": "#93000a",
                        "outline": "#8c7166",
                        "inverse-primary": "#ffb693",
                        "on-tertiary-fixed-variant": "#004b6f",
                        "surface-bright": "#f8f9fb",
                        "on-primary-fixed": "#341000",
                        "secondary": "#555f6f",
                        "on-secondary-fixed": "#121c2a",
                        "surface-container-highest": "#e0e3e5",
                        "on-surface-variant": "#584237",
                        "background": "#f8f9fb",
                        "secondary-fixed": "#d9e3f6",
                        "surface-tint": "#a04100",
                        "primary": "#a04100",
                        "error": "#ba1a1a",
                        "primary-fixed": "#ffdbcb",
                        "surface-container-high": "#e6e8ea",
                        "secondary-fixed-dim": "#bdc7da",
                        "on-surface": "#191c1e",
                        "on-primary": "#ffffff",
                        "tertiary-fixed": "#cae6ff",
                        "on-error": "#ffffff",
                        "tertiary-container": "#00a0e6",
                        "inverse-on-surface": "#eff1f3",
                        "on-tertiary-container": "#00334d",
                        "primary-fixed-dim": "#ffb693"
                    },
                    "borderRadius": {
                        "DEFAULT": "1rem",
                        "lg": "2rem",
                        "xl": "3rem",
                        "full": "9999px"
                    },
                    "fontFamily": {
                        "headline": ["Plus Jakarta Sans"],
                        "display": ["Plus Jakarta Sans"],
                        "body": ["Inter"],
                        "label": ["Inter"]
                    }
                },
            },
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fb;
            color: #191c1e;
        }

        .font-headline {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body class="bg-surface text-on-surface">
    <!-- SideNavBar -->
    <aside class="hidden md:flex flex-col h-screen w-72 fixed left-0 top-0 z-50 bg-slate-50 dark:bg-slate-950 py-8 px-4 border-r-0">
        <div class="mb-10 px-4">
            <span class="text-2xl font-black text-orange-600 tracking-tight font-headline">Artisan Admin</span>
            <p class="text-xs text-slate-500 font-medium mt-1">Premium Tier</p>
        </div>
        <nav class="flex-1 space-y-2">
            <a class="flex items-center gap-3 text-slate-500 dark:text-slate-400 px-6 py-3 hover:translate-x-1 transition-transform hover:bg-orange-50/50 hover:text-orange-600 group" href="#">
                <span class="material-symbols-outlined" data-icon="space_dashboard">space_dashboard</span>
                <span class="font-medium">Dashboard</span>
            </a>
            <a class="flex items-center gap-3 bg-orange-50 dark:bg-orange-950/30 text-orange-600 dark:text-orange-400 rounded-full px-6 py-3 font-semibold" href="#">
                <span class="material-symbols-outlined" data-icon="work_history" style="font-variation-settings: 'FILL' 1;">work_history</span>
                <span class="font-medium">Requests</span>
            </a>
            <a class="flex items-center gap-3 text-slate-500 dark:text-slate-400 px-6 py-3 hover:translate-x-1 transition-transform hover:bg-orange-50/50 hover:text-orange-600 group" href="#">
                <span class="material-symbols-outlined" data-icon="forum">forum</span>
                <span class="font-medium">Messages</span>
            </a>
            <a class="flex items-center gap-3 text-slate-500 dark:text-slate-400 px-6 py-3 hover:translate-x-1 transition-transform hover:bg-orange-50/50 hover:text-orange-600 group" href="#">
                <span class="material-symbols-outlined" data-icon="badge">badge</span>
                <span class="font-medium">Pros</span>
            </a>
            <a class="flex items-center gap-3 text-slate-500 dark:text-slate-400 px-6 py-3 hover:translate-x-1 transition-transform hover:bg-orange-50/50 hover:text-orange-600 group" href="#">
                <span class="material-symbols-outlined" data-icon="settings">settings</span>
                <span class="font-medium">Settings</span>
            </a>
        </nav>
        <div class="mt-auto px-4 pt-6 border-t border-slate-200/50">
            <button class="w-full bg-primary-container text-on-primary-container font-bold py-4 rounded-full shadow-lg hover:opacity-90 transition-all flex items-center justify-center gap-2">
                <span class="material-symbols-outlined">add</span>
                New Request
            </button>
        </div>
    </aside>
    <main class="md:ml-72 min-h-screen">
        <!-- TopNavBar -->
        <header class="flex justify-between items-center h-20 px-8 w-full max-w-full bg-white/80 dark:bg-slate-900/80 backdrop-blur-xl sticky top-0 z-40 shadow-[0px_20px_40px_rgba(25,28,30,0.04)]">
            <div class="flex items-center gap-4 flex-1">
                <div class="relative max-w-md w-full">
                    <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400" data-icon="search">search</span>
                    <input class="w-full pl-12 pr-4 py-3 bg-surface-container-high border-none rounded-full text-sm focus:ring-2 focus:ring-primary-container/20" placeholder="Rechercher une demande..." type="text" />
                </div>
            </div>
            <div class="flex items-center gap-6">
                <div class="flex items-center gap-4">
                    <button class="relative p-2 text-slate-500 hover:text-orange-600 transition-all">
                        <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
                        <span class="absolute top-2 right-2 w-2 h-2 bg-primary-container rounded-full"></span>
                    </button>
                    <button class="p-2 text-slate-500 hover:text-orange-600 transition-all">
                        <span class="material-symbols-outlined" data-icon="chat_bubble">chat_bubble</span>
                    </button>
                </div>
                <div class="flex items-center gap-3 pl-6 border-l border-slate-200">
                    <div class="text-right hidden sm:block">
                        <p class="text-sm font-bold text-slate-900">Jean Dupont</p>
                        <p class="text-xs text-slate-500">Client Or</p>
                    </div>
                    <img alt="User Profile" class="w-10 h-10 rounded-full object-cover ring-2 ring-primary-container/20" data-alt="Close-up portrait of a middle-aged man with a friendly smile, clean-shaven, wearing a navy blue polo shirt in soft office lighting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBpvLQDfSoi9Vz_hggGy3jYxLo45nZnMsEiDnWerj7_rwUo8W93Lp8VtyES-u1yuWts7lr69q1voP5tYySBFrVnjUfydUlW15tGrUx_BxqdlKeekH_yu2wdVsIXCxPstkEkUzVAJJdI7-eYNO7co4NBzf5lzZMMEon45otv6soa8FokjBFT8kkcfm7kHsYrcJjZUp-HmaCiY_YvwtNkPJShr0g0JCVV4LWrtK3qdWg9uhJT_nFkTVigsxeRbmZPgcQBoN-_FOK1KjB8" />
                </div>
            </div>
        </header>
        <!-- Content Area -->   
        <section class="p-8 max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-10">
                <div>
                    <h1 class="text-4xl font-extrabold font-headline text-on-background tracking-tight mb-2">Mes Demandes de Services</h1>
                    <p class="text-secondary font-medium">Gérez vos projets et suivez l'avancement de vos travaux.</p>
                </div>
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
                <div class="group bg-surface-container-lowest rounded-lg p-8 shadow-[0px_20px_40px_rgba(25,28,30,0.04)] hover:shadow-[0px_30px_60px_rgba(25,28,30,0.08)] transition-all duration-300 relative overflow-hidden">
                    <div class="flex justify-between items-start mb-6">
                        <div class="flex items-center gap-4">
                            <img alt="Pro Photo" class="w-14 h-14 rounded-full object-cover" data-alt="Headshot of a professional plumber with a friendly expression, wearing a grey work uniform against a blurred workshop background." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAD1LilC-FGvUFePciBm2xnnSgPA2P1ox50yQC8b2EiGHIQQw-rnJ2dhliaUcENBov-N93DezRzxS52WfqrC08ls7870HI1l1TRLE1BYeEUFWrs0enHA9izNnxJBqhqYxWWG58JpiUAM2tTn0hMn-p287hEKFcPlYclrL6qHHVWTmlTBxkCkU7okbpZkESaDZPeJruGi_3LSlDoMokbEk4Fwfty3NOREOfWI9CVftZj3mtgOk74Am3vnn_dO3xnGzO9X8-J-u7ChYnl" />
                            <div>
                                <h3 class="text-lg font-bold text-on-background leading-tight">Marc Lefebvre</h3>
                                <p class="text-sm text-secondary">Plomberie &amp; Chauffage</p>
                            </div>
                        </div>
                        <span class="px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider bg-tertiary-container/10 text-tertiary-container">En cours</span>
                    </div>
                    <div class="mb-8">
                        <h2 class="text-xl font-bold mb-2">Réparation fuite salle de bain</h2>
                        <div class="flex items-center gap-2 text-secondary text-sm mb-4">
                            <span class="material-symbols-outlined text-sm" data-icon="calendar_today">calendar_today</span>
                            <span>Aujourd'hui, 14:00</span>
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
        <!-- Stats Section -->
        <section class="p-8 max-w-7xl mx-auto pt-0">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
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
                    <p class="text-secondary text-sm font-medium mb-1">Note moyenne donnée</p>
                    <h4 class="text-2xl font-black text-on-background">4.9/5</h4>
                    <div class="mt-2 flex gap-0.5">
                        <span class="material-symbols-outlined text-xs text-orange-400" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="material-symbols-outlined text-xs text-orange-400" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="material-symbols-outlined text-xs text-orange-400" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="material-symbols-outlined text-xs text-orange-400" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="material-symbols-outlined text-xs text-orange-400" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm border border-transparent hover:border-orange-100 transition-all">
                    <p class="text-secondary text-sm font-medium mb-1">Prochain rendez-vous</p>
                    <h4 class="text-2xl font-black text-on-background">Demain</h4>
                    <div class="mt-2 text-xs text-secondary font-medium">Révision chaudière - 09:30</div>
                </div>
            </div>
        </section>
    </main>
    <!-- Mobile BottomNavBar -->
    <nav class="md:hidden fixed bottom-0 left-0 right-0 bg-white shadow-[0px_-5px_20px_rgba(0,0,0,0.05)] px-6 py-3 flex justify-between items-center z-50">
        <button class="flex flex-col items-center gap-1 text-slate-400">
            <span class="material-symbols-outlined" data-icon="space_dashboard">space_dashboard</span>
            <span class="text-[10px] font-bold">Accueil</span>
        </button>
        <button class="flex flex-col items-center gap-1 text-primary-container">
            <span class="material-symbols-outlined" data-icon="work_history" style="font-variation-settings: 'FILL' 1;">work_history</span>
            <span class="text-[10px] font-bold">Demandes</span>
        </button>
        <button class="relative -top-8 bg-primary-container text-white p-4 rounded-full shadow-lg border-4 border-surface">
            <span class="material-symbols-outlined" data-icon="add">add</span>
        </button>
        <button class="flex flex-col items-center gap-1 text-slate-400">
            <span class="material-symbols-outlined" data-icon="forum">forum</span>
            <span class="text-[10px] font-bold">Messages</span>
        </button>
        <button class="flex flex-col items-center gap-1 text-slate-400">
            <span class="material-symbols-outlined" data-icon="account_circle">account_circle</span>
            <span class="text-[10px] font-bold">Profil</span>
        </button>
    </nav>
</body>

</html>