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
            width: 10px;
        }
        ::-webkit-scrollbar-track {
            background: linear-gradient(to bottom, #f0fdf4, #fefce8);
        }
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(to bottom, #16a34a, #eab308);
            border-radius: 5px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(to bottom, #15803d, #ca8a04);
        }
        
        /* Gradient Text */
        .gradient-text {
            background: linear-gradient(135deg, #166534 0%, #eab308 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        /* Animated Gradient Text */
        .animate-gradient-text {
            background: linear-gradient(90deg, #166534, #eab308, #166534, #eab308);
            background-size: 300% 100%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: gradient-shift 4s ease infinite;
        }
        
        @keyframes gradient-shift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        /* Glass Effect */
        .glass {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        /* Animation Classes */
        .fade-in {
            animation: fadeIn 0.8s ease-out forwards;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
        }
        
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(50px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .fade-in-left {
            animation: fadeInLeft 0.8s ease-out forwards;
        }
        
        @keyframes fadeInLeft {
            from { opacity: 0; transform: translateX(-50px); }
            to { opacity: 1; transform: translateX(0); }
        }
        
        .fade-in-right {
            animation: fadeInRight 0.8s ease-out forwards;
        }
        
        @keyframes fadeInRight {
            from { opacity: 0; transform: translateX(50px); }
            to { opacity: 1; transform: translateX(0); }
        }
        
        .scale-in {
            animation: scaleIn 0.6s ease-out forwards;
        }
        
        @keyframes scaleIn {
            from { opacity: 0; transform: scale(0.8); }
            to { opacity: 1; transform: scale(1); }
        }
        
        .rotate-in {
            animation: rotateIn 0.8s ease-out forwards;
        }
        
        @keyframes rotateIn {
            from { opacity: 0; transform: rotate(-10deg) scale(0.9); }
            to { opacity: 1; transform: rotate(0) scale(1); }
        }
        
        /* Hover Effects */
        .hover-lift {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        .hover-lift:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }
        
        .hover-scale {
            transition: transform 0.3s ease;
        }
        .hover-scale:hover {
            transform: scale(1.05);
        }
        
        .hover-rotate {
            transition: transform 0.4s ease;
        }
        .hover-rotate:hover {
            transform: rotate(5deg) scale(1.05);
        }
        
        .hover-glow {
            transition: all 0.3s ease;
        }
        .hover-glow:hover {
            box-shadow: 0 0 30px rgba(234, 179, 8, 0.4);
        }
        
        /* Floating Animation */
        .float {
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        /* Pulse Glow */
        .pulse-glow {
            animation: pulseGlow 2s ease-in-out infinite;
        }
        
        @keyframes pulseGlow {
            0%, 100% { box-shadow: 0 0 20px rgba(234, 179, 8, 0.4); }
            50% { box-shadow: 0 0 40px rgba(234, 179, 8, 0.8); }
        }
        
        /* Shimmer Effect */
        .shimmer {
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
            background-size: 200% 100%;
            animation: shimmer 2s infinite;
        }
        
        @keyframes shimmer {
            0% { background-position: -200% 0; }
            100% { background-position: 200% 0; }
        }
        
        /* Gradient Border */
        .gradient-border {
            position: relative;
            background: white;
            border-radius: 16px;
        }
        .gradient-border::before {
            content: '';
            position: absolute;
            inset: -2px;
            border-radius: 18px;
            background: linear-gradient(135deg, #166534, #eab308, #166534);
            z-index: -1;
            animation: border-rotate 3s linear infinite;
        }
        
        @keyframes border-rotate {
            0% { filter: hue-rotate(0deg); }
            100% { filter: hue-rotate(360deg); }
        }
        
        /* Magnetic Button Effect */
        .magnetic-btn {
            transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        
        /* Reveal Animation */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-out;
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Parallax Effect */
        .parallax {
            transform: translateZ(0);
            will-change: transform;
        }
        
        /* Card 3D Tilt */
        .card-3d {
            transform-style: preserve-3d;
            transition: transform 0.5s ease;
        }
        .card-3d:hover {
            transform: perspective(1000px) rotateX(5deg) rotateY(-5deg) translateZ(20px);
        }
        
        /* Underline Animation */
        .hover-underline {
            position: relative;
        }
        .hover-underline::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #166534, #eab308);
            transition: width 0.3s ease;
        }
        .hover-underline:hover::after {
            width: 100%;
        }
        
        /* Image Zoom */
        .img-zoom {
            overflow: hidden;
        }
        .img-zoom img {
            transition: transform 0.5s ease;
        }
        .img-zoom:hover img {
            transform: scale(1.1);
        }
        
        /* Stagger Children Animation */
        .stagger-children > * {
            opacity: 0;
            transform: translateY(20px);
            animation: staggerFadeIn 0.5s ease forwards;
        }
        .stagger-children > *:nth-child(1) { animation-delay: 0.1s; }
        .stagger-children > *:nth-child(2) { animation-delay: 0.2s; }
        .stagger-children > *:nth-child(3) { animation-delay: 0.3s; }
        .stagger-children > *:nth-child(4) { animation-delay: 0.4s; }
        .stagger-children > *:nth-child(5) { animation-delay: 0.5s; }
        .stagger-children > *:nth-child(6) { animation-delay: 0.6s; }
        
        @keyframes staggerFadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Neon Glow */
        .neon-glow {
            text-shadow: 0 0 10px rgba(234, 179, 8, 0.5), 0 0 20px rgba(234, 179, 8, 0.3);
        }
        
        /* Section Divider */
        .section-divider {
            height: 1px;
            background: linear-gradient(90deg, transparent, #eab308, transparent);
            margin: 4rem 0;
        }
        
        /* Counter Animation Ready */
        .counter {
            font-variant-numeric: tabular-nums;
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
