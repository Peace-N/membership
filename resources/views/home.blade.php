<x-layouts.app>
    <x-slot name="title">
        {{ __('SaaSykit - Laravel SaaS Starter Kit') }}
    </x-slot>

    <x-section.hero class="w-full mb-8 md:mb-72">

        <div class="mx-auto text-center h-160 md:h-180 px-4">
            <x-pill class="text-primary-500 bg-primary-50">{{ __('Launch your Business') }}</x-pill>
            <x-heading.h1 class="mt-4 text-primary-50 font-bold">
                {{ __('Popular Services picked for you') }}
                <br class="hidden sm:block">
                {{ __('let\'s Wurk') }}

            </x-heading.h1>

            <div class="mx-4">
                <x-tab-slider class="mt-6 md:max-w-6xl py-8 rounded-2xl">
                    <x-slot name="tabNames">
                        <x-tab-slider.tab-name controls="tab-1" active="true">{{ __('Recommended') }}</x-tab-slider.tab-name>
                        <x-tab-slider.tab-name controls="tab-2">{{ __('Design Services') }}</x-tab-slider.tab-name>
                        <x-tab-slider.tab-name controls="tab-3">{{ __('Websites') }}</x-tab-slider.tab-name>
                        <x-tab-slider.tab-name controls="tab-4">{{ __('Business Process') }}</x-tab-slider.tab-name>
                        <x-tab-slider.tab-name controls="tab-5">{{ __('Logo Design') }}</x-tab-slider.tab-name>
                        <x-tab-slider.tab-name controls="tab-6">{{ __('Domains') }}</x-tab-slider.tab-name>
                        <x-tab-slider.tab-name controls="tab-7">{{ __('and more') }}</x-tab-slider.tab-name>
                    </x-slot>

                    <x-tab-slider.tab-content id="tab-1">
                        <div class="text-center mt-8">
                            <x-heading.h4 class="text-primary-900 !font-semibold">
                                {{ __('Customer Success Journey') }}
                            </x-heading.h4>

                            <div class="mx-auto max-w-2xl">
                                <p class="mt-4">
                                    {{ __('Our Journey at WUrk has been a fantastic one, from utomated services to managed, we embrked on a journey to create our Logos, Proposals and eventually Funding. Simply Awesome. NYL - Photography') }}
                                </p>
                            </div>
                        </div>

                        <div class="m-10 mx-auto max-w-4xl mt-12">
                            <img src="{{URL::asset('/images/features/bliss.jpg')}}" class="drop-shadow-xl rounded-2xl" />
                        </div>

                    </x-tab-slider.tab-content>

                    <x-tab-slider.tab-content id="tab-2">
                        <div class="text-center mt-8">
                            <x-heading.h4 class="text-primary-900 !font-semibold">
                                {{ __('Plans & Pricing Component') }}
                            </x-heading.h4>

                            <div class="mx-auto max-w-2xl">
                                <p class="mt-4">
                                    {{ __('This component is magical in that it will read the plans you defined in your admin panel, group them, calculate potential discount amount if user chooses a longer plan, and display all that in a beautiful way for your users. ') }}
                                </p>
                            </div>
                        </div>

                        <div class="m-10 mx-auto max-w-4xl mt-12">
                            <img src="{{URL::asset('/images/features/plans-component.png')}}" class="drop-shadow-xl rounded-2xl" />
                        </div>

                    </x-tab-slider.tab-content>

                    <x-tab-slider.tab-content id="tab-3">
                        <div class="text-center mt-8">
                            <x-heading.h4 class="text-primary-900 !font-semibold">
                                {{ __('Hero section Component') }}
                            </x-heading.h4>

                            <div class="mx-auto max-w-2xl">
                                <p class="mt-4">
                                    {{ __('A ready-to-use hero section component to display your hero image, title, and call to action button.') }}
                                </p>
                            </div>
                        </div>

                        <div class="m-10 mx-auto max-w-4xl mt-12">
                            <img src="{{URL::asset('/images/features/hero-component.png')}}" class="drop-shadow-xl rounded-2xl" />
                        </div>

                    </x-tab-slider.tab-content>

                    <x-tab-slider.tab-content id="tab-4">
                        <div class="text-center mt-8">
                            <x-heading.h4 class="text-primary-900 !font-semibold">
                                {{ __('FAQ Component') }}
                            </x-heading.h4>

                            <div class="mx-auto max-w-2xl">
                                <p class="mt-4">
                                    {{ __('An accordion component that you can use to display your FAQ in an intuitive way.') }}
                                </p>
                            </div>
                        </div>

                        <div class="m-10 mx-auto max-w-4xl mt-12">
                            <img src="{{URL::asset('/images/features/faqs-component.png')}}" class="drop-shadow-xl rounded-2xl" />
                        </div>

                    </x-tab-slider.tab-content>

                    <x-tab-slider.tab-content id="tab-5">
                        <div class="text-center mt-8">
                            <x-heading.h4 class="text-primary-900 !font-semibold">
                                {{ __('Call to action component') }}
                            </x-heading.h4>

                            <div class="mx-auto max-w-2xl">
                                <p class="mt-4">
                                    {{ __('A focused component the brings attention to your call to action.') }}
                                </p>
                            </div>
                        </div>

                        <div class="m-10 mx-auto max-w-4xl mt-12">
                            <img src="{{URL::asset('/images/features/call-to-action-component.png')}}" class="drop-shadow-xl rounded-2xl">
                        </div>

                    </x-tab-slider.tab-content>

                    <x-tab-slider.tab-content id="tab-6">
                        <div class="text-center mt-8">
                            <x-heading.h4 class="text-primary-900 !font-semibold">
                                {{ __('Tab Slider Component') }}
                            </x-heading.h4>

                            <div class="mx-auto max-w-2xl">
                                <p class="mt-4">
                                    {{ __('Tab slider component displays your content in a beautiful and organized way into separate tabs.') }}
                                </p>
                            </div>
                        </div>

                        <div class="m-10 mx-auto max-w-4xl mt-12">
                            <img src="{{URL::asset('/images/features/tab-slider-component.png')}}" class="drop-shadow-xl rounded-2xl">
                        </div>

                    </x-tab-slider.tab-content>

                    <x-tab-slider.tab-content id="tab-7">

                        <div class="m-10 mx-auto max-w-4xl mt-6">
                            <x-section.columns class="max-w-none md:max-w-6xl mt-6">
                                <x-section.column class="flex flex-col items-center justify-center text-center">
                                    <x-icon.fancy name="nav" class="w-2/5 mx-auto" type="secondary" />
                                    <x-heading.h3 class="mx-auto pt-2">
                                        {{ __('Header & Footer') }}
                                    </x-heading.h3>
                                    <p class="mt-2">{{ __('Easily customize your header and footer.') }}</p>
                                </x-section.column>

                                <x-section.column class="flex flex-col items-center justify-center text-center">
                                    <x-icon.fancy name="button-ok" class="w-2/5 mx-auto" type="secondary" />
                                    <x-heading.h3 class="mx-auto pt-2">
                                        {{ __('Buttons') }}
                                    </x-heading.h3>
                                    <p class="mt-2">{{ __('Beautiful buttons to use in your application.') }}</p>
                                </x-section.column>

                                <x-section.column class="flex flex-col items-center justify-center text-center">
                                    <x-icon.fancy name="pill" class="w-2/5 mx-auto" type="secondary" />
                                    <x-heading.h3 class="mx-auto pt-2">
                                        {{ __('Pill') }}
                                    </x-heading.h3>
                                    <p class="mt-2">{{ __('Pills to highlight your content where you need to.') }}</p>
                                </x-section.column>

                            </x-section.columns>

                            <p class="text-center mt-4">
                                {{ __('and much more...') }}
                            </p>
                        </div>

                    </x-tab-slider.tab-content>



                </x-tab-slider>
            </div>


            {{-- <p class="text-primary-50 m-3">{{ __('A Laravel-based boilerplate with everything you need to build an awesome SaaS.') }}</p> --}}
{{--
            <div class="flex flex-wrap gap-4 justify-center flex-col md:flex-row mt-6">
                <x-effect.glow></x-effect.glow>

                <x-button-link.secondary href="#pricing" class="self-center !py-3" elementType="a">
                    {{ __('Get SaaSykit') }}
                </x-button-link.secondary>
                <x-button-link.primary-outline href="//demo.saasykit.com" class=" bg-transparent self-center !py-3 text-white border-white" rel=”nofollow” >
                    {{ __('Check The Demo') }}
                </x-button-link.primary-outline>

            </div>

            <x-user-ratings link="#testimonials" class="items-center justify-center mt-6 relative z-40">
                <x-slot name="avatars">
                    <x-user-ratings.avatar src="https://unsplash.com/photos/rDEOVtE7vOs/download?ixid=M3wxMjA3fDB8MXxzZWFyY2h8Mnx8cGVyc29ufGVufDB8fHx8MTcxMzY4NDI1MHww&force=true&w=640" alt="testimonial 1"/>
                    <x-user-ratings.avatar src="https://unsplash.com/photos/c_GmwfHBDzk/download?ixid=M3wxMjA3fDB8MXxzZWFyY2h8M3x8cGVyc29ufGVufDB8fHx8MTcxMzY4NDI1MHww&force=true&w=640" alt="testimonial 2"/>
                    <x-user-ratings.avatar src="https://unsplash.com/photos/QXevDflbl8A/download?ixid=M3wxMjA3fDB8MXxzZWFyY2h8NHx8cGVyc29ufGVufDB8fHx8MTcxMzY4NDI1MHww&force=true&w=640" alt="testimonial 3"/>
                    <x-user-ratings.avatar src="https://unsplash.com/photos/mjRwhvqEC0U/download?ixid=M3wxMjA3fDB8MXxzZWFyY2h8Nnx8cGVyc29ufGVufDB8fHx8MTcxMzY4NDI1MHww&force=true&w=640" alt="testimonial 4"/>
                    <x-user-ratings.avatar src="https://unsplash.com/photos/C8Ta0gwPbQg/download?ixid=M3wxMjA3fDB8MXxzZWFyY2h8MTl8fHBlcnNvbnxlbnwwfHx8fDE3MTM2ODQyNTB8MA&force=true&w=640" alt="testimonial 5"/>
                </x-slot>

                {{ __('Join the best SaaS developers who are using SaaSykit to build their SaaS.') }}
            </x-user-ratings> --}}

            {{-- <div class="mx-auto md:max-w-3xl lg:max-w-5xl">
                <img class="drop-shadow-2xl mt-8 transition hover:scale-101 rounded-2xl" src="{{URL::asset('/images/features/hero-image.png')}}" />
            </div> --}}

        </div>
    </x-section.hero>

    <x-section.columns class="max-w-none md:max-w-6xl pt-16" id="features">
        <x-section.column>
            <div x-intersect="$el.classList.add('slide-in-top')">
                <x-heading.h6 class="text-primary-500">
                    {{ __('Wurk toolkit') }}
                </x-heading.h6>
                <x-heading.h2 class="text-primary-900">
                    {{ __('Complete Kit for Small to Medium Sized Businesses') }}
                </x-heading.h2>
            </div>

            <p class="mt-4">
                {{ __('We belive every business should thrive and eventually mature, and by so doing we support businesses of all sizes, from a 1 band business toForune 500, be rest assured of efficiency on your business needs.') }}
            </p>
            <p class="mt-4">
                {{ __('Use our affordable toolkits to automae your business processes from accounting to brand management to engineered solutions, all at affordable prices.') }}
            </p>
            <p class="pt-4">
                {{ __('Powered by:') }}
            </p>
            <div class="flex gap-3 pt-1">
                <a href="https://stripe.com/" target="_blank">
                    <img src="{{URL::asset('/images/payment-providers/stripe.png')}}" class="h-12 py-2 px-2 border border-primary-50 rounded-lg" />
                </a>
                <a href="https://www.paddle.com/" target="_blank">
                    <img src="{{URL::asset('/images/payment-providers/paddle.png')}}" class="h-12 py-2 px-2 border border-primary-50 rounded-lg" />
                </a>
            </div>
        </x-section.column>

        <x-section.column>
            <img src="{{URL::asset('/images/features/businessguy.png')}}" class="rounded-2xl" dir="right" ></img>
        </x-section.column>

    </x-section.columns>

    <x-section.columns class="max-w-none md:max-w-6xl mt-6" >
        <x-section.column>
            <div x-intersect="$el.classList.add('slide-in-top')">
                <x-heading.h6 class="text-primary-500">
                    {{ __('Make your move') }}
                </x-heading.h6>
                <x-heading.h2 class="text-primary-900">
                    {{ __('Products, Plans & Pricing.') }}
                </x-heading.h2>
            </div>

            <p class="mt-4">
                {{ __('Create and manage your products, plans, and pricing, set features for each plan, mark a plan as featured, and more.') }}
            </p>

            <p class="mt-4">
                {{ __('Rewards your customers with discounts and manage all that from a beautiful admin panel.') }}
            </p>
        </x-section.column>


    </x-section.columns>


    <x-section.columns class="max-w-none md:max-w-6xl mt-6" >
        <x-section.column>
            <img src="{{URL::asset('/images/features/plans.png')}}" class="rounded-2xl"/>
        </x-section.column>

        <x-section.column>
            <img src="{{URL::asset('/images/features/plans.png')}}" class="rounded-2xl"/>
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


    <div class="text-center mt-16" x-intersect="$el.classList.add('slide-in-top')">
        <x-heading.h6 class="text-primary-500">
            {{ __('Can\'t get more beautiful and easy to create your website') }}
        </x-heading.h6>
        <x-heading.h2 class="text-primary-900">
            {{ __('Absolutely Fascinating') }}
        </x-heading.h2>
    </div>

    <p class="text-center py-4">{{ __('Manage your SaaS application from a beautiful admin panel powered by Filament') }}</p>

    <div class="text-center pt-6 mx-auto max-w-5xl ">
        <img src="{{URL::asset('/images/features/admin-panel.png')}}" >
    </div>

    <div class="mx-4 mt=16">
        <x-heading.h6 class="text-center mt-20 text-primary-500" id="pricing">
            {{ __('We worked for Months, So You Can Ship in Days') }}
        </x-heading.h6>
        <x-heading.h2 class="text-primary-900 text-center">
            {{ __('Launch your SaaS Today') }}
        </x-heading.h2>
    </div>

    <div class="pricing">
        <x-plans.all calculate-saving-rates="true" show-default-product="1"/>
        <x-products.all />
    </div>

    <div class="text-center mt-24 mx-4" id="faq">
        <x-heading.h6 class="text-primary-500">
            {{ __('FAQ') }}
        </x-heading.h6>
        <x-heading.h2 class="text-primary-900">
            {{ __('Got a Question?') }}
        </x-heading.h2>
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
                    <li>{{ __('Admin Panel: Manage your SaaS application from a beautiful admin panel powered by ') }} <a href="https://filamentphp.com/" target="_blank" rel="noopener noreferrer">Filament</a>.</li>
                    <li>{{ __('User Dashboard: Your customers can manage their subscriptions, change payment method, upgrade plan, cancel subscription, and more from a beautiful user dashboard powered by') }} <a href="https://filamentphp.com/" target="_blank" rel="noopener noreferrer">Filament</a>.</li>
                    <li>{{ __('Automated Tests: Comes with automated tests for critical components of the application.') }}</li>
                    <li>{{ __('One-line deployment: Provision your server and deploy your application easily with integrated') }} <a href="https://deployer.org/" target="_blank" rel="noopener noreferrer">Deployer</a> {{ __('  support.') }}</li>
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
                    {{ __('Of course! we offer email and discord support to help you with any issues you might face or questions you have. Write us an email at') }} <a href="mailto:{{config('app.support_email')}}" class="text-primary-500 hover:underline">{{config('app.support_email')}}</a> {{ __('or join our') }} <a href="{{config('app.social_links.discord')}}">{{ __('discord server')}}</a> {{ __('to get help.')}}
                </p>

            </x-accordion.item>

            <x-accordion.item active="false" name="faqs">
                <x-slot name="title">{{'What Tech stack is used?'}}</x-slot>

                <p>
                    {{ __('SaaSykit is built on top of') }} <a href="https://laravel.com" target="_blank">Laravel</a> {{ __('Laravel, the most popular PHP framework, and') }} <a target="_blank" href="https://filamentphp.com/">Filament</a> {{ __(', a beautiful and powerful admin panel for Laravel. It also uses TailwindCSS, AlpineJS, and Livewire.')}}
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
                    {{ __('Yes, we offer a 14-day money-back guarantee. If you are not satisfied with SaaSykit, you can request a refund within 14 days of your purchase. Please write us an email at') }} <a href="mailto:{{config('app.support_email')}}" class="text-primary-500 hover:underline">{{config('app.support_email')}}</a> {{ __('to request a refund.')}}
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
                    {{ __('Yes, a demo is available to help you get a feel of SaaSykit. You can find the demo') }} <a href="https://saasykit.com/demo" target="_blank" rel=”nofollow” >here</a>.
                </p>

            </x-accordion.item>

            <x-accordion.item active="false" name="faqs">
                <x-slot name="title">{{'Is there documentation available?'}}</x-slot>

                <p>
                    {{ __('Yes, an extensive documentation is available to help you get started with SaaSykit. You can find the documentation ')}} <a href="https://saasykit.com/docs" target="_blank">here</a>.
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
