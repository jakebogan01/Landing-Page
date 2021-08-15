<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{ asset("/css/app.css") }}">
    </head>
    <body>
        
        <x-navigation></x-navigation>

        {{ $slot }}

        <x-footer></x-footer>

    </body>
</html>