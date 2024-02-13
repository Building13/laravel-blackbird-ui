<?php

namespace Building13\Blackbird\Components\Surface;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Surface extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $colorLevel = 'level-0',
        public string $borderLevel = 'level-0',
        public string $elevationLevel = 'level-0',
        public string $translucenceLevel = 'level-0',
        public string $classes = '',
    ) {
        $this->colorLevel = (int) str_replace('level-', '', $colorLevel);
        $this->borderLevel = (int) str_replace('level-', '', $borderLevel);
        $this->elevationLevel = (int) str_replace('level-', '', $elevationLevel);

        $defaultClasses = '';
        $colorClasses = ['', 'bg-level-1', 'bg-level-2', 'bg-level-3', 'bg-level-4'];
        $borderClasses = ['', 'border border-level-1', 'border border-level-2', 'border border-level-3', 'border border-level-4'];
        $shadowClasses = ['', 'shadow-1', 'shadow-2', 'shadow-3', 'shadow-4'];

        $colorClass = $colorClasses[$this->colorLevel] ?? '';
        $borderClass = $borderClasses[$this->borderLevel] ?? '';
        $elevationClass = $shadowClasses[$this->elevationLevel] ?? '';

        $this->classes = trim($defaultClasses . ' ' . implode(' ', array_filter([$colorClass, $borderClass, $elevationClass])));
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('blackbird-ui::components.surface.index');
    }
}
