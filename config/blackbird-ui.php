<?php

use Building13\Blackbird\Components;

return [

    'components' => [
        'carousel' => Components\Carousel\Carousel::class,
        'carousel.item' => Components\Carousel\Item::class,
        'contain' => Components\Layout\Contain::class,
    ],

    'prefix' => '',
];
