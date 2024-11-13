<x-filament-widgets::widget>
    <x-filament::section icon="heroicon-o-user" collapsible>
        {{-- Widget content --}}
        <x-slot name="heading">
            Your Subscribed Products and Services
        </x-slot>

        <x-slot name="description">
            A listing of all products and services you are subscribed to. Here you can upgrade or downgrade packages.
        </x-slot>

        <x-filament::button href="/dashboard/subscriptions" tag="a"     icon="heroicon-m-sparkles"
        icon-position="after">
            Manage Subscriptions
        </x-filament::button>
    </x-filament::section>
</x-filament-widgets::widget>
