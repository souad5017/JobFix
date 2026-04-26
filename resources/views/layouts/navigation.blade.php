<nav x-data="{ open: false }" class="bg-[#f8fafc] border-b border-gray-200 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            <div class="flex items-center gap-12">
                <a href="{{ route('client.dashboard') }}" class="text-2xl font-black text-[#1e293b] tracking-tighter">
                    JOB<span class="text-[#f97316]">FIX</span>
                </a>

                <div class=" space-x-6 flex">
                    <x-nav-link :href="route('client.dashboard')" :active="request()->routeIs('dashboard')" class="!text-[#1e293b] font-bold uppercase text-xs tracking-widest">
                        Dashboard
                    </x-nav-link>
                    <x-nav-link href="{{ route('client.professionals.index') }}" class="!text-slate-500 hover:!text-[#f97316] font-bold uppercase text-xs tracking-widest transition">
                        Trouver un Pro
                    </x-nav-link>
                    <x-nav-link href="{{ route('client.requests') }}" class="!text-slate-500 hover:!text-[#f97316] font-bold uppercase text-xs tracking-widest transition">
                        Mes Demandes
                    </x-nav-link>
                    <x-nav-link href="{{ route('client.profil') }}" class="!text-slate-500 hover:!text-[#f97316] font-bold uppercase text-xs tracking-widest transition">
                        Profil
                    </x-nav-link>
                </div>
            </div>

            <div class="flex items-center gap-4">
                <span class="material-symbols-outlined" data-icon="settings">settings</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button>
                        <span class="material-symbols-outlined" data-icon="logout">logout</span>
                    </button>
                </form>
                @if(Auth::user()->image)
                <img class="h-10 w-10 rounded-full border border-gray-200 object-cover"
                    src="{{ asset('storage/'.Auth::user()->image) }}">
                @else
                <div class="h-10 w-10 rounded-full bg-white border border-gray-200 flex items-center justify-center font-bold text-[#1e293b]">
                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                </div>
                @endif


            </div>
        </div>
    </div>
</nav>