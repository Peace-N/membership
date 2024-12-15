<x-layouts.app>

    <div class="text-center pt-4 pb-0 md:pt-16 md:mb-10">
        <x-heading.h1 class="font-semibold">
             {{ $post->title }}
        </x-heading.h1>
        <p class="pt-4">
            {{ $post->description }}
        </p>

    </div>

        <div class="mx-auto w-10/12 mx-auto px-20 p-4 py-8 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <x-heading.h6 class="font-normal">
                        {!! $post->body !!}
                    </x-heading.h6>

                </div>
            </div>

        </div>

{{--    @if (count($morePosts) > 0)--}}

{{--        <div class="text-center">--}}
{{--            <x-heading.h6 class="text-primary-500">--}}
{{--                {{ __('Don\'t miss this') }}--}}
{{--            </x-heading.h6>--}}
{{--            <x-heading.h2>--}}
{{--                {{ __('You might also like') }}--}}
{{--            </x-heading.h2>--}}
{{--        </div>--}}

{{--    @endif--}}

</x-layouts.app>
