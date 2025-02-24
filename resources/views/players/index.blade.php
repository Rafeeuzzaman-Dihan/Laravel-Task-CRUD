<x-layout>
    <div class="container mx-auto my-8">
        <h1 class="text-3xl font-bold text-center mb-6">Available Players</h1>
        <ul class="space-y-4">
            @foreach ($players as $player)
                <li>
                    <x-card href="{{ route('players.details', $player->id) }}" :highlight="$player['level'] > 94">
                        <h3 class="text-lg font-semibold">{{ $player->name }}</h3>
                    </x-card>
                </li>
            @endforeach
        </ul>
    </div>
    {{ $players->links() }}
</x-layout>
