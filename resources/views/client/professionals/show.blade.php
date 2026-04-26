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
                            src="{{ asset('storage/'.$professional->user->image) }}" />

                    </div>
                    <!-- Floating Badge -->
                    <div class="absolute -bottom-6 right-6 bg-white p-6 rounded-lg shadow-[0px_20px_40px_rgba(25,28,30,0.06)] flex items-center gap-4">
                        <div class="flex flex-col">
                            <span class="text-label-md font-bold text-secondary uppercase tracking-widest text-[10px]">Verified Pro</span>
                            <div class="flex items-center gap-1 mt-1">
                                <span class="material-symbols-outlined text-primary-container" style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="text-xl font-bold">{{ number_format($review, 1) }}</span>
                                <span class="text-secondary text-sm">/ 5.0 Rating</span>
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
                    <div class="flex flex-col gap-2">

                        {{-- Name --}}
                        <div class="p-4 rounded-lg bg-surface-container-low hover:bg-surface-container transition-colors group flex justify-between items-center cursor-pointer">
                            <div>
                                <h4 class="font-bold text-on-surface">Professional</h4>
                                <p class="text-sm text-secondary"> {{ $professional->user->name }}</p>
                            </div>
                        </div>

                        {{-- Category --}}
                        <div class="p-4 rounded-lg bg-surface-container-low hover:bg-surface-container transition-colors group flex justify-between items-center cursor-pointer">
                            <div>
                                <h4 class="font-bold text-on-surface">Specialty</h4>
                                <p class="text-sm text-secondary"> {{ $professional->category->name }}</p>
                            </div>
                        </div>

                        {{-- City --}}
                        <div class="p-4 rounded-lg bg-surface-container-low hover:bg-surface-container transition-colors group flex justify-between items-center cursor-pointer">
                            <div>
                                <h4 class="font-bold text-on-surface">City</h4>
                                <p class="text-sm text-secondary"> {{ $professional->user->city ?? 'Not specified' }}</p>
                            </div>
                        </div>

                        {{-- Contact --}}
                        <div class="p-4 rounded-lg bg-surface-container-low hover:bg-surface-container transition-colors group flex justify-between items-center cursor-pointer">
                            <div>
                                <h4 class="font-bold text-on-surface"> Direct Contact
                                </h4>
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

    <script>
        //create

        function openCreate() {
            document.getElementById('createModal').classList.remove('hidden');
        }

        function closeCreate() {
            document.getElementById('createModal').classList.add('hidden');
        }

        let selectedFiles = [];

        const input = document.getElementById('imagesInputCreate');
        const preview = document.getElementById('previewCreate');

        input.addEventListener('change', function(e) {

            Array.from(e.target.files).forEach(file => {
                selectedFiles.push(file);
            });

            renderPreview();
        });

        function renderPreview() {
            preview.innerHTML = "";

            selectedFiles.forEach((file, index) => {

                const reader = new FileReader();

                reader.onload = function(event) {

                    const wrapper = document.createElement('div');
                    wrapper.className = "relative group";

                    const img = document.createElement('img');
                    img.src = event.target.result;
                    img.className = "w-20 h-20 object-cover rounded-lg border";

                    const btn = document.createElement('button');
                    btn.innerHTML = "✕";
                    btn.type = "button";
                    btn.className = "absolute top-1 right-1 bg-black/60 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition";

                    btn.onclick = () => {
                        selectedFiles.splice(index, 1);
                        renderPreview();
                    };

                    wrapper.appendChild(img);
                    wrapper.appendChild(btn);

                    preview.appendChild(wrapper);
                };

                reader.readAsDataURL(file);
            });

            updateInputFiles();
        }

        function updateInputFiles() {
            const dataTransfer = new DataTransfer();

            selectedFiles.forEach(file => {
                dataTransfer.items.add(file);
            });

            input.files = dataTransfer.files;
        }
    </script>

</x-app-layout>