<div>
    @foreach($categories as $category)
    <div id="{{$category->name}}Content" class="tab-content w-full flex flex-wrap mt-8">
        @foreach($category->products as $product)
        <div class=" w-4/12  rounded-2xl bg-cover px-[10px] py-[10px]">
            <div class="w-full px-[40px] py-[40px] rounded-2xl"  style='border: 1px solid #dcdcdc;'>
                <div class="w-1/6 rounded-1xl" style="border-radius: 12px; width: 11.666667%; background: aquamarine; padding:8px">{{ svg($category->icon) }}</div>
                <h5 class="mb-[14px] max-w-full text-xl font-bold text-black  md:leading-[42px] ">
                    {{$product->name}}
                </h5>
                @if($product->is_managed)
                    <span class="badge badge-accent">FULLY MANAGED PRODUCT</span>
                @else
                    <span class="badge badge-ghost">SELF SERVICE PRODUCT</span>
                @endif
                <p class="mb-[14px] max-w-full text-base font-normal text-[#696969] ">
                    {{$product->description}}
                </p>
                <p class="font-normal text-xs">
                    <a href="#">Learn more about {{$product->name}}</a>
                </p>

                <span class="badge badge-accent badge-outline">STARTING FROM:</span>


                <div class=" flex items-center justify-between gap-4 sm:justify-start 2xl:gap-10">
                    <button class="text-base font-medium text-lightPrimary hover:text-lightPrimary 2xl:ml-2">
                        @foreach($product->plans as $plankey => $plan)
                            @if($plankey == 0)
                                <h5 class="mb-[14px] max-w-full text-xl font-normal text-black  md:leading-[42px] ">
                                @foreach($plan->prices as $key => $price)
                                    @if($key == 0)
                                        R {{number_format($price->price, 2)}}
                                    @endif
                                @endforeach
                                </h5>
                            @endif
                        @endforeach
                    </button>
                </div>
                <div class="mt-[14px] flex items-center justify-between gap-4 sm:justify-start 2xl:gap-10">
                    <a href="{{route('pricing.item', $product)}}" class="text-white linear rounded-md bg-black px-4 py-2 text-center text-base font-medium transition duration-200 hover:!bg-gray-500 active:!bg-gray/70">
                        See All Plans
                    </a>
                </div>
            </div>
        </div>
        @endforeach


    </div>
    @endforeach
</div>
