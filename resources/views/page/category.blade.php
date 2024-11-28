<x-layouts.app>
    <div class="text-center pt-4 pb-0 md:pt-16 md:mb-10">
        <x-heading.h1 class="font-semibold">
            Our {{ $category->name }} Agreements and Policies
        </x-heading.h1>
        <p class="pt-4">
            {{ __('This page contains links to policies, agreements for the products and services. To view any of the documents presented on this page, click on the policy/agreement.

') }}
        </p>

        <div class="flex gap-3 justify-center pt-6">
            <x-link.social-icon name="x" title="{{ __('Twitter page') }}" link="https://x.com/intent/post?text={{ urlencode(__('Check out the latest news and updates :app blog!', ['app' => config('app.name')])) }}&url={{ urlencode(url()->current()) }}" class="hover:text-primary-500"/>
            <x-link.social-icon name="linkedin" title="{{ __('LinkedIn community') }}" link="https://www.linkedin.com/shareArticle?url={{ urlencode(url()->current()) }}&title={{ urlencode(__('Check out the latest news and updates :app blog!', ['app' => config('app.name')])) }}" class="hover:text-primary-500"/>
        </div>
    </div>

{{--    <x-blog.post-cards :posts="$posts" />--}}

        <div class="mx-auto w-10/12 mx-auto px-20 p-4 py-8 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <x-heading.h3 class="font-semibold">
                        Wurk Product Agreements and Policies
                    </x-heading.h3>
                    <ul class="flex flex-col text-sm mt-2 mb-2">
                        @foreach($posts as $pages)
                            <li class="text-sm mb-1 text-gray-300"><a href="{{route('page.view', $pages->slug)}}">{{ $pages->title }}</a></li>
                        @endforeach

                    </ul>
                </div>

                <div class="mb-6 md:mb-0">
                    <x-heading.h3 class="font-semibold">
                        Corporate Information
                    </x-heading.h3>
                    <ul class="flex flex-col text-sm mt-2 mb-2">
                            <li class="text-sm mb-1 text-gray-300"><a href="#">Address:</a></li>
                            <li class="text-sm mb-1 text-gray-300"><a href="#">Telephone:</a></li>
                            <li class="text-sm mb-1 text-gray-300"><a href="#">Support:</a></li>
                    </ul>
                </div>

                <div class="mb-6 md:mb-0">
                    <x-heading.h3 class="font-semibold">
                        Help & Support
                    </x-heading.h3>
                    <ul class="flex flex-col text-sm mt-2 mb-2">
                        <li class="text-sm mb-1 text-gray-300"><a href="#">Global Support Line:</a></li>
                        <li class="text-sm mb-1 text-gray-300"><a href="#">Chat:</a></li>
                        <li class="text-sm mb-1 text-gray-300"><a href="#">Discuss:</a></li>
                    </ul>
                </div>
            </div>

        </div>

</x-layouts.app>
