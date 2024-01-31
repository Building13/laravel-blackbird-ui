<section class="flex flex-col gap-2">
    @if ($title)
        <h2 class="text-3xl font-bold">{{ $title }}</h2>
    @endif
    {{ $slot }}
</section>
