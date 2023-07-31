<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Arr;

class Navbar extends Component
{
    public array $links;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->links = ['Вики' => "#:wiki", 'Карта' => "https://maps.atomine.xyz", '_Ресурспак' => "https://vk.cc/cmhWS5", '_Discord' => "#:discord"];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar');
    }
}
