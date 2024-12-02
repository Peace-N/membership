<x-layouts.app>
    <x-slot name="title">
        {{ __('SaaSykit - Laravel SaaS Starter Kit') }}
    </x-slot>

    <x-section.hero class="w-full mb-8 md:mb-72">

        <div class="mx-auto text-center h-160 md:h-180 px-4">
            <x-pill class="text-primary-500 bg-primary-50">{{ __('Automate Your Business with Wurk') }}</x-pill>
            <x-heading.h1 class="mt-4 text-primary-50 font-bold">
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
    <x-section.columns class="max-w-none md:max-w-6xl pt-16" id="features">
        <x-section.column  class="w-full m:w-full md:w-full lg:w-6/12"  style="flex-basis: inherit;padding: 0.75rem;">
            <div
                class="flex w-full flex-col rounded-2xl bg-cover px-[30px] py-[30px] md:px-[64px]"
                style='background: radial-gradient(#e0f3fd, #d4e9f7); height: 100%'
            >
                <div class="w-full">
                    <h4 class="mb-[14px] max-w-full text-xl font-light text-black md:text-3xl md:leading-[42px] ">
                        Wurk Managed Services
                    </h4>
                    <p class="mb-[40px] max-w-full text-base font-extralight text-[#696969] ">
                        Managed IT services are defined as the practice of fully or partially outsourcing the migration, implementation, maintenance, and upgrade of the different parts of IT infrastructure (including backup and security) to a third-party vendor who typically operates remotely or from an offshore location.
                    </p>
                    <div class="mt-[36px] flex items-center justify-between gap-4 sm:justify-start 2xl:gap-10">
                        <button class="text-black linear rounded-md bg-white px-4 py-2 text-center text-base font-medium transition duration-200 hover:!bg-white/80 active:!bg-white/70">
                            Discover now
                        </button>
                        <button class="text-base font-medium text-lightPrimary hover:text-lightPrimary 2xl:ml-2">
                            Watch Video
                        </button>
                    </div>
                </div>
            </div>
        </x-section.column>

        <x-section.column class="w-full m:w-full md:w-full lg:w-6/12"  style="flex-basis: inherit;padding: 0.75rem;">
            <div
                class="flex w-full flex-col rounded-2xl bg-cover px-[30px] py-[30px] md:px-[64px]"
                style='background: radial-gradient(#fff7e4, #fce6b2); margin-bottom: 1.5rem'
            >
                <div class="w-full">
                    <h4 class="mb-[14px] max-w-full text-xl font-light text-black md:text-3xl md:leading-[42px] ">
                        Wurk Self Service
                    </h4>
                    <p class="mb-[40px] max-w-full text-base font-extralight text-[#696969] ">
                        Enter in this creative world. Discover now the latest NFTs or start
                        creating your own!
                    </p>
                    <div class="mt-[36px] flex items-center justify-between gap-4 sm:justify-start 2xl:gap-10">
                        <button class="text-black linear rounded-md bg-white px-4 py-2 text-center text-base font-medium transition duration-200 hover:!bg-white/80 active:!bg-white/70">
                            Discover now
                        </button>
                        <button class="text-base font-medium text-lightPrimary hover:text-lightPrimary 2xl:ml-2">
                            Watch Video
                        </button>
                    </div>
                </div>
            </div>
            <div
                class="flex w-full flex-col rounded-2xl bg-cover px-[30px] py-[30px] md:px-[64px]"
                style='background:radial-gradient(#b6fffc, #eaeaea)'
            >
                <div class="w-full">
                    <h4 class="mb-[14px] max-w-full text-xl font-light text-black md:text-3xl md:leading-[42px] ">
                        Custom Software Development
                    </h4>
                    <p class="mb-[40px] max-w-full text-base font-extralight text-[#696969] ">
                        Enter in this creative world. Discover now the latest NFTs or start
                        creating your own!
                    </p>
                    <div class="mt-[36px] flex items-center justify-between gap-4 sm:justify-start 2xl:gap-10">
                        <button class="text-black linear rounded-md bg-white px-4 py-2 text-center text-base font-medium transition duration-200 hover:!bg-white/80 active:!bg-white/70">
                            Discover now
                        </button>
                        <button class="text-base font-medium text-lightPrimary hover:text-lightPrimary 2xl:ml-2">
                            Watch Video
                        </button>
                    </div>
                </div>
            </div>
        </x-section.column>

    </x-section.columns>

{{--Guy ad--}}
    <div class="mx-auto text-center px-4">
        <x-heading.h2 class="text-primary-900 p-8">Do more. Automate your workflows. Try Wurk CRM</x-heading.h2>
    </div>
    <x-section.columns class="mx-auto w-full px-0 lg:px-20 p-4 py-4 lg:py-4" id="recommended">
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
                        <button class="text-black linear rounded-md bg-white px-4 py-2 text-center text-base font-medium transition duration-200 hover:!bg-white/80 active:!bg-white/70">
                           Get Started
                        </button>
                        <button class="text-base font-medium text-lightPrimary hover:text-lightPrimary 2xl:ml-2">
                            Learn More
                        </button>
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
                                <a href="{{'/pricing?source=home&product_touch=' . 'CRM' }}" class="text-black linear rounded-md bg-white px-4 py-2 text-center text-base font-medium transition duration-200 hover:!bg-white/80 active:!bg-white/70">
                                    Grab your Offer
                                </a>
                                <a href="https://crm.wurk.africa" class="text-base font-medium text-white hover:text-lightPrimary 2xl:ml-2">
                                    {{'CRM' . ' Info'}}
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

    <x-section.columns class="max-w-full w-full mt-6  " style="background: aquamarine">
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
                <button class="text-white linear rounded-md bg-black px-4 py-2 text-center text-base font-medium transition duration-200 hover:!bg-white/80 active:!bg-white/70">
                    Get Started
                </button>
                <button class="text-black linear rounded-md bg-white px-4 py-2 text-center text-base font-medium transition duration-200 hover:!bg-white/80 active:!bg-white/70">
                    Contact Sales
                </button>
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
