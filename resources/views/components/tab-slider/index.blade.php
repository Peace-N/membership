<div {{$attributes->merge(['class' => 'tab-slider mx-auto px-0 lg:px-8 sm:px-0'])}} >
    <div class="mx-auto max-w-full">
        <div class="overflow-x-auto overscroll-contain scrollbar-show">
            <div
                role="tablist"
                aria-label="tabs"
                class="w-max mx-auto h-12 flex flex-nowrap items-center px-1 rounded-full bg-neutral-200  transition overflow-hidden"
            >
                {{ $tabNames }}
            </div>
        </div>
        <div class="">
            {{ $slot }}
        </div>
    </div>
</div>
