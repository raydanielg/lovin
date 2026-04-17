<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us - Glovin Limited</title>
    <link rel="icon" type="image/png" href="{{ asset('transparentslogo/tranp-green.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body class="bg-white text-gray-900 antialiased" x-data="{ scrolled: false, mobileMenuOpen: false }" @scroll.window="scrolled = (window.pageYOffset > 50)">
    
    @include('landing.partials.header')
    
    <!-- Page Header -->
    <section class="pt-32 pb-16 bg-gradient-to-br from-green-900 via-green-800 to-green-900">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center" data-aos="fade-up">
                <h1 class="text-4xl sm:text-5xl font-bold text-white mb-4">About Us</h1>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto">Delivering innovative technology solutions across Africa</p>
                <div class="mt-6 flex items-center justify-center gap-2 text-sm text-gray-400">
                    <a href="/" class="hover:text-white transition-colors">Home</a>
                    <i class="fas fa-chevron-right text-xs"></i>
                    <span class="text-white">About Us</span>
                </div>
            </div>
        </div>
    </section>
    
    <!-- About Content -->
    @include('landing.partials.about')
    
    <!-- Vision & Mission -->
    @include('landing.partials.vision_mission')
    
    <!-- Core Values -->
    @include('landing.partials.core_values')
    
    <!-- Team -->
    @include('landing.partials.team')
    
    @include('landing.partials.footer')
    
    <script>
        AOS.init({ duration: 800, easing: 'ease-out-cubic', once: true, offset: 100 });
    </script>
</body>
</html>
