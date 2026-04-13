<nav x-data="{ open: false }" class="bg-white border-b border-gray-200 sticky top-0 z-50 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            <div class="flex">
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" class="text-2xl font-extrabold text-[#1e293b] tracking-tight">
                        Job<span class="text-[#f97316]">Fix</span>
                    </a>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')"
                        class="font-extrabold !text-[#1e293b] focus:!text-[#f97316]">
                        {{ __('Dashboard') }}
                    </x-nav-link>

                    @if(Auth::user()->role == 'client')
                    <x-nav-link href="#" class="font-extrabold !text-[#1e293b] hover:!text-[#f97316] transition">
                        Trouver un Pro
                    </x-nav-link>

                    <x-nav-link href="#" class="font-extrabold !text-[#1e293b] hover:!text-[#f97316] transition">
                        Mes Demandes
                    </x-nav-link>

                    <x-nav-link href="#" class="font-extrabold !text-[#1e293b] hover:!text-[#f97316] transition">
                        Favoris
                    </x-nav-link>
                    @endif
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <span class="mr-4 px-4 py-1.5 rounded-xl text-xs font-black uppercase tracking-widest shadow-sm
                    {{ Auth::user()->role == 'professionnel' ? 'bg-orange-50 text-[#f97316] border border-orange-100' : 'bg-blue-50 text-blue-700 border border-blue-100' }}">
                    {{ Auth::user()->role }}
                </span>

                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-4 py-2.5 border border-gray-100 text-sm font-bold rounded-2xl text-[#1e293b] bg-gray-50 hover:bg-gray-100 transition duration-150">
                            <div>{{ Auth::user()->name }}</div>
                            <div class="ms-2">
                                <svg class="fill-current h-4 w-4 text-[#f97316]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')" class="font-semibold text-slate-700">
                            {{ __('Mon Profil') }}
                        </x-dropdown-link>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();"
                                class="font-bold text-red-600 hover:bg-red-50">
                                {{ __('Déconnexion') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="p-2 rounded-xl text-[#1e293b] hover:bg-gray-100 transition">
                    <svg class="h-7 w-7" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>