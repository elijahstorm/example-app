<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- @livewireStyles -->
    @vite('resources/css/app.css')
</head>

<body>
    {{ $slot }}

    @livewireScripts
</body>

</html>