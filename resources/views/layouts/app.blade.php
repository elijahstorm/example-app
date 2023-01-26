<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @livewireStyles
    </head>
    <body>
        {{ $slot }}
        
        @livewireScripts
    </body>
</html>
