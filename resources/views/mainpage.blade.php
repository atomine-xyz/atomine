<!doctype html>
<html lang="ru" class="scroll-smooth">
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
    <link type="Image/x-icon" href="/favicon.ico" rel="icon">
</head>

<body class="bg-dark-100 bg-local bg-no-repeat bg-cover overflow-y-scroll text-light-100">
    <div class="w-full h-[830px] bg-fs">
        <header class="w-full h-[80px] absolute top-0 z-20">
            <div class="max-w-[1520px] w-5/6 px-3 mx-auto flex justify-between py-2">
                <div class="inline-flex items-center my-auto">
                    <img src="{{ Vite::asset('resources/images/atom_white.png') }}" alt="" class="h-[60px]">
                    <h1 class="text-3xl">Atom</h1>
                </div>
                <nav class="my-auto hidden lg:block">
                    <a href="https://atomine.xyz" class="text-2xl px-4 py-2 mx-1 rounded-xl transition-all transition-in-crop hover:text-primary active:text-primary hover:bg-dark-200">главная</a>
                    <a href="https://atom-1.gitbook.io/osnovnoe/" class="text-2xl px-4 py-2 mx-1 rounded-xl transition-all transition-in-crop hover:text-primary active:text-primary hover:bg-dark-200">вики</a>
                    <a href="https://vk.cc/cmhWS5" class="text-2xl px-4 py-2 mx-1 rounded-xl transition-all transition-in-crop hover:text-primary active:text-primary hover:bg-dark-200">ресурспак</a>
                    <a href="https://maps.atomine.xyz" class="text-2xl px-4 py-2 mx-1 rounded-xl transition-all transition-in-crop hover:text-primary active:text-primary hover:bg-dark-200">карта</a>
                </nav>
                <div class="my-auto hidden lg:block">
                    <a href="#"><x-buttons.primary link="https://localhost" content="попасть на сервер"></x-buttons.primary></a>
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
        <div class="mobile-menu h-full fixed inset-y-0 m-0 transition duration-300 ease-in-crop top-0 w-full z-20 -left-[100%] bg-dark-300 z-10">
            <ul class="font-sans text-center transition-all w-full bg-dark-400 h-full pt-20">
                <li><a href="https://atomine.xyz" class="block text-xl px-2 py-4 text-white duration-300 font-semibold transition-all hover:text-primary active:text-primary">Главная</a></li>
                <li><a href="https://atom-1.gitbook.io/osnovnoe/" class="block text-xl px-2 py-4 duration-300 font-semibold transition-all hover:text-primary active:text-primary">Вики</a></li>
                <li><a href="https://vk.cc/cmhWS5" class="block text-xl px-2 py-4 duration-300 font-semibold transition-all hover:text-primary active:text-primary">Ресурспак</a></li>
                <li><a href="https://maps.atomine.xyz" class="block text-xl px-2 py-4 duration-300 font-semibold transition-all hover:text-primary active:text-primary">Карта</a></li>
            </ul>
        </div>
        <div class="w-full h-[750px] max-h-4/5">
            <div class="max-w-[1520px] w-5/6 px-3 mx-auto flex flex-row h-full items-center">
                <div class="w-full lg:w-0 lg:basis-2/5 text-center lg:text-left flex flex-col items-center lg:block">
                    <h1 class="text-5xl mb-6 font-bold">Atom - приватный Minecraft сервер</h1>
                    <p class="text-lg">Atom - это приватный сервер, с элементами RP, интересными механиками и историей, которые не дадут заскучать любому игроку.</p>
                    <x-buttons.primary link="https://localhost" content="попасть на сервер"></x-buttons.primary>
                </div>
                <div class="lg:basis-3/5"></div>
            </div>
        </div>
    </div>
    <main class="w-full px-3 lg:w-5/6 flex flex-col lg:flex-row flex-wrap mx-auto mt-20 box-border">
        <div class="w-full lg:w-1/2">
            <div class="mx-4 bg-primary mb-10 px-5 py-3 rounded-3xl">
                <h1 class="text-3xl font-semibold"><span class="inline-block w-8 pr-1 align-sub">💫</span>Немного о нас</h1>
                <p class="pt-2 text-md">Мы - компания обычных игроков, объединенных общей идеей и желанием создать идеальный приватный сервер по майнкрафту. Atom - наша воплощенная идея в реальность, благодаря безграничному энтузиазму и непрерывной работе. Нашей главной задачей является не заработок, а развитие и улучшение проекта.</p>
            </div>
        </div>
        <div class="w-full lg:w-1/2">
            <div class="mx-4 bg-dark-300 mb-10 px-5 py-3 rounded-3xl">
                <h1 class="text-3xl font-semibold"><span class="inline-block w-10 pr-1 align-sub">🤔</span>Почему именно мы?</h1>
                <p class="pt-2 text-md">Мы хотим создать по-настоящему крутой приватный сервер по майнкрафту со своими интересными фишками и механиками, которые увлекут каждого игрока. На нашем проекте вы сможете создавать города, а также участвовать во множестве захватывающих ивентов и принимать активное участие в политической жизни сервера.</p>
            </div>
        </div>
        <div class="w-full lg:w-1/2">
            <div class="mx-4 mb-10 px-3">
                <h1 class="text-3xl font-semibold">Хочешь попасть на сервер?</h1>
                <h2 class="text-2xl font-medium">Тогда скорее покупай проходку!</h2>
            </div>
        </div>
        <div class="w-full lg:w-1/2">
            <div class="mx-4 bg-primary mb-10 px-5 py-5 rounded-3xl h-64 bg-erik bg-no-repeat bg-erikpos bg-contain flex flex-col justify-between">
                <div>
                    <h1 class="text-3xl font-semibold">Пропуск на сервер</h1>
                    <h2 class="text-2xl font-medium">Начни играть уже сейчас!</h2>
                </div>
                <div class="flex flex-row items-center">
                    <button class="text-primary bg-light-100 rounded-xl py-3 relative bottom-0 left-0 w-28">Купить</button>
                    <div class="px-2 font-medium">
                        <p>Стоимость</p>
                        <p class="font-bold">139₽</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <h1 class="text-center text-3xl font-extrabold mb-6">Часто задаваемые вопросы</h1>
    <div class="w-full lg:w-5/6 mx-auto px-3 flex flex-col lg:flex-row gap-10 mb-28 text-center lg:text-left">
        <div class="basis-1/2 lg:basis-1/4 bg-dark-300 rounded-2xl py-8 lg:py-3 px-4">
            <h2 class="text-2xl font-semibold">Какая версия?</h2>
            <p class="text-md">Вы можете зайти на наш сервер с версии <span class="text-primary">1.19</span> и выше</p>
        </div>
        <div class="lg:basis-1/4 bg-dark-300 rounded-2xl py-8 lg:py-3 px-4">
            <h2 class="text-2xl font-semibold">Нужна лицензия?</h2>
            <p class="text-md">Нет! Вы можете играть и с пиратки</p>
        </div>
        <div class="lg:basis-1/4 bg-dark-300 rounded-2xl py-8 lg:py-3 px-4">
            <h2 class="text-2xl font-semibold">А моды нужны?</h2>
            <p class="text-md">Желательно установить <span class="text-primary">emotecraft</span> и <span class="text-primary">plasmovoice</span></p>
        </div>
        <div class="lg:basis-1/4 bg-dark-300 rounded-2xl py-8 lg:py-3 px-4">
            <h2 class="text-2xl font-semibold">Где можно строить фермы?</h2>
            <p class="text-md">Вы можете строить их только в <span class="text-primary">мире ферм</span>!</p>
        </div>
    </div>
    <footer class="bg-dark-300">
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
