<x-layout>

<h1>Available Players</h1>
<ul>
    @foreach ($players as $player)
        <li>
            <p>{{ $player['name'] }}</p>
            <a href="players/{{ $player['id'] }}">Show Details</a>
        </li>
    @endforeach
</ul>

</x-layout>