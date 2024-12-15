@props([
    'controls' => '',
    'active' => false,
])

@php
    $classes = $active ? 'active-tab' : '';
@endphp

<button
    role="tab"
    aria-selected="{{ $active ? true : false}}"
    aria-controls="{{ $controls }}"
    data-active-tab="{{ $active }}"
    class="h-10 px-6 tab rounded-full bg-[#328682] data-[active-tab='true']:bg-[#444] data-[active-tab='true']:shadow-xl {{ $classes }}"
>
    <span class="active:text-primary-900 hover:text-primary-600 transition hover:scale-103	">{{ $slot }}</span>
</button>
