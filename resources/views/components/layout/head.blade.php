<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title', config('app.name'))</title>
<meta name="description" content="Senn Tiefbau AG – Ihr Partner für Tiefbau, Rückbau, Aushub, Leitungsbau und Spezialarbeiten. Präzise, sicher und zuverlässig." />
<meta property="og:type" content="website" />
<meta property="og:title" content="{{ config('app.name') }}" />
<meta property="og:description" content="Ihr Partner für Tiefbau, Rückbau, Aushub, Leitungsbau und Spezialarbeiten. Präzise, sicher und zuverlässig." />
<meta property="og:image" content="{{ url('/img/senntiefbau-visual.jpg') }}" />
<meta property="og:url" content="{{ url('/') }}" />
<meta property="og:locale" content="de_CH" />
<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="/favicon.svg" />
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
<meta name="apple-mobile-web-app-title" content="Senn Tiefbau" />
<link rel="manifest" href="/site.webmanifest" />
<link rel="preconnect" href="https://use.typekit.net" crossorigin />
<link rel="stylesheet" href="https://use.typekit.net/uhw3wlz.css" />
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>