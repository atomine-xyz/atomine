<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная | Atom</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link type="Image/x-icon" href="{{ Vite::asset('resources/images/favicon.ico') }}" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body class="h-screen">
<x-navbar></x-navbar>
<main class="mx-auto w-full pt-14">
    <div class="flex flex-col w-full h-full align-middle items-center mt-48">
        <h1 class="text-center text-3xl font-bold">404: не найдено!</h1>
        <p class="text-md pt-4 font-extralight text-center">Возможно, вы перешли по сслыке, которую удалили, или просто ввели ссылку неправильно.</p>
    </div>
</main>
<x-footer isAbsolute="1"></x-footer>
<x-j-spaste></x-j-spaste>
</body>
</html>
