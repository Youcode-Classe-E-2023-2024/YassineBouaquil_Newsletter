


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

        <title>{{ config('app.name', 'Newsletter') }}</title>



        <!-- Fonts -->


        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    </head>

    <body class="antialiased">
    @extends('layouts.app')
    @section('content')
        <body class="flex items-center justify-center h-screen">
        <div class=" w-full bg-white p-8 rounded-lg shadow-lg newsletter-container animate-fadeInUp">
            <h1 class="text-4xl font-extrabold text-center  mb-8">📬 NEWSLETTER</h1>
            <form action="#" method="post" class="space-y-4 newsletter-form">
                <div class="relative">
                    <input type="email" id="email" name="email" placeholder="Enter your email"
                           class="block w-full border border-white rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-white text-4xl focus:border-transparent text-center">
                    <button type="submit"
                            class="absolute inset-y-0 right-0 px-6 py-2 bg-purple-700 font-semibold rounded-md hover:bg-purple-800 focus:outline-none focus:bg-purple-800">
                        Subscribe
                    </button>
                </div>
                <p class="text-sm text-gray-300 text-center">We'll never share your email with anyone else.</p>
            </form>
            <div class="flex items-center justify-center mt-6">
                <span class="text-gray-300 mr-2">Follow us:</span>
                <a href="#" class="text-white hover:text-gray-200"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-white hover:text-gray-200 ml-2"><i class="fab fa-instagram"></i></a>
            </div>

            <!-- Section pour afficher les newsletters précédentes -->
            <div class="mt-12 px-6 py-8 bg-gradient-to-br from-purple-800 to-blue-500 rounded-lg shadow-xl">
                <!-- Titre de la section -->
                <h2 class="text-3xl font-extrabold text-white mb-6">Explore Past Newsletters</h2>

                <!-- Liste des newsletters précédentes -->
                <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Chaque élément de liste représente une newsletter précédente -->
                    <li class="mb-4">
                        <!-- Lien vers la newsletter 1 - Ajoutez le lien réel -->
                        <a href="#" class="block bg-white rounded-lg overflow-hidden hover:shadow-xl transition duration-300">
                            <img src="newsletter1.jpg" alt="Newsletter 1" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">Newsletter 1</h3>
                                <p class="text-gray-600">Month Year</p>
                            </div>
                        </a>
                    </li>
                    <li class="mb-4">
                        <!-- Lien vers la newsletter 2 - Ajoutez le lien réel -->
                        <a href="#" class="block bg-white rounded-lg overflow-hidden hover:shadow-xl transition duration-300">
                            <img src="newsletter2.jpg" alt="Newsletter 2" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">Newsletter 2</h3>
                                <p class="text-gray-600">Month Year</p>
                            </div>
                        </a>
                    </li>
                    <!-- Ajoutez d'autres éléments de liste pour chaque newsletter précédente -->
                </ul>
            </div>        </div>
        </body>
    @endsection

    </body>

</html>
