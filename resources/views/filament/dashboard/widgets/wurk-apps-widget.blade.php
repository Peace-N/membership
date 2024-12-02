<x-filament-widgets::widget>
    <x-filament::section icon="heroicon-o-shopping-cart" collapsible>
        {{-- Widget content --}}
        <x-slot name="heading">
            Shop More Products
        </x-slot>

        <x-slot name="description">
            Wurk has several products which you can use to automate life and make it easy to manage your brand.
        </x-slot>

        <x-filament::tabs label="Content tabs">

            @foreach($portals as $portal)
                <x-filament::tabs.item active icon="{{$portal->icon}}" href="{{'/pricing?source=access_member&product_touch=' . $portal->name }}" tag="a">
                    {{$portal->name}}
                </x-filament::tabs.item>
            @endforeach

        </x-filament::tabs>

    </x-filament::section>
</x-filament-widgets::widget>
