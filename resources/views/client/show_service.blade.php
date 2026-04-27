<x-app-layout>
    <main class="max-w-7xl mx-auto px-8 py-10">
        <!-- Back Button -->
        <a class="inline-flex items-center text-on-surface-variant hover:text-[#F37021] transition-colors mb-8 group" href="{{ route('client.requests') }}">
            <span class="material-symbols-outlined mr-2 group-hover:-translate-x-1 transition-transform">arrow_back</span>
            <span class="font-semibold">Retour à mes demandes</span>
        </a>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            <!-- Main Content Area -->
            <div class="lg:col-span-8 space-y-8">
                <!-- Request Header -->
                <header class="bg-surface-container-lowest rounded-lg p-8 shadow-[0px_20px_40px_rgba(25,28,30,0.06)] border border-outline-variant/15">
                    <div class="flex flex-wrap justify-between items-start gap-4">
                        <div>
                            <h1 class="text-4xl font-extrabold text-on-surface leading-tight tracking-tight">{{ $request->title }}</h1>
                        </div>

                        @if($request->status === 'pending')
                        <div class="bg-[#F37021]/10 text-[#F37021] px-5 py-2 rounded-full font-bold text-sm flex items-center">
                            <span class="w-2 h-2 bg-[#F37021] rounded-full mr-2 animate-pulse"></span>
                            En attente
                        </div>

                        @elseif($request->status === 'accepted')
                        @if ($request->progress === 'in_progress')
                        <div class="bg-blue-100 text-blue-600 px-5 py-2 rounded-full font-bold text-sm flex items-center">
                            <span class="w-2 h-2 bg-blue-600 rounded-full mr-2 animate-pulse"></span>
                            In Progress
                        </div>
                        @elseif($request->progress === 'completed')
                        <div class="bg-emerald-100 text-emerald-600 px-5 py-2 rounded-full font-bold text-sm flex items-center">
                            <span class="w-2 h-2 bg-emerald-600 rounded-full mr-2 animate-pulse"></span>
                            Terminé
                        </div>

                        @endif

                        @elseif($request->status === 'rejected')
                        <div class="bg-rose-100 text-rose-600 px-5 py-2 rounded-full font-bold text-sm flex items-center">
                            <span class="w-2 h-2 bg-rose-600 rounded-full mr-2 animate-pulse"></span>
                            Rejeté
                        </div>
                        @endif
                    </div>
                </header>
                <!-- Service Details Section -->
                <section class="bg-surface-container-lowest rounded-lg overflow-hidden shadow-[0px_20px_40px_rgba(25,28,30,0.06)] border border-outline-variant/15">
                    <div class="p-8">
                        <h2 class="text-2xl font-bold mb-6 flex items-center">
                            <span class="material-symbols-outlined mr-3 text-[#F37021]">description</span>
                            Détails de l'intervention
                        </h2>
                        <div class="grid md:grid-cols-2 gap-8 mb-8">
                            @if ($request->status === 'accepted')
                            @if ($request->progress === 'in_progress')
                            <div class="space-y-4">
                                <div class="flex items-center text-on-surface-variant">
                                    <span class="material-symbols-outlined mr-3 text-[#F37021]">calendar_today</span>

                                    <span class="font-medium text-on-surface">
                                        {{ $request->scheduled_at->format('D d M Y ') }}
                                    </span>
                                </div>
                                <div class="flex items-center text-on-surface-variant">
                                    <span class="material-symbols-outlined mr-3 text-[#F37021]">schedule</span>
                                    <span class="font-medium text-on-surface"> {{ $request->scheduled_at->format(' h:i A') }}</span>
                                </div>

                            </div>
                            @elseif($request->progress === 'completed')
                            <div class="space-y-4">
                                <div class="flex items-center text-on-surface-variant">
                                    <span class="material-symbols-outlined mr-3 text-[#F37021]">calendar_today</span>

                                    <span class="font-medium text-on-surface">Terminé le
                                        {{ $request->scheduled_at->format('D d M Y ') }}
                                    </span>
                                </div>
                                <div class="flex items-center text-on-surface-variant">
                                    <span class="material-symbols-outlined mr-3 text-[#F37021]">schedule</span>
                                    <span class="font-medium text-on-surface"> {{ $request->scheduled_at->format(' h:i A') }}</span>
                                </div>

                            </div>
                            @endif
                            @else
                            <div class="space-y-4">
                                <div class="flex items-center text-on-surface-variant">
                                    <span class="material-symbols-outlined mr-3 text-[#F37021]">calendar_today</span>

                                    <span class="font-medium text-on-surface">Posté le
                                        {{ $request->created_at->format('D d M Y ') }}
                                    </span>
                                </div>
                                <div class="flex items-center text-on-surface-variant">
                                    <span class="material-symbols-outlined mr-3 text-[#F37021]">schedule</span>
                                    <span class="font-medium text-on-surface"> {{ $request->created_at->format(' h:i A') }}</span>
                                </div>

                            </div>
                            @endif

                            <div class="bg-surface-container-low p-6 rounded-lg">
                                <p class="text-on-surface leading-relaxed italic">
                                    "{{ $request->description }}"
                                </p>
                            </div>
                        </div>
                        <!-- Gallery -->
                        <div class="space-y-4">
                            <h3 class="text-sm font-bold text-on-surface-variant uppercase tracking-widest">Photos jointes</h3>
                            <div class="grid grid-cols-3 gap-4">
                                @if(!empty($request->image) && count($request->image) > 0)
                                @foreach($request->image ?? [] as $img)
                                <div class="aspect-square rounded-lg overflow-hidden relative group cursor-pointer">
                                    <img src="{{ asset($img) }}"
                                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                                </div>
                                @endforeach
                                @else
                                <div class="col-span-3 flex flex-col items-center justify-center py-10 text-slate-400 border-2 border-dashed rounded-lg">
                                    <span class="material-symbols-outlined text-3xl mb-2">image_not_supported</span>
                                    <p class="text-sm font-bold">Aucune image disponible</p>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- Sidebar -->
            <aside class="lg:col-span-4 space-y-8">
                <!-- Professional Information Card -->
                <div class="bg-surface-container-lowest rounded-lg p-8 shadow-[0px_20px_40px_rgba(25,28,30,0.06)] border border-outline-variant/15 text-center">
                    <div class="relative w-24 h-24 mx-auto mb-4">
                        <img src="{{ asset('storage/' . $request->professional->user->image) }}" class="w-full h-full object-cover rounded-full" data-alt="professional male contractor in blue work shirt smiling confidently with short hair and clean look" />
                    </div>
                    <h3 class="text-xl font-bold text-on-surface">{{ $request->professional->user->name }}</h3>
                    <p class="text-on-surface-variant text-sm mb-4">{{ $request->professional->category->name }} • {{$request->professional->user->city}}</p>
                    <button class="w-full bg-[#F37021] text-white py-4 px-6 rounded-full font-bold flex items-center justify-center gap-2 hover:opacity-90 active:scale-95 transition-all shadow-lg shadow-[#F37021]/20">
                        <span class="material-symbols-outlined">chat_bubble</span>
                        Contacter
                    </button>
                    @if (!empty($payment->amount) && $payment->status != 'paid')
                    <form action="{{ route('payment.pay') }}" method="POST">
                        @csrf

                        <input type="hidden" name="payment_id" value="{{ $payment->id }}">

                        <button type="submit"
                            class="w-full bg-[#F37021] text-white py-4 mt-4 px-6 rounded-full font-bold flex items-center justify-center gap-1 flex-col hover:opacity-90 active:scale-95 transition-all shadow-lg shadow-[#F37021]/20">

                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined">payments</span>
                                <span>Payer maintenant</span>
                            </div>

                            <span class="text-sm font-bold">
                                ({{ $payment->amount }} MAD)
                            </span>

                        </button>
                    </form>
                    @endif
                </div>
                <!-- Action Sidebar -->
                @if ($request->status === 'accepted' && !$request->progress === 'completed' )
                <div class="bg-surface-container-low rounded-lg p-6 space-y-4">
                    <h4 class="text-sm font-bold text-on-surface-variant uppercase tracking-widest mb-2 px-2">Actions Rapides</h4>
                    <button onclick="openUpdate()" class="w-full bg-surface-container-lowest text-on-surface py-4 px-6 rounded-lg font-bold flex items-center justify-between hover:bg-white transition-colors group">
                        <span class="flex items-center">
                            <span class="material-symbols-outlined mr-3 text-[#F37021]">edit</span>
                            Modifier la demande
                        </span>
                    </button>
                    <button class="w-full text-error py-4 px-6 rounded-lg font-bold flex items-center justify-between hover:bg-error/5 transition-colors group"
                        onclick="deleteService('{{ $request->id }}')">
                        <span class="flex items-center">
                            <span class="material-symbols-outlined mr-3">cancel</span>
                            Annuler la demande
                        </span>
                    </button>
                    <form id="delete-form-{{ $request->id }}"
                        action="{{ route('services.destroy', $request->id) }}"
                        method="POST" style="display:none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </div>
                @endif

            </aside>
        </div>
        @include('client.modale.updete')
    </main>




    <script>
        //update
        let selectedFilesUpdate = [];

        function openUpdate() {
            document.getElementById('updateModal').classList.remove('hidden');
        }

        function closeUpdate() {
            document.getElementById('updateModal').classList.add('hidden');
        }

        document.addEventListener('DOMContentLoaded', () => {

            const container = document.getElementById('imagesContainer');
            if (container) {
                document.getElementById('imagesBackup').value = container.innerHTML;
            }

            const input = document.getElementById('imagesInput');

            if (input) {
                input.addEventListener('change', function(e) {
                    Array.from(e.target.files).forEach(file => {
                        selectedFilesUpdate.push(file);
                    });

                    renderPreview();
                });
            }
        });

        function renderPreview() {
            const preview = document.getElementById('previewUpdate');
            preview.innerHTML = '';

            selectedFilesUpdate.forEach((file, index) => {

                const reader = new FileReader();

                reader.onload = function(e) {

                    const wrapper = document.createElement('div');
                    wrapper.className = "relative group";

                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.className = "w-20 h-20 object-cover rounded-lg border";

                    const btn = document.createElement('button');
                    btn.innerHTML = "✕";
                    btn.type = "button";
                    btn.className = "absolute top-1 right-1 bg-black/60 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition";

                    btn.onclick = () => {
                        selectedFilesUpdate.splice(index, 1);
                        renderPreview();
                    };

                    wrapper.appendChild(img);
                    wrapper.appendChild(btn);
                    preview.appendChild(wrapper);
                };

                reader.readAsDataURL(file);
            });
        }

        function markImageForDeletion(btn) {
            const wrapper = btn.closest('.old-image-wrapper');
            wrapper.classList.add('hidden');

            const input = wrapper.querySelector('input[name="old_images[]"]');
            if (input) input.disabled = true;
        }

        function resetImages() {
            const container = document.getElementById('imagesContainer');
            const backup = document.getElementById('imagesBackup').value;

            if (container) {
                container.innerHTML = backup;
            }

            document.getElementById('previewUpdate').innerHTML = '';
            document.getElementById('imagesInput').value = '';

            selectedFilesUpdate = [];
        }


        // delete
        function deleteService(id) {
            const ok = confirm("Êtes-vous sûr de vouloir supprimer ce service ?");

            if (!ok) {
                return;
            }

            document.getElementById('delete-form-' + id).submit();
        }
    </script>

</x-app-layout>