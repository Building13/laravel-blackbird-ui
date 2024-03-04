<?php

namespace Building13\Blackbird\Components\Sections;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Hero extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(

        public string $title = 'SR-71 Blackbird',
        public string $body = 'The SR-71 Blackbird was developed by Lockheed Martin\'s Skunk Works division in the 1960s as a long-range, high-altitude, Mach 3+ strategic reconnaissance aircraft.',
        public string $image = 'https://via.placeholder.com/800x400',
        public string $imageAlt = 'Placeholder Image',
        public string $link = 'http://example.com',
        public string $linkText = 'Read More',
        public string $position = 'left',
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('blackbird-ui::components.sections.hero');
    }
}
