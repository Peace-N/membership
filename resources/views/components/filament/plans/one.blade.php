<div class="relative flex flex-col justify-between p-8 transition-shadow duration-300 border rounded-2xl shadow-sm sm:items-center hover:shadow border-deep-purple-accent-400">
    @if($plan->product->is_popular)
        <div class="absolute inset-x-0 top-0 flex justify-center -mt-3">
            <div class="inline-block px-3 py-1 text-xs font-medium tracking-wider text-white uppercase rounded bg-primary">
                {{__('Most Popular')}}
            </div>
        </div>
    @endif

    <div class="text-center">
        <div class="text-lg font-semibold">{{ __($plan->product->name) }}</div>
        <div class="flex items-center justify-center mt-2">

            @if($plan->prices[0]->price > 0)
                <div class="mr-1 text-4xl font-bold">@money($plan->prices[0]->price, $plan->prices[0]->currency->code)</div>
                <div class="text-sm">/ {{$plan->interval_count > 1 ? $plan->interval_count : '' }} {{ __($plan->interval->name) }}</div>
            @endif

            @if($plan->prices[0]->type === \App\Constants\PlanPriceType::USAGE_BASED_PER_UNIT->value)
                <div class="text-sm mt-2">
                    + @money($plan->prices[0]->price_per_unit, $plan->prices[0]->currency->code) / {{ __($plan->meter->name) }}
                </div>
            @elseif($plan->prices[0]->type === \App\Constants\PlanPriceType::USAGE_BASED_TIERED_GRADUATED->value
                    || $plan->prices[0]->type === \App\Constants\PlanPriceType::USAGE_BASED_TIERED_VOLUME->value)
                <div class="text-xs mt-2">
                    @php $start = 0; $startingPhrase = __('From'); @endphp
                    @foreach($plan->prices[0]->tiers as $tier)
                        <div class="mt-2 text-sm">
                            <span class="font-semibold"> {{$startingPhrase}} {{ $start }} - {{ $tier[\App\Constants\PlanPriceTierConstants::UNTIL_UNIT] }} {{ __(strtolower(str()->plural($plan->meter->name))) }} </span>
                            → <span class="">@money($tier[\App\Constants\PlanPriceTierConstants::PER_UNIT], $plan->prices[0]->currency->code) / {{ __($plan->meter->name) }} </span>
                            @if ($tier[\App\Constants\PlanPriceTierConstants::FLAT_FEE] > 0)
                                + @money($tier['flat_fee'], $plan->prices[0]->currency->code)
                            @endif
                        </div>
                        @php $start = intval($tier[\App\Constants\PlanPriceTierConstants::UNTIL_UNIT]) + 1; @endphp

                        @if($plan->prices[0]->type === \App\Constants\PlanPriceType::USAGE_BASED_TIERED_GRADUATED->value)
                            @php $startingPhrase = __('Next'); @endphp
                        @endif
                    @endforeach
                </div>
            @endif
        </div>
        <div class="mt-3 space-y-3">
            <ul>
                @if($plan->product->features)
                    @foreach($plan->product->features as $feature)
                        <li>{{$feature['feature']}}</li>
                    @endforeach
                @endif
            </ul>
        </div>
    </div>
    <div class="w-full">
        <a class="btn btn-block bg-primary-500 dark:bg-primary text-white px-6 mt-6 border-0 hover:bg-primary-500/90"
           {{$subscription !== null && $subscription->plan_id === $plan->id ? 'disabled' : ''}}
           href="{{ route('subscription.change-plan', ['planSlug' => $plan->slug, 'subscriptionUuid' => $subscription->uuid]) }}">
            {{__('Buy')}} {{ $plan->product->name }}
        </a>
        <p class="max-w-xs mt-6 text-xs text-gray-600 sm:text-sm sm:text-center sm:max-w-sm sm:mx-auto dark:text-zinc-400">
            {{ $plan->product->description }}
        </p>
    </div>
</div>
