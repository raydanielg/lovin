<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Glovin Limited - Delivering secure, scalable, and intelligent digital solutions across Africa. Specializing in software development, cybersecurity, and ICT infrastructure.">
    <title>Glovin Limited - Secure Digital Solutions | Technology Solutions Africa</title>
    <link rel="icon" type="image/png" href="{{ asset('transparentslogo/tranp-green.png') }}">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        glovin: {
                            green: '#166534',
                            'green-light': '#22c55e',
                            yellow: '#eab308',
                            'yellow-light': '#facc15',
                        }
                    }
                }
            }
        }
    </script>
    
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }
        
        html {
            scroll-behavior: smooth;
        }
        
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        ::-webkit-scrollbar-thumb {
            background: #166534;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #14532d;
        }
        
        /* Gradient Text */
        .gradient-text {
            background: linear-gradient(135deg, #166534 0%, #eab308 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        /* Glass Effect */
        .glass {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        /* Animation Classes */
        .fade-in {
            animation: fadeIn 0.5s ease-in;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        /* Hover Effects */
        .hover-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body class="bg-white text-gray-900 antialiased" x-data="{ scrolled: false, mobileMenuOpen: false }" @scroll.window="scrolled = (window.pageYOffset > 50)">
    
    <!-- Header / Navigation -->
    @include('landing.partials.header')
    
    <main>
        <!-- Hero Section -->
        @include('landing.partials.hero')
        
        <!-- About Us Section -->
        @include('landing.partials.about')
        
        <!-- Vision & Mission Section -->
        @include('landing.partials.vision_mission')
        
        <!-- Core Values Section -->
        @include('landing.partials.core_values')
        
        <!-- Services / Solutions Section -->
        @include('landing.partials.services')
        
        <!-- Industries Served Section -->
        @include('landing.partials.industries')
        
        <!-- Key Features Section -->
        @include('landing.partials.features')
        
        <!-- Products / Platforms Section -->
        @include('landing.partials.products')
        
        <!-- Why Choose Us Section -->
        @include('landing.partials.why_choose_us')
        
        <!-- Competitive Advantage Section -->
        @include('landing.partials.competitive_advantage')
        
        <!-- How It Works Section -->
        @include('landing.partials.how_it_works')
        
        <!-- Case Studies / Projects Section -->
        @include('landing.partials.case_studies')
        
        <!-- Testimonials Section -->
        @include('landing.partials.testimonials')
        
        <!-- Partners / Clients Section -->
        @include('landing.partials.partners')
        
        <!-- Statistics / Achievements Section -->
        @include('landing.partials.statistics')
        
        <!-- Team Section -->
        @include('landing.partials.team')
        
        <!-- Blog / Insights Section -->
        @include('landing.partials.blog')
        
        <!-- FAQ Section -->
        @include('landing.partials.faq')
        
        <!-- Call To Action (CTA) Section -->
        @include('landing.partials.cta')
        
        <!-- Contact Section -->
        @include('landing.partials.contact')
    </main>
    
    <!-- Footer -->
    @include('landing.partials.footer')
    
    <!-- Scripts -->
    <script>
        // Initialize AOS Animation
        AOS.init({
            duration: 800,
            easing: 'ease-out-cubic',
            once: true,
            offset: 100
        });
        
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>
