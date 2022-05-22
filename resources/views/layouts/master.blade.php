<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="yandex-verification" content="578ad5c7abec8a31" />
    <link rel="icon" sizes="16x16 32x32 64x64" href="/public/img/favicon.ico">
    <link rel="icon" type="image/png" sizes="16x16" href="/public/img/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/public/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="64x64" href="/public/img/favicon-64x64.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/public/img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="160x160" href="/public/img/favicon-160x160.png">
    <link rel="icon" type="image/png" sizes="196x196" href="/public/img/favicon-192x192.png">
    <link rel="apple-touch-icon" href="/public/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/public/img/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/public/img/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/public/img/touch-icon-ipad-retina.png">
    <link rel="stylesheet" href="/public/css/css.min.css">
    <title>@yield('title')</title>
</head>
@yield('styles')
@include('layouts.header')

<body itemscope="" itemtype="https://schema.org/WebPage">

@yield('content')
<main>

</main>
</body>

@include('layouts.footer')

@yield('scripts')

</html>
