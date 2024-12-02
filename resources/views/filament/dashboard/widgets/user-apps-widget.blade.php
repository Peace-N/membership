<x-filament-widgets::widget>
    <x-filament::section icon="heroicon-o-user" collapsible>
        {{-- Widget content --}}
        <x-slot name="heading">
            Your Subscribed Products and Services
        </x-slot>

        <x-slot name="description">
            A listing of all products and services you are subscribed to. Here you can upgrade or downgrade packages.
        </x-slot>
        <div class='!z-5 max-w-[378px] max-h-[368px] relative flex h-full w-full flex-col rounded-[20px] bg-white bg-clip-border p-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-800 dark:text-white dark:shadow-none'>
            <div class='flex flex-col'>
                <div class="flex">
                    <progress style="background-color: transparent" class="progress progress-info w-full" value="0" max="100"></progress>
                </div>
                <div class='flex justify-between'>
                    <p class='text-sm font-extralight text-gray-600'>Manage Subscriptions.</p>
                </div>
            </div>
        </div>

        <x-filament::button href="/dashboard/subscriptions" tag="a" size="xs"  color="info"  icon="heroicon-o-currency-dollar"
        icon-position="before">
            Manage Subscriptions
        </x-filament::button>
    </x-filament::section>


</x-filament-widgets::widget>
