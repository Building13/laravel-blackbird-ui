@if ($href)
    <a href="" class="button">
        {{ $slot }}
    </a>
@else
    <button class="button">
        {{ $slot }}
    </button>
@endif
