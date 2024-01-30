<li x-bind="disableNextAndPreviousButtons" class="flex w-full shrink-0 snap-start flex-col items-center justify-center" role="option">
    {{ $slot }}
    {{-- <button x-bind="focusableWhenVisible" class="px-4 py-2 text-sm">
        Do Something
    </button> --}}
</li>
