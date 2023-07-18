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
<body>
    <x-navbar></x-navbar>
    <main class="mx-auto w-full mb-48 pt-14">
        <div class="w-full bg-dark-400 mb-16">
            <div class="container flex flex-row mx-auto lg:bg-model-1 bg-cover bg-no-repeat bg-right">
                <div class="w-full lg:w-1/2 text-center lg:text-left flex">
                    <div class="w-full mt-32 mb-40">
                        <h1 class="text-6xl font-extrabold leading-tight px-4 lg:px-0">Приватный Minecraft сервер</h1>
                        <p class="font-regular mt-4 mb-8 text-[#717D75] text-xl">С уникальными фишками и комьюнити</p>
                        <a href="#" class="bg-transparent border-2 border-light-100 rounded-xl px-6 py-3 hover:bg-light-100 hover:text-dark-400 transition-all active:text-light-100 active:bg-primary active:border-primary">Купить проходку</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-screen-xl mx-auto flex flex-col lg:flex-row gap-x-4 items-center px-4 lg:px-0">
            <div class="w-full pb-4 lg:pb-0">
                <p class="font-extralight text-center lg:text-right text-xl">
                    Мы - компания обычных игроков, объединенных общей идеей и желанием создать идеальный приватный сервер по майнкрафту. Atom - наша воплощенная идея в реальность, благодаря безграничному энтузиазму и непрерывной работе. Нашей главной задачей является не заработок, а развитие и улучшение проекта.
                </p>
            </div>
            <div class="w-full">
                <img src="{{ Vite::asset('resources/images/model-2.png') }}" alt="" class="w-2/3 mx-auto lg:mx-0 lg:w-full">
            </div>
        </div>
        <div class="max-w-screen-xl mx-auto mt-20 mb-8 px-4 lg:px-0">
            <h1 class="font-bold text-3xl text-center">Мы хотим создать по-настоящему крутой приватный сервер по майнкрафту со своими интересными фишками и механиками, которые увлекут каждого игрока.</h1>
        </div>
        <div class="max-w-screen-xl mx-auto flex flex-col lg:flex-row gap-x-4 items-center px-4 lg:px-0">
            <div class="w-full">
                <img src="{{ Vite::asset('resources/images/pic-1.png') }}" alt="" class="rounded-xl">
            </div>
            <div class="w-full pt-4">
                <p class="font-extralight text-xl text-center lg:text-left">
                    На нашем проекте вы сможете создавать города, а также участвовать во множестве захватывающих ивентов и принимать активное участие в жизни сервера.
                </p>
            </div>
        </div>
        <div class="max-w-screen-xl mx-auto mt-20 mb-8 px-4 lg:px-0">
            <h1 class="font-bold text-3xl text-center">Хочешь попасть на сервер? Тогда скорее покупай проходку!</h1>
        </div>
        <div class="max-w-screen-xl mx-auto flex flex-col lg:flex-row gap-x-4 items-start px-4 lg:px-0">
            <div class="w-full p-8 pb-10 bg-gradient-to-r from-gr-first to-gr-second rounded-xl">
                <h1 class="text-2xl font-bold">Проходка на один сезон</h1>
                <span class="text-3xl font-bold leading-relaxed">139₽</span>
                <ul class="list-disc ml-5 mt-1 mb-6">
                    <li>Версия 1.20+</li>
                    <li>Можно зайти как с лицензии, так и с пиратки</li>
                </ul>
                <a href="https://vk.com/im?media=&sel=-219076783" class="bg-light-100 text-dark-400 border-2 border-light-100 rounded-xl px-6 py-3 font-semibold box-border hover:bg-transparent hover:text-light-100 transition-all">Купить</a>
            </div>
            <div class="w-full p-8 pb-10 bg-dark-100 rounded-xl">
                <h1 class="text-2xl font-bold">Проходка на один сезон на двоих</h1>
                <span class="text-3xl font-bold leading-relaxed">189₽</span>
                <ul class="list-disc ml-5 mt-1 mb-6">
                    <li>версия 1.20+</li>
                    <li>можно зайти как с лицензии, так и с пиратки</li>
                    <li>проходка для двоих: отличный шанс сэкономить!</li>
                </ul>
                <a href="https://vk.com/im?media=&sel=-219076783" class="bg-light-100 text-dark-400 border-2 border-light-100 rounded-xl px-6 py-3 font-semibold box-border hover:bg-transparent hover:text-light-100 transition-all">Купить</a>
            </div>
        </div>
    </main>
    <x-footer isAbsolute="0"></x-footer>
    <x-j-spaste></x-j-spaste>
</body>
</html>
