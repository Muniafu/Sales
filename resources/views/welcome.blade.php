<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Apex Sales</title>

        <link href="resources/css/app.css"/>

        @vite('resources/css/app.css')
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdm.min.js"></script>

    </head>
    <body x-data="{ darkMode: false }" :class="{ 'dark': darkMode }" class="bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 transition-colors duration-500">

    <!-- Main Container -->
    <div class="flex flex-col md:flex-row items-center justify-center h-screen px-4">
        <!-- Image Section -->
        <div class="md:w-1/4 w-full">
            <img src="https://i.pinimg.com/originals/60/04/30/600430c1d22c731b94cf4e7dae6b398a.gif" alt="Welcome Image" class="rounded-lg shadow-lg">
        </div>

        <!-- Text Section -->
        <div class="md:w-1/2 w-full text-center md:text-left md:ml-8 mt-8 md:mt-0">
            <h1 class="text-3xl md:text-5xl font-bold mb-4">Welcome to Our Platform</h1>
            <p class="mb-6 text-lg">Explore our features, connect with others, and make the most out of our services. Sign up or log in to get started!</p>
            <div class="flex justify-center md:justify-start gap-20">
                <a href="/register" class="px-6 py-3 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors">Register</a>
                <a href="/login" class="px-6 py-2 bg-gray-600 text-white rounded-md hover:bg-gray-700 transition-colors">Login</a>
            </div>
        </div>
    </div>

    </body>
</html>
