<!-- Modal Overlay -->
<div class="fixed inset-0 z-50 flex items-center justify-center bg-on-background/30 backdrop-blur-sm p-4">
    <!-- Modal Container -->
    <div class="bg-surface-container-lowest w-full max-w-xl rounded-xl shadow-2xl overflow-hidden border border-outline-variant/15 flex flex-col">
        <!-- Header -->
        <div class="p-8 pb-4 flex justify-between items-start">
            <div>
                <h2 class="text-2xl font-extrabold font-headline text-on-surface tracking-tight mb-2">Envoyer une demande de service</h2>
                <p class="text-secondary text-sm">Précisez vos besoins pour obtenir une réponse rapide.</p>
            </div>
            <button class="p-2 hover:bg-surface-container rounded-full transition-colors">
                <span class="material-symbols-outlined text-on-surface">close</span>
            </button>
        </div>
        <!-- Content Area -->
        <div class="px-8 py-4 flex-1 overflow-y-auto space-y-8">
            <!-- Recipient Profile Card -->
            <div class="flex items-center gap-4 bg-surface-container-low p-4 rounded-lg">
                <div class="relative">
                    <img class="w-14 h-14 rounded-full object-cover" data-alt="professional portrait of a middle aged man in a blue work shirt smiling confidently with neutral background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCEi09125ns9Fgmd36i98_mDZEqVcC7Cy3De6B9H71IJwm217mjb9nxkymDTQg7YrB6f2wqYs0kx_h9RcEExDjDrfG77NOi9nolV-NrAnSzcKjq9Wh01s7tQliSVvLlOf5xNq2_y747l2IjvWcLmVjTw1r_1rkUoGAdoI0RoMi7Cf_xC6JsMzrR1oUjjjw7doSVCY-FL_nwmMsp8_24lYfFZ95E7BN-w-aFV_A5sKaW84VQfeFBBvAYH4RfM1NXgW0HaA5tbpWRSR9C" />
                    <div class="absolute bottom-0 right-0 w-3.5 h-3.5 bg-green-500 border-2 border-white rounded-full"></div>
                </div>
                <div>
                    <p class="text-xs font-bold text-orange-600 uppercase tracking-widest mb-0.5">Destinataire</p>
                    <p class="font-headline font-bold text-on-surface">Jean-Pierre Leblanc</p>
                    <p class="text-xs text-secondary">Électricien Certifié • Disponible</p>
                </div>
            </div>
            <!-- Form Section -->
            <div class="space-y-6">
           
                <div>
                    <label class="block text-sm font-bold text-on-surface mb-3">Title de service</label>
                    <div class="flex flex-wrap gap-3">
                
                    </div>
                </div>
                <!-- Description -->
                <div class="space-y-2">
                    <label class="block text-sm font-bold text-on-surface">Description de votre besoin</label>
                    <textarea class="w-full bg-surface-container-low border-none rounded-lg p-4 text-sm focus:ring-2 focus:ring-primary-container/20 focus:bg-surface-container-lowest transition-all outline-none resize-none" placeholder="Décrivez votre problème en quelques mots..." rows="4"></textarea>
                </div>
                <!-- Date and Time Grid -->
                <div class="grid grid-cols-2 gap-4">
                    <div class="space-y-2">
                        <label class="block text-sm font-bold text-on-surface">Date souhaitée</label>
                        <div class="relative group">
                            <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-secondary text-[20px]">calendar_today</span>
                            <input class="w-full bg-surface-container-low border-none rounded-lg py-3 pl-12 pr-4 text-sm focus:ring-2 focus:ring-primary-container/20 focus:bg-surface-container-lowest outline-none" placeholder="Sélectionner une date" type="text" />
                        </div>
                    </div>
                    <div class="space-y-2">
                        <label class="block text-sm font-bold text-on-surface">Heure souhaitée</label>
                        <div class="relative group">
                            <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-secondary text-[20px]">schedule</span>
                            <input class="w-full bg-surface-container-low border-none rounded-lg py-3 pl-12 pr-4 text-sm focus:ring-2 focus:ring-primary-container/20 focus:bg-surface-container-lowest outline-none" placeholder="Choisir un créneau" type="text" />
                        </div>
                    </div>
                </div>
                <!-- File Upload Area -->
                <div class="space-y-2">
                    <label class="block text-sm font-bold text-on-surface">Ajouter des photos</label>
                    <div class="border-2 border-dashed border-outline-variant/30 rounded-xl p-8 flex flex-col items-center justify-center bg-surface-container-low/50 hover:bg-surface-container-low transition-colors cursor-pointer group">
                        <div class="w-12 h-12 rounded-full bg-primary-container/10 flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-primary-container">add_a_photo</span>
                        </div>
                        <p class="text-sm font-semibold text-on-surface">Cliquez pour téléverser</p>
                        <p class="text-xs text-secondary mt-1">PNG, JPG jusqu'à 10MB</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Actions -->
        <div class="p-8 pt-4 flex gap-4 bg-surface-container-lowest border-t border-slate-100/50">
            <button class="flex-1 py-4 rounded-full text-sm font-bold text-secondary bg-surface-container-high hover:bg-surface-container-highest transition-all duration-300">
                Annuler
            </button>
            <button class="flex-[2] py-4 rounded-full text-sm font-bold text-on-primary bg-gradient-to-r from-primary to-primary-container shadow-lg shadow-primary-container/20 hover:scale-[1.02] active:scale-95 transition-all duration-300">
                Envoyer la demande
            </button>
        </div>
    </div>
</div>