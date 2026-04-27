<x-app-layout>
    <div class="max-w-7xl mx-auto px-6 pt-20 pb-40">
        <!-- Hero Profile Section -->
        <section class="relative mb-16">
            <div class="flex flex-col md:flex-row items-end gap-8">
                <div class="relative group">
                    <div class="w-40 h-40 rounded-xl overflow-hidden shadow-2xl">
                        <img class="w-full h-full object-cover" data-alt="Professional portrait of a male client, clean background, warm lighting, high-end photography"
                            src="{{ asset('storage/'.auth()->user()->image).'?'.time() }}" />
                    </div>
                    <button
                        x-data=""
                        x-on:click.prevent="$dispatch('open-modal', 'update-profile-picture')"
                        class="absolute -bottom-2 -right-2 bg-primary-container text-white p-3 rounded-full shadow-lg hover:scale-105 transition-transform">
                        <span class="material-symbols-outlined">edit</span>
                    </button>
                </div>
                <div class="flex-1 pb-4">
                    <h1 class="font-display text-5xl font-extrabold tracking-tight text-on-background mb-2">{{ $user->name }}</h1>
                    <div class="flex items-center gap-4 text-secondary">
                        <span class="flex items-center gap-1"><span class="material-symbols-outlined text-sm">calendar_today</span> Member since {{ $user->created_at ? $user->created_at->format('M Y') : '' }}</span>
                        <span class="px-3 py-1 bg-secondary-container text-on-secondary-container rounded-full text-xs font-bold uppercase tracking-widest">Client</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- Bento Grid Layout -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            <!-- Left Column: Personal Info & Stats -->
            <div class="lg:col-span-8 space-y-8">
                <!-- Personal Info Card -->
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
                <!-- Statistics Section: Glassmorphism Tones -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-primary-container p-8 rounded-lg text-white flex justify-between items-start overflow-hidden relative group">
                        <div class="z-10">
                            <p class="text-primary-fixed font-bold uppercase tracking-widest text-xs mb-2">Total Jobs Requested</p>
                            <h3 class="text-5xl font-black mb-1">{{ $requestsCount }}</h3>
                        </div>
                        <span class="material-symbols-outlined text-8xl absolute -right-4 -bottom-4 text-white/10 group-hover:scale-110 transition-transform duration-500">handyman</span>
                    </div>
                    <div class="bg-on-secondary-fixed text-white p-8 rounded-lg flex justify-between items-start overflow-hidden relative group">
                        <div class="z-10">
                            <p class="text-secondary-fixed-dim font-bold uppercase tracking-widest text-xs mb-2">Total Investment</p>
                            <h3 class="text-5xl font-black mb-1">{{ $amountSum }} MAD</h3>
                        </div>
                        <span class="material-symbols-outlined text-8xl absolute -right-4 -bottom-4 text-white/10 group-hover:scale-110 transition-transform duration-500">payments</span>
                    </div>
                </div>
                <!-- Favorite Pros -->
                <div class="space-y-6">
                    <div class="flex items-center justify-between">
                        <h2 class="font-display text-2xl font-bold">Mes reviews</h2>
                        <a class="text-primary text-sm font-bold uppercase tracking-widest" href="#"></a>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        @forelse($reviews as $review)
                        <div class="bg-surface-container-lowest p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow group">
                            <div class="flex items-center gap-4 mb-4">
                                <img class="w-14 h-14 rounded-full object-cover" data-alt="Portrait of a professional electrician in uniform, confident look, workshop background, soft focus"
                                    src="{{ asset('storage/' .$review->professional->user->image) }}" />
                                <div>
                                    <h4 class="font-bold text-on-background group-hover:text-primary transition-colors">Julien Renard</h4>
                                    <p class="text-xs text-secondary">{{ $review->professional->category->name }}</p>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-primary-container text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="text-sm font-bold">{{ $review->rating }}/5</span>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="text-center py-10 bg-surface-container-lowest rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <p class="text-gray-500 text-lg">Aucun avis pour le moment </p>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
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
    </div>
    </div>
    @include('profile.partials.update-profile-information-form')
    @include('profile.partials.update-password-form')
    @include('profile.partials.delete-user-form')
</x-app-layout>