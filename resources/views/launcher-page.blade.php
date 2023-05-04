<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Лаунчер | Atom</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link type="Image/x-icon" href="/favicon.ico" rel="icon">
    <x-analytics.google gtagid="G-V34X00ZLQ9"></x-analytics.google>
    <x-analytics.yandex></x-analytics.yandex>
</head>
<body class="bg-dark-100 bg-local bg-no-repeat bg-cover overflow-y-scroll text-light-100 h-screen">
        <header class="w-full h-[80px] absolute top-0 z-20">
            <div class="max-w-[1520px] w-5/6 px-3 mx-auto flex justify-between py-2">
                <div class="inline-flex items-center my-auto">
                    <img src="{{ Vite::asset('resources/images/atom_white.png') }}" alt="" class="h-[60px]">
                    <h1 class="text-3xl">Atom</h1>
                </div>
                <nav class="my-auto hidden lg:block">
                    <a href="https://atomine.xyz" class="text-2xl px-4 py-2 mx-1 rounded-xl transition-all transition-in-crop hover:text-primary active:text-primary hover:bg-dark-200">Главная</a>
                    <a href="https://atom-1.gitbook.io/osnovnoe/" class="text-2xl px-4 py-2 mx-1 rounded-xl transition-all transition-in-crop hover:text-primary active:text-primary hover:bg-dark-200">Вики</a>
                    <a href="https://vk.cc/cmhWS5" class="text-2xl px-4 py-2 mx-1 rounded-xl transition-all transition-in-crop hover:text-primary active:text-primary hover:bg-dark-200">Ресурспак</a>
                    <a href="https://atomine.xyz/maps" class="text-2xl px-4 py-2 mx-1 rounded-xl transition-all transition-in-crop hover:text-primary active:text-primary hover:bg-dark-200">Карта</a>
                    <a href="https://atomine.xyz/launcher" class="text-light-400 text-2xl px-4 py-2 mx-1 rounded-xl transition-all transition-in-crop active:text-primary hover:bg-dark-200">Лаунчер</a>
                </nav>
                <div class="my-auto hidden lg:block">
                    <a href="#"><x-buttons.primary link="https://atomine.xyz/auth" content="Войти"></x-buttons.primary></a>
                </div>
                <div class="block lg:hidden">
                    <button class="mobile-menu-button outline-none my-5 transition duration-300 ease-in-crop">
                        <svg class="w-10 h-10 text-light-100" x-show="!showMenu" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </header>
        <div class="mobile-menu h-full absolute inset-y-0 m-0 transition duration-300 ease-in-crop top-0 w-full -left-[100%] bg-dark-300 z-10">
            <ul class="font-sans text-center transition-all w-full bg-dark-400 h-full pt-20">
                <li><a href="https://atomine.xyz" class="block text-xl px-2 py-4 text-white duration-300 font-semibold transition-all hover:text-primary active:text-primary">Главная</a></li>
                <li><a href="https://atom-1.gitbook.io/osnovnoe/" class="block text-xl px-2 py-4 duration-300 font-semibold transition-all hover:text-primary active:text-primary">Вики</a></li>
                <li><a href="https://vk.cc/cmhWS5" class="block text-xl px-2 py-4 duration-300 font-semibold transition-all hover:text-primary active:text-primary">Ресурспак</a></li>
                <li><a href="https://maps.atomine.xyz" class="block text-xl px-2 py-4 duration-300 font-semibold transition-all hover:text-primary active:text-primary">Карта</a></li>
                <li><a href="https://atomine.xyz/launcher" class="text-light-400 block text-xl px-2 py-4 duration-300 font-semibold transition-all active:text-primary">Лаунчер (для ПК)</a></li>
            </ul>
        </div>
        <main class="w-full h-full flex items-center justify-center">
            <div class="h-1/2 w-4/5 lg:w-1/2">
                <h1 class="text-light-100 text-3xl font-semibold text-center">Наш лаунчер можно скачать по кнопке ниже:</h1>
                <div class="text-center flex items-center justify-center mt-10">
                    <x-buttons.primary link="http://atomine.xyz/launcher/get" content="скачать лаунчер"></x-buttons.primary>
                </div>
            </div>
        </main>
    <footer class="bg-dark-300 absolute bottom-0 w-full">
        <div class="w-full lg:w-5/6 py-3 mx-auto flex justify-between px-6">
            <div class="h-14 inline-flex">
                <img src="{{ Vite::asset('resources/images/atom_white.png') }}" alt="лого Атома" class=" max-h-full">
                <div class="text-xl mt-3">
                    <h1 class="text-3xl">Atom</h1>
                </div>
            </div>
            <div class="h-14 inline-flex gap-x-4">
                <a href="https://vk.com/atomine">
                    <box-icon name='vk' type='logo' color='#ffffff' class="h-full w-8"></box-icon>
                </a>
                <a href="http://github.com/l4dn0/atomine">
                    <box-icon name='github' type='logo' color='#ffffff' class="h-full w-8"></box-icon>
                </a>
            </div>
        </div>
        <div class="py-3 mx-auto flex justify-center bg-[#000000]">
            <div>
                <span class="tracking-tighter font-mono text-lg font-medium">made with <img src="{{ Vite::asset('resources/images/flutty.png') }}" alt="флатти" class="h-8 inline-block align-sub"> by <a href="https://github.com/l4dn0" class="font-mono  transition-all text-[#504646] hover:text-[#CA009D]">L4DNO</a></span>
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
            menu.classList.toggle("vis");
            btn.classList.toggle("rotated");
        });
    </script>
</body>
</html>
