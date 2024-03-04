<?php

namespace Building13\Blackbird\Components\Card;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{

    public string $paddingClass;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public int $size = 2,
        public string $inset = '',
        public string $defaultClasses = 'rounded overflow-hidden',
    ) {

        $paddingMap = [
            0 => 'p-0',
            1 => 'p-2',
            2 => 'p-4',
            3 => 'p-8',
            4 => 'p-16',
        ];
        $this->paddingClass = $paddingMap[$this->size] ?? 'p-0';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('blackbird-ui::components.card.index');
    }
}
