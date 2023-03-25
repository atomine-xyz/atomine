<?php

namespace App\View\Components\Buttons;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LinkDefault extends Component
{
    public $direct;
    public $text;

    /**
     * Create a new component instance.
     */
    public function __construct($direct, $text)
    {
        $this->direct = $direct;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.buttons.link-default');
    }
}
