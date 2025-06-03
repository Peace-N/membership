<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('components.layouts.partials.head')
</head>
<body class="text-primary-900 flex flex-col min-h-screen" x-data>
    <div id="app" class="flex flex-col flex-grow">
        <x-layouts.app.header class="flex-shrink-0"/>

        <div class="flex-grow">
            <div class="mx-auto">
                {{ $slot }}
            </div>
        </div>

        <x-layouts.app.footer class="flex-shrink-0" />

        @include('components.layouts.partials.tail')
    </div>
    <x-impersonate::banner/>
    <script src="https://cdn.jsdelivr.net/npm/pagedone@1.2.2/src/js/pagedone.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/creativetimofficial/david-ai@1.0.6/packages/dist/david-ai.min.js" defer></script>
    <!-- Not required if jQuery is already loaded -->
    <script src="https://support.wurk.africa/js/min/jquery.min.js"></script>
    <script id="sbinit" src="https://support.wurk.africa/js/main.js"></script>
</body>
</html>
