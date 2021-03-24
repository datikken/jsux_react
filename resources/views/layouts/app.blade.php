<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'JSUX.fun') }}</title>

    <link type="image/x-icon" rel="shortcut icon" href="/favicon/favicon.ico">
    <link type="image/png" sizes="16x16" rel="icon" href="/favicon/favicon-16x16.png">
    <link type="image/png" sizes="32x32" rel="icon" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" href="/favicon/favicon-192x192.png" sizes=192x192>
    <link rel="icon" type="image/png" href="/favicon/favicon-512x512.png" sizes=512x512>
    <link sizes="16x16" rel="apple-touch-icon" href="/favicon/apple-touch-icon.png">
    <link sizes="32x32" rel="apple-touch-icon" href="/favicon/apple-touch-icon.png">
    <link rel="manifest" href="/favicon/site.webmanifest">

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
