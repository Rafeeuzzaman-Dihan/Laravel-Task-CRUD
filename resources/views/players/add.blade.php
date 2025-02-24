<x-layout>
    <form action="{{ route('players.store') }}" method="POST" class="max-w-md mx-auto bg-gray-900 p-6 rounded-lg shadow-lg">
        @csrf
        <h2 class="text-2xl font-bold text-center text-white mb-4">Add a New Player</h2>

        <label for="name" class="block text-sm font-semibold text-gray-300">Player Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required
            class="mt-1 block w-full border border-gray-600 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500 p-2 bg-gray-800 text-white">

        <label for="level" class="block text-sm font-semibold text-gray-300 mt-4">Player Level (0-100):</label>
        <input type="number" id="level" name="level" value="{{ old('level') }}" required
            class="mt-1 block w-full border border-gray-600 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500 p-2 bg-gray-800 text-white">

        <label for="bio" class="block text-sm font-semibold text-gray-300 mt-4">About:</label>
        <textarea rows="5" id="bio" name="bio" required class="mt-1 block w-full border border-gray-600 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500 p-2 bg-gray-800 text-white">{{ old('bio') }}</textarea>

        <button type="submit" class="mt-6 w-full bg-red-600 text-white font-semibold py-2 rounded-md hover:bg-red-700 transition duration-200">Add Player</button>

        @if ($errors->any())
            <ul class="mt-4 px-4 py-2 bg-red-100 rounded-md">
                @foreach($errors->all() as $error)
                    <li class="my-2 text-red-500">{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        
    </form>
</x-layout>
