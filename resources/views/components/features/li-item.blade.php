<li {{ $attributes->merge(['class' => 'inline-flex gap-2']) }}>
    <span style="background: rgb(104 235 229)" class="p-1 bg-[rgb(104 235 229)] rounded-2xl h-6 w-6 text-center">@svg('heroicon-o-check-circle', 'stroke-black')</span>
    <span>{{ $slot }}</span>
</li>
