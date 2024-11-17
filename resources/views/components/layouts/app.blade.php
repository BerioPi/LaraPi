<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>

        @vite('resources/css/app.scss')
    </head>
    <body>
        <div x-data="{ open: localStorage.getItem('sidebarOpen') === 'true' }"
        @toggle-sidebar="open = !open; localStorage.setItem('sidebarOpen', open)">
            <x-navbar />
            <x-sidebar />
            <div class="p-5" :class="open? 'ml-64' :  'ml-16'">
            Content
            {{ $slot }}

            </div>
        </div>

        @vite('resources/js/app.js')
    </body>
</html>
