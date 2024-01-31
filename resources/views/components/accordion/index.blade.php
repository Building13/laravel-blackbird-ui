<div x-data="{ open: false }" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
    <button x-on:click="open = ! open"
        class="hover:border-foreground/10 hover:bg-foreground/5 border-foreground/10 group flex w-full items-baseline justify-between gap-1 rounded border px-3 py-2 text-left font-bold leading-tight"
        :class="{ 'border-b ': open }">
        <span itemprop="name">{{ $title }}</span>
        <span class="pl-4">
            <x-fas-caret-up x-show="open" x-cloak class="group-hover:text-team-action h-4 w-4" />
            <x-fas-caret-down x-show="!open" class="group-hover:text-team-action h-4 w-4" />
        </span>
    </button>
    <div x-show="open"
        x-cloak
        class="mb-4 mt-1 px-4 pb-8 pt-4"
        itemscope
        itemprop="acceptedAnswer"
        itemtype="https://schema.org/Answer">
        <div class="prose prose-invert px-2" itemprop="text">
            {{ $slot }}
        </div>
    </div>
</div>
