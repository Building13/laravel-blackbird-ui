<section {{ $attributes }}>
    <div class="relative flex">
        <img class="h-full w-full object-cover" src="{{ $image }}" alt="{{ $imageAlt }}" />
        <div @class([
            'absolute  z-10',
            'right-0  h-full w-1/3' => $position === 'right',
            'left-0  h-full w-1/3' => $position === 'left',
            'top-0 w-full' => $position === 'top',
            'bottom-0 w-full' => $position === 'bottom',
        ])>
            <div class="bg-level-1/80 flex h-full w-full p-8">
                <div class="mt-auto">
                    <h2 class="font-serif text-6xl leading-none">{{ $title }}</h2>
                    <p class="text-level-2 mt-4">{{ $body }}</p>
                    <a href="{{ $link }}" class="group">
                        <div class="bg-level-3/70 hover:bg-level-3/90 mt-2 inline-flex px-2 transition-all duration-300 ease-out group-hover:pl-4">
                            <span class="text-accent font-bold italic">
                                {{ $linkText }}
                            </span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
