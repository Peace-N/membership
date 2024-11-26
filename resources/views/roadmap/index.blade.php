<x-layouts.app>
    <div class="px-20 p-4 py-4 ">
        <x-heading.h2 class="text-primary-900 p-8">Explore Wurk Product and Pricing</x-heading.h2>

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

    </div>

    <x-section.columns class="mx-auto w-full px-20 p-4 py-4 lg:py-4" id="recommended">

        <x-section.column  class="w-2/12"  style="flex-basis: inherit;padding: 0.75rem;">
            <livewire:show-product-query-string />
        </x-section.column>

        <x-section.column  class="w-10/12"  style="flex-basis: inherit;padding: 0.75rem;">
            <div>
                <livewire:show-product-query-string-content />
            </div>
        </x-section.column>

    </x-section.columns>
    </div>

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            let tabs = document.querySelectorAll('.vtab');
            let contents = document.querySelectorAll('.tab-content');

            tabs.forEach(function (tab) {
                tab.addEventListener('click', function (e) {
                    let targetId = tab.id.replace('Tab', 'Content');

                    // Hide all content divs
                    contents.forEach(function (content) {
                        content.classList.add('hidden');
                    });

                    // Remove active class from all tabs
                    tabs.forEach(function (tab) {
                        tab.classList.remove('font-semibold', 'text-gray-600', 'bg-[#7fffd4]');
                        tab.classList.add('text-gray-800');
                    });

                    // Show the target content
                    document.getElementById(targetId).classList.remove('hidden');

                    // Add active class to the clicked tab
                    tab.classList.add('font-semibold', 'text-gray-600', 'bg-[#7fffd4]');
                    tab.classList.remove('text-gray-800');
                });
            });
        });
    </script>


</x-layouts.app>
