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
                            style='background: radial-gradient(#000000, #4e4e4e); margin-bottom: 1rem'
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
                                        <form action="https://hosting.wurk.africa/cart.php" class="w-full mt-[4px] flex items-center justify-between sm:justify-start 2xl:gap-4">
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
                                        <a href="{{'/pricing?source=home&product_touch=' . $category->name }}" class="text-black linear rounded-md bg-white px-4 py-2 text-center text-base font-medium transition duration-200 hover:!bg-white/80 active:!bg-white/70">
                                            See Plans
                                        </a>&nbsp;
                                    <a href="{{$category->portal}}" class="text-base font-medium text-white hover:text-lightPrimary 2xl:ml-2">
                                        {{$category->name . ' Info'}}
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @elseif($key === 1)
                        <div
                            class="flex flex-col w-full rounded-2xl bg-cover px-[30px] py-[30px] md:px-[14px]"
                            style='background: radial-gradient(#c2c2c2, #ffffff)'
                        >
                            <div class="w-full">
                                <h4 class="mb-[14px] max-w-full text-xl md:text-1xl font-light text-black md:text-3xl md:leading-[42px] flex items-center gap-2.5">
                                    <span class="w-[27px] mr-4 text-[#676663]">{{ svg($category->icon) }}</span> {{$category->name}} <small class="font-extralight text-xs">{{$product->name}}</small>
                                </h4>
                                <p class="mb-[20px] max-w-full md:text-sm  font-medium text-[#696969] ">
                                    {{$product->description}}
                                </p>
                                <div class="mt-[4px] flex items-center justify-between sm:justify-start 2xl:gap-4">
                                    @if($category->name === 'Domains')
                                        <form action="https://hosting.wurk.africa/cart.php" class="w-full mt-[4px] flex items-center justify-between sm:justify-start 2xl:gap-4">
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
                                        <a href="{{'/pricing?source=home&product_touch=' . $category->name }}" class="text-black linear rounded-md bg-white px-4 py-2 text-center text-base font-medium transition duration-200 hover:!bg-white/80 active:!bg-white/70">
                                            See Plans
                                        </a>&nbsp;
                                        <a href="{{$category->portal}}" class="text-base font-medium text-white hover:text-lightPrimary 2xl:ml-2">
                                            {{$category->name . ' Info'}}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach

                            <div
                                class=" mt-6 flex flex-col w-full rounded-2xl bg-cover px-[30px] py-[30px] md:px-[14px]"
                                style='background: radial-gradient(#2fa49f, #d6ecf9)'
                            >
                                <div class="w-full">
                                    <h5 class="mb-[14px] max-w-full text-xl font-extralight text-black md:text-2xl md:leading-[32px] ">
                                        Ready to get started?
                                    </h5>
                                    <div class="mt-[36px] text-center flex items-center justify-between gap-4 sm:justify-start 2xl:gap-10">
                                        <button class="text-black linear rounded-md bg-white px-4 py-2 text-center text-base font-medium transition duration-200 hover:!bg-white/80 active:!bg-white/70">
                                            Let's get started
                                        </button>
                                    </div>
                                </div>
                            </div>

                    </x-section.column>
                </x-section.columns>

            </x-tab-slider.tab-content>

    @endforeach
</div>
