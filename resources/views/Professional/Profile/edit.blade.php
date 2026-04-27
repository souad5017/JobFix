<x-professional-layout>
    <div class="ml-60 min-h-screen pb-20">

        <div class="max-w-5xl mx-auto p-8 space-y-12">
            <!-- Profile Header Section -->
            <section class="flex flex-col md:flex-row items-center gap-10 bg-surface-container-lowest p-10 rounded-xl">
                <div class="relative group">
                    <div class="w-48 h-48 rounded-full overflow-hidden border-4 border-white shadow-2xl relative">
                        <img alt="Artisan Avatar" class="w-full h-full object-cover" data-alt="Close up portrait of a skilled artisan man in his 40s with a short beard, wearing a professional navy blue polo shirt"
                            src="{{ asset('storage/'.auth()->user()->image).'?'.time() }}">
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <span class="material-symbols-outlined text-white text-3xl" data-icon="photo_camera">photo_camera</span>
                        </div>
                    </div>
                    <button
                        x-data=""
                        x-on:click.prevent="$dispatch('open-modal', 'update-profile-picture')"
                        class="absolute bottom-2 right-2 bg-primary-container text-white p-3 rounded-full shadow-lg hover:scale-110 transition-transform active:scale-95">
                        <span class="material-symbols-outlined text-sm" data-icon="edit">edit</span>
                    </button>
                </div>
                <div class="flex-1 space-y-4">
                    <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">{{ $user->name }}</h2>
                    <p class="text-slate-500 leading-relaxed max-w-lg">Your profile photo and basic identity are the first things clients see. Professional, well-lit photos increase booking rates by up to 40%.</p>
                </div>
            </section>
            <!-- Personal Info & About (Editorial Layout) -->
            <section class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="lg:col-span-2 space-y-6">
                    <div class="bg-surface-container-lowest p-8 rounded-lg shadow-[0px_20px_40px_rgba(25,28,30,0.06)]">
                        <div class="flex justify-between items-center mb-8">
                            <h2 class="font-display text-2xl font-bold">Informations Personnelles</h2>
                            <button
                                x-data=""
                                x-on:click.prevent="$dispatch('open-modal', 'edit-profile-info')"
                                class="text-primary font-semibold flex items-center gap-2 hover:opacity-80">
                                <span class="material-symbols-outlined">border_color</span>
                                Edit Profile
                            </button>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="space-y-1">
                                <label class="text-xs font-bold text-secondary uppercase tracking-wider">Full Name</label>
                                <p class="text-lg font-medium">{{ $user->name }}</p>
                            </div>
                            <div class="space-y-1">
                                <label class="text-xs font-bold text-secondary uppercase tracking-wider">Email Address</label>
                                <p class="text-lg font-medium">{{ $user->email }}</p>
                            </div>
                            <div class="space-y-1">
                                <label class="text-xs font-bold text-secondary uppercase tracking-wider">Phone Number</label>
                                <p class="text-lg font-medium">{{ $user->phone }}</p>
                            </div>
                            <div class="space-y-1">
                                <label class="text-xs font-bold text-secondary uppercase tracking-wider">City</label>
                                <p class="text-lg font-medium">{{ $user->city }}</p>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- Location & Availability (Asymmetric sidebar) -->
                <div class="space-y-6">
                    <!-- Right Column: Settings & Quick Actions -->
                    <div class="lg:col-span-4 space-y-8">
                        <!-- Account Settings Section -->
                        <div class="bg-surface-container p-8 rounded-lg">
                            <h2 class="font-display text-xl font-bold mb-6">Paramètres du Compte</h2>
                            <!-- Security -->
                            <button
                                x-data=""
                                x-on:click.prevent="$dispatch('open-modal', 'update-password-modal')"
                                class="w-full flex items-center justify-between group">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-on-background shadow-sm group-hover:bg-primary-container group-hover:text-white transition-colors">
                                        <span class="material-symbols-outlined">lock</span>
                                    </div>
                                    <div class="text-left">
                                        <p class="font-bold text-sm">Password</p>
                                    </div>
                                </div>
                                <span class="material-symbols-outlined text-secondary">chevron_right</span>
                            </button>
                            <div class="mt-10 pt-8 border-t border-outline-variant/30">
                                <button
                                    x-data=""
                                    x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
                                    class="w-full py-4 px-6 rounded-full border border-error text-error font-bold uppercase tracking-widest text-xs hover:bg-error hover:text-white transition-all scale-95 active:scale-90">
                                    Delete Account
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <!-- Specialties & Category System -->
            <section class="bg-surface-container-low p-10 rounded-xl">
                <div class="mb-8 flex justify-between items-start">

                    <div>
                        <h3 class="text-2xl font-black text-slate-900 tracking-tight">
                            Specialties &amp; Expertise
                        </h3>

                        <p class="text-slate-500 text-sm mt-1">
                            Select the categories that best describe your craft to appear in relevant searches.
                        </p>
                    </div>

                    <button
                        x-data=""
                        x-on:click.prevent="$dispatch('open-modal', 'edit-professional-details')" class="text-slate-600 hover:text-primary transition">
                        <span class="material-symbols-outlined text-2xl">
                            edit
                        </span>
                    </button>

                </div>
                <div class="flex flex-wrap gap-3">
                    @foreach($categories as $category)
                    <label class="px-6 py-3 bg-white border border-orange-100 rounded-full text-sm font-bold text-orange-600 flex items-center gap-2 shadow-sm hover:shadow-md transition-all">
                        <input type="radio" name="category_id" value="{{ $category->id }}" class="peer hidden">
                        @if ($professional->category->id === $category->id)
                        <div class="rounded-full text-sm font-bold text-orange-600 flex items-center gap-2 ">
                            <span class="material-symbols-outlined text-lg" data-icon="check_circle" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                            {{ $category->name }}
                        </div>
                        @else
                        <div class=" rounded-full text-sm font-medium text-slate-500 hover:border-orange-200 hover:text-orange-400 transition-all flex items-center gap-2">
                            {{ $category->name }}
                        </div>
                        @endif
                    </label>
                    @endforeach
                </div>
                <div class="mt-6 md:col-span-2 space-y-2">
                    <label class="text-xs font-bold text-slate-400 uppercase tracking-wider">About Me / Bio</label>
                    <div class="relative">
                        <p class="w-full bg-surface-container-high border-none rounded-lg p-4 focus:ring-2 focus:ring-primary-container/20 transition-all text-slate-900 leading-relaxed" rows="5">
                            {{ $professional->description }}
                        </p>
                    </div>
                </div>

                <x-modal name="edit-professional-details" focusable>
                    <form method="post" action="{{ route('professional.profile.update') }}" class="p-8">
                        @csrf
                        @method('put')

                        <h2 class="text-2xl font-bold text-on-surface mb-1">Détails Professionnels</h2>
                        <p class="text-sm text-secondary mb-6">Mettez à jour votre spécialité et votre description.</p>

                        <div class="space-y-6">
                            <div class="space-y-3">
                                <label class="text-xs font-bold text-slate-400 uppercase tracking-wider">Ma Spécialité</label>
                                <div class="flex flex-wrap gap-3">
                                    @foreach($categories as $category)
                                    <label class="relative cursor-pointer">
                                        <input type="radio" name="category_id" value="{{ $category->id }}"
                                            {{ $professional->category_id == $category->id ? 'checked' : '' }}
                                            class="peer hidden">

                                        <div class="px-5 py-2 bg-white border border-slate-200 rounded-full text-sm font-medium text-slate-500 
                                    peer-checked:border-primary peer-checked:text-primary peer-checked:bg-primary/5 peer-checked:font-bold
                                    hover:border-primary/50 transition-all flex items-center gap-2 shadow-sm">

                                            <span class="material-symbols-outlined text-lg hidden peer-checked:block"
                                                style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                            {{ $category->name }}
                                        </div>
                                    </label>
                                    @endforeach
                                </div>
                                <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
                            </div>

                            <div class="space-y-2">
                                <label for="description" class="text-xs font-bold text-slate-400 uppercase tracking-wider">Ma Bio / Description</label>
                                <textarea
                                    name="description"
                                    id="description"
                                    rows="5"
                                    class="w-full bg-slate-50 border border-slate-200 rounded-xl p-4 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all text-slate-900 outline-none"
                                    placeholder="Parlez de votre expérience...">{{ old('description', $professional->description) }}</textarea>
                                <x-input-error :messages="$errors->get('description')" class="mt-2" />
                            </div>
                        </div>

                        <div class="mt-8 flex justify-end gap-3">
                            <x-secondary-button x-on:click="$dispatch('close')">
                                Annuler
                            </x-secondary-button>

                            <button type="submit" class="bg-primary text-on-primary px-8 py-3 rounded-full font-bold shadow-lg hover:opacity-90 transition-all">
                                Enregistrer les modifications
                            </button>
                        </div>
                    </form>
                </x-modal>
            </section>
            <!-- Service Management (List Design) -->
            <section class="space-y-6">
                <div class="flex justify-between items-end">
                    <div>
                        <h3 class="text-2xl font-black text-slate-900 tracking-tight">Active Services</h3>
                        <p class="text-slate-500 text-sm mt-1">Define your pricing and service offerings.</p>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-4">
                    <!-- Service Card -->
                    @forelse($services as $service)
                    <div class="group bg-surface-container-lowest p-6 rounded-lg flex items-center justify-between border-l-4 border-orange-600 shadow-sm hover:shadow-md transition-all">

                        <div class="flex items-center gap-6">
                            <div class="h-12 w-12 rounded-full bg-orange-50 flex items-center justify-center text-orange-600">
                                <img src="{{ asset('storage/' .$service->client->image) }}" alt="">
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900">{{ $service->client->name }}</h4>
                                <p class="text-xs text-slate-500">{{ $service->title }}</p>
                                <span class="text-[10px] px-2 py-0.5 rounded-full bg-slate-100 text-slate-600 mt-1 inline-block">
                                    {{ $service->scheduled_at->format('d M, Y') }}
                                </span>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <a href="{{ route('requests.show', $service->id) }}"
                                class="flex items-center gap-2 px-4 py-2 rounded-full bg-orange-600 text-white text-sm font-bold hover:bg-orange-700 transition-colors shadow-sm">
                                <span class="material-symbols-outlined text-sm">visibility</span>
                                Détails
                            </a>
                        </div>
                    </div>
                    @empty
                    <div class="flex flex-col items-center justify-center py-12 px-6 bg-slate-50 rounded-xl border-2 border-dashed border-slate-200">
                        <div class="h-16 w-16 bg-slate-100 rounded-full flex items-center justify-center mb-4">
                            <span class="material-symbols-outlined text-slate-400 text-3xl">inventory_2</span>
                        </div>
                        <h3 class="text-slate-900 font-bold text-lg">Aucun service trouvé</h3>
                        <p class="text-slate-500 text-sm text-center mt-1">Vous n'avez pas encore de demandes ou de services active.</p>
                    </div>
                    @endforelse

                </div>
            </section>
        </div>
    </div>
    @include('profile.partials.update-profile-information-form')
    @include('profile.partials.update-password-form')
    @include('profile.partials.delete-user-form')
</x-professional-layout>