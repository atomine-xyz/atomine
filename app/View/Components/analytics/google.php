<?php

namespace App\View\Components\analytics;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class google extends Component
{

    public $gtagid;

    /**
     * Create a new component instance.
     */
    public function __construct($gtagid)
    {
        $this->gtagid = $gtagid;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.analytics.google');
    }
}
