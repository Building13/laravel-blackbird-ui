<?php

namespace Building13\Blackbird\Components\Video;

use Illuminate\View\Component;
use Illuminate\View\View;

class Vimeo extends Component
{
    public function __construct(public string $source)
    {
    }

    public function render(): View
    {
        return view('blackbird-ui::components.video.vimeo');
    }
}
