{{-- <iframe
    width="{{ $width }}"
    height="{{ $height }}"
    frameborder="0" style="border:0"
    src="https://www.google.com/maps?q={{ urlencode($address) }}&output=embed"
    allowfullscreen>
</iframe> --}}
<iframe
    width="{{ $width }}"
    height="{{ $height }}"
    frameborder="0" style="border:0"
    src="https://www.google.com/maps/embed/v1/place?key={{ $apikey }}&q={{ urlencode($address) }}&zoom={{ $zoom }}&maptype={{ $type }}"
    allowfullscreen>
</iframe>
@push('scripts')
@endpush
