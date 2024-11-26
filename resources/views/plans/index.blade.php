<x-layouts.app>
    <div class="px-20 p-4 py-4 ">
        <x-heading.h2  class="text-primary-900 p-8">Browse Plans for {{$desc->name}}</x-heading.h2>


        <div class="flex gap-3 flex-inline  items-center" style="border-bottom: 1px solid #cdcdcd">

            <div class="w-1/6 rounded-1xl" style="border-radius: 12px; width: 2%;  padding:8px">
                @svg('heroicon-o-arrow-long-left', 'stroke-black')
            </div>

            <div class="w-auto">
                <a href="/pricing">Back to Pricing</a>
            </div>

            <div class="w-1/6 rounded-1xl" style="    border-radius: 4px;width: 2%; background: aquamarine;padding: 2px;margin-right: 7px;">
                @svg('heroicon-o-check-circle', 'stroke-black')
            </div>
            <div class="w-auto">Guaranteed Uptime</div>

            <div class="w-1/6 rounded-1xl" style="    border-radius: 4px;width: 2%; background: aquamarine;padding: 2px;margin-right: 7px;">
                @svg('heroicon-o-check-circle', 'stroke-black')

            </div>

            <div class="w-auto"> 24/7 Online and Offline Support</div>

            <div class="w-1/6 rounded-1xl" style="    border-radius: 4px;width: 2%; background: aquamarine;padding: 2px;margin-right: 7px;">
                @svg('heroicon-o-check-circle', 'stroke-black')

            </div>

            <div class="w-auto"> Wurk Self & Managed Services</div>

{{--            <div class="w-1/6 rounded-1xl" style="    border-radius: 4px;width: 2%; background: aquamarine;padding: 2px;margin-right: 7px;">--}}
{{--                @svg('heroicon-o-check-circle', 'stroke-black')--}}

{{--            </div>--}}

{{--            <div class="w-2/6"> Wurk CRM</div>--}}

{{--            <div class="w-1/6 rounded-1xl" style="    border-radius: 4px;width: 2%; background: aquamarine;padding: 2px;margin-right: 7px;">--}}
{{--                @svg('heroicon-o-check-circle', 'stroke-black')--}}

{{--            </div>--}}

{{--            <div class="w-2/6"> Wurk Plans</div>--}}

{{--            <div class="w-1/6 rounded-1xl" style="    border-radius: 4px;width: 2%; background: aquamarine;padding: 2px;margin-right: 7px;">--}}
{{--                @svg('heroicon-o-check-circle', 'stroke-black')--}}

{{--            </div>--}}

{{--            <div class="w-2/6"> Wurk Proposals</div>--}}



        </div>

    </div>

    <x-section.columns class="mx-auto w-full px-20 p-4 py-4 lg:py-4" id="recommended">

        <x-section.column  class="w-full mx-auto"  style="flex-basis: inherit;padding: 0.75rem;">
{{--            <livewire:show-product-single :product="$product" />--}}
            <x-plans.all :products="$product" calculate-saving-rates="true" preselected-interval="monthly"></x-plans.all>

        </x-section.column>

    </x-section.columns>

</x-layouts.app>
