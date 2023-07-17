<header class="h-14 w-full bg-dark-100 absolute z-20">
    <nav class="container mx-auto flex flex-row align-middle px-3 justify-between">
        <div class="basis-1/5 flex-none h-14 flex items-center text-left">
            <svg
                class="h-8"
                id="_Слой_1"
                data-name="Слой 1"
                viewBox="0 0 229.65 61.51"
                version="1.1"
                sodipodi:docname="Text Document.svg"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:svg="http://www.w3.org/2000/svg">
                <defs
                    id="defs2518">
                    <style
                        id="style2516">
                        .cls-1 {
                            fill: #fff;
                        }
                    </style>
                </defs>
                <path
                    class="cls-1"
                    d="M 38.7,1.18 H 21.47 l -6.9,20.29 12.54,4.52 2.98,-9.35 6.92,21.72 H 23.15 L 10.29,34.01 1.34,60.33 h 14.79 l 2.96,-9.3 h 21.97 l 2.96,9.3 h 14.79 z"
                    id="path2520" />
                <path
                    class="cls-1"
                    d="M 55.43,1.18 V 14.2 H 70.64 V 60.33 H 84.16 V 14.2 H 99.37 V 1.18 Z"
                    id="path2522" />
                <path
                    class="cls-1"
                    d="M 151.94,8.87 C 145.97,2.96 138.69,0 130.14,0 c -8.55,0 -15.83,2.96 -21.8,8.87 -5.97,5.92 -8.96,13.21 -8.96,21.88 0,8.67 2.99,15.97 8.96,21.89 5.97,5.91 13.24,8.87 21.8,8.87 8.56,0 15.83,-2.96 21.8,-8.87 5.97,-5.92 8.96,-13.21 8.96,-21.89 0,-8.68 -2.99,-15.96 -8.96,-21.88 z m -9.55,34.56 c -3.27,3.27 -7.35,4.9 -12.25,4.9 -4.9,0 -9.07,-1.63 -12.34,-4.9 -3.27,-3.27 -4.9,-7.49 -4.9,-12.68 0,-5.19 1.63,-9.4 4.9,-12.67 3.27,-3.27 7.38,-4.9 12.34,-4.9 4.96,0 8.98,1.63 12.25,4.9 3.32,3.32 4.99,7.55 4.99,12.67 0,5.12 -1.67,9.36 -4.99,12.68 z"
                    id="path2524" />
                <path
                    class="cls-1"
                    d="M 214.13,1.18 198.07,27.46 182.02,1.18 H 168.5 v 59.15 h 13.52 V 25.94 l 15.3,25.1 h 1.52 l 15.3,-25.1 v 34.39 h 13.52 V 1.18 h -13.52 z"
                    id="path2526" />
            </svg>
        </div>
        <div class="basis-3/5 hidden lg:inline-flex items-center justify-center">
            @foreach($links as $name => $link)
                @if(Str::startsWith($link, "#"))
                    <a href="{{ url('/') }}/{{ substr($link, 2) }}" class="px-2 font-sans font-medium text-xl leading-7 hover:text-primary">{{ $name }}</a>
                    @continue
                @endif
                <a href="{{ $link }}" class="px-2 font-sans font-medium text-xl leading-7 hover:text-primary transition-all">{{ $name }}</a>
            @endforeach
        </div>
        <div class="inline-flex lg:hidden items-center justify-end">
            <button class="mobile-menu-button outline-none transition duration-300 ease-in-crop">
                <svg class="w-10 h-10 text-light-100" x-show="!showMenu" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
        <div class="basis-1/5 flex-none hidden lg:inline-flex items-center justify-end font-serif font-xl">
            {{--<img src="https://visage.surgeplay.com/face/cc15e306b74d4255a7bae99dc96da244" alt="голова игрока L4DNO" class="w-8 h-auto">--}}
            <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Войти</a>
        </div>
    </nav>
</header>
<div class="mobile-menu h-full absolute inset-y-0 m-0 transition duration-300 ease-in-crop top-0 w-full -left-[100%] bg-dark-300 z-10">
    <ul class="font-sans text-center transition-all w-full bg-dark-400 h-full pt-20">
        @foreach($links as $name => $link)
            @if(Str::startsWith($link, "#"))
                <li><a href="{{ url('/') }}/{{ substr($link, 2) }}" class="block text-xl px-2 py-4 duration-300 font-semibold transition-all hover:text-primary active:text-primary">{{ $name }}</a></li>
                @continue
            @endif
                <li><a href="{{ $link }}" class="block text-xl px-2 py-4 duration-300 font-semibold transition-all hover:text-primary active:text-primary">{{ $name }}</a></li>
        @endforeach

    </ul>
</div>
