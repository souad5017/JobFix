<main class="flex-1  p-8 bg-surface-bright min-h-screen">
    <!-- Welcome Header -->
    <header class="mb-10">
        <h1 class="text-4xl font-extrabold tracking-tight text-on-surface mb-2">Bonjour, Marc-Antoine</h1>
        <p class="text-secondary font-medium">Ravi de vous revoir. Voici l'état de vos demandes de services.</p>
    </header>
    <!-- Quick Stats Bento Grid -->
    <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
        <div class="bg-surface-container-lowest p-8 rounded-lg shadow-[0px_20px_40px_rgba(25,28,30,0.04)] border border-white flex flex-col justify-between">
            <div>
                <span class="label-md font-bold text-slate-400 uppercase tracking-widest text-[10px]">Demandes en cours</span>
                <div class="text-5xl font-black text-orange-600 mt-2">2</div>
            </div>  
        </div>
        <div class="bg-surface-container-lowest p-8 rounded-lg shadow-[0px_20px_40px_rgba(25,28,30,0.04)] border border-white">
            <span class="label-md font-bold text-slate-400 uppercase tracking-widest text-[10px]">Total dépensé</span>
            <div class="text-5xl font-black text-on-surface mt-2">1,240<span class="text-2xl font-bold ml-1">€</span></div>
            <p class="text-xs text-secondary mt-4">Dernière facture le 12 Oct.</p>
        </div>
        <div class="bg-orange-600 p-8 rounded-lg shadow-[0px_20px_40px_rgba(243,112,33,0.15)] flex flex-col justify-between text-white">
            <div>
                <span class="label-md font-bold text-orange-200 uppercase tracking-widest text-[10px]">Pros favoris</span>
                <div class="text-5xl font-black mt-2">12</div>
            </div>
            <button class="bg-white/20 backdrop-blur-md text-white text-xs font-bold py-2 px-4 rounded-full w-fit hover:bg-white/30 transition-colors">
                Voir la liste
            </button>
        </div>
    </section>
    <div class="grid grid-cols-1 xl:grid-cols-3 gap-12">
        <!-- Active Requests Section -->
        <section class="xl:col-span-2">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-on-surface">Active Requests</h2>
                <span class="text-orange-600 font-bold text-sm cursor-pointer">Tout voir</span>
            </div>
            <div class="space-y-4">
                <!-- Request Card 1 -->
                <div class="bg-surface-container-lowest p-6 rounded-lg flex items-center gap-6 shadow-[0px_10px_20px_rgba(0,0,0,0.02)] group hover:shadow-lg transition-shadow">
                    <div class="w-16 h-16 rounded-full overflow-hidden bg-slate-100 flex-shrink-0">
                        <img alt="Service Provider" data-alt="Close up of a professional plumber working on a silver kitchen faucet, bright daylight, focused task" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC_hIRzvQrq5F8QyYebmZo734Uqq1qRDmfba3711U2-IkCltVWCDP8IJEqe0dTWdNym5KMDyVm71yy7xWdoVLx4N2TRao8NIpl0ohDPJGShmQOr22RT1G-QSoFy_VOo2JGHXLGajyWfV3Gr4wWckS8uiyKdL3uV8rf9hClhy2Oi2WQsPdeLU_nrKgXCmUaGTk-G5hCQdBEJPXxYlaRdgR3f5M_py5yEpt3qZslUtB6VtWtVmNZeirttJKsTGHqAYWUiABlq4zjbt5x0" />
                    </div>
                    <div class="flex-1">
                        <div class="flex justify-between items-start mb-1">
                            <h3 class="text-lg font-bold">Jean-Pierre L.</h3>
                            <span class="text-[10px] font-bold bg-orange-100 text-orange-700 px-2 py-1 rounded-full uppercase">Plomberie</span>
                        </div>
                        <p class="text-sm text-secondary font-medium">Arrivée estimée dans <span class="text-orange-600 font-bold">20 mins</span></p>
                        <div class="mt-3 flex gap-2">
                            <button class="bg-slate-100 text-slate-700 text-xs font-bold px-4 py-2 rounded-full hover:bg-slate-200 transition-colors">Message</button>
                            <button class="bg-slate-100 text-slate-700 text-xs font-bold px-4 py-2 rounded-full hover:bg-slate-200 transition-colors">Suivi GPS</button>
                        </div>
                    </div>
                </div>
                <!-- Request Card 2 -->
                <div class="bg-surface-container-lowest p-6 rounded-lg flex items-center gap-6 shadow-[0px_10px_20px_rgba(0,0,0,0.02)] group hover:shadow-lg transition-shadow">
                    <div class="w-16 h-16 rounded-full overflow-hidden bg-slate-100 flex-shrink-0">
                        <img alt="Service Provider" data-alt="Electrician working on a fuse box in a modern apartment, clean and professional setting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAtb7hhw3u9a2k2MD7eZFHt6RcHQHPECQVuWUELnyiaVjZ6qM7DNkAmvyN-vzQ1_Fzwm4YbDEDsDRS88wmyRTrbWdQLIqJwT4gM1Y7FpJtIOwTnXx_U__YjzJOytH2YGjVSdRUn_iSP8yj_wu1L7OIs-tpSgkt1Vab_NAp9R_QdImEh2zOR80GJw-LfymdDNU2hdB8_jRLaV00knN-2pcO4Z_z6MvHds9Mjy1it9P5LC33j9OIrFDW-vXpKhU9M6S-90JBD-1ouuRCe" />
                    </div>
                    <div class="flex-1">
                        <div class="flex justify-between items-start mb-1">
                            <h3 class="text-lg font-bold">Sarah M.</h3>
                            <span class="text-[10px] font-bold bg-blue-100 text-blue-700 px-2 py-1 rounded-full uppercase">Électricité</span>
                        </div>
                        <p class="text-sm text-secondary font-medium">Intervention en cours : <span class="text-blue-600 font-bold">Fin prévue à 16:30</span></p>
                        <div class="mt-3 w-full bg-slate-100 h-1.5 rounded-full overflow-hidden">
                            <div class="bg-blue-500 h-full w-[75%] rounded-full"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Recommended Pros -->
            <div class="mt-12">
                <h2 class="text-2xl font-bold text-on-surface mb-6">Recommended Pros for you</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Pro Card 1 -->
                    <div class="bg-surface-container-lowest p-6 rounded-lg shadow-[0px_20px_40px_rgba(25,28,30,0.04)] hover:-translate-y-1 transition-transform duration-300">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex gap-4">
                                <div class="w-12 h-12 rounded-xl overflow-hidden">
                                    <img alt="Pro" data-alt="Portrait of a carpenter smiling in his workshop, warm sunset lighting, tools in background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA45DStpjpIBn98O5AXiN3iOA9Q0RtS3T7-DDhZFzGXvbHDfKYyinfLm8vyCVf3S_FqfCUYtOgbNa1Pl6JWUX0ZZnP0sWjdHhQnE5I9Vwr2X4WON68pdjvUhzQxB450dRn3cN-rfA_jdP7ZpaSz9Yx8q_mOL1MBJbnUH33hOJLX2kr0C-0AEPNA0Xt0L2aEJidC5CtMg7uyTxjmhCFLKSyoS6aP-lzPvrObv0W__CelyENEwetIyz-W9ZwhL67iqkPjsS-iDE3RXtaB" />
                                </div>
                                <div>
                                    <h4 class="font-bold text-sm">Thomas Durand</h4>
                                    <div class="flex items-center text-xs text-secondary mt-1">
                                        <span class="material-symbols-outlined text-orange-500 text-[14px]" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
                                        <span class="ml-1 font-bold text-on-surface">4.9</span>
                                        <span class="ml-1">(128 avis)</span>
                                    </div>
                                </div>
                            </div>
                            <span class="text-[10px] font-bold text-secondary uppercase bg-slate-100 px-2 py-1 rounded">Boiserie</span>
                        </div>
                        <p class="text-xs text-secondary leading-relaxed mb-4">Expert en menuiserie sur-mesure et restauration de meubles anciens à Paris.</p>
                        <button class="w-full py-3 bg-secondary-container text-on-secondary-container font-bold text-xs rounded-full hover:bg-orange-50 hover:text-orange-600 transition-colors">Consulter le profil</button>
                    </div>
                    <!-- Pro Card 2 -->
                    <div class="bg-surface-container-lowest p-6 rounded-lg shadow-[0px_20px_40px_rgba(25,28,30,0.04)] hover:-translate-y-1 transition-transform duration-300">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex gap-4">
                                <div class="w-12 h-12 rounded-xl overflow-hidden">
                                    <img alt="Pro" data-alt="Portrait of a young gardener in a sunny lush backyard, wearing a professional apron" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAwM6Ko1hUGLatC3PPIMUVxXCD9XHC2Mcp3qzABkBWXq_Vqwgc82IVUzeaeNVv5pbS3pixvSS_Qkwg3QeZ7vG3yyuCv5EqLdGmoR8z9EySd65QbJc7MM89LYWtFlj22-cEnZI1jqxw0kLcS4erk0-DzT8g6Ai_yqJ7HFCmM7gZRkImNEBkJDItvvpHvnOwhVZosgvxtg-yH4H41G33rEDstLxDg5NBeQG5T4PPRns23fXMT8OPK-gtGShqMwK4zDuB_Ti6M_ZXKdiC0" />
                                </div>
                                <div>
                                    <h4 class="font-bold text-sm">Clara Valet</h4>
                                    <div class="flex items-center text-xs text-secondary mt-1">
                                        <span class="material-symbols-outlined text-orange-500 text-[14px]" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
                                        <span class="ml-1 font-bold text-on-surface">5.0</span>
                                        <span class="ml-1">(84 avis)</span>
                                    </div>
                                </div>
                            </div>
                            <span class="text-[10px] font-bold text-secondary uppercase bg-slate-100 px-2 py-1 rounded">Paysage</span>
                        </div>
                        <p class="text-xs text-secondary leading-relaxed mb-4">Aménagement de balcons et petits jardins urbains. Design éco-responsable.</p>
                        <button class="w-full py-3 bg-secondary-container text-on-secondary-container font-bold text-xs rounded-full hover:bg-orange-50 hover:text-orange-600 transition-colors">Consulter le profil</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- Recent History Sidebar -->
        <section>
            <div class="bg-white rounded-lg p-8 shadow-[0px_10px_30px_rgba(0,0,0,0.03)] h-full sticky top-28">
                <h2 class="text-xl font-bold text-on-surface mb-8">Recent History</h2>
                <div class="space-y-8">
                    <!-- History Item 1 -->
                    <div class="relative pl-6 border-l-2 border-slate-100">
                        <div class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-orange-600 border-4 border-white shadow-sm"></div>
                        <div class="mb-4">
                            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">15 Octobre 2023</span>
                            <h4 class="font-bold text-sm mt-1">Réparation Lave-vaisselle</h4>
                            <p class="text-xs text-secondary mt-1">Avec Michel P.</p>
                        </div>
                        <div class="flex items-center gap-1">
                            <span class="text-xs font-bold text-on-surface mr-2">Noter :</span>
                            <button class="material-symbols-outlined text-orange-500 text-lg" data-icon="star" style="font-variation-settings: 'FILL' 0;">star</button>
                            <button class="material-symbols-outlined text-orange-500 text-lg" data-icon="star" style="font-variation-settings: 'FILL' 0;">star</button>
                            <button class="material-symbols-outlined text-orange-500 text-lg" data-icon="star" style="font-variation-settings: 'FILL' 0;">star</button>
                            <button class="material-symbols-outlined text-orange-500 text-lg" data-icon="star" style="font-variation-settings: 'FILL' 0;">star</button>
                            <button class="material-symbols-outlined text-orange-500 text-lg" data-icon="star" style="font-variation-settings: 'FILL' 0;">star</button>
                        </div>
                    </div>
                    <!-- History Item 2 -->
                    <div class="relative pl-6 border-l-2 border-slate-100">
                        <div class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-slate-200 border-4 border-white shadow-sm"></div>
                        <div class="mb-4">
                            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">02 Octobre 2023</span>
                            <h4 class="font-bold text-sm mt-1">Peinture Salon</h4>
                            <p class="text-xs text-secondary mt-1">Avec Atelier Coloré</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="flex items-center text-xs font-bold text-green-600 bg-green-50 px-3 py-1 rounded-full">
                                <span class="material-symbols-outlined text-sm mr-1" data-icon="check_circle" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                Noté 5/5
                            </div>
                            <button class="text-[10px] font-bold text-slate-400 hover:text-orange-600">Revoir facture</button>
                        </div>
                    </div>
                    <!-- History Item 3 -->
                    <div class="relative pl-6 border-l-2 border-slate-100">
                        <div class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-slate-200 border-4 border-white shadow-sm"></div>
                        <div class="mb-2">
                            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">24 Septembre 2023</span>
                            <h4 class="font-bold text-sm mt-1">Installation Luminaire</h4>
                            <p class="text-xs text-secondary mt-1">Avec Sarah M.</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="flex items-center text-xs font-bold text-green-600 bg-green-50 px-3 py-1 rounded-full">
                                <span class="material-symbols-outlined text-sm mr-1" data-icon="check_circle" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                Noté 5/5
                            </div>
                        </div>
                    </div>
                </div>
                <button class="w-full mt-10 py-4 border border-slate-200 rounded-full font-bold text-xs text-secondary hover:bg-slate-50 transition-colors">
                    Voir tout l'historique
                </button>
            </div>
        </section>
    </div>
</main>