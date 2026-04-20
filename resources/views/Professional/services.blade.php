<x-professional-layout>

<body class="bg-surface text-on-surface">

    <main class="ml-72 min-h-screen">
      
        <div class="p-12 space-y-12">
            <!-- Header Section -->
            <section class="flex justify-between items-end">
                <div class="space-y-2">
                    <span class="text-sm font-bold uppercase tracking-widest text-primary-container font-label">Ma Boutique</span>
                    <h2 class="text-5xl font-extrabold tracking-tight text-on-surface font-headline">Mes Services</h2>
                </div>
            </section>
            <!-- Stats/Summary Bento Grid -->
            <section class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-surface-container-lowest p-8 rounded-xl shadow-[0px_20px_40px_rgba(25,28,30,0.04)] flex flex-col justify-between h-48 group hover:scale-[1.02] transition-transform">
                    <div class="flex justify-between items-start">
                        <div class="p-3 bg-secondary-container rounded-lg">
                            <span class="material-symbols-outlined text-on-secondary-container" data-icon="inventory_2">inventory_2</span>
                        </div>
                        <span class="text-xs font-bold text-secondary uppercase tracking-wider">Total Services</span>
                    </div>
                    <div class="text-4xl font-black text-on-surface">12</div>
                </div>
                <div class="bg-surface-container-lowest p-8 rounded-xl shadow-[0px_20px_40px_rgba(25,28,30,0.04)] flex flex-col justify-between h-48 group hover:scale-[1.02] transition-transform">
                    <div class="flex justify-between items-start">
                        <div class="p-3 bg-primary-container/10 rounded-lg">
                            <span class="material-symbols-outlined text-primary-container" data-icon="star">star</span>
                        </div>
                        <span class="text-xs font-bold text-secondary uppercase tracking-wider">Top Service</span>
                    </div>
                    <div>
                        <div class="text-xl font-bold text-on-surface leading-tight">Plomberie d'urgence</div>
                        <div class="text-sm text-secondary">34 interventions ce mois</div>
                    </div>
                </div>
                <div class="bg-surface-container-lowest p-8 rounded-xl shadow-[0px_20px_40px_rgba(25,28,30,0.04)] flex flex-col justify-between h-48 group hover:scale-[1.02] transition-transform">
                    <div class="flex justify-between items-start">
                        <div class="p-3 bg-tertiary-container/10 rounded-lg">
                            <span class="material-symbols-outlined text-tertiary-container" data-icon="payments">payments</span>
                        </div>
                        <span class="text-xs font-bold text-secondary uppercase tracking-wider">Chiffre d'Affaires</span>
                    </div>
                    <div class="text-4xl font-black text-on-surface">4,280 €</div>
                </div>
            </section>
            <!-- Service Management Grid -->
            <section class="grid grid-cols-1 lg:grid-cols-2 2xl:grid-cols-3 gap-10 pb-20">
                <!-- Service Card 1 -->
                <div class="bg-surface-container-lowest rounded-lg overflow-hidden flex flex-col shadow-[0px_10px_30px_rgba(25,28,30,0.03)] group border border-transparent hover:border-primary-container/10 transition-all">
                    <div class="relative h-56">
                        <img alt="Plumbing Service" class="w-full h-full object-cover" data-alt="close-up of copper pipes and wrench being held by a plumber with warm natural light through a window in the background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBvyUCcUuv3vwNdMusSJipPqKS7J2lu0SysVDNk53JIjhKMH9bftNzh1WHfWftY_3YjBNF75S_T5hMLYLGCQcG-Zm0DLhQawIOhzfJiTuhHafiI6wntUgcUkvfPXVpK1MP87ByezWdrqYJqoHOsoGqBMzjOQ7iIGi63TUM_1SDp2T-V5hWWAF2NR41Obqx4X8ZC7QUGVKT8OEC-jx39dJFWScNjz6fCuIwi4851CjzHLjdpvWNFE-PpkQOr37O-XKlpMqM4jJaY3591" />
                        <div class="absolute top-4 left-4">
                            <span class="bg-white/90 backdrop-blur-md px-4 py-1.5 rounded-full text-xs font-bold text-on-surface shadow-sm">Plomberie</span>
                        </div>
                        <div class="absolute top-4 right-4">
                            <span class="bg-green-500 text-white px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-widest">Actif</span>
                        </div>
                    </div>
                    <div class="p-8 space-y-6 flex-grow flex flex-col justify-between">
                        <div class="space-y-3">
                            <h3 class="text-2xl font-extrabold text-on-surface leading-tight">Réparation de fuite</h3>
                            <p class="text-secondary text-sm leading-relaxed">Intervention rapide pour tout type de fuite d'eau, diagnostic et réparation immédiate garantie.</p>
                        </div>
                        <div class="flex items-center justify-between pt-6 border-t border-surface-container">
                            <div class="flex flex-col">
                                <span class="text-xs font-bold text-secondary uppercase tracking-tighter">Tarif</span>
                                <span class="text-xl font-black text-primary-container">À partir de 50€</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <button class="p-3 rounded-full bg-surface-container-low hover:bg-primary-container/10 text-on-surface hover:text-primary-container transition-all">
                                    <span class="material-symbols-outlined text-sm" data-icon="edit">edit</span>
                                </button>
                                <button class="p-3 rounded-full bg-surface-container-low hover:bg-red-50 text-on-surface hover:text-error transition-all">
                                    <span class="material-symbols-outlined text-sm" data-icon="delete">delete</span>
                                </button>
                                <div class="ml-2 w-12 h-6 bg-primary-container rounded-full relative p-1 cursor-pointer">
                                    <div class="absolute right-1 w-4 h-4 bg-white rounded-full"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Service Card 2 -->
                <div class="bg-surface-container-lowest rounded-lg overflow-hidden flex flex-col shadow-[0px_10px_30px_rgba(25,28,30,0.03)] group border border-transparent hover:border-primary-container/10 transition-all">
                    <div class="relative h-56">
                        <img alt="Electrical Service" class="w-full h-full object-cover" data-alt="professional electrician working on an electrical panel with colorful wires and specialized tools in a modern residential setting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAm8JDE6N61DnjOAf_DgELDwfsEUFbY3lFEwARsqiTAXM3UK02AETgyKCNAvRmtudLZcjzKDqfUEGP7rZ1Z6MH48RGOj-3jayk5WM9cDZlrRR1RORuZTjvbXm-2eIvwJMSOfn0lo9hic0mC9KWafcND8dxUnePergj29DBQSbJKlqdpjyCirgIqClGNUu4sdKfr5FqPK_t6XJU5CYG0EI_2BL4FdlISluCKoaJAdVLxYa-OsGa4Zez5DHxScgPQDIbMBRB5qwztFzJT" />
                        <div class="absolute top-4 left-4">
                            <span class="bg-white/90 backdrop-blur-md px-4 py-1.5 rounded-full text-xs font-bold text-on-surface shadow-sm">Électricité</span>
                        </div>
                        <div class="absolute top-4 right-4">
                            <span class="bg-green-500 text-white px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-widest">Actif</span>
                        </div>
                    </div>
                    <div class="p-8 space-y-6 flex-grow flex flex-col justify-between">
                        <div class="space-y-3">
                            <h3 class="text-2xl font-extrabold text-on-surface leading-tight">Installation tableau électrique</h3>
                            <p class="text-secondary text-sm leading-relaxed">Mise aux normes et remplacement complet de votre tableau électrique domestique ou tertiaire.</p>
                        </div>
                        <div class="flex items-center justify-between pt-6 border-t border-surface-container">
                            <div class="flex flex-col">
                                <span class="text-xs font-bold text-secondary uppercase tracking-tighter">Tarif</span>
                                <span class="text-xl font-black text-primary-container">À partir de 250€</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <button class="p-3 rounded-full bg-surface-container-low hover:bg-primary-container/10 text-on-surface hover:text-primary-container transition-all">
                                    <span class="material-symbols-outlined text-sm" data-icon="edit">edit</span>
                                </button>
                                <button class="p-3 rounded-full bg-surface-container-low hover:bg-red-50 text-on-surface hover:text-error transition-all">
                                    <span class="material-symbols-outlined text-sm" data-icon="delete">delete</span>
                                </button>
                                <div class="ml-2 w-12 h-6 bg-primary-container rounded-full relative p-1 cursor-pointer">
                                    <div class="absolute right-1 w-4 h-4 bg-white rounded-full"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Service Card 3 (Inactive) -->
                <div class="bg-surface-container-lowest rounded-lg overflow-hidden flex flex-col shadow-[0px_10px_30px_rgba(25,28,30,0.03)] group opacity-80 border border-transparent hover:border-primary-container/10 transition-all">
                    <div class="relative h-56 grayscale">
                        <img alt="Heating Service" class="w-full h-full object-cover" data-alt="close-up of a central heating boiler control panel with digital display and technician's hands adjusting settings" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBarUDmh3lnbrCtlrYrw0kbUXJw1bgMzHkATblbjvzi1DliXLtMFg1B0kmPBo3sAIGJUpwDcoomUib4VKVqYzOPpa56ZSy6V7KVaAiip10SXf0vJhqet8hOM0mgsI-ZajNOg3wGa9cYTvUQSdFuhxIBfSOqK8WM0PPTWk_YES5qBNOW27IA9z3FbKeJH3vHjLwPb71ZTwUMYXNgu9PMwOOrbTztLkcZujFF5fH9oNxzhNMbpg2RAu8RCQ-rOi2eNPWHeaVk-2SVdDlV" />
                        <div class="absolute top-4 left-4">
                            <span class="bg-white/90 backdrop-blur-md px-4 py-1.5 rounded-full text-xs font-bold text-on-surface shadow-sm">Chauffage</span>
                        </div>
                        <div class="absolute top-4 right-4">
                            <span class="bg-slate-400 text-white px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-widest">Inactif</span>
                        </div>
                    </div>
                    <div class="p-8 space-y-6 flex-grow flex flex-col justify-between">
                        <div class="space-y-3">
                            <h3 class="text-2xl font-extrabold text-on-surface leading-tight">Entretien chaudière gaz</h3>
                            <p class="text-secondary text-sm leading-relaxed">Visite annuelle obligatoire pour assurer la sécurité et le bon fonctionnement de votre installation.</p>
                        </div>
                        <div class="flex items-center justify-between pt-6 border-t border-surface-container">
                            <div class="flex flex-col">
                                <span class="text-xs font-bold text-secondary uppercase tracking-tighter">Tarif</span>
                                <span class="text-xl font-black text-primary-container">80€ / visite</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <button class="p-3 rounded-full bg-surface-container-low hover:bg-primary-container/10 text-on-surface hover:text-primary-container transition-all">
                                    <span class="material-symbols-outlined text-sm" data-icon="edit">edit</span>
                                </button>
                                <button class="p-3 rounded-full bg-surface-container-low hover:bg-red-50 text-on-surface hover:text-error transition-all">
                                    <span class="material-symbols-outlined text-sm" data-icon="delete">delete</span>
                                </button>
                                <div class="ml-2 w-12 h-6 bg-slate-200 rounded-full relative p-1 cursor-pointer">
                                    <div class="absolute left-1 w-4 h-4 bg-white rounded-full"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
</body>

</html>
</x-professional-layout>