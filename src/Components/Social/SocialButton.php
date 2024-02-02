<?php

namespace Building13\Blackbird\Components\Social;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SocialButton extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title = '',
        public string $href = ''
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('blackbird-ui::components.social.button');
    }
}
