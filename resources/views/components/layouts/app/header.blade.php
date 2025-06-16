
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

  /*.navbar-start {width: 25% !important}*/
  /*.navbar-end {width: 25% !important}*/

  .rounded-menu-links {
      background: #fff;
      margin: 10px;
      box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.12), 0px 8px 32px rgba(0, 0, 0, 0.08) !important;
      border-radius: 28px !important;
      height:100%;
  }

  .menu-links:active {
      background-image: linear-gradient(to right, #918ef5, #3ff5e4) !important;
      border-radius: 28px !important;
      color: white !important;
  }

  .hi .active {background-image: linear-gradient(to right, #918ef5, #3ff5e4) !important;
      border-radius: 28px !important;
      color: white !important;}

  .menu-links:hover {
      background-image: linear-gradient(to right, #3ff5e4, #918ef5);
      border-radius: 28px;
      color: white;
  }


  .menu-links .hover:hover,   .menu-links .active:active
  {
      --tw-bg-opacity: 1;
      background-color: #028be5;
      background-image: linear-gradient(to right, #3ff5e4, #918ef5);
      border-radius: 28px;
      color: white;
      padding:10px;
  }

  .menu :where(li ul) {
      position: relative;
      white-space: nowrap;
      margin-inline-start: 0;
      padding-inline-start: 0;
  }

  .menu :where(li ul):before {
      display:none
  }

  </style>
<!-- This is an example component -->
<link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />

    <nav class="border-gray-200">
        <div class="navbar max-w-full mx-auto w-full px-0  lg:px-20 block lg:flex  bg-base-100 text-primary-50 justify-between">
            <div class="navbar-start w-full ml-1">
                            <div class="dropdown">
                                <div class="flex justify-items-start content-center w-100" style="align-items: baseline;">
                                    <button onmouseover="" id="dropdownNavbarLink" data-target="ham-menu" class="dropdown-toggle flex
            items-center justify-between text-md font-400 block py-2 px-3 btn btn-ghost text-black lg:hidden">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
                                    </button>
                                    <div>
                                        <img src="{{asset(config('app.logo.dark') )}}" class="h-6" alt="Logo"/>
                                    </div>
                                </div>
{{--                                <ul class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow lg:hidden">--}}
{{--                                    <x-layouts.app.navigation-links-mobile></x-layouts.app.navigation-links-mobile>--}}
{{--                                </ul>--}}
                                <ul class="flex-col md:flex-row flex  w-100 lg:hidden">
                                        <x-layouts.app.navigation-links-mobile></x-layouts.app.navigation-links-mobile>
                                </ul>
                            </div>
            </div>
            <div class="navbar-center hidden lg:flex">
                <ul class="flex-col md:flex-row flex md:space-x-8 mt-4 md:mt-0 md:text-sm md:font-medium">
                    <x-nav>
                        <x-layouts.app.navigation-links></x-layouts.app.navigation-links>
                    </x-nav>
                </ul>
            </div>
{{--            <div class="navbar-end w-6/12 mr-1">--}}
{{--                @auth--}}
{{--                    <x-layouts.app.user-menu></x-layouts.app.user-menu>--}}
{{--                @else--}}
{{--                    <x-link class="hidden md:block text-block text-bold"--}}
{{--                            href="https://store.wurkapps.com/index.php/login">{{ __('Sign in') }}</x-link>--}}
{{--                    <x-button-link.secondary class="hidden xl:block" elementType="a"--}}
{{--                                             href="https://store.wurkapps.com/index.php/store/wurk-apps">{{ __('Get started') }}</x-button-link.secondary>--}}
{{--                @endauth--}}
{{--            </div>--}}
        </div>
    </nav>

{{--<script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>--}}
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
