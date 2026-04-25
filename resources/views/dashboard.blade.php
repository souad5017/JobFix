<div id="createModal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-on-background/30 backdrop-blur-sm p-4">

    <div class="bg-surface-container-lowest w-full max-w-xl rounded-xl shadow-2xl overflow-hidden border border-outline-variant/15 flex flex-col">

        <!-- Header -->
        <div class="p-6 pb-3 flex justify-between items-start">
            <div>
                <h2 class="text-2xl font-extrabold font-headline text-on-surface tracking-tight mb-2">
                    Envoyer une demande de service
                </h2>
                <p class="text-secondary text-sm">
                    Précisez vos besoins pour obtenir une réponse rapide.
                </p>
            </div>

            <button type="button" onclick="closeCreate()" class="p-1 hover:bg-surface-container rounded-full transition-colors">
                <span class="material-symbols-outlined text-on-surface">close</span>
            </button>
        </div>

        <!-- FORM (IMPORTANT) -->
        <form action="{{ route('service.store', $professional->id) }}" method="POST" class="px-6 py-3 flex-1 overflow-y-auto space-y-8" enctype="multipart/form-data">
            @csrf

            <!-- Title -->
            <div class="space-y-2">
                <label class="block text-sm font-bold text-on-surface">Title de service</label>
                <input
                    type="text"
                    name="title"
                    class="w-full bg-surface-container-low border-none rounded-lg p-3 text-sm focus:ring-2 focus:ring-primary-container/20 focus:bg-surface-container-lowest transition-all outline-none"
                    placeholder="Title"
                    required>
            </div>

            <!-- Description -->
            <div class="space-y-2">
                <label class="block text-sm font-bold text-on-surface">Description de votre besoin</label>
                <textarea
                    name="description"
                    class="w-full bg-surface-container-low border-none rounded-lg p-3 text-sm focus:ring-2 focus:ring-primary-container/20 focus:bg-surface-container-lowest transition-all outline-none resize-none"
                    placeholder="Décrivez votre problème..."
                    rows="4"
                    required></textarea>
            </div>

            <!-- Date -->
            <div class="space-y-2">
                <label class="block text-sm font-bold text-on-surface">Date souhaitée</label>
                <input
                    type="date"
                    name="scheduled_at"
                    class="w-full bg-surface-container-low border-none rounded-lg p-3 text-sm focus:ring-2 focus:ring-primary-container/20 focus:bg-surface-container-lowest outline-none">
            </div>

            <!-- Buttons -->
            <div class="p-8 pt-4 flex gap-4 bg-surface-container-lowest border-t border-slate-100/50">
                <button type="button"
                    onclick="closeCreate()"
                    class="flex-1 py-4 rounded-full text-sm font-bold text-secondary bg-surface-container-high hover:bg-surface-container-highest transition-all duration-300">
                    Annuler
                </button>
                <input type="file" name="image" id="image">
                <button type="submit"
                    class="flex-[2] py-4 rounded-full text-sm font-bold text-on-primary bg-gradient-to-r from-primary to-primary-container shadow-lg shadow-primary-container/20 hover:scale-[1.02] active:scale-95 transition-all duration-300">
                    Envoyer la demande
                </button>
            </div>

        </form>
    </div>
</div>


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
