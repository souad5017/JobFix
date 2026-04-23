<!DOCTYPE html>

<html class="light" lang="fr">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-primary-fixed-variant": "#7a3000",
                        "surface": "#f8f9fb",
                        "primary-container": "#f37021",
                        "surface-container-lowest": "#ffffff",
                        "on-tertiary": "#ffffff",
                        "surface-container-low": "#f2f4f6",
                        "on-tertiary-fixed": "#001e2f",
                        "on-secondary-container": "#596373",
                        "inverse-surface": "#2d3133",
                        "on-primary-container": "#541f00",
                        "on-secondary": "#ffffff",
                        "surface-container": "#eceef0",
                        "on-error-container": "#93000a",
                        "tertiary": "#006492",
                        "secondary-container": "#d6e0f3",
                        "on-background": "#191c1e",
                        "surface-variant": "#e0e3e5",
                        "on-secondary-fixed-variant": "#3d4757",
                        "tertiary-fixed-dim": "#8bceff",
                        "outline-variant": "#e0c0b2",
                        "error-container": "#ffdad6",
                        "surface-dim": "#d8dadc",
                        "secondary": "#555f6f",
                        "on-secondary-fixed": "#121c2a",
                        "surface-bright": "#f8f9fb",
                        "on-primary-fixed": "#341000",
                        "secondary-fixed": "#d9e3f6",
                        "surface-container-highest": "#e0e3e5",
                        "on-surface-variant": "#584237",
                        "background": "#f8f9fb",
                        "outline": "#8c7166",
                        "inverse-primary": "#ffb693",
                        "on-tertiary-fixed-variant": "#004b6f",
                        "on-error": "#ffffff",
                        "tertiary-fixed": "#cae6ff",
                        "primary-fixed-dim": "#ffb693",
                        "on-tertiary-container": "#00334d",
                        "tertiary-container": "#00a0e6",
                        "inverse-on-surface": "#eff1f3",
                        "primary-fixed": "#ffdbcb",
                        "surface-tint": "#a04100",
                        "primary": "#a04100",
                        "error": "#ba1a1a",
                        "on-primary": "#ffffff",
                        "surface-container-high": "#e6e8ea",
                        "secondary-fixed-dim": "#bdc7da",
                        "on-surface": "#191c1e"
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
                }
            }
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        h1,
        h2,
        h3,
        .brand-logo {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>

<body class="bg-surface text-on-surface min-h-screen">
    <!-- TopNavBar Component -->
    <nav class="bg-surface/80 backdrop-blur-lg docked full-width top-0 sticky z-50 shadow-[0px_20px_40px_rgba(25,28,30,0.06)]">
        <div class="flex justify-between items-center w-full px-8 py-4 max-w-7xl mx-auto">
            <div class="text-2xl font-black text-[#F37021]">JobFix</div>
            <div class="hidden md:flex items-center space-x-8">
                <a class="text-on-surface-variant font-medium hover:text-[#F37021] transition-colors" href="#">Dashboard</a>
                <a class="text-[#F37021] font-bold border-b-2 border-[#F37021] pb-1" href="#">My Requests</a>
                <a class="text-on-surface-variant font-medium hover:text-[#F37021] transition-colors" href="#">Messages</a>
            </div>
            <div class="flex items-center space-x-4">
                <button class="p-2 hover:bg-surface-container-high rounded-full transition-all duration-300">
                    <span class="material-symbols-outlined text-on-surface">notifications</span>
                </button>
                <button class="p-2 hover:bg-surface-container-high rounded-full transition-all duration-300">
                    <span class="material-symbols-outlined text-on-surface">account_circle</span>
                </button>
            </div>
        </div>
    </nav>
    <main class="max-w-7xl mx-auto px-8 py-10">
        <!-- Back Button -->
        <a class="inline-flex items-center text-on-surface-variant hover:text-[#F37021] transition-colors mb-8 group" href="#">
            <span class="material-symbols-outlined mr-2 group-hover:-translate-x-1 transition-transform">arrow_back</span>
            <span class="font-semibold">Retour à mes demandes</span>
        </a>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            <!-- Main Content Area -->
            <div class="lg:col-span-8 space-y-8">
                <!-- Request Header -->
                <header class="bg-surface-container-lowest rounded-lg p-8 shadow-[0px_20px_40px_rgba(25,28,30,0.06)] border border-outline-variant/15">
                    <div class="flex flex-wrap justify-between items-start gap-4">
                        <div>
                            <span class="text-label-md font-bold text-secondary-container bg-tertiary px-3 py-1 rounded-full text-xs uppercase tracking-widest mb-3 inline-block">Ref: JF-2024-8842</span>
                            <h1 class="text-4xl font-extrabold text-on-surface leading-tight tracking-tight">Réparation fuite salle de bain</h1>
                        </div>
                        <div class="bg-[#F37021]/10 text-[#F37021] px-5 py-2 rounded-full font-bold text-sm flex items-center">
                            <span class="w-2 h-2 bg-[#F37021] rounded-full mr-2 animate-pulse"></span>
                            EN COURS
                        </div>
                    </div>
                </header>
                <!-- Service Details Section -->
                <section class="bg-surface-container-lowest rounded-lg overflow-hidden shadow-[0px_20px_40px_rgba(25,28,30,0.06)] border border-outline-variant/15">
                    <div class="p-8">
                        <h2 class="text-2xl font-bold mb-6 flex items-center">
                            <span class="material-symbols-outlined mr-3 text-[#F37021]">description</span>
                            Détails de l'intervention
                        </h2>
                        <div class="grid md:grid-cols-2 gap-8 mb-8">
                            <div class="space-y-4">
                                <div class="flex items-center text-on-surface-variant">
                                    <span class="material-symbols-outlined mr-3 text-[#F37021]">calendar_today</span>
                                    <span class="font-medium text-on-surface">Mardi 24 Octobre, 2024</span>
                                </div>
                                <div class="flex items-center text-on-surface-variant">
                                    <span class="material-symbols-outlined mr-3 text-[#F37021]">schedule</span>
                                    <span class="font-medium text-on-surface">09:00 - 11:30</span>
                                </div>
                                <div class="flex items-start text-on-surface-variant">
                                    <span class="material-symbols-outlined mr-3 text-[#F37021]">location_on</span>
                                    <span class="font-medium text-on-surface leading-relaxed">15 Rue de la Paix, 75002 Paris<br />3ème étage, porte gauche</span>
                                </div>
                            </div>
                            <div class="bg-surface-container-low p-6 rounded-lg">
                                <p class="text-on-surface leading-relaxed italic">
                                    "Il y a une fuite importante sous le lavabo principal. L'eau s'écoule dès que le robinet est ouvert. J'ai dû couper l'arrivée d'eau principale de la pièce."
                                </p>
                            </div>
                        </div>
                        <!-- Gallery -->
                        <div class="space-y-4">
                            <h3 class="text-sm font-bold text-on-surface-variant uppercase tracking-widest">Photos jointes</h3>
                            <div class="grid grid-cols-3 gap-4">
                                <div class="aspect-square rounded-lg overflow-hidden relative group cursor-pointer">
                                    <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="close-up of a leaking silver bathroom pipe under a white sink with water droplets visible" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB96L0zPEbEQq7jszTLIlg8Uc7jfG-F3FN1qIB04TyU3RRRwAkM5h0nQclxJCXrZexDyqrTH9HEo22n7Zs_IRu6IslwvWlkIV_4u1hhak2aKJ7hUDf8N7yaK2YR9MPdFYvgeKlGoDwxQ4ScI36fKSRiFKcRxO4F86UYd243Xi_gRYaxz_9mYaMvsfDHrAbADPeLMKxEki2U1lOl9vK5YJBSmgp4MS8Gy9eKMNTPhE4RJZ0h9sbaSL9GF0JX6tYN26B0vFi0BY6XaDP7" />
                                </div>
                                <div class="aspect-square rounded-lg overflow-hidden relative group cursor-pointer">
                                    <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="wide shot of a modern minimalist bathroom with white tiles and wooden cabinets showing the area of repair" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDtjFYVRiIZ6zYEzoqXIgY3ApJGmMDI0HDfj_C4JTDwgEdrY97RV22Rk0vRbGZJmDqueSnbEizglq2DAPk7v_fFXfguO6wEGHFsXbV4MEaA0dIV6dBQH4Pzq_TJpByUMjaFW-i3vLGm6MCX_U82-fdwdKWRBmDsu8atQCM_xTQ8JzaBoOXwJ44f6dpcLm--YKrht7tEkI5kFn3xp687Irg9nmQXJQ9EvV_tcZMpnN3VqJIBAsmAZQWC3LVbxW0p2FlFCmIaFCLCBQrx" />
                                </div>
                                <div class="aspect-square rounded-lg overflow-hidden relative group cursor-pointer bg-surface-container-high flex flex-col items-center justify-center border-2 border-dashed border-outline-variant/30">
                                    <span class="material-symbols-outlined text-on-surface-variant text-3xl mb-2">add_a_photo</span>
                                    <span class="text-xs font-bold text-on-surface-variant">Ajouter</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- Sidebar -->
            <aside class="lg:col-span-4 space-y-8">
                <!-- Professional Information Card -->
                <div class="bg-surface-container-lowest rounded-lg p-8 shadow-[0px_20px_40px_rgba(25,28,30,0.06)] border border-outline-variant/15 text-center">
                    <div class="relative w-24 h-24 mx-auto mb-4">
                        <img class="w-full h-full object-cover rounded-full" data-alt="professional male contractor in blue work shirt smiling confidently with short hair and clean look" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDIbrWX7L5N06ro3CXRKzyjefB84FzB1P4zn_YYLUxv8YcnTaJTYLmIIalngI7Us74p5Ll6feQB1gn1zLqxgdBLO2Azv_8OZQSc8id86TUE_Ss-Ud7NphSX41hki2wdsM4iN5-4ItYzDwiUinNK0DkdDHdKvYGu445cKjOFgyRlI8jCgcTbZWx1q-II5_18VgIk7xnfuH1nMZ3rEr-Tpy7Qo5vrlpG6jS51YQuWlb14brvx0KWOfPZr4B2VgHU7U3MVxdJoiJhPGKLl" />
                        <div class="absolute bottom-1 right-1 w-5 h-5 bg-green-500 border-4 border-white rounded-full"></div>
                    </div>
                    <h3 class="text-xl font-bold text-on-surface">Marc Lefebvre</h3>
                    <p class="text-on-surface-variant text-sm mb-4">Plombier Certifié • Artisan Expert</p>
                    <div class="flex items-center justify-center space-x-1 mb-6">
                        <span class="material-symbols-outlined text-yellow-500 text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="material-symbols-outlined text-yellow-500 text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="material-symbols-outlined text-yellow-500 text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="material-symbols-outlined text-yellow-500 text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="material-symbols-outlined text-yellow-500 text-sm" style="font-variation-settings: 'FILL' 1;">star_half</span>
                        <span class="ml-2 font-bold text-on-surface">4.8</span>
                        <span class="text-on-surface-variant text-xs">(124 avis)</span>
                    </div>
                    <button class="w-full bg-[#F37021] text-white py-4 px-6 rounded-full font-bold flex items-center justify-center gap-2 hover:opacity-90 active:scale-95 transition-all shadow-lg shadow-[#F37021]/20">
                        <span class="material-symbols-outlined">chat_bubble</span>
                        Contacter Marc
                    </button>
                </div>
                <!-- Action Sidebar -->
                <div class="bg-surface-container-low rounded-lg p-6 space-y-4">
                    <h4 class="text-sm font-bold text-on-surface-variant uppercase tracking-widest mb-2 px-2">Actions Rapides</h4>
                    <button class="w-full bg-surface-container-lowest text-on-surface py-4 px-6 rounded-lg font-bold flex items-center justify-between hover:bg-white transition-colors group">
                        <span class="flex items-center">
                            <span class="material-symbols-outlined mr-3 text-[#F37021]">edit</span>
                            Modifier la demande
                        </span>
                        <span class="material-symbols-outlined text-on-surface-variant group-hover:translate-x-1 transition-transform">chevron_right</span>
                    </button>
                    <button class="w-full text-error py-4 px-6 rounded-lg font-bold flex items-center justify-between hover:bg-error/5 transition-colors group">
                        <span class="flex items-center">
                            <span class="material-symbols-outlined mr-3">cancel</span>
                            Annuler la demande
                        </span>
                    </button>
                </div>
                <!-- Map Preview (Contextual Identity) -->
                <div class="rounded-lg overflow-hidden h-48 relative border border-outline-variant/15 shadow-sm">
                    <img class="w-full h-full object-cover grayscale opacity-80" data-alt="abstract top down map view of urban city streets in shades of gray and blue with high contrast" data-location="Paris" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDEpnFHB0ZciRcXu8Ms59QoJaf3Lu0Z5-wKIx315iKIV2ChZpROhvFS1fP6rMMg53bNKG5b6Ghow_DSC14aOjQzYXlCGYiI2vzlaVSbfPCGu_wsp62-KnvdFfpjfRzNas_1rkiSIzMzg_e2Eb-uLPhshyOefqHo5QIv_l3CB1vaWVKVaYXCLKj8ykNE9QEYkSBlrV6bF54UoHpzWYdTpyfLZPFWrcC4tZdauk1VM4ovP0gwVnbPHH4kfZZpwb7S39ZEgHAQut6FxyOy" />
                    <div class="absolute inset-0 bg-gradient-to-t from-on-surface/40 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 flex items-center text-white">
                        <span class="material-symbols-outlined text-[#F37021] mr-2" style="font-variation-settings: 'FILL' 1;">location_on</span>
                        <span class="text-xs font-bold uppercase tracking-wider">Zone de l'intervention</span>
                    </div>
                </div>
            </aside>
        </div>
    </main>
    <!-- BottomNavBar (Hidden on desktop, but included for system compliance) -->
    <nav class="md:hidden fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-6 pb-6 pt-3 bg-white/90 backdrop-blur-xl border-t border-black/5 shadow-[0_-10px_30px_rgba(0,0,0,0.04)] rounded-t-[3rem]">
        <div class="flex flex-col items-center justify-center text-slate-400">
            <span class="material-symbols-outlined" data-icon="home">home</span>
            <span class="font-['Inter'] text-[11px] font-semibold uppercase tracking-wider mt-1">Home</span>
        </div>
        <div class="flex flex-col items-center justify-center bg-[#F37021]/10 text-[#F37021] rounded-full px-5 py-2">
            <span class="material-symbols-outlined" data-icon="handyman" style="font-variation-settings: 'FILL' 1;">handyman</span>
            <span class="font-['Inter'] text-[11px] font-semibold uppercase tracking-wider mt-1">Requests</span>
        </div>
        <div class="flex flex-col items-center justify-center text-slate-400">
            <span class="material-symbols-outlined" data-icon="chat_bubble">chat_bubble</span>
            <span class="font-['Inter'] text-[11px] font-semibold uppercase tracking-wider mt-1">Chat</span>
        </div>
        <div class="flex flex-col items-center justify-center text-slate-400">
            <span class="material-symbols-outlined" data-icon="person">person</span>
            <span class="font-['Inter'] text-[11px] font-semibold uppercase tracking-wider mt-1">Account</span>
        </div>
    </nav>
</body>

</html>