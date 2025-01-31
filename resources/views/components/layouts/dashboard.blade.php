<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="bg-gray-900 text-white h-screen">

        {{-- Navbar Superior --}}
        <nav class="bg-gray-800 p-4 shadow-md">
            <div class="container mx-auto flex justify-between items-center">
                <a href="/" class="text-lg font-bold">Mi Sitio</a>
                <div>
                    <a href="#" class="px-4">Inicio</a>
                    <a href="#" class="px-4">Blog</a>
                    <a href="#" class="px-4">Contacto</a>
                </div>
            </div>
        </nav>

        <div class="flex h-screen">
            {{-- Menú Lateral --}}
            <aside class="w-64 bg-gray-950 p-5 flex flex-col space-y-4">
                <h2 class="text-lg font-semibold mb-4">Administración</h2>
                <a href="#" class="block p-2 hover:bg-gray-800 rounded">Dashboard</a>
                <a href="#" class="block p-2 hover:bg-gray-800 rounded">Usuarios</a>
                <a href="#" class="block p-2 hover:bg-gray-800 rounded">Posts</a>
                <a href="#" class="block p-2 hover:bg-gray-800 rounded">Configuración</a>
            </aside>

            {{-- Contenido Principal --}}
            <main class="flex-1 p-6 overflow-auto">
                {{-- @yield('content') --}}
                {{ $slot }}
            </main>
        </div>

        @livewireScripts
    </body>
</html>