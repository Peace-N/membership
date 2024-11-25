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

            <div class="mx-4">
                <x-tab-slider class="mx-auto w-full mx-auto px-20 p-4 py-8 lg:py-8 rounded-2xl">
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
        <x-section.column  style="flex-basis: inherit;padding: 0.75rem;">
            <div
                class="flex w-full flex-col rounded-2xl bg-cover px-[30px] py-[30px] md:px-[64px]"
                style='background: radial-gradient(#e0f3fd, #d4e9f7); height: 100%'
            >
                <div class="w-full">
                    <h4 class="mb-[14px] max-w-full text-xl font-bold text-black md:text-3xl md:leading-[42px] ">
                        Discover, collect, and sell extraordinary NFTs
                    </h4>
                    <p class="mb-[40px] max-w-full text-base font-medium text-[#696969] ">
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

        <x-section.column  style="flex-basis: inherit;padding: 0.75rem;">
            <div
                class="flex w-full flex-col rounded-2xl bg-cover px-[30px] py-[30px] md:px-[64px]"
                style='background: radial-gradient(#fff7e4, #fce6b2); margin-bottom: 1.5rem'
            >
                <div class="w-full">
                    <h4 class="mb-[14px] max-w-full text-xl font-bold text-black md:text-3xl md:leading-[42px] ">
                        Discover, collect, and sell extraordinary NFTs
                    </h4>
                    <p class="mb-[40px] max-w-full text-base font-medium text-[#696969] ">
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
                    <h4 class="mb-[14px] max-w-full text-xl font-bold text-black md:text-3xl md:leading-[42px] ">
                        Discover, collect, and sell extraordinary NFTs
                    </h4>
                    <p class="mb-[40px] max-w-full text-base font-medium text-[#696969] ">
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
        <x-heading.h2 class="text-primary-900 p-8">Do more. Automate your workflows</x-heading.h2>
    </div>
    <x-section.columns class="mx-auto w-full px-20 p-4 py-4 lg:py-4" id="recommended">
        <x-section.column  class="w-1/3"  style="flex-basis: inherit;padding: 0.75rem;">
            <div
                class="flex w-full flex-col rounded-2xl bg-cover px-[30px] py-[30px] md:px-[64px]"
                style='background: radial-gradient(#131c21, #000000); height: 100%'
            >
                <div class="w-full">
                    <h4 class="mb-[14px] max-w-full text-xl font-bold text-black md:text-3xl md:leading-[42px] ">
                        Discover, collect, and sell extraordinary NFTs
                    </h4>
                    <p class="mb-[40px] max-w-full text-base font-medium text-[#696969] ">
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

        <x-section.column  class="w-2/3"  style="flex-basis: inherit;padding: 0.75rem;">
            <img width="100%" src="{{URL::asset('/images/features/businessguy.png')}}" class="rounded-2xl"></img>
        </x-section.column>

    </x-section.columns>

    <x-section.columns class="max-w-full w-full mt-6  " style="background: aquamarine">
        <x-section.column class="w-2/3 pt-20 pb-20" style="background-size:cover !important; padding-top: 7rem; padding-bottom: 7rem; background: url({{URL::asset('/images/features/young-woman-working-out-outdoors.png')}})">
            <div x-intersect="$el.classList.add('slide-in-top')">
                <x-heading.h6 class="text-black font-light">
                    <small class="font-extralight">Jermaine .R</small> <br /> <small>Sales Exec</small>
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
            Serving more thann 300 000 customers, <br />we have compiled the most common asked questions
        </x-heading.h3>
        <p>{{ __('Here are the most common questions to help you with your decision.') }}</p>
    </div>

    <div class="max-w-none md:max-w-6xl mx-auto">
        <x-accordion class="mt-4 p-8">
            <x-accordion.item active="true" name="faqs">
                <x-slot name="title">{{ __('What is SaaSykit?') }}</x-slot>

                <p>
                    {{ __('SaaSykit is a complete SaaS starter kit that includes everything you need to start your SaaS business. It comes ready with a huge list of reusable components, a complete admin panel, user dashboard, user authentication, user & role management, plans & pricing, subscriptions, payments, emails, and more.') }}
                </p>

            </x-accordion.item>

            <x-accordion.item active="false" name="faqs">
                <x-slot name="title">{{ __('What features does SaaSykit offer?') }}</x-slot>

                <p class="mt-4">
                    {{ __('Here are some of the features included in SaaSykit in a nutshell:') }}
                </p>

                <ul class="mt-4 list-disc ms-4 ps-4">
                    <li>{{ __('Customize Styles: Customize the styles &amp; colors, error page of your application to fit your brand.') }}</li>
                    <li>{{ __('Product, Plans &amp; Pricing: Create and manage your products, plans, and pricing from a beautiful and easy-to-use admin panel.') }}</li>
                    <li>{{ __('Beautiful checkout process: Your customers can subscribe to your plans from a beautiful checkout process.') }}</li>
                    <li>{{ __('Huge list of ready-to-use components: Plans &amp; Pricing, hero section, features section, testimonials, FAQ, Call to action, tab slider, and much more.') }}</li>
                    <li>{{ __('User authentication: Comes with user authentication out of the box, whether classic email/password or social login (Google, Facebook, Twitter, Github, LinkedIn, and more).') }}</li>
                    <li>{{ __('Discounts: Create and manage your discounts and reward your customers.') }}</li>
                    <li>{{ __('SaaS metric stats: View your MRR, Churn rates, ARPU, and other SaaS metrics.') }}</li>
                    <li>{{ __('Multiple payment providers: Stripe, Paddle, and more coming soon.') }}</li>
                    <li>{{ __('Multiple email providers: Mailgun, Postmark, Amazon SES, and more coming soon.') }}</li>
                    <li>{{ __('Blog: Create and manage your blog posts.') }}</li>
                    <li>{{ __('User &amp; Role Management: Create and manage your users and roles, and assign permissions to your users.') }}</li>
                    <li>{{ __('Fully translatable: Translate your application to any language you want.') }}</li>
                    <li>{{ __('Sitemap &amp; SEO: Sitemap and SEO optimization out of the box.') }}</li>
                    <li>{{ __('Admin Panel: Manage your SaaS application from a beautiful admin panel powered by ') }}
                        <a href="https://filamentphp.com/" target="_blank" rel="noopener noreferrer">Filament</a>.
                    </li>
                    <li>{{ __('User Dashboard: Your customers can manage their subscriptions, change payment method, upgrade plan, cancel subscription, and more from a beautiful user dashboard powered by') }}
                        <a href="https://filamentphp.com/" target="_blank" rel="noopener noreferrer">Filament</a>.
                    </li>
                    <li>{{ __('Automated Tests: Comes with automated tests for critical components of the application.') }}</li>
                    <li>{{ __('One-line deployment: Provision your server and deploy your application easily with integrated') }}
                        <a href="https://deployer.org/" target="_blank"
                           rel="noopener noreferrer">Deployer</a> {{ __('  support.') }}</li>
                    <li>{{ __('Developer-friendly: Built with developers in mind, uses best coding practices.') }}</li>
                    <li>{{ __('And much more...') }}</li>
                </ul>

            </x-accordion.item>

            <x-accordion.item active="false" name="faqs">
                <x-slot name="title">{{ __('Which payment providers are supported?') }}</x-slot>

                <p>
                    {{ __('SaaSykit supports Stripe and Paddle out of the box. You can easily add more payment providers by extending the code. More payment method will be added in the future as well (e.g. Lemon Squeezy)') }}
                </p>

            </x-accordion.item>

            <x-accordion.item active="false" name="faqs">
                <x-slot name="title">{{ __('Do you offer support?') }}</x-slot>

                <p>
                    {{ __('Of course! we offer email and discord support to help you with any issues you might face or questions you have. Write us an email at') }}
                    <a href="mailto:{{config('app.support_email')}}"
                       class="text-primary-500 hover:underline">{{config('app.support_email')}}</a> {{ __('or join our') }}
                    <a href="{{config('app.social_links.discord')}}">{{ __('discord server')}}</a> {{ __('to get help.')}}
                </p>

            </x-accordion.item>

            <x-accordion.item active="false" name="faqs">
                <x-slot name="title">{{'What Tech stack is used?'}}</x-slot>

                <p>
                    {{ __('SaaSykit is built on top of') }} <a href="https://laravel.com"
                                                               target="_blank">Laravel</a> {{ __('Laravel, the most popular PHP framework, and') }}
                    <a target="_blank"
                       href="https://filamentphp.com/">Filament</a> {{ __(', a beautiful and powerful admin panel for Laravel. It also uses TailwindCSS, AlpineJS, and Livewire.')}}
                </p>
                <p class="mt-4">
                    {{ __('You can use your favourite database (MySQL, PostgreSQL, SQLite) and your favourite queue driver (Redis, Amazon SQS, etc).')}}
                </p>

            </x-accordion.item>

            <x-accordion.item active="false" name="faqs">
                <x-slot name="title">{{'How often is SaaSykit updated?'}}</x-slot>

                <p>
                    {{ __('SaaSykit is updated regularly to keep up with the latest Laravel and Filament versions, and to add new features and improvements.')}}
                </p>

            </x-accordion.item>

            <x-accordion.item active="false" name="faqs">
                <x-slot name="title">{{'Do you offer refunds?'}}</x-slot>

                <p>
                    {{ __('Yes, we offer a 14-day money-back guarantee. If you are not satisfied with SaaSykit, you can request a refund within 14 days of your purchase. Please write us an email at') }}
                    <a href="mailto:{{config('app.support_email')}}"
                       class="text-primary-500 hover:underline">{{config('app.support_email')}}</a> {{ __('to request a refund.')}}
                </p>

            </x-accordion.item>

            <x-accordion.item active="false" name="faqs">
                <x-slot name="title">{{'Where can I host my SaaS application?'}}</x-slot>

                <p>
                    {{ __('You can host your SaaS application on any server that supports PHP, such as DigitalOcean, AWS, Hetzner, Linode, and more. You can also use a platform like Laravel Forge to manage your server and deploy your application.')}}
                </p>

            </x-accordion.item>

            <x-accordion.item active="false" name="faqs">
                <x-slot name="title">{{'Is there a demo available?'}}</x-slot>

                <p>
                    {{ __('Yes, a demo is available to help you get a feel of SaaSykit. You can find the demo') }} <a
                        href="https://saasykit.com/demo" target="_blank" rel=”nofollow”>here</a>.
                </p>

            </x-accordion.item>

            <x-accordion.item active="false" name="faqs">
                <x-slot name="title">{{'Is there documentation available?'}}</x-slot>

                <p>
                    {{ __('Yes, an extensive documentation is available to help you get started with SaaSykit. You can find the documentation ')}}
                    <a href="https://saasykit.com/docs" target="_blank">here</a>.
                </p>

            </x-accordion.item>

            <x-accordion.item active="false" name="faqs">
                <x-slot name="title">{{'How is SaaSykit different from just using Laravel directly?'}}</x-slot>

                <p>
                    {{__('SaaSykit is built on top of Laravel with the intention to save you time and effort by not having to build everything needed for a modern SaaS from scratch, like payment provider integration, subscription management, user authentication, user & role management, having a beautiful admin panel, a user dashboard to manage their subscriptions/payments, and more.')}}
                </p>
                <p class="mt-4">
                    {{__('You can choose to base your SaaS on vanilla Laravel and build everything from scratch if you prefer and that is totally fine, but you will need a few months to build what SaaSykit offers out of the box, then on top of that, you will need to start to build your actual SaaS application.')}}
                </p>

                <p class="mt-4">
                    {{__('SaaSykit is a great starting point for your SaaS application, it is built with best coding practices, and it is developer-friendly. It is also built with the intention to be easily customizable and extendable. Any developer who is familiar with Laravel will feel right at home.')}}
                </p>

            </x-accordion.item>
        </x-accordion>
    </div>

</x-layouts.app>
