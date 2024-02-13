<div
    x-data="{
        skip: 1,
        atBeginning: false,
        atEnd: false,
        next() {
            this.to((current, offset) => current + (offset * this.skip))
        },
        prev() {
            this.to((current, offset) => current - (offset * this.skip))
        },
        to(strategy) {
            let slider = this.$refs.slider
            let current = slider.scrollLeft
            let offset = slider.firstElementChild.getBoundingClientRect().width
            slider.scrollTo({ left: strategy(current, offset), behavior: 'smooth' })
        },
        focusableWhenVisible: {
            'x-intersect:enter'() {
                this.$el.removeAttribute('tabindex')
            },
            'x-intersect:leave'() {
                this.$el.setAttribute('tabindex', '-1')
            },
        },
        disableNextAndPreviousButtons: {
            'x-intersect:enter.threshold.05'() {
                let slideEls = this.$el.parentElement.children

                // If this is the first slide.
                if (slideEls[0] === this.$el) {
                    this.atBeginning = true
                    // If this is the last slide.
                } else if (slideEls[slideEls.length - 1] === this.$el) {
                    this.atEnd = true
                }
            },
            'x-intersect:leave.threshold.05'() {
                let slideEls = this.$el.parentElement.children

                // If this is the first slide.
                if (slideEls[0] === this.$el) {
                    this.atBeginning = false
                    // If this is the last slide.
                } else if (slideEls[slideEls.length - 1] === this.$el) {
                    this.atEnd = false
                }
            },
        },
    }"
    class="{{ $attributes->merge(['class' => 'w-full flex flex-col']) }}">
    <div
        x-on:keydown.right="next"
        x-on:keydown.left="prev"
        tabindex="0"
        role="region"
        aria-labelledby="carousel-label"
        class="relative flex">
        <h2 id="carousel-label" class="sr-only" hidden>Carousel</h2>

        <!-- Prev Button -->
        <div class="absolute inset-y-0 left-0 flex items-center px-4">
            <button
                x-on:click="prev"
                class="hover:bg-brand-bone/50 rounded-full text-6xl transition-all"
                :aria-disabled="atBeginning"
                :tabindex="atEnd ? -1 : 0"
                :class="{ 'opacity-50 hover:bg-brand-bone/0 cursor-not-allowed': atBeginning }">
                <span aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-bone h-12 w-12" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </span>
                <span class="sr-only">Skip to previous slide page</span>
            </button>
        </div>

        <span id="carousel-content-label" class="sr-only" hidden>Carousel</span>

        <ul
            x-ref="slider"
            tabindex="0"
            role="listbox"
            aria-labelledby="carousel-content-label"
            class="flex w-full snap-x snap-mandatory overflow-x-scroll">
            {{ $slot }}
        </ul>

        <!-- Next Button -->
        <div class="absolute inset-y-0 right-0 flex items-center px-4">
            <button
                x-on:click="next"
                class="hover:bg-brand-bone/50 rounded-full text-6xl transition-all"
                :aria-disabled="atEnd"
                :tabindex="atEnd ? -1 : 0"
                :class="{ 'opacity-50 cursor-not-allowed': atEnd }">
                <span aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-bone h-12 w-12" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </span>
                <span class="sr-only">Skip to next slide page</span>
            </button>
        </div>
    </div>
</div>
@push('scripts')
    <script src="https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.js"></script>
@endpush
