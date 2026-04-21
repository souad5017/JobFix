   <!DOCTYPE html>

    <html class="light" lang="en">

    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>Directory - Artisan Marketplace</title>
        <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=Inter:wght@300;400;500;600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
        <script id="tailwind-config">
            tailwind.config = {
                darkMode: "class",
                theme: {
                    extend: {
                        "colors": {
                            "on-surface": "#191c1e",
                            "on-primary-fixed": "#341000",
                            "tertiary-container": "#00a0e6",
                            "surface-container-high": "#e6e8ea",
                            "secondary": "#555f6f",
                            "inverse-surface": "#2d3133",
                            "on-tertiary": "#ffffff",
                            "error-container": "#ffdad6",
                            "surface-bright": "#f8f9fb",
                            "secondary-container": "#d6e0f3",
                            "on-error": "#ffffff",
                            "tertiary-fixed-dim": "#8bceff",
                            "on-secondary-fixed": "#121c2a",
                            "on-primary": "#ffffff",
                            "primary-fixed": "#ffdbcb",
                            "on-background": "#191c1e",
                            "on-secondary-container": "#596373",
                            "on-surface-variant": "#584237",
                            "surface": "#f8f9fb",
                            "inverse-primary": "#ffb693",
                            "background": "#f8f9fb",
                            "tertiary-fixed": "#cae6ff",
                            "primary": "#a04100",
                            "tertiary": "#006492",
                            "on-secondary": "#ffffff",
                            "primary-container": "#f37021",
                            "surface-container-highest": "#e0e3e5",
                            "outline-variant": "#e0c0b2",
                            "primary-fixed-dim": "#ffb693",
                            "on-tertiary-fixed": "#001e2f",
                            "on-error-container": "#93000a",
                            "surface-container-lowest": "#ffffff",
                            "inverse-on-surface": "#eff1f3",
                            "surface-tint": "#a04100",
                            "on-primary-container": "#541f00",
                            "error": "#ba1a1a",
                            "on-primary-fixed-variant": "#7a3000",
                            "secondary-fixed": "#d9e3f6",
                            "on-tertiary-fixed-variant": "#004b6f",
                            "secondary-fixed-dim": "#bdc7da",
                            "surface-dim": "#d8dadc",
                            "outline": "#8c7166",
                            "surface-container": "#eceef0",
                            "surface-variant": "#e0e3e5",
                            "surface-container-low": "#f2f4f6",
                            "on-tertiary-container": "#00334d",
                            "on-secondary-fixed-variant": "#3d4757"
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
            body {
                font-family: 'Inter', sans-serif;
            }

            h1,
            h2,
            h3,
            .headline {
                font-family: 'Plus Jakarta Sans', sans-serif;
            }

            .material-symbols-outlined {
                font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            }
        </style>
    </head>


<body class="font-sans antialiased bg-[#f8fafc]">
    <div class="min-h-screen">
        @include('layouts.navigation')

        @if (isset($header))
        <header class="bg-white shadow-sm border-b border-gray-100">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h2 class="font-bold text-2xl text-[#1e293b] leading-tight">
                    {{ $header }}
                </h2>
            </div>
        </header>
        @endif

        <main>
            {{ $slot }}
        </main>
    </div>
     @livewireScripts
</body>

</html>