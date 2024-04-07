<div>
    <div class="max-w-none md:max-w-4xl mx-auto">

        <div class="text-end mx-4 my-6">
            <x-button-link.primary-outline href="{{route('roadmap.suggest')}}">{{ __('+ Suggest a feature') }}</x-button-link.primary-outline>
        </div>

        @if($items->isEmpty())
            <div class="text-center p-4 border border-gray-200 rounded-lg ">
                <p>{{ __('No features found, but you can ') }} <a href="{{route('roadmap.suggest')}}" class="text-primary-500">{{ __('suggest one!') }}</a></p>
            </div>
        @endif

        @foreach($items as $item)
            <x-roadmap.item :item="$item"></x-roadmap.item>
        @endforeach

    </div>

    <div class="mx-auto text-center p-4 md:max-w-lg">
        {{ $items->links() }}
    </div>
</div>