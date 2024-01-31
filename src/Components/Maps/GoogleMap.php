<?php

namespace  Building13\Blackbird\Components\Maps;

use Illuminate\View\Component;
use Illuminate\View\View;

class GoogleMap extends Component
{

    public function __construct(

        public string $width = '100%',
        public string $height = '400px',
        public string $zoom = '8',
        // public string $latitude = '51.5074',
        // public string $longitude = '0.1278',
        public string $address = 'London, UK',
        public string $type = 'roadmap',

        // Embed API Required
        // public string $marker = 'true',
        // public string $infoWindow = 'true',
        // public string $scrollWheel = 'false',
        // public string $draggable = 'true',
        // public string $panControl = 'true',
        // public string $zoomControl = 'true',
        // public string $mapTypeControl = 'true',
        // public string $scaleControl = 'true',
        // public string $streetViewControl = 'true',
        // public string $overviewMapControl = 'true',
        // public string $fullscreenControl = 'true',
        // public string $styles = '',

        public string $apikey = 'AIzaSyD9bTtD-KJl6w9vHxJ0IqcqNI3WI7YU8Vg',
    ) {
    }

    public function render(): View
    {
        return view('blackbird-ui::components.maps.google-map');
    }
}
