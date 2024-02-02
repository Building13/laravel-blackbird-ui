<?php

namespace Building13\Blackbird\Components\Video;

use Illuminate\View\Component;
use Illuminate\View\View;

class YouTube extends Component
{
    public $source;

    public function __construct($source)
    {
        $this->source = $source;
    }

    public function render(): View
    {
        return view('blackbird-ui::components.video.youtube');
    }
}
