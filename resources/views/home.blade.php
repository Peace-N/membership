<x-layouts.app>
    <x-slot name="title">
        {{ __('Wurk - A fullkit of wurk services') }}
    </x-slot>

    <x-section.hero class="w-full mb-8 md:mb-8">

        <div class="mx-auto text-center px-4">
            <x-pill class="text-primary-500 bg-primary-50">{{ __('Automate Your Business with Wurk') }}</x-pill>

            <x-heading.h1 class="text-5xl hidden lg:block mb-4 mt-4 text-primary-50 font-bold">
                {{ __('Popular Services picked for you') }}
                <br class="hidden sm:block">
                {{ __('let\'s Wurk') }}

            </x-heading.h1>

            <x-heading.h1 class="!text-2xl lg:hidden mb-4 mt-4 text-primary-50 font-bold">
                {{ __('Popular Services picked for you') }}
                <br class="hidden sm:block">
                {{ __('let\'s Wurk') }}

            </x-heading.h1>

            <div class="mx-0 sm:mx-0 md:mx-0 lg:mx-4">
                <x-tab-slider class="!px-0 mx-auto p-0 py-0 w-full sm:py-0 md:py-0 lg:px-20px-20 lg:py-8 rounded-2xl">
                    <x-slot name="tabNames">
                        <livewire:show-home-tabs />
                    </x-slot>

                        <livewire:show-home-tabs-content />
                </x-tab-slider>
            </div>


        </div>
    </x-section.hero>

