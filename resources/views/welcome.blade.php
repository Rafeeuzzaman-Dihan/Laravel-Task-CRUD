<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VFCA</title>

    @vite('resources/css/app.css')
</head>
<body class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="text-center bg-white shadow-lg rounded-lg p-8 mx-4 sm:mx-0">
        <h1 class="text-4xl font-extrabold text-gray-800 mb-6">
            Welcome to Virtual Football Club Association
        </h1>
        <p class="text-lg text-gray-600 mb-6">
            Click the button to show player list
        </p>
        <a href="/players" class="inline-block px-8 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow-lg hover:bg-blue-500">
            Find Players
        </a>
    </div>
</body>
</html>