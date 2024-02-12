<div x-data="{ open: false }"
    itemscope
    itemprop="mainEntity"
    itemtype="https://schema.org/Question">
    <button
        x-on:click="open = ! open"
        class="w-full">
        <x-surface color-level="1" border-level="1" elevation-level="1"
            class="group flex w-full items-baseline justify-between gap-1 rounded border px-3 py-2 text-left font-bold leading-tight transition-all duration-300">
            <span itemprop="name">{{ $title }}</span>
            <span class="pl-4">
                <x-fas-caret-up x-show="open" x-cloak class="text-action fill-action group-hover:text-action h-4 w-4" />
                <x-fas-caret-down x-show="!open" class="text-action fill-action group-hover:text-action h-4 w-4" />
            </span>
        </x-surface>
    </button>
    <x-surface x-show="open"
        x-cloak
        elevation-level="1"
        color-level="1"
        class="mb-4 mt-1 px-4 pb-8 pt-4"
        itemscope
        itemprop="acceptedAnswer"
        itemtype="https://schema.org/Answer">
        <div class="prose prose-invert px-2" itemprop="text">
            {{ $slot }}
        </div>
    </x-surface>
</div>
