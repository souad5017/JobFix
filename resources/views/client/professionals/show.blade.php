<x-app-layout>
    <div x-data="modalData()">
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
                                @click="openModal(
        {{ $professional->id }},
        '{{ $professional->name }}',
        '{{ $professional->email ?? '' }}',
        '{{ $professional->city ?? '' }}',
        '{{ $professional->specialty ?? '' }}'
    )"
                                class="bg-orange-500 text-white px-4 py-2 rounded-xl">
                                Demander un service
                            </button>
                            <div
                                x-show="show"
                                x-transition
                                class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-sm">

                                <div class="bg-white w-full max-w-lg rounded-[2.5rem] shadow-2xl overflow-hidden relative">

                                    <!-- HEADER -->
                                    <div class="p-8 pb-4 flex justify-between items-start">
                                        <div>
                                            <h2 class="text-2xl font-black text-slate-900">
                                                Envoyer une demande de service
                                            </h2>
                                            <p class="text-slate-400 text-xs uppercase tracking-widest mt-1">
                                                Remplissez les informations
                                            </p>
                                        </div>

                                        <button @click="closeModal()" class="p-2 hover:bg-slate-100 rounded-full">
                                            ✖
                                        </button>
                                    </div>

                                    <!-- BODY -->
                                    <div class="p-8 pt-0 space-y-6">
                                        <form method="POST" action="{{ route('service.request.store', $professional->id) }}">
                                            @csrf
                                            <div class="bg-slate-50 p-4 rounded-2xl flex items-center gap-4 border border-slate-100">
                                                <div class="w-12 h-12 bg-slate-900 rounded-xl flex items-center justify-center text-white font-black">
                                                    {{ substr($professional->user->name, 0, 1) }}
                                                </div>

                                                <div>
                                                    <p class="text-xs font-bold text-orange-500 uppercase">Destinataire</p>
                                                    <p class="text-sm font-bold text-slate-900">{{ $professional->user->name }}</p>
                                                </div>
                                            </div>

                                            <input type="hidden" name="professional_id" value="{{ $professional->id }}">

                                            <!-- Type -->
                                            <label class="text-xs font-bold text-slate-400 uppercase mb-2 block">
                                                Type de service
                                            </label>

                                            <select name="service_type"
                                                class="w-full bg-slate-50 p-3 rounded-xl border text-sm mb-4">
                                                <option>Installation</option>
                                                <option>Réparation</option>
                                                <option>Maintenance</option>
                                            </select>

                                            <!-- Description -->
                                            <textarea name="description"
                                                class="w-full bg-slate-50 rounded-2xl p-4 text-sm border mb-4"
                                                placeholder="Décrivez votre besoin..."></textarea>

                                            <!-- Date / Time -->
                                            <div class="grid grid-cols-2 gap-4 mb-4">
                                                <input type="date" name="date" class="bg-slate-50 p-3 rounded-xl text-sm border">
                                                <input type="time" name="time" class="bg-slate-50 p-3 rounded-xl text-sm border">
                                            </div>

                                            <!-- Buttons -->
                                            <div class="flex gap-3 pt-4">
                                                <button type="button"
                                                    class="flex-1 py-3 bg-slate-100 rounded-2xl text-sm font-bold"
                                                    onclick="this.closest('.fixed').remove()">
                                                    Annuler
                                                </button>

                                                <button type="submit"
                                                    class="flex-[2] py-3 bg-orange-500 text-white rounded-2xl text-sm font-bold">
                                                    Envoyer
                                                </button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <livewire:service-request-modal />
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


        <script>
            function modalData() {
                return {
                    show: false,
                    id: null,
                    name: '',
                    email: '',
                    city: '',
                    category: '',

                    openModal(id, name, email, city, category) {
                        this.show = true;
                        this.id = id;
                        this.name = name;
                        this.email = email;
                        this.city = city;
                        this.category = category;
                    },

                    closeModal() {
                        this.show = false;
                    }
                }
            }
        </script>
</x-app-layout>