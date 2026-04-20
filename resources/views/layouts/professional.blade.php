<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Edit Profile | JobFix Artisan Portal</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "inverse-surface": "#2d3133",
                        "on-tertiary": "#ffffff",
                        "primary": "#a04100",
                        "surface-container-highest": "#e0e3e5",
                        "on-surface-variant": "#584237",
                        "on-primary-fixed-variant": "#7a3000",
                        "secondary": "#555f6f",
                        "surface": "#f8f9fb",
                        "on-tertiary-fixed": "#001e2f",
                        "on-error-container": "#93000a",
                        "surface-variant": "#e0e3e5",
                        "secondary-fixed-dim": "#bdc7da",
                        "error-container": "#ffdad6",
                        "tertiary-fixed-dim": "#8bceff",
                        "on-surface": "#191c1e",
                        "outline": "#8c7166",
                        "tertiary": "#006492",
                        "on-secondary-container": "#596373",
                        "on-primary": "#ffffff",
                        "surface-container": "#eceef0",
                        "on-primary-fixed": "#341000",
                        "surface-dim": "#d8dadc",
                        "primary-fixed": "#ffdbcb",
                        "on-background": "#191c1e",
                        "secondary-fixed": "#d9e3f6",
                        "surface-container-low": "#f2f4f6",
                        "background": "#f8f9fb",
                        "surface-tint": "#a04100",
                        "inverse-on-surface": "#eff1f3",
                        "surface-bright": "#f8f9fb",
                        "inverse-primary": "#ffb693",
                        "surface-container-high": "#e6e8ea",
                        "error": "#ba1a1a",
                        "secondary-container": "#d6e0f3",
                        "on-tertiary-fixed-variant": "#004b6f",
                        "on-primary-container": "#541f00",
                        "on-tertiary-container": "#00334d",
                        "surface-container-lowest": "#ffffff",
                        "primary-fixed-dim": "#ffb693",
                        "primary-container": "#f37021",
                        "on-secondary-fixed-variant": "#3d4757",
                        "outline-variant": "#e0c0b2",
                        "tertiary-fixed": "#cae6ff",
                        "on-error": "#ffffff",
                        "tertiary-container": "#00a0e6",
                        "on-secondary-fixed": "#121c2a",
                        "on-secondary": "#ffffff"
                    },
                    "borderRadius": {
                        "DEFAULT": "1rem",
                        "lg": "2rem",
                        "xl": "3rem",
                        "full": "9999px"
                    },
                    "fontFamily": {
                        "headline": ["Plus Jakarta Sans"],
                        "body": ["Inter"],
                        "label": ["Inter"]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        h1,
        h2,
        h3,
        .headline {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .glass-header {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(20px);
        }
    </style>
</head>

<body class="bg-background text-on-surface">
    <!-- SideNavBar (Authority: JSON & Design System) -->
    <aside class="h-screen w-72 flex flex-col fixed left-0 top-0 bg-slate-50 border-r border-slate-200 z-50">
        <div class="flex flex-col h-full p-4 gap-2">
            <div class="px-4 py-8">
                <span class="text-xl font-bold text-orange-600">JobFix</span>
                <p class="text-xs font-medium text-slate-500 mt-1 uppercase tracking-widest">Artisan Portal</p>
            </div>
            <nav class="flex-1 space-y-2 px-2">
                <a href="{{ route('professional.dashboard') }}"
                    class="flex items-center gap-4 px-6 py-4 transition-all duration-300 group rounded-full
       {{ request()->routeIs('professional.dashboard') 
          ? 'bg-[#f37021] text-white shadow-[0_10px_20px_-5px_rgba(243,112,33,0.3)]' 
          : 'text-slate-500 hover:text-[#f37021] hover:bg-orange-50' }}">
                    <span class="material-symbols-outlined text-[22px] {{ request()->routeIs('professional.dashboard') ? '' : 'opacity-70 group-hover:opacity-100' }}">
                        dashboard
                    </span>
                    <span class="font-bold text-[15px]">Dashboard</span>
                </a>

                <a href="#"
                    class="flex items-center gap-4 px-6 py-4 transition-all duration-300 group rounded-full
       {{ request()->routeIs('professional.profile.edit') 
          ? 'bg-[#f37021] text-white shadow-[0_10px_20px_-5px_rgba(243,112,33,0.3)]' 
          : 'text-slate-500 hover:text-[#f37021] hover:bg-orange-50' }}">
                    <span class="material-symbols-outlined text-[22px] {{ request()->routeIs('professional.profile.edit') ? '' : 'opacity-70 group-hover:opacity-100' }}">
                        person_edit
                    </span>
                    <span class="font-bold text-[15px]">Edit Profile</span>
                </a>

                <a href="{{ route('professional.services') }}"
                    class="flex items-center gap-4 px-6 py-4 transition-all duration-300 group rounded-full
       {{ request()->routeIs('professional.services.*') 
          ? 'bg-[#f37021] text-white shadow-[0_10px_20px_-5px_rgba(243,112,33,0.3)]' 
          : 'text-slate-500 hover:text-[#f37021] hover:bg-orange-50' }}">
                    <span class="material-symbols-outlined text-[22px] {{ request()->routeIs('professional.services.*') ? '' : 'opacity-70 group-hover:opacity-100' }}">
                        handyman
                    </span>
                    <span class="font-bold text-[15px]">My Services</span>
                </a>

                <a href="#"
                    class="flex items-center gap-4 px-6 py-4 transition-all duration-300 group rounded-full
       {{ request()->routeIs('professional.portfolio') 
          ? 'bg-[#f37021] text-white shadow-[0_10px_20px_-5px_rgba(243,112,33,0.3)]' 
          : 'text-slate-500 hover:text-[#f37021] hover:bg-orange-50' }}">
                    <span class="material-symbols-outlined text-[22px] {{ request()->routeIs('professional.portfolio') ? '' : 'opacity-70 group-hover:opacity-100' }}">
                        photo_library
                    </span>
                    <span class="font-bold text-[15px]">Portfolio</span>
                </a>
            </nav>
        </div>
        <div class="mt-auto pt-6 border-t border-slate-100">
            <div class="flex items-center gap-3 p-3 mb-4 rounded-2xl transition-colors hover:bg-slate-50">
                <div class="relative">
                    <img class="w-10 h-10 rounded-full object-cover border-2 border-white shadow-sm"
                        src="{{ auth()->user()->image }}"
                        alt="{{ auth()->user()->name }}">
                    <span class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 border-2 border-white rounded-full"></span>
                </div>
                <div>
                    <p class="text-[13px] font-black text-slate-900 leading-tight">{{ auth()->user()->name }}</p>
                    <p class="text-[10px] text-[#f37021] font-bold uppercase tracking-wider mt-0.5">Available for Work</p>
                </div>
            </div>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="w-full py-4 px-6 bg-[#0f172a] text-white rounded-[20px] text-[11px] font-black uppercase tracking-[0.15em] shadow-xl shadow-slate-200 hover:bg-slate-800 transition-all active:scale-95 flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined text-[18px]">logout</span>
                    Sign Out
                </button>
            </form>
        </div>
    </aside>
    <main>
        {{ $slot }}
</body>

</html>