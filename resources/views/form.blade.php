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
<main class="mx-auto w-full mb-28 pt-16 flex justify-center items-center px-4">
    <div class="bg-dark-100 mt-28 p-8 rounded-xl flex items-center flex-col">
        <h1 class="text-2xl font-extrabold pb-4 text-center">Покупка проходки</h1>
        <form action="buy" method="post">
            @csrf
            <div class="flex flex-row justify-center items-center flex-nowrap w-full mx-auto">
                <div class="basis-2/3">
                    <input type="text" id="nickname" name="nickname" value="{{ old('nickname') }}" placeholder="Никнейм" class=" w-full h-12 text-light-100 bg-transparent border-2 border-r-0 border-light-100 rounded-l-xl focus:border-light-100 focus:!ring-transparent">
                </div>
                <div class="basis-1/3">
                    <input type="submit" value="Купить" class="font-bold w-full h-12 rounded-r-xl bg-light-100 text-dark-400 hover:bg-transparent hover:text-light-100 transition border-2 border-light-100 cursor-pointer">
                </div>
            </div>
            <p class="italic mt-3 text-sm">Внимание: убедитесь, что вы прописали свой никнейм правильно!</p>
        </form>
    </div>
</main>
@if($errors->any())
    <div class="absolute right-10 bottom-20">
        @foreach($errors->all() as $error)
            <div class="bg-error p-4 my-2 rounded-xl">
                <p>{{ $error }}</p>
            </div>
        @endforeach
    </div>
@endif
<x-footer isFixed="1"></x-footer>
<x-j-spaste></x-j-spaste>
<script>
</script>
</body>
</html>
