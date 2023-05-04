<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Динамическая карта | Atom</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link type="Image/x-icon" href="/favicon.ico" rel="icon">
    <x-analytics.google gtagid="G-V34X00ZLQ9"></x-analytics.google>
    <x-analytics.yandex></x-analytics.yandex>
</head>
<body class="bg-dark-100 bg-local bg-no-repeat bg-cover overflow-y-scroll text-light-100">
<div class="w-full h-screen">
    <header class="w-full relative top-0 z-20">
        <div class="max-w-[1520px] w-5/6 px-3 mx-auto flex justify-between py-1">
            <div class="inline-flex items-center my-auto">
                <img src="{{ Vite::asset('resources/images/atom_white.png') }}" alt="" class="h-[60px]">
                <h1 class="text-3xl">Atom</h1>
            </div>
            <nav class="my-auto hidden lg:block">
                <a href="https://atomine.xyz" class="text-2xl px-4 py-2 mx-1 rounded-xl transition-all transition-in-crop hover:text-primary active:text-primary hover:bg-dark-200">Главная</a>
                <a href="https://atom-1.gitbook.io/osnovnoe/" class="text-2xl px-4 py-2 mx-1 rounded-xl transition-all transition-in-crop hover:text-primary active:text-primary hover:bg-dark-200">Вики</a>
                <a href="https://vk.cc/cmhWS5" class="text-2xl px-4 py-2 mx-1 rounded-xl transition-all transition-in-crop hover:text-primary active:text-primary hover:bg-dark-200">Ресурспак</a>
                <a href="https://atomine.xyz/maps" class="text-light-400 text-2xl px-4 py-2 mx-1 rounded-xl transition-all transition-in-crop hover:bg-dark-200">Карта</a>
                <a href="https://drive.google.com/file/d/1V5-lzDWpgXesEXQvkbXK-8Xi50fTi4lK/view?usp=sharing" class="text-light-400 text-2xl px-4 py-2 mx-1 rounded-xl transition-all transition-in-crop hover:bg-dark-200">Лаунчер</a>
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
    <main class="w-full flex items-center justify-center calca">
        <iframe src="https://maps.atomine.xyz" frameborder="0" class="w-full h-full"></iframe>
    </main>
    <footer class="bg-dark-300 relative bottom-0 w-full">
        <div class="py-2 mx-auto flex justify-center bg-[#000000]">
            <div>
                <span class="tracking-tighter font-mono text-lg font-medium">made with <img src="{{ Vite::asset('resources/images/flutty.png') }}" alt="флатти" class="h-8 inline-block align-sub"> by <a href="https://github.com/l4dn0" class="font-mono  transition-all text-[#504646] hover:text-[#CA009D]">L4DNO</a></span>
            </div>
        </div>
    </footer>
</div>
<div class="mobile-menu h-full fixed inset-y-0 m-0 transition duration-300 ease-in-crop top-0 w-full -left-[100%] bg-dark-300 z-10">
    <ul class="font-sans text-center transition-all w-full bg-dark-400 h-full pt-20">
        <li><a href="https://atomine.xyz" class="block text-xl px-2 py-4 text-white duration-300 font-semibold transition-all hover:text-primary active:text-primary">Главная</a></li>
        <li><a href="https://atom-1.gitbook.io/osnovnoe/" class="block text-xl px-2 py-4 duration-300 font-semibold transition-all hover:text-primary active:text-primary">Вики</a></li>
        <li><a href="https://vk.cc/cmhWS5" class="block text-xl px-2 py-4 duration-300 font-semibold transition-all hover:text-primary active:text-primary">Ресурспак</a></li>
        <li><a href="https://atomine.xyz/maps" class="text-light-400 block text-xl px-2 py-4 duration-300 font-semibold transition-all active:text-primary">Карта</a></li>
        <li><a href="https://drive.google.com/file/d/1V5-lzDWpgXesEXQvkbXK-8Xi50fTi4lK/view?usp=sharing" class="block text-xl px-2 py-4 duration-300 font-semibold transition-all hover:text-primary active:text-primary">Лаунчер</a></li>
    </ul>
</div>
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
