


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
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'NEWSLETTER') }}</title>



    <!-- Fonts -->


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<div class="antialiased flex flex-column m-auto align-items-center justify-content-center">
@extends('layouts.app')
@section('content')
    <div class="flex items-center m-auto justify-center h-screen">
    <div class=" w-full bg-white p-8 rounded-lg shadow-lg newsletter-container   flex flex-column m-auto align-items-center justify-content-center animate-fadeInUp">
        <h1 class="text-4xl font-extrabold text-center  mb-8">📬 NEWSLETTER</h1>

            <div class="relative  flex items-center">
                <form method="POST" action="/subscribe">
                    @csrf
                    <input
                        type="text"
                        name="email"
                        placeholder="Enter Email"
                        class="px-4 py-2 shadow-xl rounded-xl
                        placeholder-gray-50::placeholder">
                    <button class="bg-blue-500 hover:bg-blue-700 text-withe
                    font-bold py-2 py-4 ml-4 rounded-full" type="submit">S'abonner</button>

                </form>
            </div>
            <p class="text-sm text-gray-300 text-center">We'll never share your email with anyone else.</p>

        <div class="flex items-center justify-center mt-6">

            <a href="#" class="text-white hover:text-gray-200"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-white hover:text-gray-200 ml-2"><i class="fab fa-instagram"></i></a>
        </div>

        <!-- Section pour afficher les newsletters précédentes -->
        <div class="mt-12 px-6 py-8 m-auto flex flex-column align-items-center justify-content-center bg-gradient-to-br from-purple-800 to-blue-500 rounded-lg shadow-xl">
            <!-- Titre de la section -->
            <h2 class="text-3xl font-extrabold text-white mb-6">Explore Past Newsletters</h2>

            <!-- Liste des newsletters précédentes -->
            <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Chaque élément de liste représente une newsletter précédente -->
                @foreach($posts as $post)
                    <li class="mb-4">
                        <!-- Lien vers la newsletter - Ajoutez le lien réel -->
                        <a href="#" class="flex flex-column m-auto align-items-center justify-content-center bg-white rounded-lg overflow-hidden hover:shadow-xl transition duration-300">
                            <img src="{{ $post->getFirstMediaUrl() }}" alt="{{ $post->title }}" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $post->title }}</h3>
                                <p class="text-gray-600">{{ $post->body }}</p>
                            </div>
                        </a>
                    </li>
                @endforeach
                <!-- Ajoutez d'autres éléments de liste pour chaque newsletter précédente -->
            </ul>
        </div>        </div>
    </div>

@endsection

</div>

</html>
