<div id="createModal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-on-background/30 backdrop-blur-sm p-4">

    <div class="bg-surface-container-lowest w-full max-w-xl rounded-xl shadow-2xl overflow-hidden border border-outline-variant/15 flex flex-col max-h-[90vh]">
        <!-- Header -->
        <div class="p-8 pb-4 flex justify-between items-start shrink-0">
            <div>
                <h2 class="text-2xl font-extrabold font-headline text-on-surface tracking-tight mb-2">Envoyer une demande de service</h2>
                <p class="text-secondary text-sm">Précisez vos besoins pour obtenir une réponse rapide.</p>
            </div>
            <button onclick="closeCreate()" class="p-2 hover:bg-surface-container rounded-full transition-colors">
                <span class="material-symbols-outlined text-on-surface">close</span>
            </button>
        </div>
        <!-- Content Area -->
        <form action="{{ route('service.store', $professional->id) }}" method="POST"
            class="px-8 py-4 flex-1 overflow-y-auto space-y-8 custom-scrollbar" enctype="multipart/form-data">

            @csrf
            <!-- Recipient Profile Card -->
            <div class="flex items-center gap-2 bg-surface-container-low p-2 rounded-lg">
                <div class="relative">
                    <img class="w-14 h-14 rounded-full object-cover" data-alt="professional portrait of a middle aged man in a blue work shirt smiling confidently with neutral background"
                        src="{{ 'storage/'.$professional->user->image}}" />
                </div>
                <div>
                    <p class="text-xs font-bold text-orange-600 uppercase tracking-widest mb-0.5">{{ $professional->category->name }}</p>
                    <p class="font-headline font-bold text-on-surface">{{ $professional->user->name }}</p>
                </div>
            </div>
            @if ($errors->any())
            <div class="bg-red-100 text-red-600 p-3 rounded mb-4">
                <ul class="text-sm">
                    @foreach ($errors->all() as $error)
                    <li>• {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <!-- Form Section -->
            <div class="space-y-6">
                <!-- Type of Service Chips -->
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
                    <textarea name="description"
                        class="w-full bg-surface-container-low border-none rounded-lg p-4 text-sm focus:ring-2 focus:ring-primary-container/20 focus:bg-surface-container-lowest transition-all outline-none resize-none" placeholder="Décrivez votre problème en quelques mots..." rows="2" required></textarea>
                </div>
                <!-- Date and Time Grid -->
                <div class="grid grid-cols-2 gap-3">

                    <!-- DATE -->
                    <div class="space-y-2">
                        <label class="block text-sm font-bold text-on-surface">Date souhaitée</label>
                        <div class="relative group">
                            <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-secondary text-[20px]">calendar_today</span>

                            <input
                                type="date"
                                name="date"
                                class="w-full bg-surface-container-low border-none rounded-lg py-3 pl-12 pr-4 text-sm focus:ring-2 focus:ring-primary-container/20 focus:bg-surface-container-lowest outline-none">
                        </div>
                    </div>

                    <!-- TIME -->
                    <div class="space-y-2">
                        <label class="block text-sm font-bold text-on-surface">Heure souhaitée</label>
                        <div class="relative group">
                            <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-secondary text-[20px]">schedule</span>

                            <input
                                type="time"
                                name="time"
                                class="w-full bg-surface-container-low border-none rounded-lg py-3 pl-12 pr-4 text-sm focus:ring-2 focus:ring-primary-container/20 focus:bg-surface-container-lowest outline-none">
                        </div>
                    </div>

                </div>
                <!-- File Upload Area -->
                <div class="space-y-2">
                    <label class="block text-sm font-bold text-on-surface">Ajouter des photos</label>

                    <!-- Hidden input -->
                    <input type="file" name="images[]" id="imagesInputCreate" multiple class="hidden">
                    <div onclick="document.getElementById('imagesInputCreate').click()"
                        class="border-2 border-dashed border-outline-variant/30 rounded-xl p-8 flex flex-col items-center justify-center bg-surface-container-low/50 hover:bg-surface-container-low transition-colors cursor-pointer group">

                        <div class="w-12 h-12 rounded-full bg-primary-container/10 flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-primary-container">add_a_photo</span>
                        </div>

                        <p class="text-sm font-semibold text-on-surface">Cliquez pour téléverser</p>
                        <p class="text-xs text-secondary mt-1">PNG, JPG jusqu'à 10MB</p>
                    </div>
                    <div id="previewCreate" class="flex gap-3 mt-3 flex-wrap"></div>
                </div>
            </div>
            <!-- Footer Actions -->
            <div class="p-8 pt-4 flex gap-4 bg-surface-container-lowest border-t border-slate-100/50">
                <button onclick="closeCreate()" class="flex-1 py-4 rounded-full text-sm font-bold text-secondary bg-surface-container-high hover:bg-surface-container-highest transition-all duration-300">
                    Annuler
                </button>
                <button type="submit" class="flex-[2] py-4 rounded-full text-sm font-bold text-on-primary bg-gradient-to-r from-primary to-primary-container shadow-lg shadow-primary-container/20 hover:scale-[1.02] active:scale-95 transition-all duration-300">
                    Envoyer la demande
                </button>
            </div>
        </form>

    </div>
</div>