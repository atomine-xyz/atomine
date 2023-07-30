<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Вики | Atom</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link type="Image/x-icon" href="{{ Vite::asset('resources/images/favicon.ico') }}" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body class="h-screen">
<x-navbar></x-navbar>
<main class="container mx-auto mb-28 pt-24 flex gap-x-4 flex-col lg:flex-row px-4">
    <div class="basis-1/4">
        <aside class="bg-dark-100 p-4 rounded-md">{!! $catalogs !!}</aside>
    </div>
    @vite(['resources/css/wiki.css'])
    <div class="basis-3/4 p-4 !leading-loose">{!! $content !!}</div>
</main>
<x-footer isFixed="0"></x-footer>
<x-j-spaste></x-j-spaste>
</body>
</html>
