<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ошибка 404</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="dark:bg-dark-200 dark:bg-linear-main dark:bg-main-left light:bg-light-300 bg-local bg-no-repeat bg-cover mb-2 overflow-y-scroll">
    <div class="w-full h-screen">
        <header class="dark:text-light-100 sm:w-4/5 flex justify-between self-center px-2 mx-auto top-0 h-[10vh]">
            <a href="https://atomine.xyz">
                <div class="h-14 flex box-content py-5">
                    <img src="{{ Vite::asset('resources/images/atom_white.png') }}" alt="лого Атома" class="inline-block">
                    <h1 class="ml-1 align-middle text-3xl font-extrabold inline-flex items-center">Atom</h1>
                </div>
            </a>
            <nav class="hidden lg:grid grid-rows-1 grid-flow-col">
                <a href="https://atomine.xyz" class="text-xl px-3 py-2 items-center hover:bg-dark-200 transition-all rounded-[20px] max-h-96 my-auto">Главная</a>
                <a href="https://atom-1.gitbook.io/osnovnoe/" class="text-xl px-3 py-2 items-center hover:bg-dark-200 transition-all rounded-[20px] max-h-96 my-auto">Вики</a>
                <a href="https://vk.cc/cmhWS5" class="text-xl px-3 py-2 items-center hover:bg-dark-200 transition-all rounded-[20px] max-h-96 my-auto">Ресурспак</a>
                <a href="https://atomine.xyz:8123" class="text-xl px-3 py-2 items-center hover:bg-dark-200 transition-all rounded-[20px] max-h-96 my-auto">Карта (surv)</a>
                <a href="https://atomine.xyz:9123" class="text-xl px-3 py-2 items-center hover:bg-dark-200 transition-all rounded-[20px] max-h-96 my-auto">Карта (farm)</a>
            </nav>
            <div class="block lg:hidden">
                <button class="mobile-menu-button outline-none my-3">
                    <svg
                        class="w-10 h-10 text-gray-500"
                        x-show="!showMenu"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            <div class="hidden lg:block">
                <x-buttons.primary link="https://vk.com/atomine" content="Попасть на сервер"/>
            </div>
        </header>
        <div class="hidden mobile-menu absolute w-full dark:text-light-100">
            <ul class="font-sans mx-auto text-center transition-all">
                <li><a href="https://atomine.xyz" class="block text-lg px-2 py-2 text-white bg-green-500 font-semibold">Главная</a></li>
                <li><a href="https://atom-1.gitbook.io/osnovnoe/" class="block text-lg px-2 py-2 hover:bg-green-500 transition duration-300">Вики</a></li>
                <li><a href="https://vk.cc/cmhWS5" class="block text-lg px-2 py-2 hover:bg-green-500 transition duration-300">Ресурспак</a></li>
                <li><a href="https://atomine.xyz:8123" class="block text-lg px-2 py-2 hover:bg-green-500 transition duration-300">Карта (surv)</a></li>
                <li><a href="https://atomine.xyz:9123" class="block text-lg px-2 py-2 hover:bg-green-500 transition duration-300">Карта (farm)</a></li>
            </ul>
        </div>
        <main class="w-full h-full h-[90vh] flex items-center justify-center">
            <div class="h-1/2 w-1/2">
                <h1 class="dark:text-light-100 text-3xl font-semibold text-center">Ничего не найдено!</h1>
                <p class="dark:text-light-100 mt-4 font-medium text-center text-md">Возможно, контент был удалён или перемещён</p>
                <span class="flex text-center mx-auto justify-center h-8 w-8 mt-4">🤔</span>
            </div>
        </main>
    </div>
    <x-scripts.twemoji></x-scripts.twemoji>
    <script>
        // Grab HTML Elements
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");

        // Add Event Listeners
        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    </script>
</body>
</html>
