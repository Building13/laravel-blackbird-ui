<?php

namespace Building13\Blackbird\Components\Layouts;

use Illuminate\View\Component;
use Illuminate\View\View;

class App extends Component
{


    public function __construct(
        public string $title = 'Blackbird UI',
    ) {
    }

    public function render(): View
    {
        return view('blackbird-ui::components.layouts.app');
    }
}
