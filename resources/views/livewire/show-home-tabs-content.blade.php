<div>
    @foreach($categories as $category)

            <x-tab-slider.tab-content id="{{$category->name}}-1">
                <x-section.columns style="flex-wrap: wrap !important;" class="flex-wrap md:flex-wrap mx-auto w-full px-20 p-4 py-4 lg:py-4" id="{{$category->name}}">
                    <x-section.column class="w-8/12"  style="flex-basis: inherit;padding: 0.75rem;">
                        <div class=mx-auto">
                            <img src="{{URL::asset('/images/features/bliss.jpg')}}" class="drop-shadow-xl rounded-2xl"/>
                        </div>
                    </x-section.column>
                    @foreach($category->products as $key => $product)
                    <x-section.column class="w-4/12" style="flex-basis: inherit; padding: 0.75rem;">
                        <div
                            class="flex w-full flex-col rounded-2xl bg-cover px-[30px] py-[30px] md:px-[64px]"
                            style='background: radial-gradient(#000000, #4e4e4e); margin-bottom: 1.5rem'
                        >
                            <div class="w-full">
                                <h4 class="mb-[14px] max-w-full text-xl font-bold text-white md:text-3xl md:leading-[42px] ">
                                    Discover, collect, and sell extraordinary NFTs
                                </h4>
                                <p class="mb-[40px] max-w-full text-base font-medium text-[#E3DAFF] ">
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
                            style='background: radial-gradient(#c2c2c2, #ffffff)'
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
                    @endforeach
                </x-section.columns>

            </x-tab-slider.tab-content>

    @endforeach
</div>
