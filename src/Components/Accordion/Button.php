<?php

namespace Building13\Blackbird\Components\Accordion;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $label = 'Accordion Button')
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('blackbird-ui::components.accordion.index');
    }
}
