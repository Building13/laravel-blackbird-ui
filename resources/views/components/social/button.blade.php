<a href="{{ $href }}" target="_blank">
    <div {{ $attributes->merge(['class' => ' flex h-8 w-8 items-center justify-center rounded-full text-base transition-all hover:scale-105']) }}>
        <span class="sr-only">{{ $title }}</span>
        {{ $slot }}
    </div>
</a>
