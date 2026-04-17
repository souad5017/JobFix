<x-app-layout>
    <div class="bg-[#f8fafc] min-h-screen py-12">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            <a href="{{ route('client.professionals.index') }}" class="inline-flex items-center gap-2 text-slate-400 font-black uppercase text-[10px] tracking-widest hover:text-[#1e293b] mb-8 transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7" />
                </svg>
                Retour à la liste
            </a>

            <div class="bg-white rounded-[3rem] p-10 shadow-sm border border-gray-100 mb-8">
                <div class="flex flex-col md:flex-row items-center gap-8 text-center md:text-left">
                    <div class="h-32 w-32 bg-[#1e293b] rounded-[2rem] flex items-center justify-center text-white text-4xl font-black shadow-2xl">
                        {{ substr($professional->name, 0, 1) }}
                    </div>
                    <div class="flex-1">
                        <h1 class="text-4xl font-black text-[#1e293b] tracking-tight mb-2">{{ $professional->name }}</h1>
                        <div class="flex flex-wrap justify-center md:justify-start gap-3">
                            <span class="text-[10px] font-black uppercase tracking-widest text-[#f97316] bg-orange-50 px-4 py-1.5 rounded-full border border-orange-100">
                                {{ $professional->specialty ?? 'Professionnel' }}
                            </span>
                            <span class="text-[10px] font-black uppercase tracking-widest text-slate-500 bg-slate-50 px-4 py-1.5 rounded-full border border-slate-100">
                                📍 Casablanca
                            </span>
                        </div>
                    </div>
                    <div class="w-full md:w-auto">
                        <button
                            wire:click="$dispatch('openRequestModal', { professionalId: {{ $professional->id }} })"
                            class="bg-orange-500 text-white px-4 py-2 rounded-xl">
                            Demander un service
                        </button>
                    </div>
                    <livewire:service-request-modal />
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="space-y-6">
                    <div class="bg-white rounded-[2rem] p-8 border border-gray-100 shadow-sm">
                        <h3 class="font-black text-[#1e293b] uppercase text-[10px] tracking-widest mb-6 border-b border-gray-50 pb-4">Statistiques</h3>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center text-sm">
                                <span class="font-bold text-slate-400 underline decoration-orange-200">Projets</span>
                                <span class="font-black text-[#1e293b]">124</span>
                            </div>
                            <div class="flex justify-between items-center text-sm">
                                <span class="font-bold text-slate-400 underline decoration-orange-200">Note</span>
                                <span class="font-black text-[#1e293b]">4.9/5</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-2 space-y-8">
                    <div class="bg-white rounded-[2.5rem] p-10 border border-gray-100 shadow-sm">
                        <h3 class="font-black text-[#1e293b] uppercase text-[10px] tracking-widest mb-6">À propos de l'expert</h3>
                        <p class="text-slate-600 font-medium leading-relaxed italic">
                            {{ $professional->bio ?? "Ce professionnel n'a pas encore rempli sa biographie, mais il est prêt à répondre à vos besoins avec sérieux." }}
                        </p>

                        <div class="mt-10">
                            <h3 class="font-black text-[#1e293b] uppercase text-[10px] tracking-widest mb-6">Expertise</h3>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-4 py-2 bg-gray-50 rounded-xl text-xs font-bold text-[#1e293b]">Installation</span>
                                <span class="px-4 py-2 bg-gray-50 rounded-xl text-xs font-bold text-[#1e293b]">Maintenance</span>
                                <span class="px-4 py-2 bg-gray-50 rounded-xl text-xs font-bold text-[#1e293b]">Réparation</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>