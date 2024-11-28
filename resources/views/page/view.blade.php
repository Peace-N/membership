<x-layouts.app>

    <div class="text-center pt-4 pb-0 md:pt-16 md:mb-10">
        <x-heading.h1 class="font-semibold">
             {{ $post->title }}
        </x-heading.h1>
        <p class="pt-4">
            {{ $post->description }}
        </p>

        <div class="flex gap-3 justify-center pt-6">
            <x-link.social-icon name="x" title="{{ __('Twitter page') }}" link="https://x.com/intent/post?text={{ urlencode(__('Check out the latest news and updates :app blog!', ['app' => config('app.name')])) }}&url={{ urlencode(url()->current()) }}" class="hover:text-primary-500"/>
            <x-link.social-icon name="linkedin" title="{{ __('LinkedIn community') }}" link="https://www.linkedin.com/shareArticle?url={{ urlencode(url()->current()) }}&title={{ urlencode(__('Check out the latest news and updates :app blog!', ['app' => config('app.name')])) }}" class="hover:text-primary-500"/>
        </div>
    </div>

    <div class="text-primary-500 text-sm text-center mx-auto mt-8">
        {{ __('Share this post.') }}
    </div>
    <div class="flex gap-3 justify-center pt-3">
        <x-link.social-icon name="x" title="{{ __('Twitter page') }}"
                            link="https://x.com/intent/post?text={{ urlencode($post->title) }}&url={{ urlencode(url()->current()) }}"
                            class="hover:text-primary-500"/>
        <x-link.social-icon name="linkedin" title="{{ __('LinkedIn community') }}"
                            link="https://www.linkedin.com/shareArticle?url={{ urlencode(url()->current()) }}&title={{ urlencode($post->title) }}"
                            class="hover:text-primary-500"/>
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
