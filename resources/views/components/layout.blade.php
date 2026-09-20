<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Aplikasi Laravel' }}</title>

    <!-- Asset Bundling dengan Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{ $styles ?? '' }}
</head>

<body class="bg-gray-100 text-gray-900">

    <x-navbar />

    <main class="container mx-auto py-6 px-4">
        {{ $slot }}
    </main>

    {{ $scripts ?? '' }}
</body>

</html>
