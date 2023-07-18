<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    public array $links;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {

        $this->links = ['Главная' => "#:", 'Вики' => "https://atom-1.gitbook.io/osnovnoe/", 'Карта' => "https://map.atomine.xyz", 'Ресурспак' => "https://vk.cc/cmhWS5", 'Discord' => "https://discord.gg/yvhzsk7ZJa"];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar');
    }
}