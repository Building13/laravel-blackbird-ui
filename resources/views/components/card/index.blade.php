<div {{ $attributes->merge(['class' => $defaultClasses]) }}>
    @if ($inset)
        {{ $inset }}
    @endif
    <div class="{{ $paddingClass }}">
        {{ $slot }}
    </div>
</div>
