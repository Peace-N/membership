<x-filament-widgets::widget>
    <x-filament::section icon="heroicon-o-cloud" collapsible>
        {{-- Widget content --}}
        <x-slot name="heading">
            Your Storage
        </x-slot>

        <x-slot name="description">
            Your available storage<br/>
            If storage is running click manage storage
        </x-slot>

        <livewire:user-storage />

        <x-filament::button href="/dashboard/subscriptions" tag="a"    color="warning" size="xs" icon="heroicon-o-cloud"
        icon-position="before">
            Get More Storage
        </x-filament::button>


    </x-filament::section>


</x-filament-widgets::widget>
