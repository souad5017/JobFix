<div>
    @if($show)
        <div class="fixed inset-0 bg-black/50 flex items-center justify-center z-50">

            <div class="bg-white w-[500px] rounded-2xl p-6 space-y-4">

                <div class="flex justify-between">
                    <h2 class="text-lg font-bold">Demander un service</h2>
                    <button wire:click="close">✖</button>
                </div>

                <div class="text-sm text-gray-600 space-y-1">
                    <p><strong>Nom:</strong> {{ $professional->user->name }}</p>
                    <p><strong>Email:</strong> {{ $professional->user->email }}</p>
                    <p><strong>Ville:</strong> {{ $professional->city }}</p>
                    <p><strong>Catégorie:</strong> {{ $professional->category->name }}</p>
                </div>

                <textarea
                    wire:model="message"
                    class="w-full border rounded-xl p-3"
                    placeholder="Votre message..."
                ></textarea>

                <div class="flex justify-end">
                    <button class="bg-orange-500 text-white px-4 py-2 rounded-xl">
                        Envoyer
                    </button>
                </div>

            </div>

        </div>
    @endif
</div>