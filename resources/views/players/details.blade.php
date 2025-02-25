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
                class="ml-4 inline-block px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-lg hover:bg-blue-500">
                Back to all players
            </a>
        </div>
    </div>

    <form action="{{ route("players.destroy", $player->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <div class="flex justify-center">
            <button type="submit"
            class="ml-4 inline-block px-4 py-2 bg-red-500 text-white font-semibold rounded-lg shadow-lg hover:bg-red-700 transition duration-300 transform group-hover:-translate-x-2 hover:scale-105">
            Delete
        </button>
        </div>

    </form>
</x-layout>
