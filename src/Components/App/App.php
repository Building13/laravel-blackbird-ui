<?php

namespace Building13\Blackbird\Components\App;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class App extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title = 'Blackbird UI',
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('blackbird-ui::components.app.index');
    }
}
