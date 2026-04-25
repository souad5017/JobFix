<x-app-layout>

    <div class="max-w-7xl mx-auto px-6 py-12">

        <a href="{{ route('client.professionals.index') }}" class="inline-flex items-center gap-2 text-slate-400 font-black uppercase text-[10px] tracking-widest hover:text-[#1e293b] mb-8 transition">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7" />
            </svg>
            Retour à la liste 
        </a>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            <!-- Profile Hero Section (Asymmetric Editorial Style) -->
            <div class="lg:col-span-7 flex flex-col gap-12">
                <div class="relative group">
                    <div class="aspect-[4/5] md:aspect-[16/10] overflow-hidden rounded-xl bg-surface-container">
                        <img alt="Artisan Portrait" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="Experienced professional carpenter in a sunlit workshop, high-quality portrait showing confidence and artisan craft tools in background"
                            src="{{ asset('storage/'.$professional->image) }}" />
                       
                    </div>
                    <!-- Floating Badge -->
                    <div class="absolute -bottom-6 right-6 bg-white p-6 rounded-lg shadow-[0px_20px_40px_rgba(25,28,30,0.06)] flex items-center gap-4">
                        <div class="flex flex-col">
                            <span class="text-label-md font-bold text-secondary uppercase tracking-widest text-[10px]">Verified Pro</span>
                            <div class="flex items-center gap-1 mt-1">
                                <span class="material-symbols-outlined text-primary-container" style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="text-xl font-bold">4.9</span>
                                <span class="text-secondary/60 text-sm">(128 reviews)</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-6 max-w-2xl">
                    <h1 class="text-5xl md:text-6xl font-extrabold tracking-tight text-on-secondary-fixed leading-none">
                        <span class="text-primary-container">{{ $professional->user->name }}</span>
                    </h1>
                    <p class="text-xl font-medium text-secondary italic">{{ $professional->category->name }}</p>
                    <div class="h-1 w-20 bg-primary-container/20 rounded-full"></div>
                    <div class="flex flex-col gap-4">
                        <h2 class="text-2xl font-bold text-on-surface">About</h2>
                        <p class="text-secondary text-lg leading-relaxed">
                            {{ $professional->description }}
                        </p>
                    </div>
                </div>
            </div>
            <!-- Service & Booking Sidebar -->
            <aside class="lg:col-span-5 flex flex-col gap-8 sticky top-32">

                <div class="bg-white rounded-lg p-8 shadow-[0px_20px_40px_rgba(25,28,30,0.06)]">

                    <h3 class="text-xl font-bold mb-8 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary-container">handyman</span>
                        Info
                    </h3>

                    {{-- Name --}}
                    <div class="mb-6">
                        <p class="text-[10px] uppercase tracking-widest text-secondary font-label mb-2">Professional</p>
                        <p class="font-bold text-on-surface text-lg">
                            {{ $professional->user->name }}
                        </p>
                    </div>

                    {{-- Category --}}
                    <div class="mb-6">
                        <p class="text-[10px] uppercase tracking-widest text-secondary font-label mb-2">Specialty</p>
                        <p class="text-on-surface font-medium">
                            {{ $professional->category->name }}
                        </p>
                    </div>

                    {{-- City --}}
                    <div class="mb-6">
                        <p class="text-[10px] uppercase tracking-widest text-secondary font-label mb-2">City</p>
                        <p class="text-on-surface font-medium">
                            {{ $professional->user->city ?? 'Not specified' }}
                        </p>
                    </div>

                    {{-- Contact --}}
                    <div>
                        <p class="text-[10px] uppercase tracking-widest text-secondary font-label mb-3">
                            Direct Contact
                        </p>

                        <div class="flex flex-col gap-2">

                            <a class="flex items-center gap-3 text-secondary hover:text-primary transition-colors"
                                href="mailto:{{ $professional->user->email }}">
                                <span class="material-symbols-outlined text-sm">mail</span>
                                <span class="text-sm">{{ $professional->user->email }}</span>
                            </a>

                            @if($professional->user->phone)
                            <a class="flex items-center gap-3 text-secondary hover:text-primary transition-colors"
                                href="tel:{{ $professional->user->phone }}">
                                <span class="material-symbols-outlined text-sm">phone_iphone</span>
                                <span class="text-sm">{{ $professional->user->phone }}</span>
                            </a>
                            @endif

                        </div>
                    </div>

                    {{-- Actions --}}
                    <div class="mt-10">

                        <button onclick="openCreate()"
                            class="w-full bg-primary-container hover:bg-primary text-on-primary font-bold py-5 px-8 rounded-full flex items-center justify-center gap-3">
                            Request Service
                            <span class="material-symbols-outlined">arrow_forward</span>
                        </button>
                    </div>

                </div>

            </aside>
            @include('client.modale.create')
        </div>
    </div>
   

</x-app-layout>