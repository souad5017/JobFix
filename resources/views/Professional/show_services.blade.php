<x-professional-layout>

    <body class="bg-surface text-on-surface">

        <main class="flex-1 space-y-8 pb-24 md:pb-8 ml-80 min-h-screen m-10">

            <!-- Header Section -->
            <section class="flex flex-col md:flex-row md:items-end justify-between gap-6">
                <div>
                    <span class="text-primary font-bold tracking-widest text-xs uppercase mb-2 block">
                        Intervention Details
                    </span>

                    <h1 class="text-4xl md:text-5xl font-extrabold text-on-surface tracking-tight">
                        {{ $request->client->name }}
                    </h1>
                </div>
            </section>

            <!-- Grid Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">

                <!-- LEFT SIDE -->
                <div class="lg:col-span-8 space-y-8">

                    <!-- IMAGE -->
                    <div class="group relative overflow-hidden rounded-xl bg-surface-container-low aspect-[16/10] shadow-[0px_20px_40px_rgba(25,28,30,0.06)]">

                        <img
                            src="{{ $request->image ? asset('storage/' . $request->image) : 'https://via.placeholder.com/800x500' }}"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />

                        <div class="absolute bottom-6 left-6 glass-effect p-4 rounded-lg flex items-center gap-3">
                            <span class="material-symbols-outlined text-primary">image</span>
                            <span class="text-sm font-bold text-on-surface">
                                Client provided request
                            </span>
                        </div>
                    </div>

                    <!-- DESCRIPTION -->
                    <div class="bg-surface-container-lowest p-8 rounded-lg">
                        <h3 class="text-2xl font-bold mb-4">Description</h3>
                        <p class="text-secondary leading-relaxed text-lg">
                            {{ $request->description }}
                        </p>
                    </div>

                </div>

                <!-- RIGHT SIDE -->
                <div class="lg:col-span-4 space-y-8">

                    <!-- CLIENT CARD -->
                    <div class="bg-surface-container-lowest p-8 rounded-lg shadow-[0px_20px_40px_rgba(25,28,30,0.04)] border border-on-surface-variant/5">

                        <div class="flex items-center gap-4 mb-6">

                            <div class="w-16 h-16 rounded-full bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed text-xl font-bold">
                                {{ strtoupper(substr($request->client->name, 0, 2)) }}
                            </div>

                            <div>
                                <h4 class="text-xl font-bold">
                                    {{ $request->client->name }}
                                </h4>

                                <div class="flex items-center text-secondary text-sm gap-1">
                                    <span class="material-symbols-outlined text-sm">location_on</span>
                                    {{ $request->client->ville ?? 'Unknown' }}
                                </div>
                            </div>

                        </div>

                        <!-- PHONE -->
                        <a href="#">
                            <button class="w-full py-4 rounded-full bg-surface-container-high text-on-surface font-bold hover:bg-surface-container-highest transition-colors flex items-center justify-center gap-2">
                                Message Client
                            </button>
                        </a>
                        <div class="flex gap-3">


                        </div>

                    </div>

                    <!-- STATUS -->
                    @if($request->status === 'pending')
                    <div class="bg-surface-container-lowest p-8 rounded-lg shadow-[0px_20px_40px_rgba(25,28,30,0.04)]">

                        <h4 class="text-xs font-bold uppercase tracking-widest text-secondary mb-6">
                            Actions de la demande
                        </h4>

                        <div class="flex gap-3 ">
                            <form action="{{ route('requests.update', [$request, 'accepted']) }}" method="POST" class="flex-1">
                                @csrf
                                @method('POST') <button type="submit"
                                    class="w-full bg-[#f37021] text-white px-8 py-4 rounded-full font-black text-sm shadow-[0_10px_20px_-5px_rgba(243,112,33,0.3)] hover:scale-[1.02] transition-all active:scale-95 text-center">
                                    Accepter
                                </button>
                            </form>


                            <form action="{{ route('requests.update', [$request, 'rejected']) }}" method="POST">
                                @csrf
                                <button type="submit"
                                    class="px-8 py-4 bg-slate-100 text-slate-500 rounded-full font-bold text-sm hover:bg-slate-200 transition-all active:scale-95">
                                    Refuser
                                </button>
                            </form>
                        </div>

                    </div>


                    <!-- PRICE -->
                    @elseif($request->status === 'accepted')
                    <div class="bg-surface-container-lowest p-8 rounded-lg shadow-[0px_20px_40px_rgba(25,28,30,0.04)]">
                        <h4 class="text-xs font-bold uppercase tracking-widest text-secondary mb-6">Quote Management</h4>
                        <div class="space-y-4">
                            <div class="relative">
                                <label class="absolute -top-2 left-4 bg-surface-container-lowest px-2 text-[10px] font-bold text-primary uppercase">Estimated Price</label>
                                <input class="w-full bg-surface-container-high border-none rounded-lg p-5 text-xl font-bold text-on-surface focus:ring-2 focus:ring-primary-container transition-all" 
                                type="text" value="{{ $request->price ?? '0.00' }} MAD" />
                            </div>
                            @if ($request->progress != 'completed')
                             <button class="w-full py-4 rounded-full bg-primary-container text-on-primary-container font-bold hover:shadow-xl transition-all">
                                Update Price
                            </button>
                            @endif
                        </div>
                    </div>
                    @endif
                </div>

            </div>

        </main>

    </body>

</x-professional-layout>