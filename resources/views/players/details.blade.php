<x-layout>
    <div class="container mx-auto my-8 p-6 bg-white rounded-lg shadow-md">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-4">{{ $player->name }}</h2>

        <div class="text-center mb-6">
            <span class="inline-block text-2xl font-semibold text-blue-600">Level: {{ $player->level }}</span>
        </div>

        <p class="text-gray-700 text-lg">
            <strong>About:</strong>
            <span class="block mt-2">{{ $player->bio }}</span>
        </p>
        <div class="flex justify-center mt-6">
            <a href="/players"
                class="inline-block px-8 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow-lg hover:bg-blue-500">
                Back to all players
            </a>
        </div>
    </div>
</x-layout>