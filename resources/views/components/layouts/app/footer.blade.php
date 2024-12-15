<x-section.columns class="max-w-full w-full mt-6  p-10" style="background: rgba(229,235,255,0.4); border-bottom: 1px solid #ccc;">
    <div class="mx-auto text-center px-4">
        <p class="text-primary-900">Need help? Find help in our knowledgebase or simply chat to us .</p>
    </div>
</x-section.columns>
<x-section.columns class="max-w-full w-full   p-6" >
    <div class="mx-auto text-center px-4">
        <p class="text-primary-900"><small><strong>Wurk and its subsidiaries are registered services provider.</strong></small></p>
    </div>
</x-section.columns>

<footer class="bg-black text-white">
    <div class="mx-auto w-full mx-auto px-20 p-4 py-8 lg:py-8">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <ul class="flex flex-col text-sm mt-2 mb-2">
                    <li class="text-sm mb-1 text-gray-300"><a href="#">About Wurk</a></li>
                    @foreach($aboutFooter->pages as $pages)
                        <li class="text-xs mt-2"><a target="_blank" href="{{route('page.view', $pages->slug)}}" class="text-gray-400 dark:text-gray-400 hover:text-primary-50">{{ $pages->title  }}</a></li>
                    @endforeach
                    <li class="text-xs mt-2"><a target="_blank" href="{{route('blog')}}" class="text-gray-400 dark:text-gray-400 hover:text-primary-50">{{ __('Blog') }}</a></li>
                    <li class="text-xs mt-2"><a target="_blank" href="{{route('page.category', 'legal')}}" class="text-gray-400 dark:text-gray-400 hover:text-primary-50">{{ __('Legal') }}</a></li>

                </ul>
            </div>

            <div class="mb-6 md:mb-0">
                <ul class="flex flex-col text-sm mt-2 mb-2">
                    <li class="text-sm mb-1 text-gray-300"><a href="#">Support@Wurk</a></li>
                    @foreach($supportFooter->pages as $pages)
                        <li class="text-xs mt-2"><a target="_blank" href="{{$pages->slug === 'product-support' ? '/page/category/support' : route('page.view', $pages->slug)}}" class="text-gray-400 dark:text-gray-400 hover:text-primary-50">{{ $pages->title  }}</a></li>
                    @endforeach

                </ul>
            </div>

            <div class="mb-6 md:mb-0">
                <ul class="flex flex-col text-sm mt-2 mb-2">
                    <li class="text-sm mb-1 text-gray-300"><a href="#">Resources</a></li>
                    @foreach($resourcesFooter->pages as $pages)
                        <li class="text-xs mt-2"><a target="_blank" href="{{route('page.view', $pages->slug)}}" class="text-gray-400 dark:text-gray-400 hover:text-primary-50">{{ $pages->title  }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="mb-6 md:mb-0">
                <ul class="flex flex-col text-sm mt-2 mb-2">
                    <li class="text-sm mb-1 text-gray-300"><a href="#">Partner Programmes</a></li>
                    @foreach($affiliatesFooter->pages as $pages)
                        <li class="text-xs mt-2"><a target="_blank" href="https://affiliates.wurk.africa" class="text-gray-400 dark:text-gray-400 hover:text-primary-50">{{ $pages->title  }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="mb-6 md:mb-0">
                <ul class="flex flex-col text-sm mt-2 mb-2">
                    <li class="text-sm mb-1 text-gray-300"><a href="#">Account</a></li>
                    <li class="text-xs mt-2"><a target="_blank" href="{{route('blog')}}" class="text-gray-400 dark:text-gray-400 hover:text-primary-50">{{ __('My Products') }}</a></li>
                    <li class="text-xs mt-2"><a href="{{route('blog')}}" class="text-gray-400 dark:text-gray-400 hover:text-primary-50">{{ __('Billing & Subscriptions') }}</a></li>
                    <li class="text-xs mt-2"><a href="{{route('blog')}}" class="text-gray-400 dark:text-gray-400 hover:text-primary-50">{{ __('Become a Member') }}</a></li>
                </ul>
            </div>

            <div class="mb-6 md:mb-0">
                <ul class="flex flex-col text-sm mt-2 mb-2">
                    <li class="text-sm mb-1 text-gray-300"><a href="#">Shopping</a></li>
                    @foreach($portals as $portal)
                    <li class="text-xs mt-2"><a target="_blank" href="https://{{$portal->portal}}" class="text-gray-400 dark:text-gray-400 hover:text-primary-50">{{ $portal->name }}</a></li>
                    @endforeach
                </ul>
            </div>





        </div>
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="/" class="flex items-center">
                    <img src="{{asset(config('app.logo.light') )}}" class="h-6 me-3" alt="Logo" />
                </a>
            </div>
        </div>
        <hr class="my-6 border-primary-300 sm:mx-auto lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-xs text-primary-100 sm:text-center dark:text-gray-400">© {{ date('Y') }} <a href="/" class="hover:underline text-primary-100">{{ config('app.name') }}™</a>. {{ __('All rights reserved.') }}
          </span>
            <div class="flex gap-3 mt-4 sm:justify-center sm:mt-0">
                @if (!empty(config('app.social_links.facebook')))
                    <x-link.social-icon name="facebook" title="{{ __('Facebook page') }}" link="{{config('app.social_links.facebook')}}" class="text-primary-100 border-primary-200 hover:text-primary-50"/>
                @endif
                @if (!empty(config('app.social_links.instagram')))
                    <x-link.social-icon name="instagram" title="{{ __('Instagram page') }}" link="{{config('app.social_links.instagram')}}" class="text-primary-100 border-primary-200 hover:text-primary-50"/>
                @endif
                @if (!empty(config('app.social_links.youtube')))
                    <x-link.social-icon name="youtube" title="{{ __('YouTube page') }}" link="{{config('app.social_links.youtube')}}" class="text-primary-100 border-primary-200 hover:text-primary-50"/>
                @endif
                @if (!empty(config('app.social_links.x')))
                    <x-link.social-icon name="x" title="{{ __('Twitter page') }}" link="{{config('app.social_links.x')}}" class="text-primary-100 border-primary-200 hover:text-primary-50"/>
                @endif
{{--                @if (!empty(config('app.social_links.linkedin')))--}}
                    <x-link.social-icon name="linkedin" title="{{ __('Linkedin page') }}" link="{{config('app.social_links.linkedin')}}" class="text-primary-100 border-primary-200 hover:text-primary-50"/>
{{--                    <x-link.social-icon name="linkedin" title="{{ __('Linkedin page') }}" link="{{config('app.social_links.linkedin')}}" class="text-primary-100 border-primary-200 hover:text-primary-50"/>--}}
{{--                @endif--}}
                @if (!empty(config('app.social_links.github')))
                    <x-link.social-icon name="github" title="{{ __('Github page') }}" link="{{config('app.social_links.github')}}" class="text-primary-100 border-primary-200 hover:text-primary-50"/>
                @endif
                @if (!empty(config('app.social_links.discord')))
                    <x-link.social-icon name="discord" title="{{ __('Discord community') }}" link="{{config('app.social_links.discord')}}" class="text-primary-100 border-primary-200 hover:text-primary-50"/>
                @endif
            </div>
        </div>
    </div>
</footer>
