<x-layouts.app>
    <div class="text-center pt-4 pb-0 md:pt-16 md:mb-10">
        <x-heading.h1 class="font-semibold">
            Find {{ $category->name }} Help for <small class="text-green-600">{{$product->name}}</small>
        </x-heading.h1>
        <p class="pt-4">
            {{ __('You are not alone :)') }}
        </p>

    </div>


    <div class="mx-auto w-10/12 mx-auto px-1 lg:px-20 p-4 py-8 lg:py-8">
            <div class="mb-6 md:mb-0">
                <x-heading.h3 class="font-semibold">
                    Wurk {{$product->name}} {{$category->name}}
                </x-heading.h3>
                <div class="w-full mx-auto">
                <x-accordion class="mt-4 w-full">
                    @foreach($posts as $groupPage)
                        <x-accordion.item active="false" name="pages">
                            <x-slot name="title">{{$groupPage->name}}</x-slot>
                            <ul class="flex flex-col text-sm mt-2 mb-2">
                                @foreach($groupPage->pages as $pages)
                                    <li class="text-sm mb-1 text-gray-300">
                                        <a class="text-green-600" href="{{route('page.view', $pages->slug)}}">{{ $pages->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </x-accordion.item>
                    @endforeach
                </x-accordion>
                </div>
            </div>
    </div>


</x-layouts.app>
