<x-app-layout>
    <main class="flex-1  p-8 bg-surface-bright min-h-screen">
        <!-- Welcome Header -->
        <header class="mb-10 ml-20">
            <h1 class="text-4xl font-extrabold tracking-tight text-on-surface mb-2">Bonjour, {{ auth()->user()->name }}</h1>
            <p class="text-secondary font-medium">Ravi de vous revoir. Voici l'état de vos demandes de services.</p>
        </header>
        <!-- Quick Stats Bento Grid -->
        <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12 m-10">
            <div class="bg-surface-container-lowest p-8 rounded-lg shadow-[0px_20px_40px_rgba(25,28,30,0.04)] border border-white flex flex-col justify-between">
                <div>
                    <span class="label-md font-bold text-slate-400 uppercase tracking-widest text-[10px]">Demandes en cours</span>
                    <div class="text-5xl font-black text-orange-600 mt-2">{{ $requestsCount }}</div>
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
                    <div class="text-5xl font-black mt-2">{{ $favoritesCount }}</div>
                </div>
                <button class="bg-white/20 backdrop-blur-md text-white text-xs font-bold py-2 px-4 rounded-full w-fit hover:bg-white/30 transition-colors">
                    Voir la liste
                </button>
            </div>
        </section>
        <div class="grid grid-cols-1 xl:grid-cols-3 gap-12">
            <!-- Active Requests Section -->
            <section class="xl:col-span-2 m-10">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold text-on-surface">Active Requests</h2>
                    <a href="{{ route('client.requests') }}" class="text-orange-600 font-bold text-sm cursor-pointer">Tout voir</a>
                </div>
                <div class="space-y-4">

                    @forelse($recentRequests as $request)
                    <div class="bg-surface-container-lowest p-6 rounded-lg flex items-center gap-6 shadow-[0px_10px_20px_rgba(0,0,0,0.02)] group hover:shadow-lg transition-shadow">
                        <div class="w-16 h-16 rounded-full overflow-hidden bg-slate-100 flex-shrink-0">
                            <img alt="Service Provider" data-alt="Close up of a professional plumber working on a silver kitchen faucet, bright daylight, focused task"
                                src="{{ asset('storage/'.$request->professional->image) }}" />
                        </div>
                        <div class="flex-1">
                            <div class="flex justify-between items-start mb-1">
                                <h3 class="text-lg font-bold">{{ $request->professional->user->name }}</h3>
                                <span class="text-[10px] font-bold bg-orange-100 text-orange-700 px-2 py-1 rounded-full uppercase">{{ $request->professional->category->name }}</span>
                            </div>
                            <p class="text-sm text-secondary font-medium">Arrivée estimée dans <span class="text-orange-600 font-bold">20 mins</span></p>
                            <div class="mt-3 flex gap-2">
                                <button class="bg-slate-100 text-slate-700 text-xs font-bold px-4 py-2 rounded-full hover:bg-slate-200 transition-colors">Message</button>
                                <button class="bg-slate-100 text-slate-700 text-xs font-bold px-4 py-2 rounded-full hover:bg-slate-200 transition-colors">Suivi GPS</button>
                            </div>
                        </div>
                    </div>

                    @empty
                    <p class="text-slate-400 italic">Aucune requête active.</p>
                    @endforelse
                </div>
            </section>
            <section>
                <div class="bg-white rounded-lg p-8 shadow-[0px_10px_30px_rgba(0,0,0,0.03)] h-full sticky top-28">
                    <div class="flex items-center justify-between mb-8">
                        <h2 class="text-xl font-bold text-on-surface">
                            Recommended Pros for you
                        </h2>

                        <a href="{{ route('client.professionals.index') }}" class="text-orange-600 font-bold text-sm cursor-pointer">
                            Voir plus
                        </a>
                    </div>
                    <div class="space-y-8">
                        @forelse($professionals as $professional)
                        <div class="bg-surface-container-lowest p-6 rounded-lg shadow-[0px_20px_40px_rgba(25,28,30,0.04)] hover:-translate-y-1 transition-transform duration-300">
                            <div class="flex items-start justify-between mb-4">
                                <div class="flex gap-4">
                                    <div class="w-12 h-12 rounded-xl overflow-hidden">
                                        <img alt="Pro" data-alt="Portrait of a carpenter smiling in his workshop, warm sunset lighting, tools in background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA45DStpjpIBn98O5AXiN3iOA9Q0RtS3T7-DDhZFzGXvbHDfKYyinfLm8vyCVf3S_FqfCUYtOgbNa1Pl6JWUX0ZZnP0sWjdHhQnE5I9Vwr2X4WON68pdjvUhzQxB450dRn3cN-rfA_jdP7ZpaSz9Yx8q_mOL1MBJbnUH33hOJLX2kr0C-0AEPNA0Xt0L2aEJidC5CtMg7uyTxjmhCFLKSyoS6aP-lzPvrObv0W__CelyENEwetIyz-W9ZwhL67iqkPjsS-iDE3RXtaB" />
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-sm">{{ $professional->user->name }}</h4>
                                        <div class="flex items-center text-xs text-secondary mt-1">
                                            <span class="material-symbols-outlined text-orange-500 text-[14px]" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span class="ml-1 font-bold text-on-surface">4.9</span>
                                            <span class="ml-1">(128 avis)</span>
                                        </div>
                                    </div>
                                </div>
                                <span class="text-[10px] font-bold text-secondary uppercase bg-slate-100 px-2 py-1 rounded">{{ $professional->category->name }}</span>
                            </div>
                            <p class="text-xs text-secondary leading-relaxed mb-4">{{$professional->description}}</p>
                            <a href="{{ route('client.professionals.show', $professional->id) }}"
                                class="w-full py-3 bg-secondary-container text-on-secondary-container font-bold text-xs rounded-full hover:bg-orange-50 hover:text-orange-600 transition-colors">Consulter le profil</a>
                        </div>
                        @empty
                        <p class="text-slate-400 italic"> Aucun professionnel trouvé.</p>
                        @endforelse
                    </div>
                </div>
            </section>
        </div>



    </main>

</x-app-layout>