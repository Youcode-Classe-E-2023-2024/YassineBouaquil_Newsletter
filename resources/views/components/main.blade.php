


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Include GSAP (GreenSock Animation Platform) -->
    <script src="https://unpkg.com/gsap@3.9.0/dist/gsap.min.js"></script>

    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://c dn.tailwindcss.com"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'NEWSLETTER') }}</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body class="antialiased">
@extends('layouts.app')
@section('content')
    {{ $slot }}
@endsection

</body>

</html>
