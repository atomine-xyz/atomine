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
        <div class="w-full bg-dark-400 mb-10">
            <div class="container flex flex-row mx-auto lg:bg-model-1 bg-cover bg-no-repeat bg-right">
                <div class="w-full lg:w-1/2 text-center lg:text-left flex">
                    <div class="w-full mt-20 mb-20">
                        <h1 class="text-5xl leading-snug font-extrabold px-4 lg:px-0">Приватный Minecraft сервер</h1>
                        <p class="font-regular mt-4 mb-8 lg:mb-16 text-[#717D75] text-xl">С уникальными фишками и комьюнити</p>
                        <a href="#" class="bg-transparent border-2 border-light-100 rounded-xl px-6 py-3 hover:bg-light-100 hover:text-dark-400 transition-all active:text-light-100 active:bg-primary active:border-primary">Купить проходку</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-screen-xl mx-auto flex flex-col lg:flex-row gap-x-4 items-end px-4 lg:px-0">
            <div class="w-full pb-4 lg:pb-0">
                <p class="font-extralight text-center lg:text-right text-xl">
                    Мы - компания обычных игроков, объединенных общей идеей и желанием создать идеальный приватный сервер по майнкрафту. Atom - наша воплощенная идея в реальность, благодаря безграничному энтузиазму и непрерывной работе. Нашей главной задачей является не заработок, а развитие и улучшение проекта.
                </p>
            </div>
            <div class="w-full">
                <img src="https://e.radikal.host/2023/07/18/P41AF.png" alt="" class="w-2/3 mx-auto lg:mx-0 lg:w-full">
            </div>
        </div>
        <div class="max-w-screen-xl mx-auto mt-20 mb-8 px-4 lg:px-0">
            <h1 class="font-bold text-3xl text-center">Мы хотим создать по-настоящему крутой приватный сервер по майнкрафту со своими интересными фишками и механиками, которые увлекут каждого игрока.</h1>
        </div>
        <div class="max-w-screen-xl mx-auto flex flex-col lg:flex-row gap-x-4 items-center px-4 lg:px-0">
            <div class="w-full">
                <img src="{{ Vite::asset('resources/images/pic.png') }}" alt="" class="rounded-xl">
            </div>
            <div class="w-full">
                <p class="font-extralight text-xl text-center lg:text-left">
                    На нашем проекте вы сможете создавать города, а также участвовать во множестве захватывающих ивентов и принимать активное участие в жизни сервера.
                </p>
            </div>
        </div>
        <div class="max-w-screen-xl mx-auto mt-20 mb-8 px-4 lg:px-0">
            <h1 class="font-bold text-3xl text-center">Хочешь попасть на сервер? Тогда скорее покупай проходку!</h1>
        </div>
        <div class="max-w-screen-xl mx-auto px-4 grid grid-cols-1 grid-rows-2 lg:grid-cols-2 lg:grid-rows-1 gap-4">
            <div class="p-6 pb-7 bg-gradient-to-r from-gr-first to-gr-second rounded-xl flex flex-col place-content-between">
                <div>
                    <h1 class="text-2xl font-bold">Проходка на один сезон</h1>
                    <span class="text-3xl font-bold leading-relaxed">119₽</span>
                    <ul class="list-disc ml-5 mt-1 mb-6">
                        <li>Версия 1.20+</li>
                        <li>Можно зайти как с лицензии, так и с пиратки</li>
                    </ul>
                </div>
                <a href="{{ route('buying') }}" class="text-center w-1/3 md:w-1/4 inline-block bg-light-100 text-dark-400 border-2 border-light-100 rounded-xl lg:px-6 py-3 font-semibold box-border hover:bg-transparent hover:text-light-100 transition-all">Купить</a>

            </div>
            <div class="p-6 pb-7 bg-dark-100 rounded-xl flex flex-col place-content-between">
                <div>
                    <h1 class="text-2xl font-bold">Подписка "Neon"</h1>
                    <span class="text-3xl font-bold leading-relaxed">189₽ / мес</span>
                    <div class="mt-1 mb-6">
                        <p>Спонсорская подписка на сервер, которую вы можете купить, если хотите поддержать наш проект</p>
                    </div>
                </div>
                <a href="https://vk.com/im?media=&sel=-219076783" class="text-center w-1/3 md:w-1/4 bg-light-100 text-dark-400 border-2 border-light-100 rounded-xl lg:px-6 py-3 font-semibold box-border hover:bg-transparent hover:text-light-100 transition-all">Купить</a>

            </div>
        </div>
    </main>
    <x-footer isFixed="0"></x-footer>
    <x-j-spaste></x-j-spaste>
</body>
</html>
