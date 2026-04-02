<x-guest-layout>
    <h2 class="text-2xl font-semibold text-white text-center mb-6">Connexion</h2>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <x-text-input id="email" class="block mt-1 w-full !rounded-2xl border-none py-3 px-4 shadow-sm" type="email" name="email" :value="old('email')" required autofocus placeholder="Email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-text-input id="password" class="block mt-1 w-full !rounded-2xl border-none py-3 px-4 shadow-sm" type="password" name="password" required placeholder="Mot de passe" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="block mt-4 flex items-center justify-between">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-[#f97316] shadow-sm focus:ring-[#f97316]" name="remember">
                <span class="ms-2 text-sm text-white/70">Se souvenir de moi</span>
            </label>
            @if (Route::has('password.request'))
                <a class="text-sm text-white/70 hover:text-white" href="{{ route('password.request') }}">
                    Oublié ?
                </a>
            @endif
        </div>

        <div class="mt-8">
            <button type="submit" class="w-full bg-[#f97316] hover:bg-[#ea580c] text-white font-bold py-3 px-4 rounded-2xl transition duration-300 shadow-lg text-lg uppercase tracking-wider">
                Log in
            </button>
        </div>

        <div class="mt-6 text-center border-t border-white/10 pt-4">
            <p class="text-white/80">Nouveau sur JobFix ? 
                <a href="{{ route('register') }}" class="text-[#f97316] font-bold hover:underline ml-1 text-lg">S'inscrire</a>
            </p>
        </div>
    </form>
</x-guest-layout>