{{--More Services--}}
    <div class="mx-auto text-center px-4">
        <x-heading.h2 class="text-primary-900">Grow you brand with Wurk. Pick a service</x-heading.h2>
    </div>
    <x-section.columns class="max-w-none md:max-w-6xl pt-8" id="features">
        <x-section.column  class="w-full m:w-full md:w-full lg:w-6/12"  style="flex-basis: inherit;padding: 0.75rem;">
            <div
                class="flex w-full flex-col rounded-2xl bg-cover px-[30px] py-[30px] md:px-[14px]"
                style='height: 100%'
            >
                <div class="w-full">
                    <div class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0 0 30 30">
                        <path d="M12 16L3 16 3 23.75 12 24.988zM12 5L3 6.25 3 14 12 14zM14 4.75L14 14 27 14 27 3zM14 16L14 25.25 27 27 27 16z"></path>
                    </svg>
                    <h4 class="mb-[14px] max-w-full text-xl font-semibold text-black md:text-3xl md:leading-38px] ">
                        &nbsp;Discover Wurk Apps
                    </h4>
                    </div>

                    <div class="relative tab-group">
                        <div class="flex bg-stone-100 p-0.5 relative rounded-lg" role="tablist">
                            <div style="background: #6366f1; height: 80%" class="absolute shadow-sm top-1 left-0.5 h-8 rounded-md transition-all duration-300 transform scale-x-0 translate-x-0 tab-indicator z-0"></div>
                            <a href="#" class="tab-link flex items-center text-sm active inline-block py-2 px-4 text-black transition-all duration-300 relative z-1 mr-1" data-dui-tab-target="tab1-group2">
                                <svg width="1.5em" height="1.5em" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="currentColor" class="mr-2 h-4 w-4">
                                    <path d="M21 7.35304L21 16.647C21 16.8649 20.8819 17.0656 20.6914 17.1715L12.2914 21.8381C12.1102 21.9388 11.8898 21.9388 11.7086 21.8381L3.30861 17.1715C3.11814 17.0656 3 16.8649 3 16.647L2.99998 7.35304C2.99998 7.13514 3.11812 6.93437 3.3086 6.82855L11.7086 2.16188C11.8898 2.06121 12.1102 2.06121 12.2914 2.16188L20.6914 6.82855C20.8818 6.93437 21 7.13514 21 7.35304Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M3.52844 7.29357L11.7086 11.8381C11.8898 11.9388 12.1102 11.9388 12.2914 11.8381L20.5 7.27777" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M12 21L12 12" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M11.6914 11.8285L3.89139 7.49521C3.49147 7.27304 3 7.56222 3 8.01971V16.647C3 16.8649 3.11813 17.0656 3.30861 17.1715L11.1086 21.5048C11.5085 21.727 12 21.4378 12 20.9803V12.353C12 12.1351 11.8819 11.9344 11.6914 11.8285Z" fill="currentColor" stroke="currentColor" stroke-linejoin="round"></path>
                                </svg> Managed Services </a>
                            <a href="#" class="tab-link flex items-center text-sm inline-block py-2 px-4 text-black transition-all duration-300 relative z-1 mr-1" data-dui-tab-target="tab2-group2">
                                <svg width="1.5em" height="1.5em" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="currentColor" class="mr-2 h-4 w-4">
                                    <path d="M12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M4.271 18.3457C4.271 18.3457 6.50002 15.5 12 15.5C17.5 15.5 19.7291 18.3457 19.7291 18.3457" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M12 12C13.6569 12 15 10.6569 15 9C15 7.34315 13.6569 6 12 6C10.3431 6 9 7.34315 9 9C9 10.6569 10.3431 12 12 12Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg> Self Managed Services </a>
                        </div>
                        <div class="mt-4 tab-content-container">
                            <div id="tab1-group2" class="tab-content text-stone-500 text-sm block">
{{--                                @foreach($portals as $portal)--}}
{{--                                    <a href="https://{{$portal->portal}}">--}}
{{--                                        <p style="    border-bottom: 1px solid #ccc;background: #f6f6f6;padding: 10px;"--}}
{{--                                           class="mb-[2px] max-w-full text-base font-medium text-[#696969] ">--}}
{{--                                            {{$portal->name}}--}}
{{--                                        </p>--}}
{{--                                    </a>--}}
{{--                                @endforeach--}}

                                    <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 " style="row-gap: 20px;padding: 30px 0;margin: 0; padding-top:0">
                                        @foreach($portals as $category)
                                            {{--                    <a class="text-black hover:text-gray-500" href="/page/category/support?product_category={{$category->portal}}">--}}
                                            <a style="margin: 10px; background: #000" class="text-white hover:text-gray-500 hover:bg-[#1f2937]/90" href="https://{{$category->portal}}">
                                                <div class=p-1" style="display: flex; flex-direction: column; max-width: 120px; text-align: center">
                                                    <span style="width: 60px; height: 60px; margin: 10px auto; display:block">{{ svg($category->icon) }}</span>
                                                    <span style="display: block">{{$category->name}}</span>
                                                    <hr style="display: block;margin: 0.45rem auto 0.7rem auto;width: 50px;height: 3px;background-image: linear-gradient(to right, rgba(201,4,255,0.82), #649d01);"></hr>
                                                </div>
                                            </a>
                                        @endforeach
                                    </div>
                            </div>
                            <div id="tab2-group2" class="tab-content text-stone-500 text-sm hidden">
{{--                                @foreach($portals as $portal)--}}
{{--                                    <a href="https://{{$portal->selfmanaged}}">--}}
{{--                                        <p style="    border-bottom: 1px solid #ccc;background: #f6f6f6;padding: 10px;"--}}
{{--                                           class="mb-[2px] max-w-full text-base font-medium text-[#696969] ">--}}
{{--                                            Self Managed {{$portal->name}}--}}
{{--                                        </p>--}}
{{--                                    </a>--}}
{{--                                @endforeach--}}

                                    <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 " style="row-gap: 20px;padding: 30px 0;margin: 0; padding-top:0">
                                        @foreach($portals as $category)
                                            {{--                    <a class="text-black hover:text-gray-500" href="/page/category/support?product_category={{$category->portal}}">--}}
                                            <a style="margin: 10px; background: #643e7a" class="text-white hover:text-gray-500 hover:bg-[#1f2937]/90" href="https://{{$category->selfmanaged}}">
                                                <div class=p-1" style="display: flex; flex-direction: column; max-width: 120px; text-align: center">
                                                    <span style="width: 60px; height: 60px; margin: 10px auto; display:block">{{ svg($category->icon) }}</span>
                                                    <span style="display: block">Self Managed {{$category->name}}</span>
                                                    <hr style="display: block;margin: 0.45rem auto 0.7rem auto;width: 50px;height: 3px;background-image: linear-gradient(to right, rgb(0,183,0), #ffab2e);"></hr>
                                                </div>
                                            </a>
                                        @endforeach
                                    </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </x-section.column>

        <x-section.column class="w-full m:w-full md:w-full lg:w-6/12"  style="flex-basis: inherit;padding: 0.75rem;">
            <div
                class="flex w-full flex-col rounded-2xl bg-cover px-[30px] py-[30px] md:px-[14px]"
                style='background: radial-gradient(#fff7e4, #fce6b2); margin-bottom: 1.5rem'
            >
                <div class="w-full">
                    <h4 class="mb-[14px] max-w-full text-xl font-light text-black md:text-3xl md:leading-[42px] ">
                        Managed or Self Managed Services
                    </h4>
                    <p class="mb-[40px] max-w-full text-base font-extralight text-[#696969] ">
                        All our Applications have self-service and managed services, you can choose a DIY solution or
                        we help and manage your services.

                        On Managed services we handle the maintenance, updates, and management of a specific system or service, while self-managed services you are responsible for all aspects of management. This includes tasks like system administration, software updates, security patches, and troubleshooting.
                    </p>
                    <div class="mt-[36px] flex items-center justify-between gap-4 sm:justify-start 2xl:gap-10">
                        <a href="https://store.wurkapps.com/index.php/store/wurk-apps" class="text-black linear rounded-md bg-white px-4 py-2 text-center text-base font-medium transition duration-200 hover:!bg-white/80 active:!bg-white/70">
                            Discover now
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="flex w-full flex-col rounded-2xl bg-cover px-[30px] py-[30px] md:px-[64px]"
                style='background:radial-gradient(#b6fffc, #eaeaea)'
            >
                <div class="w-full">
                    <h4 class="mb-[14px] max-w-full text-xl font-light text-black md:text-3xl md:leading-[42px] ">
                        Commercial Information Services
                    </h4>
                    <p class="mb-[40px] max-w-full text-base font-extralight text-[#696969] ">
                        Commercial information services provide companies with data and analysis to help them make better business decisions, manage risks, and improve performance. These services offer a range of tools and insights, from market research and financial reporting to risk assessment and due diligence.
                    </p>
                    <div class="mt-[36px] flex items-center justify-between gap-4 sm:justify-start 2xl:gap-10">
                        <a href="https://store.wurkapps.com/index.php/store/wurk-apps" class="text-black linear rounded-md bg-white px-4 py-2 text-center text-base font-medium transition duration-200 hover:!bg-white/80 active:!bg-white/70">
                            Discover now
                        </a>
                    </div>
                </div>
            </div>
        </x-section.column>

    </x-section.columns>

