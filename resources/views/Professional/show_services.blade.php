<x-professional-layout>
    <div x-data="priceModal()" x-init="init()">
        <div class="min-h-screen bg-[#F8F9FA] p-4 md:p-10 lg:ml-72">
            <main class="max-w-6xl mx-auto space-y-8">
                
                <header class="space-y-2">
                    <span class="text-[#F37021] font-bold tracking-[0.2em] text-xs uppercase">
                        Intervention Details
                    </span>
                    <h1 class="text-5xl md:text-6xl font-black text-[#1A1C1E] tracking-tighter">
                        {{ $request->title }}
                    </h1>
                </header>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                    
                    <section class="lg:col-span-7 bg-white rounded-[2rem] p-8 shadow-sm border border-gray-100">
                        <div class="flex items-center gap-3 mb-8">
                            <span class="material-symbols-outlined text-[#F37021] text-3xl">description</span>
                            <h2 class="text-2xl font-extrabold text-[#1A1C1E]">Détails de l'intervention</h2>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6 mb-10">
                            <div class="space-y-4 bg-gray-50/50 p-6 rounded-2xl">
                                <div class="flex items-center text-[#44474E]">
                                    <span class="material-symbols-outlined mr-3 text-[#F37021]">calendar_today</span>
                                    <span class="font-bold">
                                        @if($request->status === 'accepted')
                                            {{ $request->progress === 'completed' ? 'Terminé le' : 'Prévu le' }}
                                            {{ $request->scheduled_at->format('D d M Y') }}
                                        @else
                                            Posté le {{ $request->created_at->format('D d M Y') }}
                                        @endif
                                    </span>
                                </div>
                                <div class="flex items-center text-[#44474E]">
                                    <span class="material-symbols-outlined mr-3 text-[#F37021]">schedule</span>
                                    <span class="font-bold">
                                        {{ ($request->status === 'accepted' ? $request->scheduled_at : $request->created_at)->format('h:i A') }}
                                    </span>
                                </div>
                            </div>

                            <div class="bg-[#FFF5ED] p-6 rounded-2xl border-l-4 border-[#F37021]">
                                <p class="text-[#1A1C1E] leading-relaxed italic font-medium">
                                    "{{ $request->description }}"
                                </p>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <h3 class="text-xs font-black text-gray-400 uppercase tracking-widest">Photos jointes</h3>
                            <div class="grid grid-cols-3 gap-4">
                                @if(!empty($request->image) && count($request->image) > 0)
                                    @foreach($request->image as $img)
                                        <div class="aspect-square rounded-2xl overflow-hidden bg-gray-100 group cursor-pointer">
                                            <img src="{{ asset($img) }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                                        </div>
                                    @endforeach
                                @else
                                    <div class="col-span-3 flex flex-col items-center justify-center py-12 border-2 border-dashed border-gray-200 rounded-[2rem] text-gray-400">
                                        <span class="material-symbols-outlined text-4xl mb-2">no_photography</span>
                                        <p class="text-sm font-bold">Aucune image disponible</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </section>

                    <aside class="lg:col-span-5 space-y-6">
                        
                        <div class="bg-white p-8 rounded-[2rem] shadow-sm border border-gray-100">
                            <div class="flex items-center gap-5 mb-8">
                                <img src="{{ asset('storage/' .$request->client->image) }}" class="w-20 h-20 rounded-[1.5rem] bg-[#E8DEF8] flex items-center justify-center text-[#21005D] text-2xl font-black shadow-inner">
                                <div>
                                    <h4 class="text-2xl font-black text-[#1A1C1E]">{{ $request->client->name }}</h4>
                                    <div class="flex items-center text-gray-500 font-bold mt-1">
                                        <span class="material-symbols-outlined text-sm mr-1">location_on</span>
                                        {{ $request->client->city ?? 'Unknown' }}
                                    </div>
                                </div>
                            </div>

                            <button class="w-full py-5 rounded-[1.5rem] bg-[#E9EEF6] text-[#1A1C1E] font-black hover:bg-[#DDE3EA] transition-all flex items-center justify-center gap-2">
                                Message Client
                            </button>
                        </div>

                        @if($request->status === 'pending')
                        <div class="bg-white p-8 rounded-[2rem] shadow-sm border border-gray-100">
                            <h4 class="text-xs font-black uppercase tracking-[0.2em] text-gray-400 mb-6">Actions de la demande</h4>
                            <div class="flex flex-col sm:flex-row gap-4">
                                <form action="{{ route('requests.update', [$request, 'accepted']) }}" method="POST" class="flex-1">
                                    @csrf
                                    <button type="submit" class="w-full bg-[#F37021] text-white py-5 rounded-[1.5rem] font-black shadow-[0_10px_30px_-10px_rgba(243,112,33,0.5)] hover:translate-y-[-2px] transition-all active:scale-95">
                                        Accepter
                                    </button>
                                </form>
                                <form action="{{ route('requests.update', [$request, 'rejected']) }}" method="POST" class="flex-1">
                                    @csrf
                                    <button type="submit" class="w-full bg-[#F1F3F4] text-[#5F6368] py-5 rounded-[1.5rem] font-black hover:bg-gray-200 transition-all active:scale-95">
                                        Refuser
                                    </button>
                                </form>
                            </div>
                        </div>
                        @endif

                        @if($request->status === 'accepted')
                        <div class="bg-white p-8 rounded-[2rem] shadow-sm border border-gray-100 space-y-6">
                            <h4 class="text-xs font-black uppercase tracking-[0.2em] text-gray-400">Quote Management</h4>
                            
                            <div class="relative">
                                <label class="absolute -top-2 left-5 bg-white px-2 text-[10px] font-black text-[#F37021] uppercase">Estimated Price</label>
                                <div class="w-full bg-gray-50 rounded-2xl p-6 text-3xl font-black text-[#1A1C1E] border border-gray-100">
                                    {{ $payment->amount ?? '0.00' }} <span class="text-lg text-gray-400">MAD</span>
                                </div>
                            </div>

                            @if ($request->progress != 'completed')
                                <button @click="openModal({{ $payment ? 'true' : 'false' }}, {{ $payment->amount ?? 0 }})"
                                    class="w-full py-5 rounded-[1.5rem] bg-[#EADDFF] text-[#21005D] font-black hover:shadow-lg transition-all">
                                    {{ $payment ? 'Update Price' : 'Add Price' }}
                                </button>
                            @endif
                        </div>
                        @endif

                    </aside>
                </div>
            </main>
        </div>

        <div x-show="open" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             class="fixed inset-0 z-[100] flex items-center justify-center p-6 bg-black/40 backdrop-blur-sm">
            <div @click.away="open = false" class="bg-white w-full max-w-lg rounded-[2.5rem] overflow-hidden shadow-2xl">
                <div class="p-10">
                    <h2 class="text-3xl font-black tracking-tight text-[#1A1C1E]">Fixer le Prix</h2>
                    <p class="text-gray-500 font-medium mt-2">Saisissez le montant final pour cette prestation.</p>
                    
                    <form :action="formAction" method="POST" class="mt-8 space-y-8">
                        @csrf
                        <div class="space-y-3">
                            <label class="text-xs font-black uppercase tracking-widest text-gray-400 ml-2">Montant de la prestation</label>
                            <div class="relative">
                                <input x-model="price" name="amount" type="number" step="0.01" required
                                    class="w-full bg-gray-50 border-none rounded-2xl px-8 py-6 text-3xl font-black focus:ring-4 focus:ring-[#F37021]/10 transition-all"
                                    placeholder="0.00">
                                <span class="absolute right-8 top-1/2 -translate-y-1/2 font-black text-xl text-gray-400">MAD</span>
                            </div>
                        </div>

                        <div class="bg-[#F37021]/5 p-6 rounded-2xl border-l-4 border-[#F37021]">
                            <p class="text-sm text-[#F37021] font-bold leading-relaxed">
                                Le prix final doit inclure le matériel utilisé. Le client sera notifié après validation.
                            </p>
                        </div>

                        <div class="flex flex-col sm:flex-row gap-4">
                            <button type="submit" class="flex-1 bg-[#1A1C1E] text-white py-5 rounded-[1.5rem] font-black hover:bg-black transition-all">
                                Valider le Prix
                            </button>
                            <button @click="open = false" type="button" class="flex-1 py-5 rounded-[1.5rem] font-black text-gray-400 hover:bg-gray-50 transition-all">
                                Annuler
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function priceModal() {
            return {
                open: false,
                price: 0,
                formAction: '',
                init() {
                    this.formAction = "{{ route('payment.store', $request->id) }}";
                },
                openModal(isUpdate, currentPrice) {
                    this.price = currentPrice;
                    this.formAction = isUpdate 
                        ? "{{ route('payment.update', $request->id) }}" 
                        : "{{ route('payment.store', $request->id) }}";
                    this.open = true;
                }
            }
        }
    </script>
</x-professional-layout>