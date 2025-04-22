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
                <div class="relative tab-group">
                    <div class="flex bg-stone-100 p-0.5 relative rounded-lg" role="tablist" >
                        <div class="absolute shadow-sm top-1 left-0.5 h-8 bg-gray-200 rounded-md transition-all duration-300 transform scale-x-0 translate-x-0 tab-indicator z-0"></div>
                        <a href="#" class="tab-link flex items-center text-sm active inline-block py-2 px-4 text-stone-800 transition-all duration-300 relative z-1 mr-1 " data-dui-tab-target="tabm3-group2">
                            <svg width="1.5em" height="1.5em" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="currentColor" class="mr-2 h-4 w-4">
                                <path d="M21 7.35304L21 16.647C21 16.8649 20.8819 17.0656 20.6914 17.1715L12.2914 21.8381C12.1102 21.9388 11.8898 21.9388 11.7086 21.8381L3.30861 17.1715C3.11814 17.0656 3 16.8649 3 16.647L2.99998 7.35304C2.99998 7.13514 3.11812 6.93437 3.3086 6.82855L11.7086 2.16188C11.8898 2.06121 12.1102 2.06121 12.2914 2.16188L20.6914 6.82855C20.8818 6.93437 21 7.13514 21 7.35304Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M3.52844 7.29357L11.7086 11.8381C11.8898 11.9388 12.1102 11.9388 12.2914 11.8381L20.5 7.27777" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M12 21L12 12" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M11.6914 11.8285L3.89139 7.49521C3.49147 7.27304 3 7.56222 3 8.01971V16.647C3 16.8649 3.11813 17.0656 3.30861 17.1715L11.1086 21.5048C11.5085 21.727 12 21.4378 12 20.9803V12.353C12 12.1351 11.8819 11.9344 11.6914 11.8285Z" fill="currentColor" stroke="currentColor" stroke-linejoin="round"></path>
                            </svg> Managed Services </a>
                        <a href="#" class="tab-link flex items-center text-sm inline-block py-2 px-4 text-stone-800 transition-all duration-300 relative z-1 mr-1 " data-dui-tab-target="tabm4-group2">
                            <svg width="1.5em" height="1.5em" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="currentColor" class="mr-2 h-4 w-4">
                                <path d="M12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M4.271 18.3457C4.271 18.3457 6.50002 15.5 12 15.5C17.5 15.5 19.7291 18.3457 19.7291 18.3457" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M12 12C13.6569 12 15 10.6569 15 9C15 7.34315 13.6569 6 12 6C10.3431 6 9 7.34315 9 9C9 10.6569 10.3431 12 12 12Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg> Self Managed Services </a>
                    </div>
                    <div class="tab-content-container">
                        <div id="tabm3-group2" class="tab-content text-stone-500 text-sm block">
                            <ul class="flex flex-col text-sm  mb-2">
                                @foreach($portals as $index => $portal)
                                    @if($index === 0)
                                        <li class="text-xs "><a target="_blank" href="https://{{$portal->portal}}" class="text-gray-400 dark:text-gray-400 hover:text-primary-50">{{ $portal->name }}</a></li>
                                    @else
                                        <li class="text-xs mt-2"><a target="_blank" href="https://{{$portal->portal}}" class="text-gray-400 dark:text-gray-400 hover:text-primary-50">{{ $portal->name }}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <div id="tabm4-group2" class="tab-content text-stone-500 text-sm hidden">
                            <ul class="flex flex-col text-sm  mb-2">
                                @foreach($portals as $index => $portal)
                                    @if($index === 0)
                                        <li class="text-xs "><a target="_blank" href="https://{{$portal->selfmanaged}}" class="text-gray-400 dark:text-gray-400 hover:text-primary-50">{{ $portal->name }}</a></li>
                                    @else
                                        <li class="text-xs mt-2"><a target="_blank" href="https://{{$portal->selfmanaged}}" class="text-gray-400 dark:text-gray-400 hover:text-primary-50">Self Managed {{ $portal->name }}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

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
