@if ($href)
    <a href="{{ $href }}" class="button">
        {{ $slot }}
    </a>
@else
    <button class="button">
        {{ $slot }}
    </button>
@endif
