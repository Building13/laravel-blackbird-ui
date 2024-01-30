<?php

namespace Building13\Blackbird\Components\Layout;

use Illuminate\View\Component;
use Illuminate\View\View;

class Contain extends Component
{
    public $title;

    public function __construct()
    {
    }

    public function render(): View
    {
        return view('blackbird-ui::components.layout.contain');
    }
}
