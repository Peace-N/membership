<div>
    @foreach($categories as $category)

            <x-tab-slider.tab-content id="{{$category->name}}-1">
                <x-section.columns style="flex-wrap: wrap !important;" class="px-0 p-0 py-0 sm:px-0 md:px-0 lg:px-0 flex-wrap md:flex-wrap mx-auto w-full lg:py-4" id="{{$category->name}}">
                    <x-section.column class="w-full sm:w-full md:w-full lg:w-6/12 xl:w-8/12"  style="flex-basis: inherit;padding: 0.75rem;">
                        <div class=mx-auto">
                            <img src="{{\Illuminate\Support\Facades\Storage::url($category->image)}}" class="drop-shadow-xl rounded-2xl"/>
                        </div>

                    </x-section.column>

                    <x-section.column class="w-full sm:w-full md:w-full lg:w-6/12 xl:w-4/12 flex flex-col" style="flex-basis: inherit; padding: 0.75rem;">
                        @foreach($category->products as $key => $product)
                        @if($key === 0)
                        <div
                            class="flex flex-col w-full rounded-2xl bg-cover px-[30px] py-[30px] md:px-[14px]"
                            style='background: radial-gradient(#000000, #4e4e4e);'
                        >
                            <div class="w-full">
                                <h4 class="mb-[14px] max-w-full text-xl md:text-1xl font-light text-white md:text-3xl md:leading-[42px] flex items-center gap-2.5">
                                    <span class="w-[27px] mr-4 text-[aqua]">{{ svg($category->icon) }}</span> {{$category->name}} <small class="font-extralight text-xs">{{$product->name}}</small>
                                </h4>
                                <p class="mb-[20px] md:text-sm max-w-full  font-medium text-white ">
                                    {{$product->description}}
                                </p>
                                <div class="mt-[4px] flex items-center justify-between sm:justify-start 2xl:gap-4">
                                    @if($category->name === 'Domains')
                                        <form action="https://store.wurk.africa/cart.php" class="w-full mt-[4px] flex items-center justify-between sm:justify-start 2xl:gap-4">
                                            <input name="a" type="hidden" value="add" />
                                            <input name="domain" type="hidden" value="register" />
                                            <input name="systpl" type="hidden" value="hostiko" />
                                            <input name="layout" type="hidden" value="90" />
                                    <input name="query" style="border-radius: .5rem 0 0 .5rem; height:4rem" type="text" placeholder="Search for a domain name" class="input input-bordered w-full max-w-xl" />

                                    <button type="submit" style="    border-radius: 0 .5rem  .5rem 0; background: radial-gradient(#c2c2c2, #ffffff); height:4rem" class="text-black linear rounded-md bg-[#01ffff] px-4 py-2 text-center text-base font-medium transition duration-200 hover:!bg-white/80 active:!bg-white/70">
                                        Find Domain
                                    </button>
                                        </form>
                                    @else
                                        <a href="https://{{$category->portal}}" class="text-black linear rounded-md bg-white px-4 py-2 text-center text-base font-medium transition duration-200 hover:!bg-white/80 active:!bg-white/70">
                                            Managed Plans
                                        </a>&nbsp;
                                    <a href="https://{{$category->selfmanaged}}" class="text-base linear rounded-md bg-grey-100 font-medium text-white hover:text-lightPrimary 2xl:ml-2">
                                        Self Managed Plans
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach

                            <div
                                class=" mt-2 flex flex-col w-full rounded-2xl bg-cover px-[30px] py-[30px] md:px-[14px]"
                                style='background: radial-gradient(#2fa49f, #d6ecf9)'
                            >
                                <div class="w-full">
                                    <h5 class="mb-[10px] max-w-full text-xl font-extralight text-black md:text-2xl md:leading-[32px] ">
                                        Ready to get started?
                                    </h5>
                                    <p class="mb-[20px] md:text-sm max-w-full  font-extralight text-black ">
                                        At Wurk we have multiple Apps to automate Business needs, to get started see our list of apps
                                        its as easy ABC to get onboard. We are ready for you, are you ready?
                                    </p>
                                    <div class="mt-[36px] text-center flex items-center justify-between gap-4 sm:justify-start 2xl:gap-10">
                                        <a href="https://store.wurk.africa/index.php/store/wurk-apps" class="text-black linear rounded-md bg-white px-4 py-2 text-center text-base font-medium transition duration-200 hover:!bg-white/80 active:!bg-white/70">
                                            Let's get started
                                        </a>
                                            <a href="https://store.wurk.africa/index.php/store/wurk-apps" class="text-white linear rounded-md bg-black px-4 py-2 text-center text-base font-medium transition duration-200 hover:!bg-white/80 active:!bg-white/70">
                                            See Apps
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div
                                class=" mt-2 flex flex-col w-full rounded-2xl bg-white px-[10px] py-[10px] md:px-[14px]"
                                style='background: radial-gradient(rgba(192,192,192,0.82), #ffffff)'
                            >
                                <div class="w-full">
                                    <h5 class="mb-[10px] max-w-full text-xl font-extralight text-black md:text-2xl md:leading-[30px] ">
                                        In need of help and support?
                                    </h5>
                                    <div class="mt-[30px] text-center flex items-center justify-between gap-4 sm:justify-start 2xl:gap-10">
                                        <a href="/page/category/support" class="text-black linear rounded-md bg-white px-4 py-2 text-center text-base font-medium transition duration-200 hover:!bg-white/80 active:!bg-white/70">
                                            See help desk
                                        </a>
                                    </div>
                                </div>
                            </div>

                    </x-section.column>
                </x-section.columns>

            </x-tab-slider.tab-content>

    @endforeach
</div>
