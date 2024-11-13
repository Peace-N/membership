{{-- <nav class="relative bg-primary-500 text-white border-gray-200 dark:bg-gray-900">
    <div class="navbar max-w-screen-xl items-center mx-auto">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden me-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
                </div>
                <ul tabindex="0" class="menu menu-lg dropdown-content mt-3 z-[1] p-2 border border-primary-50 shadow-2xl shadow-primary-500/50 bg-primary-500 rounded-box w-52">
                    <x-layouts.app.navigation-links></x-layouts.app.navigation-links>
                </ul>
            </div>
            <a href="/" class="flex justify-center items-center">
                <img src="{{asset(config('app.logo.light') )}}" class="h-6" alt="Logo" />
            </a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <x-nav>
                <x-layouts.app.navigation-links></x-layouts.app.navigation-links>
            </x-nav>
        </div>
        <div class="navbar-end">
            @auth
                <x-layouts.app.user-menu></x-layouts.app.user-menu>
            @else
                <x-link class="hidden md:block text-primary-50" href="{{route('login')}}">{{ __('Login') }}</x-link>
                <x-button-link.secondary elementType="a" href="#pricing">{{ __('Get started') }}</x-button-link.secondary>
            @endauth
        </div>
    </div>
</nav> --}}
<style>

  /* ––––––––––––––––––––––––––––––––––––––––––––––––––
    Based on: https://codepen.io/nickelse/pen/YGPJQG
    Influenced by: https://sproutsocial.com/
  –––––––––––––––––––––––––––––––––––––––––––––––––– */


  /* #Mega Menu Styles
  –––––––––––––––––––––––––––––––––––––––––––––––––– */

  .svgw {
    background: #9dffda;
    padding: 5px;
    border-radius: 9px;
    margin-right: 4px;
    stroke: black;
    width: 2rem;
    height: 2rem;
  }
  .mega-menu {
    display: none;
    left: 0;
    position: absolute;
    text-align: left;
    width: 100%;
    z-index:11;
    margin-left: 20px;
    margin-right: 20px;
    width: 98%;
    background: white !important;
    margin-top:22px !important;
  }



  /* #hoverable Class Styles
  –––––––––––––––––––––––––––––––––––––––––––––––––– */
  .hoverable {
    position: static;
  }

  .hoverable > a:after {
    content: "\25BC";
    font-size: 10px;
    padding-left: 6px;
    position: relative;
    top: -1px;
  }

  .hoverable:hover .mega-menu {
    display: block;
  }


  /* #toggle Class Styles
  –––––––––––––––––––––––––––––––––––––––––––––––––– */

  .toggleable > label:after {
    justify-self: end;
    display: block;
    margin-top: -19px;
    height: .5rem;
    width: .5rem;
    transform: rotate(45deg);
    transition-property: transform, margin-top;
    transition-duration: .3s;
    transition-timing-function: cubic-bezier(.4,0,.2,1);
    content: "";
    transform-origin: 75% 75%;
    box-shadow: 2px 2px;
    pointer-events: none;
    position: absolute;
    margin-left: 124px;
  }

  .toggle-input {
    display: none;
  }
  .toggle-input:not(checked) ~ .mega-menu {
    display: none;
  }

  .toggle-input:checked ~ .mega-menu {
    display: block;
  }

  .toggle-input:checked + label {
    color: rgb(40 128 79)
    /* background: #2c5282; */

    /*@apply bg-blue-800 */
  }

  .toggle-input:checked ~ label:after {
    transform: rotate(225deg);
    margin-top: -18px;
  }

  .navbar-start {width: 25% !important}
  .navbar-end {width: 25% !important}

  </style>

