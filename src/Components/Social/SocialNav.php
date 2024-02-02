<?php

namespace Building13\Blackbird\Components\Social;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SocialNav extends Component
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
        return view('blackbird-ui::components.social.nav');
    }
}
