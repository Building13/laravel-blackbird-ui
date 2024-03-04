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
    }">
    <div
        x-on:keydown.right="next"
        x-on:keydown.left="prev"
        tabindex="0"
        role="region"
        aria-labelledby="carousel-label"
        class="relative flex">

        <h2 id="carousel-label" class="sr-only" hidden>{{ $title }}</h2>

        <!-- Prev Button -->

        @if ($prevButton)
            {{ $prevButton }}
        @else
            <x-carousel.button direction="previous" />
        @endif

        <span id="carousel-content-label" class="sr-only" hidden>{{ $contentTitle }}</span>

        {{-- Carousel Content --}}
        <ul
            x-ref="slider"
            tabindex="0"
            role="listbox"
            aria-labelledby="carousel-content-label"
            {{ $attributes->merge(['class' => 'flex w-full snap-x snap-mandatory overflow-x-scroll h-full']) }}>
            {{ $slot }}
        </ul>

        <!-- Next Button -->
        @if ($nextButton)
            {{ $nextButton }}
        @else
            <x-carousel.button direction="next" />
        @endif

    </div>
</div>
@push('scripts')
    <script src="https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.js"></script>
@endpush
