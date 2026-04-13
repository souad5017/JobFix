<x-guest-layout>
    <h2 class="text-2xl font-semibold text-white text-center mb-6">Créer un compte</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="mb-4">
            <x-text-input id="name" class="block mt-1 w-full !rounded-2xl border-none py-3 px-4 shadow-sm" type="text" name="name" :value="old('name')" required autofocus placeholder="Nom complet" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-text-input id="email" class="block mt-1 w-full !rounded-2xl border-none py-3 px-4 shadow-sm" type="email" name="email" :value="old('email')" required placeholder="Email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-text-input id="password" class="block mt-1 w-full !rounded-2xl border-none py-3 px-4 shadow-sm" type="password" name="password" required placeholder="Mot de passe" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-text-input id="password_confirmation"
                class="block mt-1 w-full !rounded-2xl border-none py-3 px-4 shadow-sm"
                type="password"
                name="password_confirmation"
                required
                placeholder="Confirmez le mot de passe" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        <div class="mt-6">
            <label class="block font-medium text-sm text-white/80 mb-3 text-center">Vous êtes ?</label>

            <div class="grid grid-cols-2 gap-4">
                <label for="client" class="relative cursor-pointer">
                    <input type="radio" id="client" name="role" value="client" class="peer hidden" checked required>
                    <div class="p-4 bg-white/10 border-2 border-white/10 rounded-2xl text-center transition-all duration-300 peer-checked:border-[#f97316] peer-checked:bg-white/20 hover:bg-white/15 group">
                        <div class="text-3xl mb-2 group-hover:scale-110 transition">👤</div>
                        <h3 class="text-white font-bold text-sm uppercase tracking-wider">Client</h3>
                        <p class="text-white/50 text-xs mt-1">Cherche un service</p>
                        <div class="absolute top-2 right-2 text-[#f97316] opacity-0 peer-checked:opacity-100 font-bold">✓</div>
                    </div>
                </label>

                <label for="professionnel" class="relative cursor-pointer">
                    <input type="radio" id="professionnel" name="role" value="professionnel" class="peer hidden">
                    <div class="p-4 bg-white/10 border-2 border-white/10 rounded-2xl text-center transition-all duration-300 peer-checked:border-[#f97316] peer-checked:bg-white/20 hover:bg-white/15 group">
                        <div class="text-3xl mb-2 group-hover:scale-110 transition">🛠️</div>
                        <h3 class="text-white font-bold text-sm uppercase tracking-wider">Pro</h3>
                        <p class="text-white/50 text-xs mt-1">Offre des services</p>
                        <div class="absolute top-2 right-2 text-[#f97316] opacity-0 peer-checked:opacity-100 font-bold">✓</div>
                    </div>
                </label>
            </div>
            <x-input-error :messages="$errors->get('role')" class="mt-2" />
        </div>

        <div class="mt-8">
            <button type="submit" class="w-full bg-[#f97316] hover:bg-[#ea580c] text-white font-bold py-3 px-4 rounded-2xl transition duration-300 shadow-lg">
                S'inscrire
            </button>
        </div>

        <div class="mt-6 text-center border-t border-white/10 pt-4">
            <p class="text-white/80">Déjà inscrit ?
                <a href="{{ route('login') }}" class="text-[#f97316] font-bold hover:underline ml-1 text-lg">Se connecter</a>
            </p>
        </div>
    </form>
</x-guest-layout>