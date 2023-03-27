<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная</title>
    <script>
        console.log("Воу, ты что-то нашёл! https://vine-gas-d4b.notion.site/0KHQuNGB0YLQtdC80LAg0LDQutC60LDRg9C90YLQvtCyINC90LAg0YHQsNC50YLQtQ-b1b5f0a309704107a9f436414b3d7e7b")
        console.log("“Ключ ко всему - мельчайшая, неделимая единица сего, имя ему - atom” © Блез Виженер")
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class=" dark:bg-dark-200 dark:bg-linear-main dark:bg-main-left light:bg-light-300 bg-local bg-no-repeat bg-cover mb-2 overflow-y-scroll">
    <div class="w-full h-screen bg-fulscreen text-light-100">
        <header class="sm:w-4/5 flex justify-between self-center px-2 mx-auto top-0">
            <a href="https://atomine.xyz">
                <div class="h-14 flex box-content py-2">
                    <img src="{{ Vite::asset('resources/images/atom_white.png') }}" alt="лого Атома" class="inline-block">
                    <h1 class="ml-1 align-middle text-3xl font-extrabold inline-flex items-center">Atom</h1>
                </div>
            </a>
            <nav class="hidden lg:grid grid-rows-1 grid-flow-col">
                <a href="#" class="text-xl px-3 py-2 items-center hover:bg-dark-200 transition-all rounded-[20px] max-h-96 my-auto">Главная</a>
                <a href="#" class="text-xl px-3 py-2 items-center hover:bg-dark-200 transition-all rounded-[20px] max-h-96 my-auto">Библиотека</a>
                <a href="#" class="text-xl px-3 py-2 items-center hover:bg-dark-200 transition-all rounded-[20px] max-h-96 my-auto">Ресурспак</a>
                <a href="#" class="text-xl px-3 py-2 items-center hover:bg-dark-200 transition-all rounded-[20px] max-h-96 my-auto">Карта</a>
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
                <x-buttons.primary link="https://atomine.xyz" content="Попасть на сервер"/>
            </div>
        </header>
        <div class="hidden mobile-menu absolute w-full">
            <ul class="font-sans mx-auto text-center transition-all">
                <li><a href="#" class="block text-lg px-2 py-2 text-white bg-green-500 font-semibold">Главная</a></li>
                <li><a href="#" class="block text-lg px-2 py-2 hover:bg-green-500 transition duration-300">Библиотека</a></li>
                <li><a href="#" class="block text-lg px-2 py-2 hover:bg-green-500 transition duration-300">Ресурспак</a></li>
                <li><a href="#" class="block text-lg px-2 py-2 hover:bg-green-500 transition duration-300">Карта</a></li>
            </ul>
        </div>
        <div class="text-center md:text-left md:w-4/5 flex flex-wrap mx-auto h-[91%] items-center justify-center md:justify-start">
            <div class="basis-1/2 flex flex-col">
                <h1 class="font-extrabold text-5xl md:text-6xl mb-4 leading-tight">Приватный Minecraft сервер</h1>
                <p class="font-light">Atom - это приватный сервер, с элементами RP, интересными механиками и историей, которые не дадут заскучать любому игроку.</p>
                <div class="max-w-[250px] text-center">
                    <x-buttons.primary link="https://atomine.xyz" content="Попасть на сервер"/>
                </div>
            </div>
{{--            <div class="hidden absolute right-0 xl:inline-flex rounded-l-[20px] backdrop-blur-2xl">--}}
{{--                <div class="w-[270px] h-[340px] p-6 h-full flex flex-col justify-between">--}}
{{--                    <h1 class="text-xl font-extrabold">Новости по серверу</h1>--}}
{{--                    <p class="text-sm pt-2 text-ellipsis ">--}}
{{--                        Свершилось открытие сервера Atom<br>--}}
{{--                        От всей души благодарим всех, кто был на открытии. От всей нашей команды администрации говорим огромное спасибо. Мы рады, что открытие сервера произошло гладко и практически без ошибок.--}}
{{--                        <br>--}}
{{--                        Хотим сообщить вам о последних новостях...--}}

