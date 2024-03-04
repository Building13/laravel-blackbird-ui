@if ($direction === 'next')
    <div class="absolute inset-y-0 right-0 z-20 flex items-center px-4">
        <button
            x-on:click="next"
            class="hover:bg-level-1 text-accent bg-level-1/30 border-level-1/0 hover:border-level-1/100 rounded border p-2 text-6xl transition-all"
            :aria-disabled="atEnd"
            :tabindex="atEnd ? -1 : 0"
            :class="{ 'opacity-50 cursor-not-allowed': atEnd }">
            <span aria-hidden="true">
                <x-fas-chevron-right class="h-8 w-8" />
            </span>
            <span class="sr-only">Skip to next slide page</span>
        </button>
    </div>
@elseif ($direction === 'prev' || $direction === 'previous')
    <div class="absolute inset-y-0 left-0 z-20 flex items-center px-4">
        <button
            x-on:click="prev"
            class="hover:bg-level-1 text-accent bg-level-1/30 border-level-1/0 hover:border-level-1/100 rounded border p-2 text-6xl transition-all"
            :aria-disabled="atBeginning"
            :tabindex="atEnd ? -1 : 0"
            :class="{ 'opacity-50 cursor-not-allowed': atBeginning }">
            <span aria-hidden="true">
                <x-fas-chevron-left class="h-8 w-8" />
            </span>
            <span class="sr-only">Skip to previous slide page</span>
        </button>
    </div>
@endif