{{--Guy ad--}}
    <div class="mx-auto text-center px-4">
        <x-heading.h2 class="text-primary-900 p-8">Do more. Automate your workflows. Try Wurk CRM</x-heading.h2>
    </div>
    <x-section.columns class="mx-auto w-full px-0 lg:px-0 p-4 py-4 lg:py-4" id="recommended">
        <x-section.column  class="w-full m:w-full md:w-full lg:w-6/12"  style="flex-basis: inherit;padding: 0.75rem;">
            <div
                class="flex w-full flex-col rounded-2xl bg-cover px-[30px] py-[30px] md:px-[64px]"
                style='background: radial-gradient(#131c21, #000000); height: 100%'
            >
                <div class="w-full">
                    <h4 class="mb-[14px] max-w-full text-xl font-bold text-white md:text-3xl md:leading-[42px] ">
                        A Comprehensive CRM made for Customer Facing teams.
                    </h4>
                    <p class="mb-[40px] max-w-full text-base font-medium text-[#696969] ">
                        Our CRM solution harnesses the power of data to provide you with actionable insights into your customers' behaviors, preferences, and needs.
                    </p>
                    <div class="mt-[36px] flex items-center justify-between gap-4 sm:justify-start 2xl:gap-10 mb-4">
                        <a href="https://store.wurkapps.com/index.php/store/wurk-apps" class="text-black linear rounded-md bg-white px-4 py-2 text-center text-base font-medium transition duration-200 hover:!bg-white/80 active:!bg-white/70">
                           Get Started
                        </a>
                        <a href="https://store.wurkapps.com/index.php/store/wurk-apps" class="text-base font-medium text-lightPrimary hover:text-lightPrimary 2xl:ml-2">
                            Learn More
                        </a>
                    </div>


                    <div
                        class="flex flex-col w-full rounded-2xl bg-cover px-[30px] py-[30px] md:px-[64px]"
                        style='background: radial-gradient(#000000, #4e4e4e); margin-bottom: 1.5rem'
                    >
                        <div class="w-full">
                            <h4 class="mb-[14px] max-w-full text-xl font-light text-white md:text-3xl md:leading-[42px] flex items-center gap-2.5">
                                <span class="w-[27px] mr-4 text-[aqua]">{{ svg('heroicon-c-chart-bar') }}</span> CRM SUITE <small class="font-extralight text-xs">CRM</small>
                            </h4>
                            <p class="mb-[40px] max-w-full text-base font-medium text-white ">
                                Comprehensive features and fully loaded box.
                            </p>
                            <div class="mt-[36px] flex items-center justify-between gap-4 sm:justify-start 2xl:gap-10">
                                <a href="https://store.wurkapps.com/index.php?m=product_page&pid=63&name=accounting-services" class="text-black linear rounded-md bg-white px-4 py-2 text-center text-base font-medium transition duration-200 hover:!bg-white/80 active:!bg-white/70">
                                    Managed CRM
                                </a>
                                <a href="https://store.wurkapps.com/index.php?m=product_page&pid=74&name=accounting" class="text-base font-medium text-white hover:text-lightPrimary 2xl:ml-2">
                                    {{'CRM' . ' Self Managed'}}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </x-section.column>

        <x-section.column  class="w-full m:w-full md:w-full lg:w-6/12"  style="flex-basis: inherit;padding: 0.75rem;">
            <img width="100%" src="{{URL::asset('/images/features/businessguy.png')}}" class="rounded-2xl"></img>
        </x-section.column>

    </x-section.columns>

    <x-section.columns class="max-w-full w-full mt-6  " style="background: #e9e9e9">
        <x-section.column class="w-2/3 pt-20 pb-20" style="background-size:cover !important; padding-top: 7rem; padding-bottom: 7rem; background: url({{URL::asset('/images/features/young-woman-working-out-outdoors.png')}})">
            <div x-intersect="$el.classList.add('slide-in-top')">
                <x-heading.h6 class="text-black font-light">
                    <small class="font-extralight">Amanda Santos</small> <br /> <small>Sales Manager</small>
                </x-heading.h6>
            </div>

        </x-section.column>

        <x-section.column class="w-1/3 pt-20 pb-20" style="padding-top: 7rem; padding-bottom: 7rem">
            <div x-intersect="$el.classList.add('slide-in-top')">
                <div class="mb-2 md:mb-0">
                    <a href="/" class="flex items-center">
                        <img src="{{asset(config('app.logo.dark') )}}" class="h-6 me-3" alt="Logo" />
                    </a>
                </div>
                <x-heading.h2 class="text-primary-900">
                    Why choose <br /> <span class="font-bold">Wurk?</span>
                </x-heading.h2>
            </div>

            <p class="mt-4">
                {{ __('Because we know that even the best technology is only as good as the people behind it. That’s why we offer expert, 24/7 phone support, plus a lot more.
') }}
            </p>

            <p class="mt-4">
                {{ __('Our support is just great !') }}
            </p>
            <div class="mt-[36px] flex items-center justify-between gap-4 sm:justify-start 2xl:gap-10">
                <a href="https://store.wurkapps.com/index.php/store/wurk-apps" class="text-white linear rounded-md bg-black px-4 py-2 text-center text-base font-medium transition duration-200 hover:!bg-white/80 active:!bg-white/70">
                    Get Started
                </a>
                <a href="/page/category/support" class="text-black linear rounded-md bg-white px-4 py-2 text-center text-base font-medium transition duration-200 hover:!bg-white/80 active:!bg-white/70">
                    Contact Sales
                </a>
            </div>
        </x-section.column>


    </x-section.columns>


    {{-- <div class="text-center mt-16 mx-4" id="tech-stack">
        <x-heading.h6 class="text-primary-500">
            {{ __('The best of the best') }}
        </x-heading.h6>
        <x-heading.h2 class="text-primary-900">
            {{ __('A solid tech stack') }}
        </x-heading.h2>
    </div>


    <div class="text-center p-4 mx-auto">
        <p >{{ __('Laravel, TailwindCSS, Livewire, AlpineJS & FilamentPhp') }}</p>

        <div class="flex flex-wrap items-center justify-center gap-12 mt-8">
            <img src="{{URL::asset('/images/tech-stack/laravel.svg')}}" class="h-10 hover:cursor-pointer hover:scale-103 hover:opacity-100 transition grayscale hover:grayscale-0 opacity-50" />
            <img src="{{URL::asset('/images/tech-stack/filament.avif')}}" class="h-10 hover:cursor-pointer hover:scale-103 hover:opacity-100 transition grayscale hover:grayscale-0 opacity-50" />
            <img src="{{URL::asset('/images/tech-stack/tailwindcss.svg')}}" class="h-12 hover:cursor-pointer hover:scale-103 hover:opacity-100 transition grayscale hover:grayscale-0 opacity-50" />
            <img src="{{URL::asset('/images/tech-stack/livewire.png')}}" class="h-20 hover:cursor-pointer hover:scale-103 hover:opacity-100 transition grayscale hover:grayscale-0 opacity-50" />
            <img src="{{URL::asset('/images/tech-stack/alpinejs.svg')}}" class="h-16 hover:cursor-pointer hover:scale-103 hover:opacity-100 transition grayscale hover:grayscale-0 opacity-50" />
        </div>

    </div> --}}

    {{--    ////////////--}}
    {{--    Slider      --}}
    {{--    ////////////--}}




{{--    <div class="pricing">--}}
{{--        <x-plans.all calculate-saving-rates="true" show-default-product="1"/>--}}
{{--        <x-products.all/>--}}
{{--    </div>--}}

{{--    Accordion FAQ--}}

    <div class="text-center mt-24 mx-4" id="faq">
        <x-heading.h3 class="text-primary-900">
            Serving more than 300 000 customers, <br />we have compiled the most common asked questions
        </x-heading.h3>
        <p>{{ __('Here are the most common questions to help you with your decision.') }}</p>
    </div>

    <div class="max-w-none md:max-w-6xl mx-auto">
        <x-accordion class="mt-4 p-8">
            @foreach($faqs as $faq)
            <x-accordion.item active="true" name="faqs">
                <x-slot name="title">{{$faq->title}}</x-slot>
                {{$faq->body}}
            </x-accordion.item>
            @endforeach
        </x-accordion>
    </div>

</x-layouts.app>
