
<li>
    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="text-md text-black font-400 flex py-2 px-3 md:p-0 rounded hover:bg-primary-600 md:hover:bg-transparent md:hover:text-primry-500 md:dark:hover:text-primary-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 flex items-center justify-between w-full md:w-auto">Wurk Products <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
    <!-- Dropdown menu -->

    <div id="dropdownNavbar" class="hidden bg-white text-base z-10 list-none divide-y divide-gray-100 rounded shadow my-4 w-150">

        <div class="relative tab-group">
            <div class="flex bg-stone-100 p-0.5 relative rounded-lg" role="tablist" style="    background: #f2f2f2;margin: 7px;">
                <div class="absolute shadow-sm top-1 left-0.5 h-8 bg-gray-200 rounded-md transition-all duration-300 transform scale-x-0 translate-x-0 tab-indicator z-0"></div>
                <a style="border-right: 1px solid #ccc;" href="#" class="tab-link flex items-center text-sm active inline-block py-2 px-4 text-stone-800 transition-all duration-300 relative z-1 mr-1 hover:bg-primary-200 active:bg-primary-200" data-dui-tab-target="tabm1-group2">
                    <svg width="1.5em" height="1.5em" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="currentColor" class="mr-2 h-4 w-4">
                        <path d="M21 7.35304L21 16.647C21 16.8649 20.8819 17.0656 20.6914 17.1715L12.2914 21.8381C12.1102 21.9388 11.8898 21.9388 11.7086 21.8381L3.30861 17.1715C3.11814 17.0656 3 16.8649 3 16.647L2.99998 7.35304C2.99998 7.13514 3.11812 6.93437 3.3086 6.82855L11.7086 2.16188C11.8898 2.06121 12.1102 2.06121 12.2914 2.16188L20.6914 6.82855C20.8818 6.93437 21 7.13514 21 7.35304Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M3.52844 7.29357L11.7086 11.8381C11.8898 11.9388 12.1102 11.9388 12.2914 11.8381L20.5 7.27777" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M12 21L12 12" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M11.6914 11.8285L3.89139 7.49521C3.49147 7.27304 3 7.56222 3 8.01971V16.647C3 16.8649 3.11813 17.0656 3.30861 17.1715L11.1086 21.5048C11.5085 21.727 12 21.4378 12 20.9803V12.353C12 12.1351 11.8819 11.9344 11.6914 11.8285Z" fill="currentColor" stroke="currentColor" stroke-linejoin="round"></path>
                    </svg> Managed Services </a>
                <a href="#" class="tab-link flex items-center text-sm inline-block py-2 px-4 text-stone-800 transition-all duration-300 relative z-1 mr-1 hover:bg-primary-200 active:bg-primary-200" data-dui-tab-target="tabm2-group2">
                    <svg width="1.5em" height="1.5em" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="currentColor" class="mr-2 h-4 w-4">
                        <path d="M12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M4.271 18.3457C4.271 18.3457 6.50002 15.5 12 15.5C17.5 15.5 19.7291 18.3457 19.7291 18.3457" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M12 12C13.6569 12 15 10.6569 15 9C15 7.34315 13.6569 6 12 6C10.3431 6 9 7.34315 9 9C9 10.6569 10.3431 12 12 12Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg> Self Managed Services </a>
                </div>
            <div class="mt-4 tab-content-container">
                <div id="tabm1-group2" class="tab-content text-stone-500 text-sm block">
                    <ul class="py-1" aria-labelledby="dropdownLargeButton">
                        @foreach($portals as $portal)
                            <li>
                                <a href="https://{{$portal->portal}}" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">{{$portal->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div id="tabm2-group2" class="tab-content text-stone-500 text-sm hidden">
                    <ul class="py-1" aria-labelledby="dropdownLargeButton">
                        @foreach($portals as $portal)
                            <li>
                                <a href="https://{{$portal->selfmanaged}}" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Self Managed {{$portal->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="py-1">
            @if(auth()->user())
            <a href="/logout" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Sign out</a>
            @else
            <a href="https://store.wurkapps.com/index.php/login" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Sign in</a>
            @endif
        </div>
    </div>
</li>
{{--<x-nav.item href="https://webstore.design">{{ __('Websites and Hosting') }}</x-nav.item>--}}
{{--<x-nav.item href="https://crm.wurk.africa">{{ __('CRM') }}</x-nav.item>--}}
{{--<x-nav.item route="pricing">{{ __('Pricing') }}</x-nav.item>--}}
{{--<x-nav.item href="/login">{{ __('Account Center') }}</x-nav.item>--}}
{{--<a href="{{ str_starts_with($route, '#') ? (route('home') . $route) : $route }}" --}}

<a href="https://webstore.design" class="hidden xl:block text-md font-400 py-2 px-3 md:p-0 rounded hover:bg-primary-600 md:hover:bg-transparent md:hover:text-primry-500 md:dark:hover:text-primary-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 text-black">{{ __('Websites and Hosting') }}</a>
<a href="https://crm.wurk.africa" class="text-md font-400 block py-2 px-3 md:p-0 rounded hover:bg-primary-600 md:hover:bg-transparent md:hover:text-primry-500 md:dark:hover:text-primary-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 text-black">{{ __('CRM') }}</a>
<a href="https://store.wurkapps.com/index.php/store/wurk-apps" class="text-md font-400 block py-2 px-3 md:p-0 rounded hover:bg-primary-600 md:hover:bg-transparent md:hover:text-primry-500 md:dark:hover:text-primary-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 text-black">Store</a>
<a href="https://store.wurkapps.com/index.php/login" class="text-md font-400 block py-2 px-3 md:p-0 rounded hover:bg-primary-600 md:hover:bg-transparent md:hover:text-primry-500 md:dark:hover:text-primary-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 text-black">{{ __('Account Center') }}</a>
<a href="/page/category/support" class="text-md font-400 block py-2 px-3 md:p-0 rounded hover:bg-primary-600 md:hover:bg-transparent md:hover:text-primry-500 md:dark:hover:text-primary-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 text-black">{{ __('Help & Support') }}</a>

