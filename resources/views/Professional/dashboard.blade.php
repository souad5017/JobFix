<x-professional-layout>
    <!-- Main Content Canvas -->
    <main class="pl-72 pt-20 min-h-screen">
        <div class="max-w-[1400px] mx-auto p-12 space-y-12">
            <!-- Welcome Header -->
            <section class="flex flex-col md:flex-row md:items-end justify-between gap-6">
                <div class="space-y-2">
                    <h2 class="text-4xl md:text-5xl font-black text-on-surface tracking-tight leading-tight">
                        Bienvenue, <span class="text-primary-container"></span>
                    </h2>
                </div>
            </section>
            <!-- Stat Cards: Bento Style -->
            <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-surface-container-lowest p-8 rounded-xl shadow-sm space-y-4 hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-primary-container/10 rounded-lg flex items-center justify-center">
                        <span class="material-symbols-outlined text-primary-container">payments</span>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-secondary uppercase tracking-widest">Chiffre d'affaires total</p>
                        <h3 class="text-3xl font-black mt-1">12 450€</h3>
                        <p class="text-xs text-green-600 font-bold mt-2 flex items-center gap-1">
                            <span class="material-symbols-outlined text-sm">trending_up</span> +12% ce mois
                        </p>
                    </div>
                </div>
                <div class="bg-surface-container-lowest p-8 rounded-xl shadow-sm space-y-4 hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-tertiary-container/10 rounded-lg flex items-center justify-center">
                        <span class="material-symbols-outlined text-tertiary-container">pending_actions</span>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-secondary uppercase tracking-widest">Nouvelles demandes</p>
                        <h3 class="text-3xl font-black mt-1">08</h3>
                        <p class="text-xs text-primary-container font-bold mt-2">Prêt à répondre</p>
                    </div>
                </div>
                <div class="bg-surface-container-lowest p-8 rounded-xl shadow-sm space-y-4 hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-amber-100 rounded-lg flex items-center justify-center">
                        <span class="material-symbols-outlined text-amber-600" style="font-variation-settings: 'FILL' 1;">star</span>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-secondary uppercase tracking-widest">Note moyenne</p>
                        <h3 class="text-3xl font-black mt-1">4.9/5</h3>
                        <p class="text-xs text-secondary font-medium mt-2">Sur 124 avis clients</p>
                    </div>
                </div>
                <div class="bg-surface-container-lowest p-8 rounded-xl shadow-sm space-y-4 hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                        <span class="material-symbols-outlined text-blue-600">task_alt</span>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-secondary uppercase tracking-widest">Interventions terminées</p>
                        <h3 class="text-3xl font-black mt-1">312</h3>
                        <p class="text-xs text-secondary font-medium mt-2">Depuis le début</p>
                    </div>
                </div>
            </section>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Recent Activity Table -->
                <section class="lg:col-span-2 space-y-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-2xl font-bold tracking-tight">Demandes de Service Récentes</h3>
                        <a class="text-sm font-bold text-primary-container hover:underline" href="#">Voir tout</a>
                    </div>
                    <div class="bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-surface-container-low text-secondary uppercase text-[10px] tracking-widest font-black">
                                    <th class="px-8 py-4">Client</th>
                                    <th class="px-8 py-4">Prix</th>
                                    <th class="px-8 py-4">Date</th>
                                    <th class="px-8 py-4 text-right">Statut</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-surface-container">
                                <tr class="hover:bg-surface-container-low/50 transition-colors">
                                    <td class="px-8 py-5 flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-full bg-surface-container flex items-center justify-center text-[10px] font-bold">JD</div>
                                        <span class="font-bold text-sm"></span>
                                    </td>
                                    <td class="px-8 py-5">
                                        <span class="px-3 py-1 bg-tertiary-container/10 text-tertiary-container text-xs font-bold rounded-full">Électricité</span>
                                    </td>
                                    <td class="px-8 py-5 text-sm text-secondary">Aujourd'hui, 14:30</td>
                                    <td class="px-8 py-5 text-right">
                                        <span class="px-3 py-1 bg-amber-100 text-amber-700 text-[10px] font-black uppercase rounded-full">En attente</span>
                                    </td>
                                </tr>
                                <tr class="hover:bg-surface-container-low/50 transition-colors">
                                    <td class="px-8 py-5 flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-full bg-surface-container flex items-center justify-center text-[10px] font-bold">SM</div>
                                        <span class="font-bold text-sm">Sophie Martin</span>
                                    </td>
                                    <td class="px-8 py-5">
                                        <span class="px-3 py-1 bg-blue-100 text-blue-600 text-xs font-bold rounded-full">Plomberie</span>
                                    </td>
                                    <td class="px-8 py-5 text-sm text-secondary">Hier, 09:15</td>
                                    <td class="px-8 py-5 text-right">
                                        <span class="px-3 py-1 bg-green-100 text-green-700 text-[10px] font-black uppercase rounded-full">Confirmé</span>
                                    </td>
                                </tr>
                                <tr class="hover:bg-surface-container-low/50 transition-colors">
                                    <td class="px-8 py-5 flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-full bg-surface-container flex items-center justify-center text-[10px] font-bold">LB</div>
                                        <span class="font-bold text-sm">Lucas Bernard</span>
                                    </td>
                                    <td class="px-8 py-5">
                                        <span class="px-3 py-1 bg-orange-100 text-orange-600 text-xs font-bold rounded-full">Installation TV</span>
                                    </td>
                                    <td class="px-8 py-5 text-sm text-secondary">14 Mars, 16:45</td>
                                    <td class="px-8 py-5 text-right">
                                        <span class="px-3 py-1 bg-slate-100 text-slate-500 text-[10px] font-black uppercase rounded-full">Terminé</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                <!-- Secondary Section: Top Services & Conseil Pro -->
                <section class="space-y-8">
                    <!-- Top Services Widget -->
                    <div class="bg-surface-container-lowest p-8 rounded-xl shadow-sm space-y-6">
                        <h3 class="text-xl font-bold tracking-tight">Services les plus demandés</h3>
                        <div class="space-y-4">
                            <div class="space-y-2">
                                <div class="flex justify-between text-xs font-bold uppercase tracking-wider">
                                    <span>Électricité</span>
                                    <span class="text-primary-container">45%</span>
                                </div>
                                <div class="w-full h-2 bg-surface-container rounded-full overflow-hidden">
                                    <div class="h-full bg-primary-container w-[45%]"></div>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <div class="flex justify-between text-xs font-bold uppercase tracking-wider">
                                    <span>Plomberie</span>
                                    <span class="text-tertiary-container">30%</span>
                                </div>
                                <div class="w-full h-2 bg-surface-container rounded-full overflow-hidden">
                                    <div class="h-full bg-tertiary-container w-[30%]"></div>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <div class="flex justify-between text-xs font-bold uppercase tracking-wider">
                                    <span>Domotique</span>
                                    <span class="text-secondary">25%</span>
                                </div>
                                <div class="w-full h-2 bg-surface-container rounded-full overflow-hidden">
                                    <div class="h-full bg-secondary w-[25%]"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Conseil Pro Card -->
                    <div class="relative group overflow-hidden rounded-xl bg-slate-900 aspect-square flex flex-col justify-end p-8">
                        <div class="absolute inset-0 z-0 opacity-40 transition-transform group-hover:scale-110 duration-700">
                            <img class="w-full h-full object-cover" data-alt="high quality professional photography of a modern toolbox with tools arranged neatly, soft dramatic natural lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBODCNw-QHy0HtekMNUA3JM8V8gF0EHqxZTWJDvZgjlUqCiGkbLW9de6XzS_Y87LYPx0OaOHRkdmbaoTd6wlpcJuF0L-59rRiSn28cUxI8KknARD1NHO58IvdvwyPGyRhJkONGv_kY6y4pN9cD7oBxh7jUR9zrNqP0cyFbIfrVJ64JCtHAA_lusMOIEJ7HKzYbnSx7tOVTMrh9tAooH9VVaQf2h1UppQ1zfHtEZ7di9oGE2rK2SfQGDdkN0X_TAfd0HcGgl1AaM_SBQ" />
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/20 to-transparent z-10"></div>
                        <div class="relative z-20 space-y-4">
                            <div class="inline-flex items-center gap-2 bg-primary-container text-white px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-widest">
                                <span class="material-symbols-outlined text-xs">lightbulb</span>
                                Conseil Pro
                            </div>
                            <h4 class="text-white text-xl font-bold leading-tight">Améliorez vos photos pour attirer plus de clients</h4>
                            <p class="text-slate-300 text-sm font-body">Les profils avec des photos de haute qualité reçoivent 3x plus de demandes.</p>
                            <button class="text-white font-bold text-sm flex items-center gap-2 hover:translate-x-1 transition-transform">
                                Lire le guide <span class="material-symbols-outlined">arrow_forward</span>
                            </button>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
    <!-- Floating Action for Mobile / Support -->
    <button class="fixed bottom-8 right-8 w-16 h-16 bg-slate-900 text-white rounded-full flex items-center justify-center shadow-2xl hover:bg-slate-800 transition-all z-50">
        <span class="material-symbols-outlined text-3xl">question_answer</span>
    </button>
    </body>

    </html>
</x-professional-layout>