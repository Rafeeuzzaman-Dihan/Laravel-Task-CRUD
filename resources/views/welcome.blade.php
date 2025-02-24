<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VFCA</title>

    @vite('resources/css/app.css')
</head>

<body class="min-h-screen flex items-center justify-center bg-gray-900">
    <div class="text-center p-10 mx-4 sm:mx-0 transform">
        <h1 class="text-5xl font-extrabold text-red-600 mb-6 animate__animated animate__fadeIn animate__delay-0.5s">
            Welcome to Virtual Football Club Association
        </h1>
        <p class="text-lg text-gray-300 mb-6 animate__animated animate__fadeIn animate__delay-1s">
            Discover and connect with players around the globe!
        </p>
        <a href="/players"
            class="inline-block px-8 py-3 bg-red-600 text-black font-bold rounded-lg shadow-lg hover:bg-white transform transition duration-300 hover:translate-y-2 animate__animated animate__bounceIn animate__delay-2s">
            Find Players
        </a>
    </div>
</body>

</html>
