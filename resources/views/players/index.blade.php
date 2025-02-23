<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VFCA | Players</title>
</head>
<body>
    <h1>Available Players</h1>
    <ul>
        <li>
            <a href="/players/{{ $players[0]["id"] }}">
                {{ $players[0]["name"] }}
            </a>
        </li>
        <li>
            <a href="/players/{{ $players[1]["id"] }}">
                {{ $players[1]["name"] }}
            </a>
        </li>
    </ul>
</body>
</html>