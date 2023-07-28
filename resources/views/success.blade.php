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
<body class="h-full">
<x-navbar></x-navbar>
<main class="mx-auto w-full mb-28 pt-16">
    <div class="max-w-screen-md mx-auto p-4 flex flex-col items-center justify-center mt-10 bg-dark-200 rounded-xl ">
        <h1 class="text-2xl font-extrabold text-center mb-2">Спасибо за покупку!</h1>
        <p class="indent-4">Теперь вы можете зайти на сервер под ником, который вы ввели при покупке. ОБЯЗАТЕЛЬНО ПРОЧИТАЙТЕ
            <a href="/wiki" class="text-primary hover:text-light-200">нашу вики</a> и вступите на наш <a href="/discord" class="text-primary hover:text-light-200">Discord-сервер</a>
        </p>
    </div>
</main>
<x-footer isFixed="1"></x-footer>
<x-j-spaste></x-j-spaste>
</body>
</html>
