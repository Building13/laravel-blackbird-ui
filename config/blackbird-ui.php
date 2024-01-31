<?php

use Building13\Blackbird\Components;

return [

    'components' => [
        'accordion' => Components\Accordion\Accordion::class,
        'accordion.group' => Components\Accordion\Group::class,
        'carousel' => Components\Carousel\Carousel::class,
        'carousel.item' => Components\Carousel\Item::class,
        'layouts.app' => Components\Layouts\App::class,
        'layouts.contain' => Components\Layouts\Contain::class,
        'layouts.prose' => Components\Layouts\Prose::class,
        'layouts.section' => Components\Layouts\Section::class,
        'maps.google-map' => Components\Maps\GoogleMap::class,
        'video.youtube' => Components\Video\YouTube::class,
        'video.vimeo' => Components\Video\Vimeo::class,
    ],

    'anonymous-components' => [
        'dl' => 'blackbird-ui::components.dl.dl',
        'dt' => 'blackbird-ui::components.dl.dt',
        'dd' => 'blackbird-ui::components.dl.dd',
    ],

    'prefix' => '',
];
