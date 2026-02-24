<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title', config('app.name'))</title>
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased font-sans font-normal min-h-screen flex flex-col">
  <x-hero />
  <main class="flex-1">
    <x-services />
    <x-about />
  </main>
  <x-layout.footer />
</body>
</html>