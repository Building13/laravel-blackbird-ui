<?php

use Building13\Blackbird\Components;

return [

    'components' => [
        'carousel' => Components\Carousel\Carousel::class,
        'carousel.item' => Components\Carousel\Item::class,
        'layouts.app' => Components\Layouts\App::class,
        'layouts.contain' => Components\Layouts\Contain::class,
        'video.youtube' => Components\Video\YouTube::class,
    ],

    'prefix' => '',
];
