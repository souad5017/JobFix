<x-auth-simple-layout>
    <div class="min-h-screen bg-[#f1f5f9] flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 font-sans">
        <div class="max-w-xl w-full bg-white rounded-[3rem] shadow-[0_20px_60px_rgba(15,23,42,0.05)] border border-white p-10 relative overflow-hidden">

            <div class="text-center mb-10">
                <div class="w-16 h-16 bg-orange-50 rounded-2xl flex items-center justify-center mx-auto mb-6 border border-orange-100 shadow-sm">
                    <svg class="w-8 h-8 text-[#f97316]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h2 class="text-3xl font-black text-[#0f172a] tracking-tight mb-2">Welcome to <span class="text-[#f97316]">JobFix</span>!</h2>
                <p class="text-slate-500 font-bold uppercase text-[10px] tracking-[0.3em]">Finalisez votre profil d'artisan</p>
            </div>

            <form action="{{ route('professional.profile.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                @csrf

                <div class="flex flex-col items-center mb-10">
                    <div class="relative group">
                        <div class="w-28 h-28 bg-slate-100 rounded-full border-4 border-white shadow-md flex items-center justify-center overflow-hidden transition-transform group-hover:scale-105">
                            <img id="preview" src="https://ui-avatars.com/api/?name=User&background=f1f5f9&color=cbd5e1" class="w-full h-full object-cover">
                        </div>
                        <label for="image" class="absolute bottom-0 right-0 bg-[#f97316] p-2.5 rounded-full cursor-pointer shadow-lg hover:bg-[#ea580c] transition-all border-2 border-white">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </label>
                        <input type="file" id="image" name="image" class="hidden" onchange="previewImage(event)">
                    </div>
                    <span class="text-[11px] font-black text-[#f97316] uppercase tracking-widest mt-4">Photo de profil</span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="text-[11px] font-black text-[#475569] uppercase tracking-widest block ml-1">Numéro de téléphone</label>
                        <div class="relative group">
                            <span class="absolute inset-y-0 left-4 flex items-center text-slate-400 group-focus-within:text-[#f97316] transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </span>
                            <input type="text" name="phone" placeholder="+212 600-000000"
                                class="w-full bg-[#f8fafc] border-2 border-transparent rounded-2xl py-4 pl-12 text-sm font-bold text-[#0f172a] focus:bg-white focus:border-[#f97316] focus:ring-0 transition-all outline-none">
                        </div>
                    </div>
                    <div class="space-y-2">
                        <label class="text-[11px] font-black text-[#475569] uppercase tracking-widest block ml-1">Ville</label>
                        <div class="relative group">
                            <span class="absolute inset-y-0 left-4 flex items-center text-slate-400 group-focus-within:text-[#f97316] transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </span>
                            <input type="text" name="city" placeholder="Casablanca"
                                class="w-full bg-[#f8fafc] border-2 border-transparent rounded-2xl py-4 pl-12 text-sm font-bold text-[#0f172a] focus:bg-white focus:border-[#f97316] focus:ring-0 transition-all outline-none">
                        </div>
                    </div>
                </div>

                <div class="space-y-4">
                    <label class="text-[11px] font-black text-[#475569] uppercase tracking-widest block ml-1">Catégorie Professionnelle</label>
                    <div class="flex flex-wrap gap-2.5">
                        @foreach($categories as $category)
                        <label class="cursor-pointer">
                            <input type="radio" name="category_id" value="{{ $category->id }}" class="peer hidden">
                            <div class="px-6 py-3 bg-[#f8fafc] border-2 border-transparent rounded-xl text-[11px] font-black text-[#64748b] peer-checked:bg-[#f97316] peer-checked:text-white peer-checked:shadow-lg peer-checked:shadow-orange-200 transition-all uppercase tracking-tighter">
                                {{ $category->name }}
                            </div>
                        </label>
                        @endforeach
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="text-[11px] font-black text-[#475569] uppercase tracking-widest block ml-1">Bio / Expérience</label>
                    <textarea name="description" rows="4"
                        class="w-full bg-[#f8fafc] border-2 border-transparent rounded-[2rem] p-6 text-sm font-bold text-[#0f172a] focus:bg-white focus:border-[#f97316] focus:ring-0 transition-all outline-none placeholder-slate-300"
                        placeholder="Parlez-nous de votre savoir-faire..."></textarea>
                </div>

                <button type="submit" class="w-full bg-[#f97316] text-white font-black uppercase text-[11px] tracking-[0.2em] py-5 rounded-[2rem] shadow-xl shadow-orange-100 hover:bg-[#ea580c] hover:-translate-y-1 transition-all flex items-center justify-center gap-3">
                    Enregistrer le Profil
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </button>
            </form>
            @error('*')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('preview');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</x-auth-simple-layout>