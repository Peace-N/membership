<x-layouts.app>

    <div class="text-center pt-4 pb-0 md:pt-16 md:mb-10">
        <x-heading.h1 class="font-semibold">
            {{ $post->title }}
        </x-heading.h1>
        <p class="pt-4">
            {{ $post->description }}
        </p>
    </div>
    <div class="mx-auto w-10/12 text-2 px-1 lg:px-20 p-4 py-8 lg:py-8">

        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                {!! $post->body !!}
            </div>
        </div>

    </div>
</x-layouts.app>
