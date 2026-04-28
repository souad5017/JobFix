<x-professional-layout>
    <!-- Main Content Canvas -->
    <div class="pl-72 pt-10 min-h-screen">
        <div class="max-w-[1400px] mx-auto p-12 space-y-12">
            <!-- Welcome Header -->
            <section class="flex flex-col md:flex-row md:items-end justify-between gap-6">
                <div class="space-y-2">
                    <h2 class="text-4xl md:text-5xl font-black text-on-surface tracking-tight leading-tight">
                        Bienvenue, <span class="text-primary-container">{{ $user->name }}</span>
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
                        <h3 class="text-3xl font-black mt-1">{{ $amountSum }} MAD</h3>
                    </div>
                </div>
                <div class="bg-surface-container-lowest p-8 rounded-xl shadow-sm space-y-4 hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-tertiary-container/10 rounded-lg flex items-center justify-center">
                        <span class="material-symbols-outlined text-tertiary-container">pending_actions</span>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-secondary uppercase tracking-widest">Nouvelles demandes</p>
                        <h3 class="text-3xl font-black mt-1">{{ $newRequests }}</h3>
                    </div>
                </div>
                <div class="bg-surface-container-lowest p-8 rounded-xl shadow-sm space-y-4 hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-amber-100 rounded-lg flex items-center justify-center">
                        <span class="material-symbols-outlined text-amber-600" style="font-variation-settings: 'FILL' 1;">star</span>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-secondary uppercase tracking-widest">Note moyenne</p>
                        <h3 class="text-3xl font-black mt-1">{{ number_format($reviewsCount, 1) }}/5</h3>
                    </div>
                </div>
                <div class="bg-surface-container-lowest p-8 rounded-xl shadow-sm space-y-4 hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                        <span class="material-symbols-outlined text-blue-600">task_alt</span>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-secondary uppercase tracking-widest">Interventions terminées</p>
                        <h3 class="text-3xl font-black mt-1">{{ $requestsTermine }}</h3>
                    </div>
                </div>
            </section>

            <!-- Recent Activity Table -->
            <section class="lg:col-span-2 space-y-6">
                <div class="flex items-center justify-between">
                    <h3 class="text-2xl font-bold tracking-tight">Demandes de Service Récentes</h3>
                    <a class="text-sm font-bold text-primary-container hover:underline" href="{{ route('professional.services') }}">Voir tout</a>
                </div>
                <div class="bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-surface-container-low text-secondary uppercase text-[10px] tracking-widest font-black">
                                <th class="px-8 py-4">Client</th>
                                <th class="px-8 py-4">
                                    Title</th>
                                <th class="px-8 py-4">Date</th>
                                <th class="px-8 py-4 text-right">Statut</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-surface-container">
                            @forelse($requests as $request)
                            <tr onclick="window.location='{{ route('requests.show', $request->id) }}'"
                                class="hover:bg-surface-container-low/50 transition-colors">
                                <td class="px-8 py-5 flex items-center gap-3">
                                    <img class="w-8 h-8 rounded-full bg-orange-100 text-orange-600 flex items-center justify-center text-[10px] font-bold"
                                        src="{{ $request->client->image 
    ? asset('storage/'.$request->client->image) 
    : 'https://ui-avatars.com/api/?name='.$request->client->name }}">
                                    <span class="font-bold text-sm">{{ $request->client->name }}</span>
                                </td>
                                <td class="px-8 py-5">
                                    <span class="px-3 py-1   text-xs font-bold rounded-full">
                                        {{ $request->title }}
                                    </span>
                                </td>
                                <td class="px-8 py-5 text-sm text-secondary">
                                    {{ $request->created_at->diffForHumans() }}
                                </td>
                                <td class="px-8 py-5 text-right">
                                    <span class="    {{ $request->status === 'pending'
        ? 'bg-slate-100 text-slate-500'
        : ($request->status === 'accepted'
            ? 'bg-green-100 text-green-700'
            : 'bg-amber-100 text-amber-700')
    }}
    px-3 py-1  text-xs font-bold rounded-full">
                                        {{ $request->status }}
                                    </span>
                                </td>

                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="px-8 py-12 text-center">
                                    <div class="flex flex-col items-center justify-center">
                                        <div class="w-16 h-16 bg-slate-50 rounded-full flex items-center justify-center mb-4">
                                            <span class="material-symbols-outlined text-slate-300 text-3xl">cloud_off</span>
                                        </div>
                                        <h3 class="text-slate-900 font-bold text-base">Aucune demande</h3>
                                        <p class="text-slate-500 text-xs mt-1">Vous n'avez reçu aucune demande pour le moment.</p>
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>

</x-professional-layout>