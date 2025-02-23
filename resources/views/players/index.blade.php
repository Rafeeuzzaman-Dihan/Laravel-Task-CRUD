<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VFCA | Players</title>
</head>
<body>
    <h1>Available Players</h1>

    @foreach ($players as $player)
        <li>
            <p>{{ $player['name'] }}</p>
            <a href="players/{{ $player['id'] }}">Show Details</a>
        </li>
    @endforeach
</body>
</html>