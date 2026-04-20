<x-professional-layout>
        <!-- Main Canvas -->
        <main class="flex-1 space-y-8 pb-24 md:pb-8">
            <!-- Header Section -->
            <section class="flex flex-col md:flex-row md:items-end justify-between gap-6">
                <div>
                    <span class="text-primary font-bold tracking-widest text-xs uppercase mb-2 block">Intervention Details</span>
                    <h1 class="text-4xl md:text-5xl font-extrabold text-on-surface tracking-tight">Main Sink Leakage</h1>
                </div>
                <div class="flex gap-3">
                    <button class="bg-surface-container-highest text-on-surface px-6 py-4 rounded-full font-semibold hover:bg-surface-container-high transition-all active:scale-95">
                        Cancel Request
                    </button>
                    <button class="bg-primary-container text-on-primary-container px-8 py-4 rounded-full font-bold shadow-lg shadow-primary-container/20 hover:scale-105 transition-all active:scale-95">
                        Contact Client
                    </button>
                </div>
            </section>
            <!-- Grid Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                <!-- Left Column: Problem Photo & Description -->
                <div class="lg:col-span-8 space-y-8">
                    <!-- Request Photo -->
                    <div class="group relative overflow-hidden rounded-xl bg-surface-container-low aspect-[16/10] shadow-[0px_20px_40px_rgba(25,28,30,0.06)]">
                        <img alt="Leaking sink problem" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="Close-up photo of a leaking silver kitchen faucet under-sink area with water dripping and wet wooden cabinet floor" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBjSs8GV4B2VFGIJ-HXzatWhGEb-olKRKxOhzwy4I_hEVP6t9o1FZGoV7EFT6YVfynUFIEBhhP5hDaXPirJJxMJI377VTtnPVqV5kVibHN8QUEWvkCQEtGh2oww5ObGddvNdaQ61KXbU-i-opsWHOcT4wqp1jPJvog_DLXJgFoqxB8_HKjY6J0A4lOfynLLl0mbKK7b0j9JyDwJtiOYUTrj9-y6wb7IS8TLvXz1vQrYEZpwcnW0bOxajZ4X5L0Z60Nc5STJqvhe1NSV" />
                        <div class="absolute bottom-6 left-6 glass-effect p-4 rounded-lg flex items-center gap-3">
                            <span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">image</span>
                            <span class="text-sm font-bold text-on-surface">Client provided photo (1/3)</span>
                        </div>
                    </div>
                    <!-- Description Card -->
                    <div class="bg-surface-container-lowest p-8 rounded-lg">
                        <h3 class="text-2xl font-bold font-headline mb-4">Intervention Notes</h3>
                        <p class="text-secondary leading-relaxed text-lg">
                            "The water is dripping heavily from the joint under the main kitchen sink. It started last night and has soaked the cabinet floor. I've placed a bucket underneath, but it needs an urgent fix to prevent further water damage to the wood."
                        </p>
                    </div>
                </div>
                <!-- Right Column: Client & Controls -->
                <div class="lg:col-span-4 space-y-8">
                    <!-- Client Card -->
                    <div class="bg-surface-container-lowest p-8 rounded-lg shadow-[0px_20px_40px_rgba(25,28,30,0.04)] border border-on-surface-variant/5">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-16 h-16 rounded-full bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed text-xl font-bold">
                                AM
                            </div>
                            <div>
                                <h4 class="text-xl font-bold font-headline">Ahmed Mansouri</h4>
                                <div class="flex items-center text-secondary text-sm gap-1">
                                    <span class="material-symbols-outlined text-sm">location_on</span>
                                    Casablanca, Anfa
                                </div>
                            </div>
                        </div>
                        <button class="w-full py-4 rounded-full bg-surface-container-high text-on-surface font-bold hover:bg-surface-container-highest transition-colors flex items-center justify-center gap-2">
                            <span class="material-symbols-outlined">call</span>
                            Call Client
                        </button>
                    </div>
                    <!-- Status Control -->
                    <div class="bg-surface-container-lowest p-8 rounded-lg shadow-[0px_20px_40px_rgba(25,28,30,0.04)]">
                        <h4 class="text-xs font-bold uppercase tracking-widest text-secondary mb-6">Current Status</h4>
                        <div class="space-y-3">
                            <div class="flex items-center gap-3 p-4 rounded-lg bg-surface-container-low text-secondary opacity-50 cursor-not-allowed">
                                <span class="material-symbols-outlined">radio_button_unchecked</span>
                                <span class="font-bold">New</span>
                            </div>
                            <div class="flex items-center gap-3 p-4 rounded-lg bg-surface-container-low text-secondary opacity-50 cursor-not-allowed">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span class="font-bold">Accepted</span>
                            </div>
                            <div class="flex items-center gap-3 p-4 rounded-lg bg-orange-50 border-2 border-primary-container text-primary-container">
                                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">play_circle</span>
                                <span class="font-extrabold">In Progress</span>
                            </div>
                            <button class="w-full flex items-center gap-3 p-4 rounded-lg bg-surface-container-high text-secondary hover:bg-primary-container/10 hover:text-primary transition-all">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span class="font-bold">Mark as Finished</span>
                            </button>
                        </div>
                    </div>
                    <!-- Price Management -->
                    <div class="bg-surface-container-lowest p-8 rounded-lg shadow-[0px_20px_40px_rgba(25,28,30,0.04)]">
                        <h4 class="text-xs font-bold uppercase tracking-widest text-secondary mb-6">Quote Management</h4>
                        <div class="space-y-4">
                            <div class="relative">
                                <label class="absolute -top-2 left-4 bg-surface-container-lowest px-2 text-[10px] font-bold text-primary uppercase">Estimated Price</label>
                                <input class="w-full bg-surface-container-high border-none rounded-lg p-5 text-xl font-bold text-on-surface focus:ring-2 focus:ring-primary-container transition-all" type="text" value="450.00 MAD" />
                            </div>
                            <button class="w-full py-4 rounded-full bg-primary-container text-on-primary-container font-bold hover:shadow-xl transition-all">
                                Update Price
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <!-- BottomNavBar (Mobile Only) -->
    <nav class="md:hidden fixed bottom-0 left-0 w-full flex justify-around items-center px-4 py-3 pb-safe bg-white dark:bg-slate-900 shadow-[0px_-10px_30px_rgba(0,0,0,0.05)] rounded-t-xl z-50">
        <button class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 px-5 py-2 hover:text-orange-500 transition-all active:translate-y-1 duration-300">
            <span class="material-symbols-outlined">grid_view</span>
            <span class="font-['Plus_Jakarta_Sans'] text-[10px] font-semibold tracking-wide uppercase mt-1">Dashboard</span>
        </button>
        <button class="flex flex-col items-center justify-center bg-orange-50 dark:bg-orange-950/30 text-orange-600 dark:text-orange-400 rounded-full px-5 py-2 active:translate-y-1 duration-300">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">calendar_today</span>
            <span class="font-['Plus_Jakarta_Sans'] text-[10px] font-semibold tracking-wide uppercase mt-1">Schedule</span>
        </button>
        <button class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 px-5 py-2 hover:text-orange-500 transition-all active:translate-y-1 duration-300">
            <span class="material-symbols-outlined">chat_bubble</span>
            <span class="font-['Plus_Jakarta_Sans'] text-[10px] font-semibold tracking-wide uppercase mt-1">Inbox</span>
        </button>
        <button class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 px-5 py-2 hover:text-orange-500 transition-all active:translate-y-1 duration-300">
            <span class="material-symbols-outlined">person</span>
            <span class="font-['Plus_Jakarta_Sans'] text-[10px] font-semibold tracking-wide uppercase mt-1">Account</span>
        </button>
    </nav>
</body>

</html>
</x-professional-layout>