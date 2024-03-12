<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SectionFluid extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $color = 'bg-blue-600',
    ){}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.section-fluid',
            [
                'color' => $this->color
            ]
        );
    }
}
