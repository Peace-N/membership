<x-layouts.app>
    <x-section.columns class="max-w-full w-full mt-6  px-20" style="background: #1f2937">

        <x-section.column class="w-2/3 pt-20 pb-20" style="padding-top: 7rem; padding-bottom: 7rem">
            <div x-intersect="$el.classList.add('slide-in-top')">
                <div class="mb-2 md:mb-0">
                    <a href="/" class="flex items-center">
                        <img src="{{asset(config('app.logo.dark') )}}" class="h-6 me-3" alt="Logo" />
                    </a>
                </div>
                <x-heading.h2 style="color: rgb(209 209 209)">
                    Affiliate Program
                </x-heading.h2>
            </div>

            <p class="mt-4 font-extralight" style="color: white">
                {{ __('Sign up with Wurk’s Affiliate program and start earning instantly.') }}
            </p>

            <p class="mt-4" style="color: white">
                Wurk’s Affiliate Program is the simplest way to get  income through referrals by promoting our products on your own website, blog or social media channel. With every successful referral, you will earn great & recurring income
                for the life of the account.

            </p>
            <div class="mt-[36px] flex items-center justify-between gap-4 sm:justify-start 2xl:gap-10">
                <a href="https://store.wurkapps.com/register.php" class="text-black linear rounded-md bg-white px-4 py-2 text-center text-base font-medium transition duration-200 hover:!bg-white/80 active:!bg-white/70">
                   Sign up now
                </a>
            </div>
        </x-section.column>

        <x-section.column class="w-1/3 pt-20 pb-20" style="background-size:cover !important; padding-top: 7rem; padding-bottom: 7rem; background: url({{URL::asset('/images/features/help.png')}})">
            <div x-intersect="$el.classList.add('slide-in-top')">
                <x-heading.h6 class="text-black font-light">
{{--                    <small class="font-extralight">Amanda Santos</small> <br /> <small>Sales Manager</small>--}}
                </x-heading.h6>
            </div>

        </x-section.column>


    </x-section.columns>
    <div class="text-center pt-4 pb-0 md:pt-16 md:mb-10">
        <x-heading.h1 class="font-extralight">
            Promote everything on Wurk
        </x-heading.h1>

    </div>

{{--    <x-blog.post-cards :posts="$posts" />--}}

        <div class="mx-auto w-10/12 px-20 p-4 py-8 lg:py-8">
            <div class="grid" style="display: grid;grid-template-columns: 1fr 1fr 1fr 1fr;row-gap: 20px;padding: 30px 0;margin: 0;">
                @foreach($portals as $category)
{{--                    <a class="text-black hover:text-gray-500" href="/page/category/support?product_category={{$category->portal}}">--}}
                    <a style="margin: 10px; background: #1f2937" class="text-white hover:text-gray-500 hover:bg-[#1f2937]/90" href="https://store.wurkapps.com/store/wurk-apps">
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
                        Find More Help
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
