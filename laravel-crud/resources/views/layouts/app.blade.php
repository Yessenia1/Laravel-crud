<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Laravel CRUD')</title>

    {{-- Tailwind CDN (solo para desarrollo) --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900 p-8">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl font-bold mb-6">@yield('title')</h1>
        @yield('content')
    </div>
</body>
</html>
