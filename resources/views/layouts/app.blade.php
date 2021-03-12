<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin />
    <link rel="preload"
          as="style"
          href="family=Roboto:300,400,500,700&display=swap" />
    <link rel="stylesheet"
          href="family=Roboto:300,400,500,700&display=swap"
          media="print" onload="this.media='all'" />

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app"></div>

    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