<nav class="relative bg-white text-white border-gray-200 dark:bg-gray-900">
    <div class="navbar max-w-full mx-auto px-20	bg-base-100 text-primary-50">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
                </div>
                <ul class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                    <x-layouts.app.navigation-links></x-layouts.app.navigation-links>
                </ul>
            </div>
            <a href="/" class="flex justify-left items-left">
                <img src="{{asset(config('app.logo.dark') )}}" class="h-6" alt="Logo" />
            </a>
        </div>


        <div>
            <x-nav>
            <li class="toggleable hover:text-black" style="margin-right: 0">
                <input type="checkbox" value="selected" id="toggle-one" class="toggle-input">
                  <label for="toggle-one" class="block cursor-pointer text-black text-md text-bold ">Wurk Products</label>
                  <div role="toggle" class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-white" style="border-radius: 22px; margin-top: 20px;">
                    <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                      <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 pb-6 pt-6 lg:pt-3 bg-white">
                        <div style="display: inline-flex; align-items: center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 svgw">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
                              </svg>
                        <h3 class="font-300 text-xl text-primary-300 text-bold">Products</h3>
                        </div>
                        <li>
                          <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">Accounting</a>
                        </li>
                        <li>
                          <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">Bursaries</a>
                        </li>
                        <li>
                          <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">CRM</a>
                        </li>
                        <li>
                          <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">Careers</a>
                        </li>
                        <li>
                          <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">Funding</a>
                        </li>
                        <li>
                            <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">E-Learning</a>
                          </li>
                      </ul>
                      <ul class="px-4 w-full sm:w-1/2 lg:w-1/4  pb-6 pt-6 lg:pt-3">
                        <div style="display: inline-flex; align-items: center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 svgw">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
                              </svg>

                        <h3 class="font-300 text-xl text-primary-300 text-bold">Hosting & Domains</h3>
                        </div>                        <li>
                          <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">Category One Sublink</a>
                        </li>
                        <li>
                          <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">Category One Sublink</a>
                        </li>
                        <li>
                          <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">Category One Sublink</a>
                        </li>
                        <li>
                          <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">Category One Sublink</a>
                        </li>
                        <li>
                          <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">Category One Sublink</a>
                        </li>
                      </ul>
                      <ul class="px-4 w-full sm:w-1/2 lg:w-1/4  pb-6 pt-6 lg:pt-3">
                        <div style="display: inline-flex; align-items: center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 svgw">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
                              </svg>
                        <h3 class="font-300 text-xl text-primary-300 text-bold">Products</h3>
                        </div>                        <li>
                          <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">Category One Sublink</a>
                        </li>
                        <li>
                          <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">Category One Sublink</a>
                        </li>
                        <li>
                          <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">Category One Sublink</a>
                        </li>
                        <li>
                          <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">Category One Sublink</a>
                        </li>
                        <li>
                          <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">Category One Sublink</a>
                        </li>
                      </ul>
                      <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 pb-6 pt-6 lg:pt-3">
                        <div style="display: inline-flex; align-items: center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 svgw">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
                              </svg>
                        <h3 class="font-300 text-xl text-primary-300 text-bold">Products</h3>
                        </div>                        <li class="pt-3">
                          <img src="https://placehold.it/205x172">
                          </li>
                        </ul>
                        <ul class="px-4 w-full sm:w-1/2 lg:w-1/4  pb-6 pt-6 lg:pt-3">
                            <div style="display: inline-flex; align-items: center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 svgw">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
                                  </svg>
                            <h3 class="font-300 text-xl text-primary-300 text-bold">Products</h3>
                            </div>                            <li>
                              <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">Category One Sublink</a>
                            </li>
                            <li>
                              <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">Category One Sublink</a>
                            </li>
                            <li>
                              <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">Category One Sublink</a>
                            </li>
                            <li>
                              <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">Category One Sublink</a>
                            </li>
                            <li>
                              <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">Category One Sublink</a>
                            </li>
                          </ul>
                          <ul class="px-4 w-full sm:w-1/2 lg:w-1/4  pb-6 pt-6 lg:pt-3">
                            <div style="display: inline-flex; align-items: center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 svgw">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
                                  </svg>
                            <h3 class="font-300 text-xl text-primary-300 text-bold">Products</h3>
                            </div>                            <li>
                              <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">Category One Sublink</a>
                            </li>
                            <li>
                              <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">Category One Sublink</a>
                            </li>
                            <li>
                              <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">Category One Sublink</a>
                            </li>
                            <li>
                              <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">Category One Sublink</a>
                            </li>
                            <li>
                              <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">Category One Sublink</a>
                            </li>
                          </ul>
                          <ul class="px-4 w-full sm:w-1/2 lg:w-1/4  pb-6 pt-6 lg:pt-3">
                            <div style="display: inline-flex; align-items: center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 svgw">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
                                  </svg>
                            <h3 class="font-300 text-xl text-primary-300 text-bold">Products</h3>
                            </div>                            <li>
                              <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">Category One Sublink</a>
                            </li>
                            <li>
                              <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">Category One Sublink</a>
                            </li>
                            <li>
                              <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">Category One Sublink</a>
                            </li>
                            <li>
                              <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">Category One Sublink</a>
                            </li>
                            <li>
                              <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">Category One Sublink</a>
                            </li>
                          </ul>
                          <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 pb-6 pt-6 lg:pt-3">
                            <div style="display: inline-flex; align-items: center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 svgw">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 18.75a6 6 0 0 0 6-6v-1.5m-6 7.5a6 6 0 0 1-6-6v-1.5m6 7.5v3.75m-3.75 0h7.5M12 15.75a3 3 0 0 1-3-3V4.5a3 3 0 1 1 6 0v8.25a3 3 0 0 1-3 3Z" />
                                  </svg>

                            <h3 class="font-300 text-xl text-primary-300 text-bold">From our Creators</h3>
                            </div>                            <li class="pt-3">
                                <img src="{{URL::asset('/images/features/board.jpg')}}" class="rounded-2xl"/>
                            </li>
                            </ul>
                      </div>
                    </div>
                  </li>



                      <li class="toggleable hover:text-black" style="margin-right: 48px; mrgin-left:0">
                        <input type="checkbox"  id="toggle-3" class="toggle-input">
                          <label for="toggle-3" class="block cursor-pointer text-black text-md text-bold ">Wurk Services</label>
                          <div role="toggle" class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-black" style="    margin-top: 9px;">
                            <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                              <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 pb-6 pt-6 lg:pt-3 bg-white">
                                <div style="display: inline-flex; align-items: center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 svgw">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
                                      </svg>
                                <h3 class="font-300 text-xl text-primary-300 text-bold">Products</h3>
                                </div>                                <li>
                                  <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">Category One Sublink</a>
                                </li>
                                <li>
                                  <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">Category One Sublink</a>
                                </li>
                                <li>
                                  <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">Category One Sublink</a>
                                </li>
                                <li>
                                  <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">Category One Sublink</a>
                                </li>
                                <li>
                                  <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">Category One Sublink</a>
                                </li>
                              </ul>
                              <ul class="px-4 w-full sm:w-1/2 lg:w-1/4  pb-6 pt-6 lg:pt-3">
                                <div style="display: inline-flex; align-items: center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 svgw">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
                                      </svg>
                                <h3 class="font-300 text-xl text-primary-300 text-bold">Products</h3>
                                </div>                                <li>
                                  <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">Category One Sublink</a>
                                </li>
                                <li>
                                  <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">Category One Sublink</a>
                                </li>
                                <li>
                                  <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">Category One Sublink</a>
                                </li>
                                <li>
                                  <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">Category One Sublink</a>
                                </li>
                                <li>
                                  <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">Category One Sublink</a>
                                </li>
                              </ul>
                              <ul class="px-4 w-full sm:w-1/2 lg:w-1/4  pb-6 pt-6 lg:pt-3">
                                <div style="display: inline-flex; align-items: center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 svgw">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
                                      </svg>
                                <h3 class="font-300 text-xl text-primary-300 text-bold">Products</h3>
                                </div>                                <li>
                                  <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">Category One Sublink</a>
                                </li>
                                <li>
                                  <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">Category One Sublink</a>
                                </li>
                                <li>
                                  <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">Category One Sublink</a>
                                </li>
                                <li>
                                  <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">Category One Sublink</a>
                                </li>
                                <li>
                                  <a href="#" class="block p-1 hover:bg-black-600 text-black hover:text-gray-300 rounded-2xl">Category One Sublink</a>
                                </li>
                              </ul>
                              <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 pb-6 pt-6 lg:pt-3">
                                <div style="display: inline-flex; align-items: center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 svgw">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
                                      </svg>
                                <h3 class="font-300 text-xl text-primary-300 text-bold">Products</h3>
                                </div>                                <li class="pt-3">
                                  <img src="https://placehold.it/205x172">
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </li>
                </x-nav>
                </div>


                <div class="navbar-center hidden lg:flex">
            <x-nav>
                <x-layouts.app.navigation-links></x-layouts.app.navigation-links>
            </x-nav>
        </div>
        <div class="navbar-end">
            @auth
                <x-layouts.app.user-menu></x-layouts.app.user-menu>
            @else
                <x-link class="hidden md:block text-block text-bold" href="{{route('login')}}">{{ __('Sign in') }}</x-link>
                <x-button-link.secondary elementType="a" href="#pricing">{{ __('Get started') }}</x-button-link.secondary>
            @endauth
        </div>
        </div>
      </nav>
