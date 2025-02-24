<x-layout>
    <form action="{{ route('players.store') }}" method="POST" class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-lg">
        @csrf
        <h2 class="text-2xl font-bold text-center text-blue-600 mb-4">Add a New Player</h2>

        <label for="name" class="block text-sm font-semibold text-gray-700">Player Name:</label>
        <input
            type="text"
            id="name"
            name="name"
            required
            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2"
        >

        <label for="level" class="block text-sm font-semibold text-gray-700 mt-4">Player Level (0-100):</label>
        <input
            type="number"
            id="level"
            name="level"
            required
            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2"
        >

        <label for="bio" class="block text-sm font-semibold text-gray-700 mt-4">About:</label>
        <textarea
            rows="5"
            id="bio"
            name="bio"
            required
            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2"
        ></textarea>

        <button type="submit" class="mt-6 w-full bg-blue-600 text-white font-semibold py-2 rounded-md hover:bg-blue-700 transition duration-200">Add Player</button>
    </form>
</x-layout>
