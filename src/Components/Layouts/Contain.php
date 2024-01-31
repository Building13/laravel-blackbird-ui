<?php

namespace Building13\Blackbird\Components\Layouts;

use Illuminate\View\Component;
use Illuminate\View\View;

class Contain extends Component
{
    public function __construct()
    {
    }

    public function render(): View
    {
        return view('blackbird-ui::components.layouts.contain');
    }
}
