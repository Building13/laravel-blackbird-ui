<a href="{{ $href }}" target="_blank" class="group">
    <div {{ $attributes->merge(['class' => 'flex h-8 w-8 items-center justify-center rounded-full transition-all group-hover:scale-105']) }}>
        <span class="sr-only">{{ $title }}</span>
        {{ $slot }}
    </div>
</a>
