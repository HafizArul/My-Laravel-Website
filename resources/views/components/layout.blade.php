<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- @vite('resources/css/app.css') --}}
    <link rel="stylesheet" href="/css/style.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>{{ $title }}</title>
</head>

<body class="h-full">
    <x-navbar>{{ $title }}</x-navbar>
    
    <x-sidebar></x-sidebar>

    <main class="main">
        {{ $content }}
    </main>

    <x-footer></x-footer>

    <script src="/js/script.js"></script>
</body>

</html>
