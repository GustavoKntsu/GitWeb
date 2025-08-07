<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Meu Site')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900">
<header class="bg-blue-600 text-white p-4">
    <h1 class="text-2xl font-bold">Meu Site com Laravel + Tailwind</h1>
</header>

<main class="p-6">
    @yield('content')
</main>

<footer class="bg-gray-800 text-white p-4 text-center mt-10">
    &copy; 2025 Kenji Corp.
</footer>
</body>
</html>
