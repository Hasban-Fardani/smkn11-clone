<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PostCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title,
        public string $url,
        public string $description,
        public string $image,
        public string $category
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.post-card',
            [
                'title' => $this->title,
                'url' => $this->url,
                'description' => $this->description,
                'image' => $this->image,
                'category' => $this->category
            ]
        );
    }
}
