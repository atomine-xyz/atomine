<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atom</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link type="Image/x-icon" href="{{ Vite::asset('resources/images/favicon.ico') }}" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body class="h-full">
<x-navbar></x-navbar>
<main class="mx-auto w-full h-screen pt-16 flex justify-center items-center">
    <div class="h-20 align-middle mb-40">
        <h1 class="text-4xl font-bold text-center">Спасибо, что были с нами!</h1>
    </div>
</main>
<x-footer isFixed="1"></x-footer>
<x-j-spaste></x-j-spaste>
</body>
</html>
