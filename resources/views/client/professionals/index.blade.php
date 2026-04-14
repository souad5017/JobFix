<x-app-layout>
    <div class="bg-[#f8fafc] min-h-screen py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
                <div>
                    <h1 class="text-4xl font-black text-[#1e293b] tracking-tight">Nos Professionnels</h1>
                    <p class="text-slate-400 font-bold uppercase text-[10px] tracking-[0.2em] mt-2">Trouvez l'expertise dont vous avez besoin</p>
                </div>
            </div>

             <livewire:professional-search />
        </div>
    </div>
</x-app-layout>