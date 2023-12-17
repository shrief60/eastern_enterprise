<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <title>{{ config('app.name', 'Laravel') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body>
        <!-- Page Heading -->
        <header class="bg-gray-500 p-4">
            <div class="container mx-auto flex items-center justify-between">
                <a href="{{ route('home') }}" wire:navigate class= "flex flex-row items-center">
                    <img src="{{ asset('images/pie-chart.png') }}" alt="Companies" class="rounded-full h-10">
                    <h1 class="text-xl pl-4 font-bold font-mono text-white">Companies</h1>
                </a>
                <nav class="hidden sm:flex items-center space-x-4">
                    @auth
                        <p class = "text-white">Welcome, {{ auth()->user()->name }}.</p>
                        
                    @else
                        <a href="{{ route('register') }}" wire:navigate class="text-white" >Register</a>
                        <a href="{{ route('login') }}" wire:navigate class="text-white">Login</a>
                    @endauth
                </nav>
                <!-- Add responsive menu button for small screens -->
                <div class="sm:hidden">
                    <button class="text-white">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6">
                            <path d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </header>
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </body>
</html>
