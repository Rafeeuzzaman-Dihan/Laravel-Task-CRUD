<x-layout>

<h1>Available Players</h1>
<ul>
    @foreach ($players as $player)
        <li>
        <x-card href="/players/{{ $player['id'] }}" :highlight="$player['level'] > 80">
           <h3>{{ $player['name'] }}</h3>
        </x-card>
        </li>
    @endforeach
</ul>

</x-layout>