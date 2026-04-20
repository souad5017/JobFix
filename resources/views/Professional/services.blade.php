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

                    @foreach($requests as $service)
                    <a href="{{ route('requests.show', $service->id) }}">
                        <div class="bg-surface-container-lowest rounded-lg overflow-hidden flex flex-col shadow-[0px_10px_30px_rgba(25,28,30,0.03)] group opacity-80 border border-transparent hover:border-primary-container/10 transition-all">
                            <div class="relative h-56 {{ !$service->is_active ? 'grayscale' : '' }}">
                                <img alt="Heating Service" src="{{ asset('storage/' . $service->image) }}" class="w-full h-full object-cover" data-alt="close-up of a central heating boiler control panel with digital display and technician's hands adjusting settings" />
                                <div class="absolute top-4 left-4">
                                    <span class="bg-white/90 backdrop-blur-md px-4 py-1.5 rounded-full text-xs font-bold text-on-surface shadow-sm">
                                        {{ $service->category->name ?? 'N/A' }}
                                    </span>
                                </div>
                                <div class="absolute top-4 right-4">
                                    <span class="bg-slate-400 text-white px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-widest">{{ $service->status}}</span>
                                </div>
                            </div>
                            <div class="p-8 space-y-6 flex-grow flex flex-col justify-between">
                                <div class="space-y-3">
                                    <h3 class="text-2xl font-extrabold text-on-surface leading-tight">{{ $service->client->name }}</h3>
                                    <p class="text-secondary text-sm leading-relaxed">{{ $service->description}}</p>
                                </div>
                                <div class="flex items-center justify-between pt-6 border-t border-surface-container">
                                    <div class="flex flex-col">
                                        <span class="text-xs font-bold text-secondary uppercase tracking-tighter">Tarif</span>
                                        <span class="text-xl font-black text-primary-container">80€ / visite</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach

                </section>
            </div>
        </main>
    </body>

    </html>
</x-professional-layout>