{{--                    </p>--}}
{{--                    <div class="relative text-md pt-4">--}}
{{--                        <a href="#" class="font-semibold hover:pr-1 transition-all">читать далее</a><box-icon name='right-arrow-alt' class="align-text-top" color="#fff"></box-icon>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <img src="{{ Vite::asset('resources/images/news-pic.png') }}" alt="" class="w-[340px] h-[340px]">--}}
{{--            </div>--}}
        </div>
        <div class="flex justify-center absolute bottom-0 w-full h-12">
            <box-icon name='down-arrow-alt' color='#ffffff' class="h-12 w-12 pb-2 hover:pb-0 transition-all box-border"></box-icon>
        </div>
    </div>
    <main class="container mx-auto">
        <div class="mx-3">
            <article class="text-light-100 flex flex-nowrap flex-col lg:flex-row text-center mt-20 gap-x-12">
                <div class="flex flex-col items-center backdrop-blur-2xl rounded-[20px] px-6 py-3 bg-[#421A42] mb-6 lg:mb-0">
                    <span class="flex items-center mb-2">🔭</span>
                    <h1 class="text-3xl mb-2 font-semibold">Немного о нас</h1>
                    <p class="font-regular leading-loose">Мы - компания обычных игроков, объединенных общей идеей и желанием создать идеальный приватный сервер по майнкрафту. Atom - наша воплощенная идея в реальность, благодаря безграничному энтузиазму и непрерывной работе. Нашей главной задачей является не заработок, а развитие и улучшение проекта.</p>
                </div>
                <div class="flex flex-col items-center backdrop-blur-2xl rounded-[20px] px-6 py-3 bg-[#301446] mb-6 lg:mb-0">
                    <span class="flex items-center mb-2">🤔</span>
                    <h1 class="text-3xl mb-2 font-semibold">Почему именно мы?</h1>
                    <p class="font-regular leading-loose">Мы хотим создать по-настоящему крутой приватный сервер по майнкрафту, со своими интересными фишками и механиками, которые увлекут каждого игрока. На нашем проекте, вы сможете создавать города, а также участвовать во множестве захватывающих ивентах и принимать активное участие в политической жизни сервера.</p>
                </div>
            </article>
            <div class="flex justify-center mx-auto mt-20">
                <h1 class="text-4xl font-extrabold dark:text-light-100 light:text-dark-300">Вы хотите попасть на сервер? Тогда скорее покупайте проходку!</h1>
            </div>
            <div class="w-full lg:w-1/2 lg:mx-auto bg-linear-second rounded-[20px] mt-10">
                <div class="flex flex-row">
                    <div class="w-1/2 p-6 box-border">
                        <h1 class="dark:text-light-100 light:text-dark-300 font-extrabold text-4xl ">Стоимость проходки: <span class="text-[#AD4ACF]">139 ₽</span></h1>
                    </div>
                    <div class="w-1/2 p-6 box-border">
                        <span class="flex justify-end">🔭</span>
                    </div>
                </div>
                <div class="w-[310px] px-6 pb-3">
                    <x-buttons.primary link="https://atomine.xyz" content="Попасть на сервер"/>
                </div>
            </div>
            <div class="flex justify-center mx-auto mt-20">
                <h1 class=" text-4xl font-extrabold dark:text-light-100 light:text-dark-300">FAQ.</h1>
            </div>
            <div class="w-full lg:w-1/2 lg:mx-auto mt-4">
                <div class="dark:text-light-100 light:text-dark-300 text-3xl">
                    <div class="">
                        <details class="mb-4">
                            <summary class="font-3xl">На какой версии работает сервер?</summary>
                            <p class="text-lg mt-2">на 1.19+</p>
                        </details>
                        <hr class="mb-4">
                        <details  class="mb-4">
                            <summary class="font-3xl">Работает на пиратке?</summary>
                            <p class="text-lg mt-2">Да.</p>
                        </details>
                        <hr class="mb-4">
                        <details class="mb-4">
                            <summary class="font-3xl">Какие моды нужно установить?</summary>
                            <p class="text-lg mt-2">Обязательных - нет, но мы крайне рекомендуем вам установить <x-buttons.link-default direct="https://modrinth.com/mod/emotecraft" text="Emotecraft"></x-buttons.link-default>  и <x-buttons.link-default direct="https://modrinth.com/plugin/plasmo-voice" text="Plasmovoice"></x-buttons.link-default></p>
                        </details>
                        <hr class="mb-4">
                        <details>
                            <summary class="font-3xl">Где можно строить фермы?</summary>
                            <p class="text-lg mt-2">Их можно строить только в мире ферм</p>
                        </details>
                    </div>
                </div>

            </div>
        </div>
    </main>
    <footer class="mt-20 bg-[#282224] -mb-2">
        <div class="container py-3 mx-auto flex justify-between px-3">
            <div class="h-14 inline-flex">
                <img src="{{ Vite::asset('resources/images/atom_white.png') }}" alt="лого Атома" class=" max-h-full">
                <div class="text-xl text-light-100 mt-3">
                    <h1 class="text-3xl">Atom</h1>
                </div>
            </div>
            <div class="h-14 inline-flex gap-x-4">
                <box-icon name='discord-alt' type='logo' color='#ffffff' class="h-full w-8"></box-icon>
                <box-icon name='vk' type='logo' color='#ffffff' class="h-full w-8"></box-icon>
            </div>
        </div>
        <div class="py-3 mx-auto flex justify-center bg-[#000000]">
            <div>
                <span class="tracking-tighter font-mono text-lg text-light-100 font-medium">made with <img src="{{ Vite::asset('resources/images/flutty.png') }}" alt="флатти" class="h-8 inline-block align-sub"> by <a href="https://github.com/l4dn0" class="font-mono  transition-all text-[#504646] hover:text-[#CA009D]">L4DNO</a></span>
            </div>
        </div>

    </footer>
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
    <!--     ⣀⠤⠒⠊⠉⠉⠉⠉⠉⠉⠉⠒⠤⣀
    ⠰⠁⠢⡴⠊                　　     ⠉⠢⡀
    ⡃⡀  ⠈⢆                        ⠈⠒⢤⠤⣈⠢
    ⡇⢡    ⠸⣀⡀⠙⠯⢍⣉⡉⠉⠉⠒⢒⢖⠢⠤⣀⠑⢄⠈⠑
    ⢑  ⠢    ⠐⢬⠽⢛⠟⢯⣍⡁    ⡷⣾⡆    ⠉⠢⠆
    ⢸⠣⡀  ⠈⣛⡏  ⢿⣤⣾⣿⣷⡄  ⢇⣿⣿
    ⠈⢆⠘⡄    ⠡    ⠻⣿⣿⡿⢳  ⠈⠻⠯⡀
     ⢸  ⠘⡄    ⠈⠢⢀⣀⣀⡠⠃⢠⠧⣘⣂⠜
     ⠘⡄  ⠘⡄    ⣀⡀        ⠈⢢　 　
    ⢤⣀⡇  ⢱⡈⡆    ⠹⠉⠉⠉⠉⠉⠁
    ⣀⣸⠃  ⢸⠱⡇      ⢣                  ⡠⠤⢄♥
    ⢀⢏⢴  ⡞          ⢸⣀⣀⣀⣀⣀⣀⣀⠄⠊      ⢱
    ⠈⠁⠦⠊⢱          ⡎　 　 　 　 　 　 ⣀⠔⠁
       ⣀⠠⠊　 　 ⢀⣜⣀⣀⣀⣀⣀⣀⡀⣀⠤⠒⠉-->
</body>
</html>
