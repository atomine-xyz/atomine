<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class footer extends Component
{
    public $isFixed;

    /**
     * Create a new component instance.
     */
    public function __construct($isFixed = false)
    {
        $this->isFixed = booleanValue($isFixed);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.footer');
    }
}
