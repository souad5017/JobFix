<x-modal name="update-profile-picture" focusable>
    <form method="post" action="{{ route('profile.update.photo') }}" enctype="multipart/form-data" class="p-6"
        x-data="{ photoPreview: null }">
        @csrf

        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Modifier la photo de profil') }}
        </h2>

        <div class="mt-6 flex flex-col items-center">
            <div class="relative w-32 h-32 mb-4">
                <template x-if="photoPreview">
                    <img :src="photoPreview" class="w-32 h-32 rounded-full object-cover border-4 border-primary-container">
                </template>

                <template x-if="!photoPreview">
                    <img src="{{ auth()->user()->profile_photo_url ?? asset('default-avatar.png') }}"
                        class="w-32 h-32 rounded-full object-cover border-4 border-gray-200">
                </template>
            </div>

            <input type="file" name="photo" id="profilePhotoInput" class="hidden" accept="image/*"
                x-on:change="
                        const file = $event.target.files[0];
                        if (!file) return;
                        const reader = new FileReader();
                        reader.onload = (e) => { photoPreview = e.target.result; };
                        reader.readAsDataURL(file);
                   ">

            <x-secondary-button type="button" onclick="document.getElementById('profilePhotoInput').click()">
                {{ __('Choisir une photo') }}
            </x-secondary-button>

            <x-input-error :messages="$errors->get('photo')" class="mt-2" />
        </div>

        <div class="mt-6 flex justify-end">
            <x-secondary-button x-on:click="$dispatch('close'); photoPreview = null">
                {{ __('Annuler') }}
            </x-secondary-button>

            <x-primary-button class="ms-3">
                {{ __('Enregistrer') }}
            </x-primary-button>
        </div>
    </form>
</x-modal>

<x-modal name="edit-profile-info" focusable>
    <form method="post" action="{{ route('profile.update') }}" class="p-8">
        @csrf
        @method('patch')

        <h2 class="text-2xl font-bold text-on-surface mb-1">
            Modifier mon profil
        </h2>
        <p class="text-sm text-secondary mb-6">
            Mettez à jour vos informations personnelles.
        </p>

        <div class="space-y-4">
            <div>
                <x-input-label for="name" value="Nom complet" />
                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                    value="{{ auth()->user()->name }}" required autofocus />
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>

            <div>
                <x-input-label for="email" value="Email" />
                <x-text-input id="email" name="email" type="email" class="mt-1 block w-full"
                    value="{{ auth()->user()->email }}" required />
                <x-input-error class="mt-2" :messages="$errors->get('email')" />
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <x-input-label for="phone" value="Téléphone" />
                    <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full"
                        value="{{ auth()->user()->phone ?? '' }}" />
                    <x-input-error class="mt-2" :messages="$errors->get('phone')" />
                </div>

                <div>
                    <x-input-label for="city" value="Ville" />
                    <x-text-input id="city" name="city" type="text" class="mt-1 block w-full"
                        value="{{ auth()->user()->city ?? '' }}" />
                    <x-input-error class="mt-2" :messages="$errors->get('city')" />
                </div>
            </div>
        </div>

        <div class="mt-8 flex justify-end gap-3">
            <x-secondary-button x-on:click="$dispatch('close')" class="py-3 px-6 rounded-full">
                Annuler
            </x-secondary-button>

            <button type="submit" class="bg-primary text-on-primary px-8 py-3 rounded-full font-bold shadow-lg hover:opacity-90 transition-all">
                Sauvegarder
            </button>
        </div>
    </form>
</x-modal>