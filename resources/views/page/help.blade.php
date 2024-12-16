<x-layouts.app>
    <x-section.columns class="max-w-full w-full mt-6  px-20" style="background: #e9e9e9">

        <x-section.column class="w-2/3 pt-20 pb-20" style="padding-top: 7rem; padding-bottom: 7rem">
            <div x-intersect="$el.classList.add('slide-in-top')">
                <div class="mb-2 md:mb-0">
                    <a href="/" class="flex items-center">
                        <img src="{{asset(config('app.logo.dark') )}}" class="h-6 me-3" alt="Logo" />
                    </a>
                </div>
                <x-heading.h2 class="text-primary-900">
                    Help & Support Center
                </x-heading.h2>
            </div>

            <p class="mt-4 font-extralight">
                {{ __('We are here to help and advice to bring your ideas to life, Once ready to get online, we have compiled a list of guides to assist you in your growth.') }}
            </p>

            <p class="mt-4">
                {{ __('We are here to help.') }}
            </p>
            <div class="mt-[36px] flex items-center justify-between gap-4 sm:justify-start 2xl:gap-10">
                <button class="text-black linear rounded-md bg-white px-4 py-2 text-center text-base font-medium transition duration-200 hover:!bg-white/80 active:!bg-white/70">
                    Chat to us
                </button>
            </div>
        </x-section.column>

        <x-section.column class="w-1/3 pt-20 pb-20" style="background-size:cover !important; padding-top: 7rem; padding-bottom: 7rem; background: url({{URL::asset('/images/features/help.png')}})">
            <div x-intersect="$el.classList.add('slide-in-top')">
                <x-heading.h6 class="text-black font-light">
                    <small class="font-extralight">Amanda Santos</small> <br /> <small>Sales Manager</small>
                </x-heading.h6>
            </div>

        </x-section.column>


    </x-section.columns>
    <div class="text-center pt-4 pb-0 md:pt-16 md:mb-10">
        <x-heading.h1 class="font-extralight">
           Find Product help
        </x-heading.h1>

    </div>

{{--    <x-blog.post-cards :posts="$posts" />--}}

        <div class="mx-auto w-10/12 px-20 p-4 py-8 lg:py-8">
            <div class="grid" style="display: grid;grid-template-columns: 1fr 1fr 1fr 1fr;row-gap: 20px;padding: 30px 0;margin: 0;">
                @foreach($portals as $category)
                    <a class="text-black hover:text-gray-500" href="/page/category/support?product_category={{$category->portal}}">
                    <div class=p-1" style="display: flex; flex-direction: column; max-width: 120px; text-align: center">
                        <span style="width: 60px; height: 60px; margin: 10px auto; display:block">{{ svg($category->icon) }}</span>
                        <span style="display: block">{{$category->name}}</span>
                        <hr style="display: block;margin: 0.45rem auto 0.7rem auto;width: 50px;height: 3px;background-image: linear-gradient(to right, #cc19d2, #019d01);"></hr>
                    </div>
                    </a>
                @endforeach
            </div>
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <x-heading.h3 class="font-semibold">
                        Find More Help and Support Pages
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
