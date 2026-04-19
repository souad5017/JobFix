<x-professional-layout>
    <header class="bg-white/70 backdrop-blur-xl sticky top-0 z-40 px-8 py-4 flex justify-between items-center shadow-sm">
        <div>
            <h1 class="text-2xl font-black tracking-tight text-slate-900">Edit Profile</h1>
            <p class="text-sm text-secondary font-medium">Managing Craft</p>
        </div>
        <div class="flex items-center gap-4">
            <div class="flex gap-2">
                <button class="p-2 text-slate-500 hover:bg-slate-100 rounded-full transition-colors active:scale-95">
                    <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
                </button>
                <button class="p-2 text-slate-500 hover:bg-slate-100 rounded-full transition-colors active:scale-95">
                    <span class="material-symbols-outlined" data-icon="settings">settings</span>
                </button>
            </div>
            <div class="h-10 w-10 rounded-full bg-slate-200 overflow-hidden border-2 border-white shadow-sm">
                <img alt="Artisan Profile" class="w-full h-full object-cover" data-alt="Professional headshot of a mature male artisan wearing a denim work shirt, friendly expression, clean studio background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBckWdcGR-WMiQO7DIoYMnRqne-CdHDgZ0lCtLZNS7KOn6aoS2kWoJJZGkOywMJQ9z_C4xIetuqH3tBKLA5K5DApWl33oBmoin6u-ssvyoGVqX3HbGjB4j6Xu5O4mHZnH4EvVlZbcSbRPBtNizQRUK4R66Ymy3XGgzD0UgRGSnkpD30aBGI5FW-MFYJic6FvNdqqrvZrbz1-Iq7MZOJpaQ91Q4LANm-9ajFVPuLeNTSBadodkP8dTpMyaCduCi9AsZ2IkQfMMNpZB9V" />
            </div>
        </div>
    </header>
    <div class="max-w-5xl mx-auto p-8 space-y-12">
        <!-- Profile Header Section -->
        <section class="flex flex-col md:flex-row items-center gap-10 bg-surface-container-lowest p-10 rounded-xl">
            <div class="relative group">
                <div class="w-48 h-48 rounded-full overflow-hidden border-4 border-white shadow-2xl relative">
                    <img alt="Artisan Avatar" class="w-full h-full object-cover" data-alt="Close up portrait of a skilled artisan man in his 40s with a short beard, wearing a professional navy blue polo shirt" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA424J6zbtSSeoa0R5Yo_Yo7hXFrSadnAwqP03EFchlHTa4BYAE9V36NKB8KpSUfmTtRFl4c4Tzy6xcX-DVWcA-FAyDkWbNcsMQsrRO4CBiT-mdKs4x8ObEG3R8M1NKrW9_twZ0-iQM9r5hsbB-3Tboc1t0UCJhe2uz3EURCJLT0r91tL1vMtVq7mfIY0op35CMH0xS70hPZyi47HBI9sjvjUHkt_yLBz-GEei0LANV5Xd3D6pGyYi9SJpYbgAVE2FFZbOW-z-SAG1y" />
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <span class="material-symbols-outlined text-white text-3xl" data-icon="photo_camera">photo_camera</span>
                    </div>
                </div>
                <button class="absolute bottom-2 right-2 bg-primary-container text-white p-3 rounded-full shadow-lg hover:scale-110 transition-transform active:scale-95">
                    <span class="material-symbols-outlined text-sm" data-icon="edit">edit</span>
                </button>
            </div>
            <div class="flex-1 space-y-4">
                <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">Artisan Identity</h2>
                <p class="text-slate-500 leading-relaxed max-w-lg">Your profile photo and basic identity are the first things clients see. Professional, well-lit photos increase booking rates by up to 40%.</p>
                <div class="flex gap-4">
                    <button class="px-8 py-3 bg-primary-container text-on-primary-container rounded-full font-bold text-sm shadow-lg shadow-orange-600/20 active:scale-95 transition-all">Upload New Photo</button>
                    <button class="px-8 py-3 text-secondary font-bold text-sm hover:bg-surface-container rounded-full transition-colors">Remove</button>
                </div>
            </div>
        </section>
        <!-- Personal Info & About (Editorial Layout) -->
        <section class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 space-y-6">
                <div class="bg-surface-container-lowest p-8 rounded-lg shadow-sm border border-slate-100/50">
                    <h3 class="text-xl font-bold mb-6 text-slate-900">Personal Information</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-slate-400 uppercase tracking-wider">Full Name</label>
                            <input class="w-full bg-surface-container-high border-none rounded-lg p-4 focus:ring-2 focus:ring-primary-container/20 transition-all text-slate-900 font-medium" type="text" value="Marcus Thorne" />
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-slate-400 uppercase tracking-wider">Professional Title</label>
                            <input class="w-full bg-surface-container-high border-none rounded-lg p-4 focus:ring-2 focus:ring-primary-container/20 transition-all text-slate-900 font-medium" type="text" value="Master Plumber &amp; Restoration Specialist" />
                        </div>
                        <div class="md:col-span-2 space-y-2">
                            <label class="text-xs font-bold text-slate-400 uppercase tracking-wider">About Me / Bio</label>
                            <div class="relative">
                                <textarea class="w-full bg-surface-container-high border-none rounded-lg p-4 focus:ring-2 focus:ring-primary-container/20 transition-all text-slate-900 leading-relaxed" rows="5">With over 15 years of experience in high-end residential plumbing, I specialize in intricate restoration projects and modern eco-friendly system installations. My approach combines traditional craftsmanship with the latest diagnostic technology to ensure permanent solutions for your home.</textarea>
                                <div class="absolute bottom-4 right-4 flex gap-2">
                                    <button class="p-2 hover:bg-white rounded-md transition-colors"><span class="material-symbols-outlined text-slate-400 text-sm" data-icon="format_bold">format_bold</span></button>
                                    <button class="p-2 hover:bg-white rounded-md transition-colors"><span class="material-symbols-outlined text-slate-400 text-sm" data-icon="format_italic">format_italic</span></button>
                                    <button class="p-2 hover:bg-white rounded-md transition-colors"><span class="material-symbols-outlined text-slate-400 text-sm" data-icon="link">link</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Location & Availability (Asymmetric sidebar) -->
            <div class="space-y-6">
                <div class="bg-slate-900 text-white p-8 rounded-lg shadow-xl relative overflow-hidden group">
                    <div class="absolute top-0 right-0 -mr-8 -mt-8 w-32 h-32 bg-orange-600/20 rounded-full blur-3xl group-hover:bg-orange-600/40 transition-colors"></div>
                    <h3 class="text-lg font-bold mb-6 relative z-10">Service Coverage</h3>
                    <div class="space-y-6 relative z-10">
                        <div class="space-y-2">
                            <label class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Primary City</label>
                            <div class="flex items-center gap-2 bg-white/10 rounded-full px-4 py-2 border border-white/5">
                                <span class="material-symbols-outlined text-orange-500 text-sm" data-icon="location_on">location_on</span>
                                <input class="bg-transparent border-none p-0 text-sm focus:ring-0 w-full text-white" type="text" value="San Francisco, CA" />
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center">
                                <label class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Service Radius</label>
                                <span class="text-orange-500 font-bold text-sm">25 miles</span>
                            </div>
                            <input class="w-full h-1.5 bg-white/20 rounded-lg appearance-none cursor-pointer accent-orange-600" type="range" />
                            <div class="flex justify-between text-[10px] text-slate-500 font-bold uppercase">
                                <span>5mi</span>
                                <span>50mi</span>
                            </div>
                        </div>
                        <div class="pt-4">
                            <button class="w-full py-3 bg-white text-slate-900 rounded-full text-xs font-black uppercase tracking-widest hover:bg-orange-500 hover:text-white transition-all active:scale-95">
                                Update Map
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Specialties & Category System -->
        <section class="bg-surface-container-low p-10 rounded-xl">
            <div class="mb-8">
                <h3 class="text-2xl font-black text-slate-900 tracking-tight">Specialties &amp; Expertise</h3>
                <p class="text-slate-500 text-sm mt-1">Select the categories that best describe your craft to appear in relevant searches.</p>
            </div>
            <div class="flex flex-wrap gap-3">
                <button class="px-6 py-3 bg-white border border-orange-100 rounded-full text-sm font-bold text-orange-600 flex items-center gap-2 shadow-sm hover:shadow-md transition-all">
                    <span class="material-symbols-outlined text-lg" data-icon="check_circle" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                    Plumbing
                </button>
                <button class="px-6 py-3 bg-white border border-orange-100 rounded-full text-sm font-bold text-orange-600 flex items-center gap-2 shadow-sm hover:shadow-md transition-all">
                    <span class="material-symbols-outlined text-lg" data-icon="check_circle" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                    Emergency Repairs
                </button>
                <button class="px-6 py-3 bg-white border border-orange-100 rounded-full text-sm font-bold text-orange-600 flex items-center gap-2 shadow-sm hover:shadow-md transition-all">
                    <span class="material-symbols-outlined text-lg" data-icon="check_circle" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                    Bathroom Renovation
                </button>
                <button class="px-6 py-3 bg-white border border-slate-200 rounded-full text-sm font-medium text-slate-500 hover:border-orange-200 hover:text-orange-400 transition-all flex items-center gap-2">
                    <span class="material-symbols-outlined text-lg" data-icon="add">add</span>
                    HVAC Maintenance
                </button>
                <button class="px-6 py-3 bg-white border border-slate-200 rounded-full text-sm font-medium text-slate-500 hover:border-orange-200 hover:text-orange-400 transition-all flex items-center gap-2">
                    <span class="material-symbols-outlined text-lg" data-icon="add">add</span>
                    Pipe Fitting
                </button>
                <button class="px-6 py-3 bg-white border border-slate-200 rounded-full text-sm font-medium text-slate-500 hover:border-orange-200 hover:text-orange-400 transition-all flex items-center gap-2">
                    <span class="material-symbols-outlined text-lg" data-icon="add">add</span>
                    Water Heater Install
                </button>
            </div>
        </section>
        <!-- Service Management (List Design) -->
        <section class="space-y-6">
            <div class="flex justify-between items-end">
                <div>
                    <h3 class="text-2xl font-black text-slate-900 tracking-tight">Active Services</h3>
                    <p class="text-slate-500 text-sm mt-1">Define your pricing and service offerings.</p>
                </div>
                <button class="flex items-center gap-2 px-6 py-3 bg-slate-900 text-white rounded-full text-sm font-bold hover:bg-slate-800 transition-all active:scale-95 shadow-xl shadow-slate-900/10">
                    <span class="material-symbols-outlined text-sm" data-icon="add">add</span>
                    Add Service
                </button>
            </div>
            <div class="grid grid-cols-1 gap-4">
                <!-- Service Card -->
                <div class="group bg-surface-container-lowest p-6 rounded-lg flex items-center justify-between border-l-4 border-orange-600 shadow-sm hover:shadow-md transition-all">
                    <div class="flex items-center gap-6">
                        <div class="h-12 w-12 rounded-full bg-orange-50 flex items-center justify-center text-orange-600">
                            <span class="material-symbols-outlined" data-icon="water_drop">water_drop</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900">Leak Repair</h4>
                            <p class="text-xs text-slate-500">Emergency pipe fixing and ceiling leaks</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-12">
                        <div class="text-right">
                            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest block">Starts From</span>
                            <span class="text-lg font-black text-slate-900">$50.00</span>
                        </div>
                        <div class="flex gap-2">
                            <button class="p-2 text-slate-400 hover:text-orange-600 transition-colors"><span class="material-symbols-outlined" data-icon="edit">edit</span></button>
                            <button class="p-2 text-slate-400 hover:text-error transition-colors"><span class="material-symbols-outlined" data-icon="delete">delete</span></button>
                        </div>
                    </div>
                </div>
                <!-- Service Card -->
                <div class="group bg-surface-container-lowest p-6 rounded-lg flex items-center justify-between border-l-4 border-slate-200 shadow-sm hover:shadow-md transition-all">
                    <div class="flex items-center gap-6">
                        <div class="h-12 w-12 rounded-full bg-slate-100 flex items-center justify-center text-slate-600">
                            <span class="material-symbols-outlined" data-icon="bathtub">bathtub</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900">Fixture Installation</h4>
                            <p class="text-xs text-slate-500">Taps, showers, and bathroom hardware</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-12">
                        <div class="text-right">
                            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest block">Starts From</span>
                            <span class="text-lg font-black text-slate-900">$85.00</span>
                        </div>
                        <div class="flex gap-2">
                            <button class="p-2 text-slate-400 hover:text-orange-600 transition-colors"><span class="material-symbols-outlined" data-icon="edit">edit</span></button>
                            <button class="p-2 text-slate-400 hover:text-error transition-colors"><span class="material-symbols-outlined" data-icon="delete">delete</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="space-y-6">
            <div class="flex justify-between items-end">
                <div>
                    <h3 class="text-2xl font-black text-slate-900 tracking-tight">Work Portfolio</h3>
                    <p class="text-slate-500 text-sm mt-1">Showcase your best projects to build trust with clients.</p>
                </div>
                <button class="px-6 py-3 bg-surface-container-highest text-slate-900 rounded-full text-sm font-bold hover:bg-slate-200 transition-all">
                    Manage Gallery
                </button>
            </div>
            <div class="grid grid-cols-12 gap-4 h-[500px]">
                <div class="col-span-8 row-span-2 relative group overflow-hidden rounded-xl">
                    <img alt="Portfolio Work" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="Wide shot of a luxury modern bathroom with white marble tiles and sleek black fixtures installed by a professional" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBVabXJzu2HrM1XgaHe4njZf05lau_Eir-rb6DdZRY6RUF81cfAFvEFRdyZetksA9dO0s-C69dpJW7ZLqf9_Pefuo2mSOhZHG2T13pufvRXF4kNH4EQl3bQ-6LXq5M5Jxxc2CSUa79JzxTdSvHjr5OmT6VetOD3McIf-jrYYXXodavsAx_OmqYYkoMmXlcjzN3GGYTQpuRTyo5Z8iIgOqORnbHy17PCx1z07yvOm8GhXOJY-rZjQN3aB-B-7enRsR8JaRub70Lg8h4L" />
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity p-8 flex flex-col justify-end">
                        <span class="text-white font-bold text-lg">Luxury Bathroom Suite</span>
                        <span class="text-slate-200 text-sm font-medium">Completed June 2023</span>
                    </div>
                </div>
                <div class="col-span-4 relative group overflow-hidden rounded-xl">
                    <img alt="Portfolio Work" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="Close-up of intricate copper piping and valves expertly installed in a residential basement utility room" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCNbKpqZfbPNdRkWqdltcKGaYNCDviqrqJjsaTJQOuHtoYdQyqeui8dGnATXKh_pVTjHAN7YWMw90EV7bvc92bQrWZFNvpTxPA29ZPyL4mlztMUDMlcmJpGJ_8O9NB2YerexACyWNe3BqLKx3_3P_3VDwgmuBJLWTbz0EKWYgeJ9DZQTo_7W3fydhg4WYI77wmv-V05ba8ZfOH2YtOKbxSWLJHrri0mdgV12qWd35Vvjvsa86n97_qlJtUoFeYo-_KMxZ__WKgMIft3" />
                    <button class="absolute top-4 right-4 p-2 bg-white/20 backdrop-blur-md rounded-full text-white opacity-0 group-hover:opacity-100 transition-opacity">
                        <span class="material-symbols-outlined text-sm" data-icon="fullscreen">fullscreen</span>
                    </button>
                </div>
                <div class="col-span-4 relative group overflow-hidden rounded-xl border-4 border-dashed border-slate-200 bg-slate-100 flex flex-col items-center justify-center hover:bg-slate-50 transition-colors cursor-pointer">
                    <div class="h-16 w-16 rounded-full bg-white flex items-center justify-center text-slate-400 mb-4 shadow-sm group-hover:text-orange-600 group-hover:scale-110 transition-all">
                        <span class="material-symbols-outlined text-3xl" data-icon="add_a_photo">add_a_photo</span>
                    </div>
                    <span class="text-sm font-bold text-slate-500">Upload Project</span>
                </div>
            </div>
        </section>
        <div class="pt-12 flex justify-end gap-4">
            <button class="px-10 py-4 text-slate-500 font-bold hover:bg-surface-container rounded-full transition-colors">Discard Changes</button>
            <button class="px-12 py-4 bg-primary-container text-white rounded-full font-black text-lg shadow-2xl shadow-orange-600/30 active:scale-95 transition-all hover:translate-y-[-2px]">
                Save Profile
            </button>
        </div>
    </div>
    </main>
    </body>

    </html>
</x-professional-layout>