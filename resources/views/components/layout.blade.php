<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VFCA</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <header class="bg-white shadow">
        <nav class="container mx-auto flex justify-between items-center p-4">
            <h1 class="text-2xl font-bold text-blue-600">VFCA</h1>
            <div class="flex space-x-4">
                <a href="{{ route('players.index') }}" class="inline-block px-6 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow hover:bg-blue-500 transition duration-300">All Players</a>
                <a href="{{ route('players.add') }}" class="inline-block px-6 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow hover:bg-blue-500 transition duration-300">Add Players</a>
            </div>
        </nav>
    </header>

    <main class="container mx-auto my-8 p-6 bg-white shadow-lg rounded-lg">
        {{ $slot }}
    </main>
</body>
</html>
