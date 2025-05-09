@props(['plan'])

<div style="border: 1px solid rgb(229 229 229)" {{$attributes->merge(['class' => 'relative px-5 py-10 flex flex-col gap-4 mx-auto text-center border-1 border-gray-200 rounded-2xl shadow-xl hover:shadow-2xl hover:-translate-y-2 transition'])}}>
    @if ($plan->product->is_popular)
    <div class="absolute border-0 top-0 -mt-3 left-1/2 transform -translate-x-1/2 bg-primary-500 text-primary-50 mx-auto rounded z-0 text-xs px-2 py-1">
        {{ __('Most popular') }}
    </div>
    @endif

        <h5 class="mb-[2px] max-w-full text-xl font-bold text-black  md:leading-[42px] ">
        {{ $plan->product->name }}
        </h5>

        @if($plan->product->is_managed)
            <span class="mx-auto badge badge-accent">FULLY MANAGED PRODUCT</span>
        @else
            <span class="mx-auto badge badge-ghost">SELF SERVICE PRODUCT</span>
        @endif

    <div class="flex flex-col gap-1">
        @if($plan->prices[0]->price > 0)
            <div class="text-3xl font-bold">
                @money($plan->prices[0]->price, $plan->prices[0]->currency->code)
            </div>
            <div class="text-neutral-400 text-sm">
                / {{$plan->interval_count > 1 ? $plan->interval_count : '' }} {{ __($plan->interval->name) }}
            </div>
        @endif

            <x-button-link.primary href="{{route('checkout.subscription', $plan->slug)}}">
                {{ __('Buy') }} {{ $plan->product->name }}
            </x-button-link.primary>

        @if($plan->prices[0]->type === \App\Constants\PlanPriceType::USAGE_BASED_PER_UNIT->value)
            <div class="text-sm mt-2">
                + @money($plan->prices[0]->price_per_unit, $plan->prices[0]->currency->code) / {{ __($plan->meter->name) }}
            </div>
        @elseif($plan->prices[0]->type === \App\Constants\PlanPriceType::USAGE_BASED_TIERED_GRADUATED->value
                || $plan->prices[0]->type === \App\Constants\PlanPriceType::USAGE_BASED_TIERED_VOLUME->value)
            <div class="mt-2">
                @php $start = 0; $startingPhrase = __('From'); @endphp
                @foreach($plan->prices[0]->tiers as $tier)
                    <div class="flex justify-center items-left gap-4 mt-3">
                        <span class="font-medium text-xs ">{{$startingPhrase}}</span>
                        <span class="flex flex-col">
                            <span class="text-xl">{{ $start }} - {{ $tier[\App\Constants\PlanPriceTierConstants::UNTIL_UNIT] }}</span>
                            <span class="text-neutral-400 text-xs">{{ __(strtolower(str()->plural($plan->meter->name))) }}</span>
                        </span>
                        →
                        <span class="flex flex-col">
                            <span class=" text-sm">@money($tier[\App\Constants\PlanPriceTierConstants::PER_UNIT], $plan->prices[0]->currency->code) / {{ __($plan->meter->name) }}</span>
                            @if ($tier[\App\Constants\PlanPriceTierConstants::FLAT_FEE] > 0)
                            <span class="text-neutral-400 text-xs">+ @money($tier['flat_fee'], $plan->prices[0]->currency->code)</span>
                            @endif
                        </span>
                    </div>
                    @php $start = intval($tier[\App\Constants\PlanPriceTierConstants::UNTIL_UNIT]) + 1; @endphp

                    @if($plan->prices[0]->type === \App\Constants\PlanPriceType::USAGE_BASED_TIERED_GRADUATED->value)
                        @php $startingPhrase = __('Next'); @endphp
                    @endif
                @endforeach
            </div>
        @endif

    </div>

    <div class="py-4">
        <ul class="flex flex-col text-left gap-2">
            @if($plan->product->features)
                @foreach($plan->product->features as $feature)
                    <x-features.li-item>{{$feature['feature']}}</x-features.li-item>
                @endforeach
            @endif
                <p class="font-normal text-xs">
                    <a href="https://{{$plan->product->category->portal}}">Learn more about {{$plan->product->name}}</a>
                </p>
                <hr />
        </ul>

    </div>


</div>
