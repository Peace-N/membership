
<li>
    <button id="dropdownNavbarLinkM" data-dropdown-toggle="dropdownNavbarM" class="text-md text-black font-400 flex py-2 px-3 md:p-0 rounded hover:bg-primary-600 md:hover:bg-transparent md:hover:text-primry-500 md:dark:hover:text-primary-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 flex items-center justify-between w-full md:w-auto">Wurk Products <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
    <!-- Dropdown menu -->

    <div id="dropdownNavbarM" class="hidden bg-white text-base z-10 list-none divide-y divide-gray-100 rounded shadow my-4 w-44">
        <ul class="py-1" aria-labelledby="dropdownLargeButtonM">
            @foreach($portals as $portal)
            <li>
                <a href="https://{{$portal->portal}}" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">{{$portal->name}}</a>
            </li>
            @endforeach
        </ul>
        <div class="py-1">
            @if(auth()->user())
            <a href="/logout" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Sign out</a>
            @else
            <a href="https://store.wurk.africa/index.php/login" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Sign in</a>
            @endif
        </div>
    </div>
</li>
{{--<x-nav.item href="https://webstore.design">{{ __('Websites and Hosting') }}</x-nav.item>--}}
{{--<x-nav.item href="https://crm.wurk.africa">{{ __('CRM') }}</x-nav.item>--}}
{{--<x-nav.item route="pricing">{{ __('Pricing') }}</x-nav.item>--}}
{{--<x-nav.item href="/login">{{ __('Account Center') }}</x-nav.item>--}}
{{--<a href="{{ str_starts_with($route, '#') ? (route('home') . $route) : $route }}" --}}

<a href="https://webstore.design" class="text-md font-400 block py-2 px-3 md:p-0 rounded hover:bg-primary-600 md:hover:bg-transparent md:hover:text-primry-500 md:dark:hover:text-primary-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 text-black">{{ __('Websites and Hosting') }}</a>
<a href="https://crm.wurk.africa" class="text-md font-400 block py-2 px-3 md:p-0 rounded hover:bg-primary-600 md:hover:bg-transparent md:hover:text-primry-500 md:dark:hover:text-primary-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 text-black">{{ __('CRM') }}</a>
<a href="https://store.wurk.africa/index.php/store/wurk-apps" class="text-md font-400 block py-2 px-3 md:p-0 rounded hover:bg-primary-600 md:hover:bg-transparent md:hover:text-primry-500 md:dark:hover:text-primary-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 text-black">Store</a>
<a href="https://store.wurk.africa/index.php/login" class="text-md font-400 block py-2 px-3 md:p-0 rounded hover:bg-primary-600 md:hover:bg-transparent md:hover:text-primry-500 md:dark:hover:text-primary-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 text-black">{{ __('Account Center') }}</a>
<a href="/page/category/support" class="text-md font-400 block py-2 px-3 md:p-0 rounded hover:bg-primary-600 md:hover:bg-transparent md:hover:text-primry-500 md:dark:hover:text-primary-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 text-black">{{ __('Help & Support') }}</a>

