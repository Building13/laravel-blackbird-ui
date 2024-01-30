<?php

namespace Building13\Blackbird\Components\Carousel;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Carousel extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('blackbird-ui::components.carousel.index');
    }
}
