<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Zyrtech') }}</title>

    <!-- Open Sans & FontAwesome -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">

    <!-- Scripts / Styles -->
    <link href="{{ mix('js/app.js') }}" rel="preload" as="script">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body
    class="{{(request()->is('products*')) || (request()->is('/')) ? 'bg-white' : 'bg-gray-100'}} font-sans min-h-screen antialiased leading-none">
    <div id="app" class="min-h-screen h-full">